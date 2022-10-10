<?php
$refname = isset($ref)?$ref:null;
$refid = isset($ref_id)?$ref_id:0;
$link = isset($url)?$url:null;
if($user = $helper->getCurrentAccount()){
    $name = $user->name;
    $email = $user->email;
}else{
    $name = null;
    $email = null;
}
?>

                        <!-- Start Comment Area  -->
                        <div class="comment-area">
                            <h3 class="heading-title">Bình luận</h3>
                            @if (($comments = $article->getComments(['@withCountPublishChildren' => 'replies_count'])) && count($comments))
                               
                                <div class="comment-list-wrapper">

                                    @foreach ($comments as $comment)
                                        @php
                                            $avatar = ($comment->author_id && $author = get_model_data('user', $comment->author_id)) ? get_user_avatar($author->avatar) : asset('static/images/default/avatar.png');
                                        @endphp
                                        <!-- Start Single Comment  -->
                                        <!--  comment-reply -->
                                        <div class="comment">
                                            <div class="thumbnail">
                                                <img src="{{$avatar}}" alt="{{$comment->author_name}}">
                                            </div>
                                            <div class="comment-content">
                                                <h5 class="title">{{$comment->author_name}}</h5>
                                                <span class="date">{{$comment->dateFormat('d/m/Y - H:i')}}</span>
                                                <p>{{$comment->htmlMessage()}}</p>
                                                <div class="reply-btn-wrapper">
                                                    <a class="reply-btn btn-reply-comment" href="javascript:void(0);" data-id="{{$comment->id}}" data-reply-for="{{$comment->author_name}}">Trả lời</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Comment  -->
                                    
                                    @endforeach
                                
                                </div>
                                
                            {{ $comments->links($_template . 'pagination') }}
                            @endif
                        </div>
                        <!-- End Comment Area  -->
                        <div class="comment-form-area">
                            <h3 class="heading-title">Để lại ý kiến của bạn</h3>

                            <form method="post" action="{{route('client.comments.post')}}" data-ajax-url="{{route('client.comments.ajax')}}" class="comment-form {{parse_classname('comment-form')}}">
                                @csrf
                                <input type="hidden" name="parent_id" id="comment-reply-id" >
                                <input type="hidden" name="ref" value="{{$refname}}">
                                <input type="hidden" name="ref_id" value="{{$refid}}">
                                
                                <div class="row g-5">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="author_name" id="comm-name" class="inp" value="{{old('author_name', $name)}}" placeholder="Tên *" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" name="author_email" id="comm-email" class="form-control inp" value="{{old('author_email', $email)}}" placeholder="Email *">
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="crazy-message-content">
                                            <textarea name="message" id="comm-message" class="comment-message-content message inp " cols="30" rows="5" placeholder="Viết nội dung bình luận..." required>{{old('message')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="edu-btn submit-btn">Đăng bình luận <i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
