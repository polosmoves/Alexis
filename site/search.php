<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/superfish.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    
    <script src="js/jquery.ui.totop.js"></script>

    <script src="search/search.js"></script>
  <!--[if lt IE 8]>
      <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
  <![endif]-->
  <!--[if lt IE 9]>
     
    <link rel="stylesheet" href="css/ie.css" >
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>
<body>    

<!--==============================header=================================-->

<header class="clearfix">
    <div class="container">
        <div class="row">
            <div class="grid_12 h-top">
                <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
                <div class="fright">
                    <nav>
                        <ul class="sf-menu">
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="#">Vestibulum iaculis</a></li>
                                    <li><a href="#">Fusce euismod conuat</a>
                                        <ul>
                                            <li><a href="#">Pellentesque sed</a></li>
                                            <li><a href="#">Aliquam congue ferm</a></li>
                                            <li><a href="#">Mauris accum</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pellentesque</a></li>
                               </ul>
                            </li>
                            <li><a href="index-1.html">About</a></li>
                            <li><a href="index-2.html">Products</a></li>
                            <li><a href="index-3.html">Sustainability</a></li>
                            <li><a href="index-4.html">News</a></li>
                            <li><a href="index-5.html">Contacts</a></li>
                        </ul>
                    </nav>
                    <form id="search1" class="search" action="search.php" method="GET">
                        <div>
                            <input type="text" name="s">
                            <a onClick="document.getElementById('search1').submit()" class="button1"><i class="fa fa-search"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

  <!--==============================content=================================-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2>Search result:</h2>
                <div id="search-results"></div>
            </div>
        </div>      
    </div>
</div> 
<!--==============================footer=================================-->
  
<footer>
    <div class="f-top">
        <div class="container">
            <div class="row">
                <div class="grid_3 w2">
                    <p class="title-5">Products</p>
                    <ul class="f-list">
                        <li><a href="#">Vestibulum</a></li>
                        <li><a href="#">Culis lacinia</a></li>
                        <li><a href="#">Proin dictum</a></li>
                        <li><a href="#">Fusce euismod</a></li>
                        <li><a href="#">Consequat</a></li>
                        <li><a href="#">Adipiscing elit</a></li>
                    </ul>
                    <p class="title-5">new Solutions</p>
                    <ul class="f-list">
                        <li><a href="#">Sed ut perspiciatis unde</a></li>
                        <li><a href="#">Omnis iste natus</a></li>
                    </ul>
                </div>
                <div class="grid_3 w2">
                    <p class="title-5">Technology</p>
                    <ul class="f-list">
                        <li><a href="#">Vatus error sivolu</a></li>
                        <li><a href="#">Tatem accus</a></li>
                    </ul>
                    <p class="title-5">Information</p>
                    <ul class="f-list">
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Reseller</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="grid_3 w2">
                    <p class="title-5">Company</p>
                    <ul class="f-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                    <p class="title-5">Follow us</p>
                    <ul class="f-list">
                        <li><a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i><span>RSS</span></a></li>
                    </ul>
                </div>
                <div class="grid_3 w2 b-address">
                    <p class="title-5">Contact</p>
                    <div class="address-1">
                        <div><span>Telephone:</span>   +1 959 603 6035</div>
                        <div><span>FAX:</span>    + 1 504 889 9898</div>
                        <div><span class="blue">E-mail: <a href="#">mail@demolink.org</a></span></div>
                    </div>
                    <p class="title-5">Headquarter</p>
                    <div>8901 Marmora Road <br>Glasgow, DO4 89GR.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row f-bot">
            <div class="grid_12">
                <div class="copyright"><a href="index.html" class="h-underline orange f-link"><span>neko.</span> CONSTRUCTION MATERIALS</a> &copy; <span id="copyright-year"></span> <a href="index-6.html" class="h-underline">Privacy policy</a></div>
                <ul class="f-ul-2">
                    <li><a href="#">Sed ut</a>  |</li>
                    <li><a href="#">Perspiciatis unde</a>  |</li>
                    <li><a href="#">Omnis iste natus</a>  |</li>
                    <li><a href="#">Sit voluptatem</a>  |</li>
                    <li><a href="#">Accusantium</a>  |</li>
                    <li><a href="#">Doloremque laudantium</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>