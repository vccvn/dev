var express = require('express');
var app = express();
const axios = require('axios');

const fs = require("fs");
const exec = require('child_process').exec;

const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }))

// var server_password = process.env.NODE_SERVER_PASSWORD;

const rootPath = '/var/www/thithurhptqg/';
const userPath = '/var/www/home';
const EMAIL = 'doanln16@gmail.com';

const TMPPATH = rootPath + 'storage/tmp/';

var date = function (format, offset) {
    if (!offset) offset = 0;
    var d = new Date();
    var t = {};
    var dl = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];


    // convert to msec
    // add local time zone offset 
    // get UTC time in msec
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);

    // create new Date object for different city
    // using supplied offset
    d = new Date(utc + (3600000 * offset));



    t.ms = d.getMilliseconds();
    t.Y = d.getFullYear();
    t.y = d.getYear();
    t.H = d.getHours();
    t.i = d.getMinutes();
    t.m = d.getMonth() + 1;
    t.s = d.getSeconds();
    t.time = d.getTime();
    t.d = d.getDate();
    t.D = dl[d.getDay()];
    if (!format) return t;
    var f = App.getType(format);
    if (f == 'string') {
        var txt = format;
        txt = this.str.replace(txt, 'ms', t.ms);
        txt = this.str.replace(txt, 'time', t.time);
        txt = this.str.replace(txt, t);
        return txt;
    }
    return null;
};

//CREATE EXPRESS APP



/**
 * Executes a shell command and return it as a Promise.
 * @param cmd {string}
 * @return {Promise<string>}
 */
const execShellCommand = async cmd => {

    return new Promise((resolve, reject) => {
        console.log(cmd);
        exec(cmd, (error, stdout, stderr) => {
            console.log(stdout);
            resolve(error ? false : true, stdout);

        });
    });
}
/**
 * Executes a shell command and return it as a Promise.
 * @param cmd {string}
 * @return {Promise<string>}
 */
const execShellCommandOut = async (cmd, done) => {
    return new Promise((resolve, reject) => {
        console.log(cmd);
        exec(cmd, (error, stdout, stderr) => {
            console.log(stdout);

            if (typeof done == "function") {
                done(error ? stderr : stdout, !error);
            }
            resolve(error ? false : true);

        });
    });
}

const execCmd = async cmds => {
    var c = [];
    if (typeof cmds == "string") {
        c.push(cmds);
    }
    else if (typeof cmds == "object" && (cmds instanceof Array || cmds.constructor == Array) || Array.isArray(cmds)) {
        c = cmds;
    }
    var cs = 0;
    if (c.length) {
        for (let index = 0; index < c.length; index++) {
            const cmd = c[index];
            const stt = await execShellCommand(cmd);
            if (stt) cs++;
        }
    }
    return cs;
}

const execCmdList = async cmds => {
    var c = [];
    if (typeof cmds == "string") {
        c.push(cmds);
    }
    else if (typeof cmds == "object" && (cmds instanceof Array || cmds.constructor == Array) || Array.isArray(cmds)) {
        c = cmds;
    }
    var cs = 0;
    if (c.length) {
        for (let index = 0; index < c.length; index++) {
            const cmd = c[index];
            const stt = await execShellCommand(cmd);
            if (stt) cs++;
            else {
                console.log("exec error! cmd: " + cmd)
                fs.appendFileSync(rootPath+"storage/logs/node-server.log", "["+ date("Y-m-d H:i:s") + "] exec error! cmd: " + cmd); //, options, callback_function);
                index += c.length;
                return false;
            }
        }
    }
    return cs;
}


const execCommands = (commands, time) => {

    if (time) {
        setTimeout(() => {
            execCmdList(commands);
        }, time);
    }
    else {
        execCmdList(commands);
    }
    return true;
}

const RandomNumber = (from = 0, to = 9999999) => {
    if (!from) from = 0;
    if (!to) to = 0;
    if (from == 0) to++;
    else if (from < 0) to -= from;
    var rand = Math.floor(Math.random() * to) + from;
    return rand;
}


const getSiteInfoFromUrl = url => {
    var a = url.split("://");
    var d = a[1].split('/').shift();
    return {
        protocol: a[0],
        domain: d,
        home: a[0] + "://" + d

    }
}


function checkIsValidDomain(domain) {
    var re = new RegExp(/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.([A-z]{2,6})$/);
    return domain.match(re);
}

// var server = require('http').createServer(app);
// trang chu

app.get('/', function (req, res) {
    res.send("<h1>Doan Dep trai</h1>");
});



app.get('/hosting/delete', async (req, res) => {
    const secret_id = req.query.secret_id;
    // res.send(secret_id);
    // return secret_id;
    if (!secret_id) {
        res.send("0");
    }
    else if (fs.existsSync('/etc/apache2/sites-available/' + secret_id + '.conf')) {

        var cmdList = [
            'sudo rm /etc/nginx/sites-available/vcc/' + secret_id,
            'sudo rm /etc/nginx/sites-enabled/' + secret_id,
            'a2dissite ' + secret_id + '.conf',
            'rm -Rf /etc/apache2/sites-available/' + secret_id + '.conf',
            'rm -Rf ' + userPath + '/' + secret_id
        ];
        var status = await execCmdList(cmdList);
        if (status) {
            res.send("1");
            execCommands([
                'sudo systemctl reload nginx',
                'sudo systemctl reload apache2'
            ], 2000)
        } else {
            res.send("0");
        }


    } else {
        res.send("1");


    }
});


app.get('/certbot', async (req, res) => {
    // var password = req.body.password || req.query.password;
    // if(password != server_password){
    //     res.send("0");
    //     return ;
    // }
    const domains = req.body.domains || req.query.domains;
    const email = req.body.email || req.query.email || EMAIL;
    if (domains == '') {
        res.send("0");
    }
    else {
        var ds = String(domains).split(" ").map(d => d.trim()).filter(d => checkIsValidDomain(d) != null ? true : false);
        console.log(ds);
        if (!ds.length) {
            return res.send("-1");
        }
        else {
            var dl = ds.map(d => '-d ' + d).join(" ");
        }
        var command = 'certbot --agree-tos -n --nginx ' + dl + ' -m ' + email;
        var r = false;
        var status = await execShellCommandOut(command, async (out, stt) => {
            r = stt;
            res.send("1");
        });

        if (!r) {
            if (status) {
                res.send("success");
            } else {
                res.send("0");
            }
        }
    }
});



app.listen(9000, () => {
    console.log('Example app listening on port 9000!')
});


