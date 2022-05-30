
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{--  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet">
    <link href="select2-bootstrap4.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
       body {
  font-family: "Roboto", sans-serif;
}
.table {
  width: 100%;
  border-spacing: 0;
  text-align: left;
}
.table th {
  font-weight: 300;
  font-size: 16px;
  color: #fff;
  line-height: 26px;
  padding: 18px 30px;
}
.table thead tr {
  background: #2b2d32;
}
.table td {
  padding: 30px 30px 31px;
  font-weight: 300;
  font-size: 16px;
  color: black-2;
  line-height: 26px;
  text-transform: uppercase;
}
.table tbody tr:nth-child(odd) {
  background: $white;
}
.table tbody tr:nth-child(even) {
  background: $f8fbfc;
}
.table__wrapper {
  padding-top: 40px;
}
.btn {
  display: inline-block;
  font-weight: 700;
  font-size: 15px;
  line-height: 25px;
  text-transform: uppercase;
  width: 170px;
  text-align: center;
  padding: 10px;
  border-radius: 3px;
  transition: background 0.3s ease;
  text-decoration: none;
}
.btn:hover {
  color: $white;
}
.btn__active {
  color: #4ed99c;
  border: 2px solid #4ed99c;
}
.btn__active:hover {
  background: #4ed99c;
}
.btn__pledged {
  color: #f14044;
  border: 2px solid #f14044;
}
.btn__pledged:hover {
  background: #f14044;
}
@media (max-width: 768px) {
  .table td {
    display: block;
    text-align: right;
  }
  .table td:before {
    content: attr(data-label);
    float: left;
    text-transform: uppercase;
    font-weight: bold;
  }
  .table thead display none tr {
    margin-bottom: 30px;
    display: block;
  }
}



  /*    body {
          font-family: "Poppins", sans-serif !important;
      }
      #filled:hover {
          background-color: white !important; 
          color: black !important;
      }

      #outlined:hover {
          background-color: #9B5DE5; 
          color: white;
      }
      {{-- @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");*/ --}}

      @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

:root {
    --font1: 'Heebo', sans-serif;
    --font2: 'Fira Sans Extra Condensed', sans-serif;
    --font3: 'Roboto', sans-serif;

    --btnbg: #ffcc00;
    --btnfontcolor: rgb(61, 61, 61);
    --btnfontcolorhover: rgb(255, 255, 255);
    --btnbghover: #ffc116;
    --btnactivefs: rgb(241, 195, 46);


    --label-index: #960796;
    --danger-index: #5bc257;
    /* PAGINATE */
    --link-color: #000;
    --link-color-hover: #fff;
    --bg-content-color: #ffcc00;

}

.container-fluid {
    max-width: 1400px;

}

.card {
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    border: 0;
    border-radius: 1rem;
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(1rem - 1px);
    border-top-right-radius: calc(1rem - 1px);
}


.card h5 {
    overflow: hidden;
    height: 55px;
    font-weight: 300;
    font-size: 1rem;
}

.card h5 a {
  color: black;
  text-decoration: none;
} 

.card-img-top {
    width: 100%;
    min-height: 250px;
    max-height: 250px;
    object-fit: contain;
    padding: 30px;
}

.card h2 {
    font-size: 1rem;
}


.card:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}

/* Centered text */
.label-top {
    position: absolute;
    background-color: var(--label-index);
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    font-size: .7rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase;
}

.top-right {
    position: absolute;
    top: 24px;
    left: 24px;

    width: 90px;
    height: 90px;
    border-radius: 50%;
    font-size: 1rem;
    font-weight: 900;
    background: #8bc34a;
    line-height: 90px;
    text-align: center;
    color: white;
}

.top-right span {
    display: inline-block;
    vertical-align: middle;
    /* line-height: normal; */
    /* padding: 0 25px; */
}

.aff-link {
    /* text-decoration: overline; */
    font-weight: 500;
}

.over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px;
}
.bold-btn {

    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px;
}
.box .btn {
    font-size: 1.5rem;
}

@media (max-width: 1025px) {
    .btn {
        padding: 5px 40px 5px 40px;
    }
}
@media (max-width: 250px) {
    .btn {
        padding: 5px 30px 5px 30px;
    }
}

/* START BUTTON */
.btn-warning {
    background: var(--btnbg);
    color: var(--btnfontcolor);
    fill: #ffffff;
    border: none;
    text-decoration: none;
    outline: 0;
    /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
    border-radius: 100px;
}
.btn-warning:hover {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}
.btn-check:focus + .btn-warning, .btn-warning:focus {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}
.btn-warning:active:focus {
    box-shadow: 0 0 0 0.25rem var(--btnactivefs);
}
.btn-warning:active {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}

/* END BUTTON */

.bg-success {
    font-size: 1rem;
    background-color: var(--btnbg)!important;
    color: var(--btnfontcolor)!important;
}
.bg-danger {
    font-size: 1rem;
}


.price-hp {
    font-size: 1rem;
    font-weight: 600;
    color: darkgray;
}

.amz-hp {
    font-size: .7rem;
    font-weight: 600;
    color: darkgray;
}

.fa-question-circle:before {
    /* content: "\f059"; */
    color: darkgray;
}

.fa-heart:before {
    color:crimson;
}
.fa-chevron-circle-right:before {
    color: darkgray;
}
.picZoomer{
    position: relative;
    /*margin-left: 40px;
    padding: 15px;*/
}
.picZoomer-pic-wp{
    position: relative;
    overflow: hidden;
    text-align: center;
}
.picZoomer-pic-wp:hover .picZoomer-cursor{
    display: block;
}
.picZoomer-zoom-pic{
    position: absolute;
    top: 0;
    left: 0;
}
.picZoomer-pic{
    /*width: 100%;
    height: 100%;*/
}
.picZoomer-zoom-wp{
    display: none;
    position: absolute;
    z-index: 999;
    overflow: hidden;
    border:1px solid #eee;
    height: 460px;
    margin-top: -19px;
}
.picZoomer-cursor{
    display: none;
    cursor: crosshair;
    width: 100px;
    height: 100px;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 50%;
    border: 1px solid #eee;
    background-color: rgba(0,0,0,.1);
}
.picZoomCursor-ico{
    width: 23px;
    height: 23px;
    position: absolute;
    top: 40px;
    left: 40px;
    background: url(images/zoom-ico.png) left top no-repeat;
}

.my_img {
    vertical-align: middle;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    height: 100%;
}
.piclist li{
    display: inline-block;
    width: 90px;
    height: 114px;
    border: 1px solid #eee;
}
.piclist li img{
    width: 97%;
    height: auto;
}

/* custom style */
.picZoomer-pic-wp,
.picZoomer-zoom-wp{
    border: 1px solid #eee;
}



.section-bg {
    background-color: #fff1e0;
}
section {
    padding: 60px 0;
}
.row-sm .col-md-6 {
    padding-left: 5px;
    padding-right: 5px;
}

/*===pic-Zoom===*/
._boxzoom .zoom-thumb {
    width: 90px;
    display: inline-block;
    vertical-align: top;
    margin-top: 0px;
}
._boxzoom .zoom-thumb ul.piclist {
    padding-left: 0px;
    top: 0px;
}
._boxzoom ._product-images {
    width: 80%;
    display: inline-block;
}
._boxzoom ._product-images .picZoomer {
    width: 100%;
}
._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
    left: 0px;
}
._boxzoom ._product-images .picZoomer img.my_img {
    width: 100%;
}
.piclist li img {
    height:100px;
    object-fit:cover;
}

/*======products-details=====*/
._product-detail-content {
    background: #fff;
    padding: 15px;
    border: 1px solid lightgray;
}
._product-detail-content p._p-name {
    color: black;
    font-size: 20px;
    border-bottom: 1px solid lightgray;
    padding-bottom: 12px;
}
.p-list span {
    margin-right: 15px;
}
.p-list span.price {
    font-size: 25px;
    color: #318234;
}
._p-qty > span {
    color: black;
    margin-right: 15px;
    font-weight: 500;
}
._p-qty .value-button {
    display: inline-flex;
    border: 0px solid #ddd;
    margin: 0px;
    width: 30px;
    height: 35px;
    justify-content: center;
    align-items: center;
    background: #fd7f34;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: #fff;
}

._p-qty .value-button {
    border: 0px solid #fe0000;
    height: 35px;
    font-size: 20px;
    font-weight: bold;
}
._p-qty input#number {
    text-align: center;
    border: none;
    border-top: 1px solid #fe0000;
    border-bottom: 1px solid #fe0000;
    margin: 0px;
    width: 50px;
    height: 35px;
    font-size: 14px;
    box-sizing: border-box;
}
._p-add-cart {
    margin-left: 0px;
    margin-bottom: 15px;
}
.p-list {
    margin-bottom: 10px;
}
._p-features > span {
    display: block;
    font-size: 16px;
    color: #000;
    font-weight: 500;
}
._p-add-cart .buy-btn {
    background-color: #fd7f34;
    color: #fff;
}
._p-add-cart .btn {
    text-transform: capitalize;
    padding: 6px 20px;
    /* width: 200px; */
    border-radius: 52px;
}
._p-add-cart .btn {
    margin: 0px 8px;
}

/*=========Recent-post==========*/
.title_bx h3.title {
    font-size: 22px;
    text-transform: capitalize;
    position: relative;
    color: #fd7f34;
    font-weight: 700;
    line-height: 1.2em;
}
.title_bx h3.title:before {
    content: "";
    height: 2px;
    width: 20%;
    position: absolute;
    left: 0px;
    z-index: 1;
    top: 40px;
    background-color: #fd7f34;
}
.title_bx h3.title:after {
    content: "";
    height: 2px;
    width: 100%;
    position: absolute;
    left: 0px;
    top: 40px;
    background-color: #ffc107;
}
.common_wd .owl-nav .owl-prev, .common_wd .owl-nav .owl-next {
    background-color: #fd7f34 !important;
    display: block;
    height: 30px;
    width: 30px;
    text-align: center;
    border-radius: 0px !important;
}
.owl-nav .owl-next {
    right:-10px;
}
.owl-nav .owl-prev, .owl-nav .owl-next {
    top:50%;
    position: absolute;
}
.common_wd .owl-nav .owl-prev i, .common_wd .owl-nav .owl-next i {
    color: #fff;
    font-size: 14px !important;
    position: relative;
    top: -1px;
}
.common_wd .owl-nav {
    position: absolute;
    top: -21%;
    right: 4px;
    width: 65px;
}
.owl-nav .owl-prev i, .owl-nav .owl-next i {
    left: 0px;
}
._p-qty .decrease_ {
    position: relative;
    right: -5px;
    top: 3px;
}

._p-qty .increase_ {
    position: relative;
    top: 3px;
    left: -5px;
}
/*========box========*/
.sq_box {
    padding-bottom: 5px;
    border-bottom: solid 2px #fd7f34;
    background-color: #fff;
    text-align: center;
    padding: 15px 10px;
    margin-bottom: 20px;
    border-radius: 4px;
}
.item .sq_box span.wishlist {
    right: 5px !important;
}
.sq_box span.wishlist {
    position: absolute;
    top: 10px;
    right: 20px;
}
.sq_box span {
    font-size: 14px;
    font-weight: 600;
    margin: 0px 10px;
}
.sq_box span.wishlist i {
    color: #adb5bd;
    font-size: 20px;
}
.sq_box h4 {
    font-size: 18px;
    text-align: center;
    font-weight: 500;
    color: #343a40;
    margin-top: 10px;
    margin-bottom: 10px !important;
}
.sq_box .price-box {
    margin-bottom: 15px !important;
}
.sq_box .btn {
    border-radius: 50px;
    padding: 5px 13px;
    font-size: 15px;
    color: #fff;
    background-color: #fd7f34;
    font-weight: 600;
}
.sq_box .price-box span.price {
    text-decoration: line-through;
    color: #6c757d;
}
.sq_box span {
    font-size: 14px;
    font-weight: 600;
    margin: 0px 10px;
}
.sq_box .price-box span.offer-price {
    color:#28a745;
}
.sq_box img {
    object-fit: cover;
    height: 150px !important;
    margin-top: 20px;
}
.sq_box span.wishlist i:hover {
    color: #fd7f34;
}
.mr-2 {
     margin-right: 20px;
}
 .divTable {
     display: table;
     width: 100%;
}
 .rowTable {
     display: table-row;
}
 .divTableHeading {
     display: table-header-group;
}
 .divTableCol, .divTableHead {
     border-bottom: 1px solid #eee;
     display: table-cell;
     padding: 3px 10px;
}
 .divTableHeading {
     background-color: #eee;
     display: table-header-group;
     font-weight: bold;
}
 .divTableFoot {
     background-color: #eee;
     display: table-footer-group;
     font-weight: bold;
}
 .divTableBody {
     display: table-row-group;
}
@charset "utf-8";
/* CSS Document */

/* CSS Reset */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}
body {
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}


/* Form Styles */
form
{
    width: 100%;
}

input[type="text"], input[type="password"], select, input[type="email"], input[type="tel"], input[type="date"], textarea
{
    border: 1px solid #ddd;
    background-color: #fff;
    color: #959595;
    width: 100%;
    padding: 10px;
    font-size: 12px;
    margin: 7px 0 25px 0;
}

label
{
    font-size: 14px;
}

select
{
    height: 37px;
}

input[type="checkbox"]
{
    margin: 5px 10px 5px 0px;
}

.user-pswd input[type="checkbox"]
{
    margin: 5px 10px 5px 15px;
}

input[type="checkbox"] + p, input[type="radio"] + p
{
    font-size: 15px;
    padding: 0 5px;
    display: inline;
    color: #959595;
}

input[type="radio"] + p
{
    font-size: 13px;
    padding: 0 0 0 20px;
}

input[type="submit"]
{
    padding: 10px 20px;
    color: #fff; 
    background-color: #000;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover
{
    background-color: #D6544E;
    border: none;
}

.coupon input[type="text"]
{
    width: 160px;
}

.coupon input[type="submit"]
{
    margin: 0 0 0 20px;
}

.order .redbutton
{
    background-color: #D6544E;
    padding: 13px 30px;
    font-size: 14px;
    font-weight: 100;
    margin-top: 25px;
}

.order .redbutton:hover
{
    background-color: #000;
    border: none;
}

textarea
{
    height: 120px;
}

textarea:hover, input:hover
{
    border: 1px solid #D6544E;
    background-color: #fff;
}

textarea:active, input:active
{
    border: 1px solid #D6544E;
    background-color: #f5f5f5;
}

textarea:focus, input:focus
{
    border: 1px solid #000;
    background-color: #f5f5f5;
}

label:not(.notes):after
{
    content: "*";
    color: red;
    padding-left: 5px;
}

.notes
{
    display: block;
    padding-top: 20px;
}


/* Grid Styles */
*
{
    box-sizing: border-box;
}

.wrapper
{
    width: 100%;
    margin: 0 auto;
    margin-bottom: 100px;
}

.row:before, .row:after
{
    content: " ";
    display: table;
}

.row:after
{
    clear: both;
}

.col
{
    margin-right: 16px;
    float: left;
}

.col:last-child
{
    margin-right: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12
{
    width: 100%;
} 

.col-push-1, .col-push-2, .col-push-3, .col-push-4, .col-push-5, .col-push-6, .col-push-7, .col-push-8, .col-push-9, .col-push-10, .col-push-11
{
    margin-left: 0;
} 

/* TABLET STARTS HERE */

@media(min-width: 768px)
{
    .wrapper
    {
        width: 768px;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11
    {
        width: 376px;
    }

    .col-12
    {
        width: 100%;
    }

    .col-push-1, .col-push-2, .col-push-3, .col-push-4, .col-push-5, .col-push-6, .col-push-7, .col-push-8, .col-push-9, .col-push-10, .col-push-11
    {
        margin-left: 392px;
    }

    .col:nth-child(2n+2)
    {
        margin-right: 0;
    }

}


/*DESKTOP STARTS HERE*/

@media(min-width: 1136px)
{
    .wrapper
    {
        width: 1136px;
    }

    .col-1
    {
        width: 80px;
    }

    .col-2
    {
        width: 176px;
    }

    .col-3
    {
        width: 272px;
    }

    .col-4
    {
        width: 368px;
    }

    .col-5
    {
        width: 464px;
    }

    .col-6
    {
        width: 560px;
    }

    .col-7
    {
        width: 656px;
    }

    .col-8
    {
        width: 752px;
    }

    .col-9
    {
        width: 848px;
    }

    .col-10
    {
        width: 944px;
    }

    .col-11
    {
        width: 1040px;
    }

    .col-12
    {
        width: 100%;
    }
    .col-push-1
    {
        margin-left: 96px;
    }
    .col-push-2
    {
        margin-left: 192px;
    }
    .col-push-3
    {
        margin-left: 288px;
    }
    .col-push-4
    {
        margin-left: 384px;
    }
    .col-push-5
    {
        margin-left: 480px;
    }
    .col-push-6
    {
        margin-left: 576px;
    }
    .col-push-7
    {
        margin-left: 672px;
    }
    .col-push-8
    {
        margin-left: 768px;
    }
    .col-push-9
    {
        margin-left: 864px;
    }
    .col-push-10
    {
        margin-left: 960px;
    }
    .col-push-11
    {
        margin-left: 1056px;
    }

    .col:nth-child(2n+2)
    {
        margin-right: 16px;
    }

    .col:last-child
    {
        margin-right: 0;
    }
}


/* Main CSS Starts Here */
body
{
    font-family: 'Raleway', sans-serif;
    color: #959595;
}

h1, h2, h3, h4, h5, h6
{
    text-transform: uppercase;
    font-weight: 900;
    padding: 20px 0;
    color: #000;
}


h2
{
    font-size: 28px;
}

h3
{
    font-size: 16px;
}

h4
{
    font-size: 15px;
}

h5
{
    font-size: 14px;
}

h6
{
    font-size: 13px;
}

p
{
    font-size: 13px;
    padding: 20px 0;
}

/* Heading Top Border Styles Start Here */
 h3 
{
    position: relative;
}
  
 h3.topborder 
{
 margin-top: 0;
}
  
h3.topborder:before 
{
    content: "";
    display: block;
    border-top: 1px solid #c2c2c2;
    width: 100%;
    height: 1px;
    position: absolute;
    top: 50%;
    z-index: 1;
}
  
h3.topborder span {
    background: #fff;
    padding: 0 10px 0 0;
    position: relative;
    z-index: 5;
}
/* Heading Top Border Styles End Here */


header
{
    height: 250px;
    background-image: url('http://lorempixel.com/1920/500');
    background-size: cover;
    text-align: center;
    line-height: 210px;
}

.white-space
{
    height: 90px;
    border-bottom: 1px solid #ddd;
    box-shadow: 0px 12px 14px -10px #DDDDDD;
    -webkit-box-shadow: 0px 12px 14px -10px #DDDDDD;
    -moz-box-shadow: 0px 12px 14px -10px #DDDDDD;
    -o-box-shadow: 0px 12px 14px -10px #DDDDDD;

}

.fa-info
{
    font-size: 24px;
    padding: 0 20px; 
    color: #757575;
    line-height: 56px;
    vertical-align: middle;
}

a
{
    color: #D6544E;
    font-size: 13px;
    text-decoration: none;
}

a:hover
{
    color: #000;
}

.info-bar
{
    height: 56px;
    background-color: #f5f5f5;
    margin: 20px 0;
}

.info-bar p:first-child
{
    padding: 0;
}

.order
{
    border: 12px solid #f5f5f5;
    padding: 30px;
    margin-top: 28px;
}

.order div:not(.qty)
{
    width: 100%;
    border-bottom: 1px solid #DDDDDD;
    padding: 20px 0;
}

.order a
{
    display: block;
}

.order p
{
    padding: 0;
    line-height: 20px;
}

.order h4, h5
{
    padding: 0;
}

.order div:nth-child(6)
{
    border: none;
}

.width50
{
    width: 50%;
    float: left;
}

.padleft
{
    margin-left: 39px;
}

.padright
{
    padding-right: 40px;
}

.inline
{
    display: inline-block;
}

.alignright
{
    float: right;
}

.prod-description
{
    text-transform: uppercase;
    color: #000;
}

.qty
{
    font-weight: 900;
    font-size: 13px;
    color: #000;
    padding-left: 4px;
}

.smalltxt
{
    font-size: 9px;
    vertical-align: middle;
}

.paymenttypes
{
    border: 1px solid #DDDDDD;
    width: 135px;
    padding: 0 8px;
    margin: 0 0 20px 10px;
    display: inline-block;
    vertical-align: middle;
}

.paypal
{
    width: 39px;
    height: 13px;
}

.cards
{
    width: 135px;
    height: 24px;
}

.difwidth
{
    width: 150px;
    line-height: 20px;
}

.order .center
{
    line-height: 40px;
    color: #000;
}
 
</style>

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               {{--  <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
               {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                    {{-- Left Side Of Navbar --}}
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">
                             {{--    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> --}}
                               
                            </nav>
                                {{-- <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a> --}}
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
{{--  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('/js/main.js') }}"></script>
<script type="text/javascript">
   $('select').select2({
    width:'100%'

});

</script>
</body>
</html>
