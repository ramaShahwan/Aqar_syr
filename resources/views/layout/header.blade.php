<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation</title>
    <style>
        .gradient-custom {
            background: #6a11cb;
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9));
            background: linear-gradient(to left, #1a395b, #d6e0eb);
        }
        .border-nav {
            display: inline-block;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            border-top: 40px !important;
            border-top-color: #FFFFFF !important;
            font-family: "Changa", sans-serif;
            font-weight: 500;
        }
        .border-nav:hover {
            background-color: #334f6e !important;
            height: 100px !important;
            width: 130px !important;
            padding-top: 30px !important;
            border-top: 40px !important;
            border-top-color: #FFFFFF !important;
        }
        .spn:hover {
            color: wheat;
            position: absolute;
            top: -40px;
            left: 40px;
            font-size: 15px;
            height: 16px;
            background: wheat;
        }
        .image {
            height: 220px;
            width: 310px;
        }
        .ip {
            font-size: 20px;
        }
        .ip:hover {
            font-size: 25px;
        }
        .main_nav {
            display: flex;
            flex-direction: row;
            justify-content: start;
        }
        .hamburger {
            display: none;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px;
        }
        @media (max-width: 768px) {
            .main_nav {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #334f6e;
            }
            .main_nav.active {
                display: flex;
            }
            .hamburger {
                display: block;
            }
        }
    </style>
</head>
<body>
    <header class="header gradient-custom" style="border-bottom: none;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start" style="margin-left: 100px;">
                        <div class="logo">
                            <a href="#"><img src="{{asset('images/Untitled-4.png')}}" alt="" style="height: 90px;" class="ii"></a>
                        </div>
                        <nav class="main_nav">
                            <ul>
                                <li><a href="{{ route('login') }}" class="border-nav" style="color: white;font-size: 20px;">تسجيل دخول</a></li>
                                <li><a href="{{ route('contact') }}" class="border-nav" style="color: white;font-size: 20px;">تواصل</a></li>
                                <li><a href="{{ route('about') }}" class="border-nav" style="color: white;font-size: 20px;">من نحن</a></li>
                                <li><a href="{{ route('home') }}" class="border-nav" style="color: white;font-size: 20px;">الرئيسية</a></li>
                                <li style="margin-left: 70px;">
                                    <form class="form-inline my-2 my-lg-0" action="{{url('property/search')}}" method="get">
                                        <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search" name="search" style="text-align: end; width: 140px;">
                                        <i class="fa-solid fa-magnifying-glass ip" style="color: #fff;"></i>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        <div class="hamburger" onclick="toggleMenu()">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        function toggleMenu() {
            const nav = document.querySelector('.main_nav');
            nav.classList.toggle('active');
        }
    </script>
</body>
</html>
