<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .navbar *{
      color: #fff !important;
    }
    .bg_body{
      background-color: #505050;  
    }
    /*==================== 
	Footer 
====================== */

/* Main Footer */
footer .main-footer{	padding: 20px 0;	background: #505050; height: auto;}
footer ul{	padding-left: 0;	list-style: none;}

/* Copy Right Footer */
.footer-copyright {	background: #222;	padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {	list-style: none;	margin: 0;	padding: 0;}
.footer-copyright nav ul li {	border-left: 1px solid #505050;	display: inline-block;	line-height: 12px;	margin: 0;	padding: 0 8px;}
.footer-copyright nav ul li a{	color: #969696;}
.footer-copyright nav ul li:first-child {	border: medium none;	padding-left: 0;}
.footer-copyright p {	color: #969696;	margin: 2px 0 0;}

/* Footer Top */
.footer-top{	background: #252525;	padding-bottom: 30px;	margin-bottom: 30px;	border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{	background: #fff;}
footer.transparent .footer-copyright{	background: none repeat scroll 0 0 #fff ;}

/* Footer light */
footer.light .footer-top{	background: #f9f9f9;}
footer.light .main-footer{	background: #f9f9f9;}
footer.light .footer-copyright{	background: none repeat scroll 0 0 #fff ;}

/* Footer 4 */
.footer- .logo {    display: inline-block;}

/*==================== 
	Widgets 
====================== */
.widget{	padding: 20px;	margin-bottom: 40px;}
.widget.widget-last{	margin-bottom: 0px;}
.widget.no-box{	padding: 0;	background-color: transparent;	margin-bottom: 40px;
	box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{	margin-bottom: 18px;}
.widget li a{	color: #ff8d1e;}
.widget li a:hover{	color: #4b92dc;}
.widget-title {margin-bottom: 20px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{	float: right;	background: #7f7f7f;}

.typo-light h1, 
.typo-light h2, 
.typo-light h3, 
.typo-light h4, 
.typo-light h5, 
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{	color: #fff;}

ul.social-footer2 {	margin: 0;padding: 0;	width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block;	height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}
.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
-webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-webkit-transition: all 250ms ease-in-out 0s;
-moz-transition: all 250ms ease-in-out 0s;
-ms-transition: all 250ms ease-in-out 0s;
-o-transition: all 250ms ease-in-out 0s;
transition: all 250ms ease-in-out 0s;

}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg_body">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/salir') ?>"><strong>Salir</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>