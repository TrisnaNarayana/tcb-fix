<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <title>Tali Cahaya Buana</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?=base_url().'assets/cms/images/favicon.png'?> />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet'
        type='text/css'>
    <link rel=" stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/clear.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/common.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/font-awesome.min.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/carouFredSel.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/prettyPhoto.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/sm-clean.css "?>' />
    <link rel="stylesheet " href="<?=base_url(). 'assets/cms/css/flexslider.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/cms/css/semantic.min.css'?>">
    <link rel="stylesheet" type="text/css" href='<?=base_url()."assets/cms/style.css"?>' />

    <script src="<?=base_url().'assets/cms/js/jquery.js'?>"></script>

    <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

</head>

<body class="single-portfolio">

    <!-- Preloader Gif -->
    <table class="doc-loader">
        <tr>
            <td>
                <img src="<?=base_url().'assets/cms/images/tcb_loading.gif'?>   " alt="Loading..." />
            </td>
        </tr>
    </table>

    <!-- Menu -->
    <div class="menu-wrapper center-relative">
        <nav id="header-main-menu">
            <div class="mob-menu">MENU</div>
            <ul class="main-menu sm sm-clean">
                    <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#services">Solutions</a>
                        </li>
                        <li>
                            <a href="#portfolio">Product</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#news">Information</a>
                        </li>
                        <li>
                            <a href="#video">Video</a>
                        </li>
                        <li>
                            <a href="#skills">Partner</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
            </ul>
        </nav>
    </div>



    <article id="portfolio-1" class="section portfolio">
        <div class="center-relative content-1170">
            <div class="entry-content">
                <div class="content-wrap relative">
                    <a class="absolute x-close" href="<?=base_url().'Welcome'?>">
                        <img src="<?=base_url().'assets/cms/images/icon_x.svg'?>" alt="Close">
                    </a>

                    <div class="one margin-0">
                        <img src="<?=base_url().'assets/cms/demo-images/banner-product.png'?>" alt="">
                    </div>
                    <div class="clear"></div>
                    <?php $no = 1 ; if($data) {
                    foreach($data as $d) { 
                    $nomor = $no++;
                    if($nomor % 2 == 0) { ?>

                    <div class="one_half margin-0 hover_image">
                        <img class="image_product" src="<?=base_url().'img/product/'.$d['foto_product']?>" alt="">
                        <div class="overlay_product">
                            <div class="text_product"><?=$d['nama_product']?></div>
                        </div>
                    </div>
                    <?php } else if($nomor %2 != 0) { ?>
                    <div class="one_half last margin-0 hover_image">
                        <img class="image_product" src="<?=base_url().'img/product/'.$d['foto_product']?>" alt="">
                        <div class="overlay_product">
                            <div class="text_product"><?=$d['nama_product']?></div>
                        </div>
                    </div>
                    <?php } } }?>
                   
                </div>
            </div>
            <div class="clear"></div>
        </div>



        <!-- Footer -->
        <footer>
            <div class="footer content-1170 center-relative">
                <ul>
                    <li class="copyright-footer">
                    © 2018 All rights reserved. | Tali Cahaya Buana
                    </li>
                </ul>
            </div>
        </footer>
    </article>




    <!--Load JavaScript-->
    <script type="text/javascript" src="<?=base_url().'assets/cms/js/jquery.js'?>"></script>
    <script type='text/javascript' src="<?=base_url().'assets/cms/js/jquery.flexslider.js'?>"></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.sticky-kit.min.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.smartmenus.min.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.sticky.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.dryMenu.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/isotope.pkgd.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.carouFredSel-6.2.0-packed.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.mousewheel.min.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.touchSwipe.min.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.easing.1.3.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/imagesloaded.pkgd.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/jquery.prettyPhoto.js"?>'></script>
    <script type='text/javascript' src='<?=base_url()."assets/cms/js/main.js"?>'></script>
    <script src="<?=base_url().'assets/cms/js/semantic.min.js'?>"></script>
</body>

</html>