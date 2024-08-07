@extends('layouts.guest2')

@section('content')
<!-- breadcrumb -->
<div class="container">
    <div class="c-breadcrumbs">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="c-breadcrumbs__prePage">
                    <a href="{{url('/')}}" class="text-decoration-none text-black">首頁</a>> 問與答諮詢
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="container l-qnaIndex p-5">
    <div class="row">
        <!-- side bar -->
        <div class="col-md-3">
            <!-- sideBar -->
            <div>
                <!-- categories -->
                <div class="c-sideNav__topics">
                    <button><a class="text-white text-center" href="{{route('study-abroad')}}">
                            全部問答
                        </a></button>
                    <hr class="c-sideNav__hr">
                    <!-- demo section, please delete them after you update the backend data -->
                    <button><a class="text-white text-center" href="{{route('study-abroad')}}">
                            DEMO
                        </a></button>
                    <hr class="c-sideNav__hr">
                    <button><a class="text-white text-center" href="{{route('study-abroad')}}">
                            DEMO
                        </a></button>
                    <hr class="c-sideNav__hr">
                    <button><a class="text-white text-center" href="{{route('study-abroad')}}">
                            DEMO
                        </a></button>
                    <hr class="c-sideNav__hr">
                    <!-- end of demos -->
                    <!-- this is the code for categories, please add back-end datas for this -->
                    {{--@forelse($Data['category'] as $category)
                    <button><a class="text-white text-center"
                            href="{{route('study-abroad', ['category_id' => $category->id])}}">
                    {{$category->name}}
                    </a></button>
                    <hr class="c-sideNav__hr">
                    @empty
                    @endforelse--}}
                    <!-- end of back-end prepar section -->
                </div>

                <!-- types (hot and new) -->
                <a class="o-whiteBtn" href="{{route('study-abroad', ['filter' => 'popular'])}}">最熱門</a>
                <a class="o-whiteBtn" href="{{route('study-abroad',['filter'=>'latest'])}}">最新</a>
                <!-- call to action -->
                @if(auth()->guest() || !auth()->user()->isVip())
                <div class="c-callAction">
                    <h5 class="c-callAction__title">
                        讓專業持續變現
                    </h5>
                    <p class="c-callAction__content">
                        我們一起幫助學弟妹
                        <br>
                        更為自己創造收入
                        <br>
                        建立留學諮詢事業
                        <br>
                    </p>
                    <a class="o-lightBtn m-3" href="{{route('pay-product-list')}}">立即成為學長姐</a>
                </div>
                @endif
            </div>
        </div>
        <div class="col-md-9">
            <!-- qa cards -->
            @if(!is_null($qas))
            @forelse($qas as $num => $qa)
            <div class="row m-5">
                <div class="c-qnaCard">
                    <div class="row">
                        <div class="col-md-11 p-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="c-qnaCard__info">
                                        <svg class="c-qnaCard__thumbNail" viewbox="0 0 100 100">
                                            <circle cx="50" cy="50" r="50" />
                                        </svg>
                                        <p class="align-content-center">匿名</p>
                                    </div>
                                </div>
                                <div class="col-md-10 align-content-center">
                                    @if($qa->category)
                                    <span class="o-smallBtn">
                                        {{$qa->category->name}}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <a class="o-articleTitle" href="{{route('qna.show', $qa->qa_id)}}">{{$qa->title}}</a>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="c-qnaCard__content">
                                        {!!\Illuminate\Support\Str::limit(strip_tags($qa->body))!!}</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="lign-content-end">
                                        <i class="bi bi-bookmark d-flex">
                                            <span class="text-black">T</span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 p-0">
                            <svg viewBox="0 0 45 150">
                                <polygon fill="#4C2A70" points="50,150 0,150 35,75 0,0 50,0 " />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- new posts -->
            @if($num==1)
            <div class="container">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <h2 class="o-normalTitle ml-5">最新文章</h2>
                    </div>
                    @if(!is_null($posts))
                    @foreach($posts as $post)
                    <!-- new posts -->
                    <div class="col-md-6 p-4">
                        <div class="c-articleCard">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-3 p-0">
                                        <!-- Post images -->
                                        <div class="c-articleCard__postThumbnail">
                                            <!-- post img -->
                                            @if(is_null($post->image_path))
                                            <span class="c-articleCard__postThumbnail__postPhoto"
                                                style="background-image: url('{{asset('uploads/images/default_avatar.png')}}') ;">&nbsp;</span>
                                            @else
                                            <span class="c-articleCard__postThumbnail__postPhoto"
                                                style="background-image: url('/uploads/{{$post->image_path}}');">&nbsp;</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Post Contents -->
                                        <div class="c-articleCard__postInfo">
                                            <!-- title -->
                                            <a class="c-articleCard__title"
                                                href="{{route('article', $post->id)}}">{{ $post->title }}</a>
                                            <!-- content -->
                                            <p class="c-articleCard__content">
                                                {{!is_null(strip_tags($post->body)) ? \Illuminate\Support\Str::limit(strip_tags($post->body), 35): ''}}
                                            </p>
                                            <a class="o-readMore" href="{{route('article', $post->id)}}">...閱讀更多</a>
                                            <hr>
                                            <!-- reacts -->
                                            <div class="o-react w-100 pb-2 pr-2">
                                                @if(auth()->check())
                                                <i class="bi bi-heart" style="
                                    color: @if(auth()->user()->likePost->where('post_id', $post->id)->count()==1) red @else black @endif ;
                                    " data-id="{{$post->id}}">
                                                    <span>
                                                        {{$post->likePost->count()}}
                                                    </span>
                                                </i>
                                                <i class="bi bi-bookmark" style="
                                    color: @if(auth()->user()->collectPost->where('post_id', $post->id)->count()==1) red @else black @endif ;
                                    " data-id="{{$post->id}}">
                                                    <span>
                                                        {{$post->collectPost->count()}}
                                                    </span>
                                                </i>
                                                @else
                                                <i class="bi bi-heart" style="color: black;" data-id="{{$post->id}}">
                                                    <span>
                                                        {{$post->likePost->count()}}
                                                    </span>
                                                </i>
                                                <i class="bi bi-bookmark" style="color: black;" data-id="{{$post->id}}">
                                                    <span>
                                                        {{$post->collectPost->count()}}
                                                    </span>
                                                </i>
                                                @endif
                                                <!-- date -->
                                                <p class="c-articleCard__date">
                                                    發表日期：{{ $post->created_at->format('Y/m/d') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="col-md-12">
                        目前尚無文章
                    </p>
                    @endif
                </div>
            </div>
            @endif
            @empty
            <div class="col-md-12">
                <p class="vh-100">
                    目前尚無資料
                </p>
            </div>
            @endforelse
            <!-- pagination -->
            <div class="col-md-12">
                <div>
                    {{$qas->appends($_GET)->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection