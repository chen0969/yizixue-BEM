@extends('layouts.guest2')
@section('content')
<div class="l-yizixueFAQ">
    <div class="c-bannerCarousel__slide"
        style="background-image: url('{{asset('uploads/images/aboutUsBanner-1.jpg')}}') ;">&nbsp;</div>
    <div class="l-yizixueFAQ__content container w-75">
        <!-- you can see the reference of the code "https://codepen.io/Gaurav-Rana-the-reactor/pen/YzdWLPy" -->
        <!-- container 1 -->
        <div class="row pt-5">
            <div class="col-md-3">
                <!-- Topic buttons -->
                <div class="container">
                    <div style="display: none;" class="delet-this-tag-after-you-done-yor-edting">
                        <!-- *** button code templeate, put backend codes here -->
                        <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                            <li class="mt-5" role="presentation">
                                <button id="this-should-be-tab-id" class="nav-link active o-faqTopic" data-bs-toggle="pill"
                                    data-bs-target="#this-should-be-content-id" type="button" role="tab"
                                    aria-controls="this-should-be-content-id" aria-selected="true">
                                    <!-- change this into backend qa topic -->
                                    Topic Name Here
                                </button>
                            </li>
                        </ul>
                        <!-- *** end of the template -->
                    </div class="delet-this-tag-after-you-done-yor-edting">
                    <!-- ////// -->
                    <!-- ★★★★ following are just demos, you can delete them in final version★★★★★ -->
                    <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                        <li class="mt-5" role="presentation">
                            <button class="nav-link active o-faqTopic" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                DEMO Btn
                            </button>
                        </li>
                        <li class="mt-5" role="presentation">
                            <button class="nav-link o-faqTopic" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Profile</button>
                        </li>
                        <li class="mt-5" role="presentation">
                            <button class="nav-link o-faqTopic" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <!-- ★★★★end of demo★★★★ -->
                </div>
            </div>
            <div class="col-md-9">
                <!-- contents -->
                <div id="pills-tabContent" class="tab-content">
                    <div style="display: none;" class="delet-this-tag-after-you-done-yor-edting">
                        <!-- *** content code templeate, put backend codes here -->
                        <div class="tab-pane fade show active" id="#this-should-be-content-id" role="tabpanel" aria-labelledby="this-should-be-tab-id">
                            <!-- card codes -->
                            <!-- you can put foreach code here -->
                            <div class="row m-3">
                                <div class="col-md-12">
                                    <button class="o-faqBtn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#remember-to-change-the-id-for-this-qa" aria-expanded="false"
                                        aria-controls="remember-to-change-the-id-for-this-qa">
                                        <span class="container">
                                            <span class="row p-3">
                                                <svg class="col-md-1" viewBox="0 0 500 500">
                                                    <circle cx="250" cy="250" r="250" />
                                                    <path
                                                        d="M294.2,107.8c45.8,0,75,37.1,66.1,82.9l-23.1,119c-2.6,13.4-8.4,26.1-15.9,37.1l27.3,45.5h-48.8l-9.6-15.7c-15.3,9.7-33.1,15.7-51.2,15.7h-32.8c-45.5,0-75.3-37.1-66.5-82.6l23.1-119c8.9-45.8,53.2-82.9,98.7-82.9h32.8ZM289.2,293.3l19.4-99.9c3.8-19.7-5.4-36.1-24.4-36.1h-32.1c-19.4,0-34.9,16.4-38.8,36.1l-22,113.3c-3.8,19.7,5.4,36.1,24.7,36.1h32.1c6.7,0,12.8-2,18.1-5.3l-42.8-70.5h50.1l15.6,26.4Z" />
                                                </svg>
                                                <!-- change Q content here -->
                                                <p class="col-md-11">Template title here</p>
                                            </span>
                                        </span>
                                    </button>
                                    <div class="collapse multi-collapse" id="remember-to-change-the-id-for-this-qa">
                                        <div class="card card-body">
                                            <!-- change A content here -->
                                            <p>
                                                Template content here.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- you can put endforeach code here -->
                        </div>
                        <!-- *** end of the template -->
                    </div>
                    <!-- ////// -->
                    <!-- ★★★★ following are just demos, you can delete them in final version★★★★★ -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <!-- card1 -->
                        <div class="row m-3">
                            <div class="col-md-12">
                                <button class="o-faqBtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#example1" aria-expanded="false" aria-controls="example1">
                                    <span class="container">
                                        <span class="row p-3">
                                            <svg class="col-md-1" viewBox="0 0 500 500">
                                                <circle cx="250" cy="250" r="250" />
                                                <path
                                                    d="M294.2,107.8c45.8,0,75,37.1,66.1,82.9l-23.1,119c-2.6,13.4-8.4,26.1-15.9,37.1l27.3,45.5h-48.8l-9.6-15.7c-15.3,9.7-33.1,15.7-51.2,15.7h-32.8c-45.5,0-75.3-37.1-66.5-82.6l23.1-119c8.9-45.8,53.2-82.9,98.7-82.9h32.8ZM289.2,293.3l19.4-99.9c3.8-19.7-5.4-36.1-24.4-36.1h-32.1c-19.4,0-34.9,16.4-38.8,36.1l-22,113.3c-3.8,19.7,5.4,36.1,24.7,36.1h32.1c6.7,0,12.8-2,18.1-5.3l-42.8-70.5h50.1l15.6,26.4Z" />
                                            </svg>
                                            <!-- change Q content here -->
                                            <p class="col-md-11">免費加入一般會員對我有哪些好處？</p>
                                        </span>
                                    </span>
                                </button>
                                <div class="collapse multi-collapse" id="example1">
                                    <div class="card card-body">
                                        <!-- change A content here -->
                                        <p>
                                            除了瀏覽易子學的內容外，更重要的是可以在「諮詢｜問與答」區域提問，獲得學長姐的一對一直接回覆。透過與學長姐的互動，您可以評估他們的特質是否適合您的需求。隨後，您可以與一名或多名學長姐協商諮詢內容、時間、方式、付費條件等。在易子學平台上，會員和學長姐直接進行溝通，易子學不會對內容進行額外收費，確保諮詢交易的支付是雙方共議且直接進行的。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card2 -->
                        <div class="row m-3">
                            <div class="col-md-12">
                                <button class="o-faqBtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#example2" aria-expanded="false" aria-controls="example2">
                                    <span class="container">
                                        <span class="row p-3">
                                            <svg class="col-md-1" viewBox="0 0 500 500">
                                                <circle cx="250" cy="250" r="250" />
                                                <path
                                                    d="M294.2,107.8c45.8,0,75,37.1,66.1,82.9l-23.1,119c-2.6,13.4-8.4,26.1-15.9,37.1l27.3,45.5h-48.8l-9.6-15.7c-15.3,9.7-33.1,15.7-51.2,15.7h-32.8c-45.5,0-75.3-37.1-66.5-82.6l23.1-119c8.9-45.8,53.2-82.9,98.7-82.9h32.8ZM289.2,293.3l19.4-99.9c3.8-19.7-5.4-36.1-24.4-36.1h-32.1c-19.4,0-34.9,16.4-38.8,36.1l-22,113.3c-3.8,19.7,5.4,36.1,24.7,36.1h32.1c6.7,0,12.8-2,18.1-5.3l-42.8-70.5h50.1l15.6,26.4Z" />
                                            </svg>
                                            <p class="col-md-11">我該如何尋找適合我的優秀學長姐來協助我進行留學諮詢？</p>
                                        </span>
                                    </span>
                                </button>
                                <div class="collapse multi-collapse" id="example2">
                                    <div class="card card-body">
                                        學長姐的選擇取決於會員個人的留學準備情況以及對於海外留學目標的理解程度。我們建議您在使用易子學瀏覽的同時，檢視自己目前的學習進度，例如學業成績、GPA、語言水平以及相關標準測驗成績等。隨後，您可以提出自己當下遇到的具體問題。學長姊們都曾經走過相同的道路，因此能夠清楚了解您所需要而給予建議。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- card3 -->
                        <div class="row m-3">
                            <div class="col-md-12">
                                <button class="o-faqBtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#example3" aria-expanded="false" aria-controls="example3">
                                    <span class="container">
                                        <span class="row p-3">
                                            <svg class="col-md-1" viewBox="0 0 500 500">
                                                <circle cx="250" cy="250" r="250" />
                                                <path
                                                    d="M294.2,107.8c45.8,0,75,37.1,66.1,82.9l-23.1,119c-2.6,13.4-8.4,26.1-15.9,37.1l27.3,45.5h-48.8l-9.6-15.7c-15.3,9.7-33.1,15.7-51.2,15.7h-32.8c-45.5,0-75.3-37.1-66.5-82.6l23.1-119c8.9-45.8,53.2-82.9,98.7-82.9h32.8ZM289.2,293.3l19.4-99.9c3.8-19.7-5.4-36.1-24.4-36.1h-32.1c-19.4,0-34.9,16.4-38.8,36.1l-22,113.3c-3.8,19.7,5.4,36.1,24.7,36.1h32.1c6.7,0,12.8-2,18.1-5.3l-42.8-70.5h50.1l15.6,26.4Z" />
                                            </svg>
                                            <p class="col-md-11">this is the content3</p>
                                        </span>
                                    </span>
                                </button>
                                <div class="collapse multi-collapse" id="example3">
                                    <div class="card card-body">
                                        Some placeholder content for the first collapse component of this multi-collapse
                                        example.
                                        This panel is hidden by default but revealed when the user activates the
                                        relevant
                                        trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <!-- card4 -->
                        <div class="row m-3">
                            <div class="col-md-12">
                                <button class="o-faqBtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#example4" aria-expanded="false" aria-controls="example4">
                                    <span class="container">
                                        <span class="row p-3">
                                            <svg class="col-md-1" viewBox="0 0 500 500">
                                                <circle cx="250" cy="250" r="250" />
                                                <path
                                                    d="M294.2,107.8c45.8,0,75,37.1,66.1,82.9l-23.1,119c-2.6,13.4-8.4,26.1-15.9,37.1l27.3,45.5h-48.8l-9.6-15.7c-15.3,9.7-33.1,15.7-51.2,15.7h-32.8c-45.5,0-75.3-37.1-66.5-82.6l23.1-119c8.9-45.8,53.2-82.9,98.7-82.9h32.8ZM289.2,293.3l19.4-99.9c3.8-19.7-5.4-36.1-24.4-36.1h-32.1c-19.4,0-34.9,16.4-38.8,36.1l-22,113.3c-3.8,19.7,5.4,36.1,24.7,36.1h32.1c6.7,0,12.8-2,18.1-5.3l-42.8-70.5h50.1l15.6,26.4Z" />
                                            </svg>
                                            <p class="col-md-11">this is the content4</p>
                                        </span>
                                    </span>
                                </button>
                                <div class="collapse multi-collapse" id="example4">
                                    <div class="card card-body">
                                        Some placeholder content for the first collapse component of this multi-collapse
                                        example.
                                        This panel is hidden by default but revealed when the user activates the
                                        relevant
                                        trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ★★★★end of demo★★★★ -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection