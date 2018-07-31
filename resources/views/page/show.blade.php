@extends('layout.default')

@section('title', '首页')

@section('content')
<section class="banner-inner">
    <img src="{{ URL::asset('/') }}images/jianzhu-1341.jpg"/>
</section>  
<section class="container main">
    <div class="row">
    <div class="col-lg-3 col-md-3 main-bar">
    @component('shared.sidebar')
    <strong>Whoops!</strong> Something went wrong!
    @endcomponent
    </div>
    <div class="col-lg-9 col-md-9 main-content">
        @component('shared.content_menu')
        <strong>Whoops!</strong> Something went wrong!
        @endcomponent
        <div class="cases-list">
        <ul>
            <li>
                <a href="#">
                    <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                    <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                    <p>教你选择大理石</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                    <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                    <p>教你选择大理石</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                    <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                    <p>教你选择大理石</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                    <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                    <p>教你选择大理石</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                    <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                    <p>教你选择大理石</p>
                </a>
            </li>
        </ul>
        </div>
        <div class="page">
        <ul class="pagination">
            <li><a href="#">首 页</a></li>
            <li><a href="#">上一页</a></li>
            <li><a href="#">下一页</a></li>
            <li><a href="#">尾 页</a></li>
        </ul>
        </div>
    </div>
    </div>
</section>
@endsection
