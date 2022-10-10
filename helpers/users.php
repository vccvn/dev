<?php

use App\Repositories\Profiles\ProfileRepository;
use App\Repositories\Users\UserRepository;
use App\Repositories\Notices\NoticeRepository;
use Gomee\Helpers\Arr;


use App\Masks\Users\UserMask;
use App\Repositories\Permissions\RoleRepository;
use App\Repositories\Teams\MemberRepository;
use App\Repositories\Teams\TeamRepository;
use App\Services\Permissions\PermissionService;
use Illuminate\Support\Facades\Auth;

if(!function_exists('set_logedin_user')){
    function set_logedin_user($user)
    {
        if($user){
            set_web_data('__logedin_user_login___', $user);
        }
    }
}
if(!function_exists('get_logedin_user')){
    function get_logedin_user()
    {
        if(!($user = get_web_data('__logedin_user_login___'))){
            if($u = auth()->user()){
                $user = new UserMask($u);
                set_logedin_user($user);
                
            }else $user = null;
        }
        return $user;
    }
}

if(!function_exists('is_login')){
    /**
     * kiểm tra đăng nhap54 có hợp lệ ko
     *
     * @return boolean
     */
    function is_login()
    {
        if($user = auth()->user()){
            
            return true;
        }
        return false;
    }
}

if(!function_exists('get_login_user')){
    /**
     * kiểm tra đăng nhập có hợp lệ ko và lấy thông tin user
     *
     * @return UserMask
     */
    function get_login_user()
    {
        return get_logedin_user();
    }
}
if(!function_exists('get_user_logedin')){
    /**
     * kiểm tra đăng nhập có hợp lệ ko và lấy thông tin user
     *
     * @return UserMask
     */
    function get_user_logedin()
    {
        return get_logedin_user();
    }
}

if(!function_exists('get_current_account')){
    /**
     * kiểm tra đăng nhập có hợp lệ ko và lấy thông tin user
     *
     * @return UserMask
     */
    function get_current_account()
    {
        return get_logedin_user();
    }
}


if(!function_exists('get_user_avatar')){
    /**
     * lấy dường dẫn avatar của người dùng
     * @param string $filename
     * @return string 
     */
    function get_user_avatar($filename = null){
        if($filename){
            return url(content_path('users/avatar/'.$filename));
        }
        return asset('static/images/default/avatar.png');
    }
}


if(!function_exists('get_user')){
    /**
     * lấy tài khoản chủ web
     * 
     * @return App\Models\User|null
     */
    function get_user($args = null)
    {
        if(!$args) return null;

        $userRepository = app(UserRepository::class);

        if(is_array($args)) return $userRepository->first($args);

        if(is_numeric($args)) return $userRepository->findBy('id', $args);

        return null;
    }
}



if(!function_exists('get_secret_id')){
    /**
     * lấy thông tin secret_id
     * @param int $id
     * @return string
     */
    function get_secret_id($id = 0)
    {
        static $list = [];
        $uid = $id;
        if(array_key_exists($uid, $list)) return $list[$uid];

        $secret_id = ($user = get_user($uid)) ? ($user->secret_id?$user->secret_id:$uid) : '0';
        $list[$uid] = $secret_id;
        return $secret_id;
    }
}

if(!function_exists('get_user_options')){
    /**
     * lấy user option
     * @param array $args
     * @param string $first
     * @param array $filter
     * @return array
     */
    function get_user_options($args = [], $first = null, $filter = null) : array
    {
        if(is_array($filter)){
            $args = Arr::match($args, $filter);
        }
        return (new UserRepository())->staffQuery()->getSelectOptions($args, $first);
    }
}

if(!function_exists('get_user_notice_badge')){
    /**
     * trả về số thông báo mới
     * @param int $user_id
     * @return int
     */
    function get_user_notice_badge(int $user_id)
    {
        $metadata = new NoticeRepository();
        $b = $metadata->getBadge($user_id);
        return $b;
    }
}




if(!function_exists('get_account_setting_configs')){
    /**
     * lấy danh sách trạng thái đơn hàng
     * @return array|Arr
     */
    function get_account_setting_configs()
    {
        return new Arr(array_map(function($a)
        {
            return new Arr($a);
        }, get_user_config('account_settings', [])));
    }
}

if(!function_exists('get_account_setting_tabs')){
    /**
     * lấy danh sách key trạng thái đơn hàng
     * @return array|Arr
     */
    function get_account_setting_tabs()
    {
        return new Arr(get_user_config('account_setting_tabs', []));
    }
}

// if(!function_exists('get_user_info_group_data')){
//     function get_user_info_group_data()
//     {
//         $info_groups = get_user_info_groups();
//         $info_keys = get_user_info_keys();
//         $group_data = [];
//         foreach ($info_keys as $key_vi => $key_en) {
//             $group_data[$key_en] = new Arr([
//                 'title' => $info_groups->get($key_en),
//                 'key' => $key_en,
//                 'slug' => $key_vi
//             ]);
//         }
//         return $group_data;
//     }
// }




if(!function_exists('get_role_user_tag_data')){
    /**
     * lấy danh sách tag
     * @param int $id
     * @param array $args
     */
    function get_role_user_tag_data($id = 0, array $args = [])
    {
        $data = [];
        if($id && $promo = app(RoleRepository::class)->with('users')->first(array_merge($args, ['id' => $id]))){
            if($promo->users && count($promo->users)){
                foreach ($promo->users as $tag) {
                    $data[] = [
                        'id' => $tag->id,
                        'name' => htmlentities($tag->name . ' (' . $tag->email . ')')
                    ];
                }
    
            }
        }
        return $data;
    }
}


if(!function_exists('check_user_permission')){
    /**
     * kiểm tra user có quyền truy cập route hay ko
     *
     * @param User $user
     * @param string $path
     * @return boolean
     */
    function check_user_permission($user, $path)
    {
        return PermissionService::checkUserPermiss($user, $path);
    }
}

if(!function_exists('check_current_user_permission')){
    /**
     * kiểm tra user có quyền truy cập route hay ko
     *
     * @param string $path
     * @return boolean
     */
    function check_current_user_permission($path)
    {
        return PermissionService::checkUserPermiss(auth()->user(), $path);
    }
}


if(!function_exists('get_team_options')){
    /**
     * lấy danh sách khách hàng dưới dạng option
     * @param mixed ...$params
     * @return array
     */
    function get_team_options(...$params)
    {
        return app(TeamRepository::class)->getDataOptions(...$params);
    }
}



if(!function_exists('get_team_members')){
    /**
     * lấy danh sách khách hàng
     * @param array $params
     * @return \App\Masks\Teams\MemberCollection
     */
    function get_team_members(array $params = [])
    {
        return app(MemberRepository::class)->cache('get-team-member', null, $params)->mode('mask')->getTeamMembers(get_parse_query_args($params));
    }
}
