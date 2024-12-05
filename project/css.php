<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="style.css" />

<title>Car To U - บริการรถเช่า รายวัน/รายเดือน กทม.</title>

<!-- add icon link -->
<link rel="icon" href="https://cdn-icons-png.freepik.com/256/8510/8510612.png" type="image/x-icon" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- html -->
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<!-- header -->
<style>
    nav {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 2000;
        /* ตั้งค่า z-index ให้ Navbar อยู่ด้านหน้าสุด */
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #ff8800 0%,
                #ffb300 29%,
                #ffffff 67%,
                #000000 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    .flexMain {
        display: flex;
        align-items: center;
    }

    .flex1 {
        flex: 1;
    }

    .flex2 {
        flex: 2;
    }

    .flex3 {
        flex: 3;
    }

    button.siteLink {
        padding: 8px;
        margin: 1px;
        display: inline-block;
        min-width: 115px;
        background-color: #ffae18;
        font-family: impact;
        font-size: 18px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        border: 2px solid #ffae18;
    }

    .whiteLink {
        background: #fff;
    }

    .whiteLink:active {
        background: #000;
        color: #fff;
        transition: all 50ms linear;
    }

    .blackLink {
        color: #fff;
        background: #fff;
        transition: all 50ms linear;
    }

    .blackLink:active {
        background: #000;
        color: #fff;
    }

    #siteBrand {
        font-family: "Audiowide", sans-serif;
        font-weight: bold;
        letter-spacing: -1px;
        font-size: 50px;
        color: #252525;
        line-height: 1em;
    }

    #menuDrawer {
        background: #fff;
        position: fixed;
        height: 100vh;
        overflow: auto;
        z-index: 1000;
        top: 0;
        left: 0;
        border-right: 1px solid #eaeaea;
        min-width: 18%;
        max-width: 250px;
        width: 100%;
        transform: translateX(-100%);
        transition: transform 200ms linear;
        text-align: start;
        font-size: 16px;
    }

    button.siteLink:hover {
        transform: scale(0.95);
        /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ไปที่รูป */
    }

    #mainNavigation {
        transition: transform 200ms linear;
    }

    .drawMenu>#menuDrawer {
        transform: translateY(0%);
    }

    .drawMenu>#mainNavigation {
        transform: translateX(-20%);
    }

    .fa-times {
        cursor: pointer;
    }

    a.nav-menu-item:hover {
        margin-left: 2px;
        border-left: 10px solid black;
        background-color: #ffae18;
        color: #ffffff;
    }

    a.nav-menu-item {
        transition: border 200ms linear;
        text-decoration: none;
        display: block;
        padding: 18px;
        padding-left: 32px;
        border-bottom: 1px solid #eaeaea;
        font-weight: bold;
        color: #343434;
    }

    select.noStyle {
        border: none;
        outline: none;
    }
</style>

<!-- slide -->
<style>
    /* Make the image fully responsive */
    .carousel-inner img {        
        width: 100%;
        height: 600px;
        display: block;
        margin-top: 50px;
        transition: transform 0.3s ease-in-out;
        border-radius: 0.8rem;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner img:hover {
        transform: scale(1.1);
        /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ไปที่รูป */
    }

    .carousel-inner .carousel-item {
        display: none;
        transition: opacity 0.1s ease-in-out;
        /* เพิ่ม transition เพื่อให้มี animation fade slide */
    }

    .carousel-inner .active {
        display: block;
        opacity: 1;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none;
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0);
        border: 2px solid #fff;
        border-radius: 10px;
    }

    .carousel-indicators li:hover {
        background-color: #ffae18;
        /* Hover color */
    }

    .carousel-indicators .active {
        width: 10px;
        height: 10px;
        margin: 0;
        background-color: #fff;
    }
</style>

<!-- footer -->
<style>
    .new_footer_area {
        background: rgb(0, 0, 0);
    }

    .new_footer_top {
        padding: 50px 0px 0px;
        position: relative;
        overflow-x: hidden;
    }

    .new_footer_area .footer_bottom {
        padding-top: 0px;
        padding-bottom: 10px;
        align-content: center;
        text-align: center;
        font-size: 14px;
        font-weight: lighter;
        line-height: 30px;
        color: #ffffff;
    }

    .new_footer_top .company_widget p {
        font-size: 14px;
        font-weight: lighter;
        line-height: 24px;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .new_footer_top .company_widget .f_subscribe_two .btn_get {
        border-width: 1px;
        margin-top: 20px;
    }

    .btn_get_two:hover {
        background: transparent;
        color: #ffae18;
    }

    .btn_get:hover {
        color: #fff;
        background: #ffae18;
        border-color: #ffae18;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    a:hover,
    a:focus,
    .btn:hover,
    .btn:focus,
    button:hover,
    button:focus {
        text-decoration: none;
        outline: none;
    }

    .new_footer_top .f_widget.about-widget .f_list li a:hover {
        color: #ffae18;
    }

    .new_footer_top .f_widget.about-widget .f_list li {
        margin-bottom: 15px;
    }

    .f_widget.about-widget .f_list li:last-child {
        margin-bottom: 100px;
    }

    .f_widget.about-widget .f_list li {
        margin-bottom: 30px;
    }

    .f_widget.about-widget .f_list {
        margin-bottom: 30px;
    }

    .new_footer_top .f_social_icon a {
        width: 44px;
        height: 44px;
        line-height: 43px;
        background: var(--platinum);
        border: 1px solid #e2e2eb;
        font-size: 34px;
    }

    .f_social_icon a {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        font-size: 14px;
        line-height: 45px;
        color: #ffffff;
        display: inline-block;
        background: #ebeef5;
        text-align: center;
        -webkit-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .ti-facebook:before {
        content: "\e741";
    }

    .ti-twitter-alt:before {
        content: "\e74b";
    }

    .ti-vimeo-alt:before {
        content: "\e74a";
    }

    .ti-pinterest:before {
        content: "\e731";
    }

    .btn_get_two {
        -webkit-box-shadow: none;
        box-shadow: none;
        background: #ffae18;
        border-color: #ffae18;
        color: #fff;
    }

    .btn_get_two:hover {
        background: transparent;
        color: #ffae18;
    }

    .new_footer_top .f_social_icon a:hover {
        background: #ffae18;
        border-color: #ffae18;
        color: white;
    }

    .new_footer_top .f_social_icon a+a {
        margin-left: 4px;
    }

    .new_footer_top .f-title {
        margin-bottom: 30px;
        color: #ffffff;
    }

    .f_600 {
        font-weight: lighter;
    }

    .f_size_18 {
        font-size: 16px;
        font-weight: bold;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #ffffff;
    }

    .new_footer_top .f_widget.about-widget .f_list li a {
        color: #ffffff;
    }

    .new_footer_top .footer_bg {
        position: absolute;
        bottom: 0;
        background: url("https://regionalbusinessservices.com.au/assets/footer.png") repeat scroll center 0;
        width: 100%;
        height: 200px;
    }

    .new_footer_top .footer_bg .footer_bg_one {
        background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEia0PYPxwT5ifToyP3SNZeQWfJEWrUENYA5IXM6sN5vLwAKvaJS1pQVu8mOFFUa_ET4JuHNTFAxKURFerJYHDUWXLXl1vDofYXuij45JZelYOjEFoCOn7E6Vxu0fwV7ACPzArcno1rYuVxGB7JY6G7__e4_KZW4lTYIaHSLVaVLzklZBLZnQw047oq5-Q/s16000/volks.gif") no-repeat center center;
        width: 330px;
        height: 105px;
        background-size: 100%;
        position: absolute;
        bottom: 0;
        left: 30%;
        -webkit-animation: myfirst 22s linear infinite;
        animation: myfirst 22s linear infinite;
    }

    .new_footer_top .footer_bg .footer_bg_two {
        background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyLGwEUVwPK6Vi8xXMymsc-ZXVwLWyXhogZxbcXQYSY55REw_0D4VTQnsVzCrL7nsyjd0P7RVOI5NKJbQ75koZIalD8mqbMquP20fL3DxsWngKkOLOzoOf9sMuxlbyfkIBTsDw5WFUj-YJiI50yzgVjF8cZPHhEjkOP_PRTQXDHEq8AyWpBiJdN9SfQA/s16000/cyclist.gif") no-repeat center center;
        width: 88px;
        height: 100px;
        background-size: 100%;
        bottom: 0;
        left: 38%;
        position: absolute;
        -webkit-animation: myfirst 30s linear infinite;
        animation: myfirst 30s linear infinite;
    }

    @-moz-keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }

    @-webkit-keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes myfirst {
        0% {
            left: -25%;
        }

        100% {
            left: 100%;
        }
    }

    @media (max-width: 767px) {
        .logo {
            margin-bottom: 15px;
            /* ปรับขนาด margin-bottom ตามที่คุณต้องการ */
        }

        .f_widget.social-widget {
            margin-bottom: 100px;
            /* ปรับขนาด margin-bottom ตามที่คุณต้องการ */
        }

        .f_widget.about-widget {
            margin-bottom: -60px;
            /* ปรับขนาด margin-bottom ตามที่คุณต้องการ */
        }
    }

    /*************footer End*****************/
</style>

<!-- bg -->
<style>
    body {
        animation: theme 21s linear infinite;

        &:after,
        &:before {
            content: '';
            display: block;
            position: fixed;
            z-index: -1;
            top: 0;
            width: 100vw;
            height: 100vh;
            width: 100vmax;
            height: 100vmax;
            background: rgba(0, 0, 0, 0.05);
            animation: background 90s linear infinite;
        }

        &:after {
            left: 15vw;
        }

        &:before {
            right: 15vw;
            animation-delay: -30s;
            animation-direction: reverse;
        }
    }

    @keyframes theme {
        0% {
            background: #2b2b2b;
        }

        16% {
            background: #f2f2f2;
        }

        33% {
            background: #a5a5a5;
        }

        50% {
            background: #ffc800;
        }

        66% {
            background: #a5a5a5;
        }

        83% {
            background: #f2f2f2;
        }

        100% {
            background: #2b2b2b;
        }
    }

    @keyframes background {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<!-- rent -->
<style>
    .btn {
        padding: 8px;
        margin: 1px;
        display: inline-block;
        min-width: 115px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 18px;
        border-radius: 0.5rem;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        transform: scale(1.03);
        /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ไปที่รูป */
    }
</style>

<!-- logo -->
<style>
    .logo {
        max-width: 65%;
        border-radius: 5rem;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 0px;
        align-items: center;
        text-align: center;
        align-content: center;
    }
</style>

<!-- product -->
<style>
    * {
        box-sizing: border-box;
        font-family: "Open Sans", "Arial", sans-serif;
        font-weight: bold;        
    }

    .listing {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        justify-content: center;
        align-items: center;

        /*just for pen positioning*/
        position: relative;

        left: 50%;
        transform: translateX(-50%);
        width: 1100px;
    }

    .product {
        width: 330px;
        position: relative;
        margin: auto;
    }

    .product a {
        text-decoration: none;
    }

    .img-wrapper {
        display: block;
        width: 100%;
        height: 240px;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        border-bottom: 0;
        overflow: hidden;
        text-align: center;
    }

    .img-wrapper img {
        width: 100%;
        height: 240px;
    }

    .img-wrapper img:hover {
        transform: scale(1.1);
        /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ไปที่รูป */
        transform: rotateY(180deg);
    }

    .info {
        width: 100%;
        background: #000;
        color: #fff;
        position: relative;
        padding: 30px 10px 20px 10px;
        text-align: center;
        border-radius: 0.5em;
        vertical-align: middle;
        transform: translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        backface-visibility: hidden;
        transition-property: color, height;
        transition-duration: 0.3s, 0.4s;
        transition-timing-function: ease-out;
        height: 63px;
    }

    .info:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #fff;
        transform: scaleY(0);
        transform-origin: 50%;
        transition: transform 0.3s ease-out;
    }

    .info:after {
        visibility: hidden;
        pointer-events: none;
        position: absolute;
        z-index: -1;
        content: "";
        border-style: solid;
        transition-duration: 0.3s;
        transition-property: transform;
        left: calc(50% - 1px);
        bottom: 0;
        border-width: 10px 10px 0 10px;
        border-color: black transparent transparent transparent;
    }

    .product:hover .info {
        height: 40px;
    }

    .product:hover .info:before {
        transform: scaleY(0.7);
    }

    .product:hover .info:after {
        visibility: visible;
        transform: translateY(10px);
    }

    .title {
        transition: transform 0.3s ease-out;
        font-size: 18px;
    }

    .title a {
        color: inherit;
    }

    .product:hover .title {
        transform: translateY(-18px);
        font-weight: bold;
        color: #000;
    }

    .price {
        position: absolute;
        font-size: 24px;
        padding: 4px 13px;
        top: -25px;
        right: 10px;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        background: #FF3B3B;
    }

    .price.sale {
        background: #00ba2f;
        color: #fff;
    }

    .price.old {
        font-size: 16px;
        padding: 4px 6px;
        text-decoration: line-through;
        top: -55px;
    }

    .actions-wrapper {
        margin-top: 16px;
        display: flex;
        justify-content: space-evenly;
        visibility: hidden;
    }

    .actions-wrapper * {
        width: 50%;
        padding: 5px 0;
        text-align: center;
        color: #191919;
        font-size: 16px;
        font-weight: bold;
    }

    .actions-wrapper *:before {
        font-family: "FontAwesome";
        margin-right: 8px;
    }

    .cart {
        color: #ffffff;
        background-color: #0084ff;
    }

    .cart:hover {
        color: #ffffff;
        transform: scale(1.15);
        /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ไปที่รูป */
    }

    .cart:before {
        content: "\f073";
    }

    .product:hover .actions-wrapper * {
        visibility: visible;
    }

    .note {
        position: absolute;
        top: 0;
        left: 0;
        padding: 4px 8px;
        font-size: 14px;
        border: 2px solid #ffae1800;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
    }

    .note.on-sale {
        background: #ff8800;
        color: #fff;
    }

    .note.no-stock {
        background: #2c2c2c;
        color: #fff;
    }
</style>

<!-- promotion -->
<style>
    :root {
        --orange: #ffae18;
        --darkorange: #ffae18;
        --platinum: #e5e5e5;
        --black: #2b2d42;
        --white: #fff;
        --thumb: #edf2f4;
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        font: 16px / 24px "IBM Plex Sans Thai", sans-serif;
        color: var(--black);
        background: var(--platinum);
        
    }

    h2 {
        font-size: 32px;
        margin-top: 1em;
        color: #000;
        font-weight: bold;
    }

    h4 {
        color: #454545;
        font-weight: bold;
    }

    .cards {
        display: grid;
        grid-auto-columns: 100%;
        grid-column-gap: 10px;
        grid-auto-flow: column;
        padding: 25px 0px;
        list-style: none;
        overflow-x: scroll;
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
    }

    .card {
        display: flex;
        flex-direction: column;
        padding: 10px;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
        scroll-snap-align: start;
        transition: all 0.2s;
    }

    .card:hover {
        color: var(--white);
        background: var(--black);
    }

    .card .card-content {
        margin: 10px 0;
        max-width: 100%;
    }

    .card .card-link-wrapper {
        margin-top: auto;
    }

    .card .card-link {
        display: inline-block;
        text-decoration: none;
        color: white;
        background: var(--orange);
        padding: 6px 12px;
        border-radius: 8px;
        transition: background 0.2s;
    }

    .card:hover .card-link {
        background: var(--darkorange);
    }

    .cards::-webkit-scrollbar {
        height: 12px;
    }

    .cards::-webkit-scrollbar-thumb,
    .cards::-webkit-scrollbar-track {
        border-radius: 92px;
    }

    .cards::-webkit-scrollbar-thumb {
        background: var(--darkorange);
    }

    .cards::-webkit-scrollbar-track {
        background: var(--thumb);
    }

    @media (min-width: 500px) {
        .cards {
            grid-auto-columns: calc(50% - 10px);
            grid-column-gap: 20px;
        }
    }

    @media (min-width: 700px) {
        .cards {
            grid-auto-columns: calc(calc(100% / 2) - 20px);
            grid-column-gap: 30px;
        }
    }

    @media (min-width: 1100px) {
        .cards {
            grid-auto-columns: calc(30% - 10px);
            grid-column-gap: 40px;
        }
    }
</style>

<!-- container -->
<style>
    #container {
        padding: 0 15px;
        margin: 0 auto;
        background-color: #ffffff;
    }
</style>

<!-- cookie -->
<style>
    #cookie {
        background-color: #ffffffdc;
        max-width: 100%;
        color: #000;
        animation: slideIn 0.5s ease-out;
        /* เพิ่ม animation เมื่อป็อปอัพปรากฏ */
    }

    @keyframes slideIn {
        from {
            transform: translateY(100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    #cookie p {
        font-weight: lighter;
    }

    #cookie a {
        font-weight: lighter;
    }
</style>

<!-- modal -->
<style>
    /* Google Fonts - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .form {
        position: absolute;
        min-width: 350px;              
        padding: 30px;
        border-radius: 6px;
        background: #fff;
        transform: translateY(30%);
    }

    .form.signup {
        opacity: 0;
        pointer-events: none;
    }

    .forms.show-signup .form.signup {
        opacity: 1;
        pointer-events: auto;
    }

    .forms.show-signup .form.login {
        opacity: 0;
        pointer-events: none;
    }

    header {
        font-size: 28px;
        font-weight: 600;
        color: #232836;
        text-align: center;
    }

    .form .field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 20px;
        border-radius: 6px;
    }

    .field input,
    .field button {
        height: 100%;
        width: 100%;
        border: none;
        font-size: 16px;
        font-weight: 400;
        border-radius: 6px;
    }

    .field input {
        outline: none;
        padding: 0 15px;
        border: 1px solid#CACACA;
    }

    .field input:focus {
        border-bottom-width: 2px;
    }

    .eye-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #8b8b8b;
        cursor: pointer;
        padding: 5px;
    }

    .field button {
        color: #fff;
        background-color: #0000008f;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .field button:hover {
        background-color: #ffae18;
    }

    .form-link {
        text-align: center;
        margin-top: 10px;
    }

    .form-link span,
    .form-link a {
        font-size: 14px;
        font-weight: 400;
        color: #232836;
    }

    .form a {
        color: #ffa600;
        text-decoration: none;
    }

    .form-content a:hover {
        text-decoration: underline;
    }

    .line {
        position: relative;
        height: 1px;
        width: 100%;
        margin: 36px 0;
        background-color: #d4d4d4;
    }

    .line::before {
        content: "หรือ";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        color: #8b8b8b;
        padding: 0 15px;
    }

    .media-options a {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    a.facebook {
        color: #fff;
        background-color: #4267b2;
    }

    a.facebook .facebook-icon {
        height: 28px;
        width: 28px;
        color: #0171d3;
        font-size: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
    }

    .facebook-icon,
    img.google-img {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
    }

    img.google-img {
        height: 20px;
        width: 20px;
        object-fit: cover;
    }

    a.google {
        border: 1px solid #cacaca;
    }

    a.google span {
        font-weight: 500;
        opacity: 0.6;
        color: #232836;
    }
</style>

<!-- about us -->
<style>
    .aboutimg {
        max-width: 80%;
        height: 150px;
        border-radius: 50px;
    }

    .about {
        padding: 5px;
        text-align: center;
    }
</style>

<!-- suggestion -->
<style>
    .carousel-container {
        width: 100%;
        overflow-y: scroll;
        display: flex;
        gap: 10px;
        overflow-y: scroll;
        max-height: 400px;
        /* กำหนดความสูงสูงสุดของแถบเลื่อน */
        padding: 10px;
        /* ระยะห่างของเนื้อหาแถบเลื่อน */
    }

    .iframe-container {
        width: 100%;
        /* ปรับขนาด iframe ตามต้องการ */
        height: 500px;
        display: inline-block;
        margin-bottom: 20px;
        /* ระยะห่างระหว่าง iframes */
    }

    .carousel-container::-webkit-scrollbar-thumb {
        background-color: #ffbb00;
        /* สีของแถบเลื่อน */
        border-radius: 8px;
    }

    .carousel-container::-webkit-scrollbar {
        width: 12px;
    }

    .carousel-container::-webkit-scrollbar-track {
        background-color: #ebebeb;
        /* สีพื้นหลังของแถบเลื่อน */
        border-radius: 3px;
    }
</style>

<!-- map -->
<style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

    /* Optional: Makes the sample page fill the window. */

    #map {
        height: 250px;
        width: 260px;
        margin-top: 20px;
        z-index: 10;
    }
</style>

<!-- alert -->
<style>
    .custom-alert {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #222222;
        color: #ffae18;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .custom-alert p {
        margin: 0;
    }

    .custom-alert-btn {
        display: block;
        margin-top: 10px;
        padding: 8px 12px;
        background-color: #000;
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .custom-alert-btn:hover {
        background-color: #ffae18;
    }
</style>