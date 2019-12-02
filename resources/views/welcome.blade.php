@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KuyBelajar</title>

        <!-- Styles -->
        <style>
            .caption{
	            width: 100%;
	            text-align: center;
	            position: absolute;
	            top: 270px;
            }

            .cap_title{
                font-family: 'LatoBold', arial;
                font-weight: Bold;
                font-size: 40px;
                color: #ffffff;
                text-transform: uppercase;
                letter-spacing: 1.5px;
            }

            .cap_desc{
                font-family: 'HoneyLight';
                font-size: 50px;
                color: #ffffff;
                margin-top: 10px;
            }
            .services{
                margin-bottom: 80px;
            }

            .services .S_icons{
                margin-top: -80px;
                padding-left: 50px;
                margin-bottom: 30px;
            }

            .services hr.sp{
                display: inline-block;
                width: 230px;
                height: 10px;
                border: 0;
                background: url('img/separator.png') no-repeat;
                margin-bottom: 75px;
                margin-left: -4px;
            }

            .services img{
                margin-left: -4px;
            }

            .services .desc{
                width: 100%;
                overflow: hidden;
            }

            .services .desc li{
                list-style: none;
                float: left;
                width: 235px;
                height: auto;
                text-align: center;
                padding-right: 150px;
            }

            .services .desc li:first-child{
                margin-left: -30px;
            }

            .services .desc li:last-child{
                margin-right: -70px;
            }

            .services .desc li h3{
                font-family: 'LatoBold', arial;
                font-weight: bold;
                font-size: 25px;
                color: #646363;
                margin-bottom: 30px;
            }

            .services .desc li p{
                font-family: 'LatoRegular', arial;
                font-size: 14px;
                color: #7e7e7e;
                line-height: 20px;
            }

            .client_testimonials h3{
                color: #636363;
                font-family: "LatoBold", arial;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                text-transform: uppercase;
                margin-bottom: 60px;
            }
            .testimonials{
                display: inline-block;
                width: 260px;
                height: auto;
                background: #f9f8f8;
                position: relative;
                padding: 30px 20px;
                margin-left: 75px;
                margin-bottom: 120px;
                color: #909090;
                font-family: "LatoRegular", arial;
                font-size: 16px;
                line-height: 20px;
            }
            .testimonials:last-child{
                margin-right: 0;
            }

            .testimonials blockquote{
                margin-bottom: 25px;
            }

            .testimonials a.author{
                display: block;
                color: #7e7d7d;
                font-family: "Latobold", arial;
                font-weight: bold;
                font-size: 13px;
                margin-top: 25px;
                text-decoration: none;
            }

            .testimonials a.author:hover{
                color: #5c5c5c;
            }

            .testimonials img.avatar{
                position: absolute;
                border-radius: 100px;
                border: 4px #ffffff solid;
                bottom: -30px;
                right: 0;
            }
            footer{
                width: 100%;
                padding: 80px 0;
                background-color: #393939;
                text-align: center;
            }

            footer nav{
                width: 100%;
            }

            footer nav ul li{
                list-style: none;
                display: inline-block;
                margin: 40px 0 20px 0;
            }

            footer nav ul li a{
                text-decoration: none;
                color: #a5a5a5;
                font-family: "LatoBold", arial;
                font-size: 16px;
                font-weight: bold;
                margin-left: 20px;
                letter-spacing: .5px;
            }


            footer hr.footer_sp{
                width: 370px;
                height: 1px;
                background-color: #333;
                border: none;
                margin: 0 auto;
                margin-bottom: 20px;
            }

            footer .rights{
                color: #a5a5a5;
                font-family: "LatoRegular", arial;
                font-size: 13px;
                letter-spacing: .5px;
            }

            footer .rights a{
                font-family: 'Latobold', arial;
                font-weight: bold;
                color: #777777;
                text-decoration: none;
            }
            .wrapper{
                width: 1060px;
                height: auto;
                margin: 0 auto;
            }   
            footer nav ul li a:hover,
            footer .rights a:hover{
                color: #ffffff;
            }
        </style>
    </head>
    <body>
        <section style="width: 100%;height: 600px;
            background: #ffffff url('img/billboard_bg.jpg') no-repeat fixed;">
            <nav class="caption">
                <p class="cap_title">Excepteur occaecat cupidatat</p>
                <p class="cap_desc">duis aute irure reprehenderit</p>
            </nav>
        </section>
    
        <section class="services wrapper">
                <div class="S_icons">
                    <img src="img/S1.png" alt="" title=""/>
                    <hr class="sp"/>
                    <img src="img/S2.png" alt="" title=""/>
                    <hr class="sp"/>
                    <img src="img/S3.png" alt="" title=""/>
                </div>
                <ul class="desc">
                    <li>
                        <h3>Duis Aute Irure</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur.</p>
                    </li>
                    <li>
                        <h3>Duis Aute Irure</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur.</p>
                    </li>
                    <li>
                        <h3>Duis Aute Irure</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur.</p>
                    </li>
                </ul>
        </section>

        <section class="client_testimonials">
            <div class="wrapper">
                <h3>Our Happy Clients.</h3>
                <section class="testimonials" style="margin-left: 0px;">
                    <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 
    
                    </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
    
                    <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
                    <img class="avatar" src="img/author.jpg" title="" atl=""/>
                </section>
    
                <section class="testimonials">
                    <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 
    
                    </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
                    
                    <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
                    <img class="avatar" src="img/author2.jpg" title="" atl=""/>
                </section>
    
                <section class="testimonials">
                    <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 
    
                    </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
                    
                    <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
                    <img class="avatar" src="img/author3.jpg" title="" atl=""/>
                </section>
            </div>
    </section>

    <footer id="service">
        <img src="img/footer_logo.png" alt="" title="">
        <nav>
            <ul>
                <li><a href="#">Company</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </nav>
        <hr class="footer_sp"/>
        <p class="rights">© 2013 Samsudhuha.com - All Rights Reserved.</p>
    </footer>
    </body>
</html>
@endsection