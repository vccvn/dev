
<?php 
$url = urlencode(isset($link)?$link:route('home'));
$desc = urlencode(isset($description)?$description:'');
$img = urlencode(isset($image)?$image:'');
$tit = urlencode(isset($title)?$title:'');
$template = isset($template)?$template:1;
?>

<div class="share-area">
    <h6 class="title">Chia sẻ:</h6>
    <ul class="social-share">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}"><i class="icon-facebook"></i></a>
        </li>
        <li>
            <a href="https://twitter.com/share?url={{$url}}&via=Wisestyle&image-src={{$img}}&text={{$tit}}"><i class="icon-twitter"></i></a>
        </li>
        <li>
            <a href="https://www.instagram.com/?url={{$url}}"><i class="icon-instagram"></i></a>
        </li>
    </ul>
</div>