@extends('layout.default')

@section('title', '首页')

@section('content')
<section class="banner">
    <img src="{{ URL::asset('/') }}images/jianzhu-1341.jpg"/>
</section>  
<section class="main">
    <div class="products">
        <div class="container">
            <div class="floor-title">
                <i class="fa fa-heart"></i>
                <b>产品中心</b>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                    <li>
                        <a href="">分类1</a>
                    </li>
                </ul>
            </div>
            <div class="products-list">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                            <p>木板材</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cases">
        <div class="container">
            <div class="floor-title">
                <i class="fa fa-heart"></i>
                <b>工程案例</b>
            </div>
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
        </div>
    </div>
    <div class="contacts">
        <div class="container contact-content">
            <div class="floor-title">
                <i class="fa fa-heart"></i>
                <b>联系我们</b>
            </div>
            <div class="img"><img src="{{ URL::asset('/') }}images/1527474917.jpg" /></div>
            <div class="content">
                <div class="contact-info">
                    <p><span>联系人： ssss</span></p>
                    <p><span>联系电话： 21244124411</span></p>
                    <p>地址： fsdfdfdsfsdfsdfdsfsdfsdf</p>
                </div>
            </div>
        </div>
    </div>
    <div class="articles">
        <div class="container">
            <div class="floor-title">
                <i class="fa fa-heart"></i>
                <b>新闻中心</b>
            </div>
            <div class="articles-list">
                <ul>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-3 img">
                            <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                        </div>
                        <div class="col-sm-9 info">
                            <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                            <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection