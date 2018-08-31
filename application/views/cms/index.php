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


    <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

</head>
<?php $setting=$this->MModel->get("select * from profile where id_profile='1'"); ?>
<?php $deskripsi=$this->MModel->get("select * from deskripsi where id_deskripsi='1'"); ?>
<?php $video=$this->MModel->get("select * from video where id_video='1'"); ?>

<body>

    <!-- Preloader Gif -->
    <table class="doc-loader">
        <tr>
            <td>
                <img src="<?=base_url().'assets/cms/images/tcb_loading.gif'?>" alt="Loading..." />
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

    <!-- Home -->
    <div class="flexslider">
        <ul class="slides">
            <?php $data=$this->MModel->getData("select * from slider where tampilkan='Y'");
        if($data){
        foreach($data as $slider) { ?>
            <li>
                <div id="home" class="section intro-page" style="background-image:url('<?=base_url().'img/slider/'.$slider['image']?>');">
                    <div class="block content-1170 center-relative center-text">
                        <center>
                            <img class="top-logo" src="<?=base_url().'assets/cms/demo-images/logo.png'?>" alt="Boxus" />
                        </center>
                        <br>
                        <h1 class="big-title">Tali Cahaya Buana
                            <span>-</span>
                        </h1>
                        <p class="title-desc">Support bright Technology today for a better tomorrow</p>
                    </div>
                </div>
            </li>
            <?php } } ?>
        </ul>
    </div>
    <!-- Service -->

    <div id="services" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <center>

                        <span>Solutions</span>
                    </center>
                </div>
                <!-- <h2 class="entry-title">Services</h2> -->
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <script>
                        var slider1_speed = "500";
                        var slider1_auto = "false";
                        var slider1_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative service slider1">
                        <a id="slider1_next" class="image_slider_next" href="#"></a>

                        <ul id="slider1" class="image-slider slides">
                            <?php $no=1; $solution=$this->MModel->getData("select * from sub_kategori order by RAND() limit 4"); ?>
                            <li>
                                <?php if($solution) { 
                            foreach ($solution as $s ) { ?>
                                <div class="service-holder ">
                                    <!-- <img src="demo-images/icon_03.png" alt=""> -->
                                    <div class="service-content-holder">
                                        <div class="service-title">
                                            <?=$s['nama_sub_kategori']?>
                                        </div>
                                        <div class="service-content">
                                            <?=$s['deskripsi_sub_kategori']?>
                                                <br />
                                                <br>
                                                <div class="ui animated button" tabindex="0">
                                                    <div class="visible content">Read More</div>
                                                    <div class="hidden content">
                                                        <i class="right arrow icon"></i>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } }?>
                            </li>
                            <li>

                                <div class="service-holder ">
                                    <div class="row">
                                        <?php $no=1; $servis=$this->MModel->getData("select * from servis");
					if($servis){
					foreach($servis as $s){
					
					$no_hasil=$no++;
					if($no_hasil % 2 == 0) { 
						$id_servis=$s['id_servis'];?>
                                        <div class="col-md-6">
                                            <div id="button">
                                                <ul>
                                                    <li class="top">
                                                        <a class="btn btn-data-center form-control btn-md"><?=$s['nama_servis']?> <i class="fa fa-angle-down pull-right"></i></a>
                                                    </li>
                                                    <?php $noo=1; $sub=$this->MModel->getData("select * from sub_kategori where id_servis='$id_servis'");
									if($sub){
									foreach($sub as $b) { 
									$hasil_no=$noo++; 
									if($hasil_no==1) { ?>
                                                    <li class="item">
                                                        <div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"
                                                            href="javascript:void()" onclick="showDeskripsi(<?=$b['id_sub_kategori']?>)"><?=$b['nama_sub_kategori']?></a>
                                                    </li>
                                                    <?php } else { ?>
                                                    <li class="item">
                                                        <a class="btn btn-data-center-sub form-control btn-md" href="javascript:void()" onclick="showDeskripsi(<?=$b['id_sub_kategori']?>)"><?=$b['nama_sub_kategori']?></a>
                                                    </li>
                                                    <?php } } } ?>

                                                </ul>

                                            </div>
                                        </div>
                                        <?php } if($no_hasil % 2 != 0 ) { 
						$id_servis=$s['id_servis']; ?>
                                        <div class="col-md-6">
                                            <div id="button">
                                                <ul>
                                                    <li class="top">
                                                        <a class="btn btn-data-center form-control btn-md"><?=$s['nama_servis']?> <i class="fa fa-angle-down pull-right"></i></a>
                                                    </li>
                                                    <?php $noo=1; $sub=$this->MModel->getData("select * from sub_kategori where id_servis='$id_servis'");
									if($sub){
									foreach($sub as $b) { 
									$hasil_no=$noo++; 
									if($hasil_no==1) { ?>
                                                    <li class="item">
                                                        <div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"
                                                            href="javascript:void()" onclick="showDeskripsi(<?=$b['id_sub_kategori']?>)"><?=$b['nama_sub_kategori']?></a>
                                                    </li>
                                                    <?php } else { ?>
                                                    <li class="item">
                                                        <a class="btn btn-data-center-sub form-control btn-md" href="javascript:void()" onclick="showDeskripsi(<?=$b['id_sub_kategori']?>)"><?=$b['nama_sub_kategori']?></a>
                                                    </li>
                                                    <?php } } } ?>
                                                </ul>

                                            </div>
                                        </div>
                                        <?php } } }?>

                                    </div>
                                </div>

                            </li>

                        </ul>
                        <div class="clear"></div>
                    </div>

                </div>
            </div>
            <div class='clear'></div>
        </div>
    </div>


    <!-- Portfolio -->
    <div id="portfolio" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <center>
                        <span>Product</span>
                    </center>
                </div>
                <!-- <h2 class="entry-title">Product</h2> -->
            </div>
            <div class="section-content-holder portfolio-holder left">
                <div class="grid" id="portfolio-grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item element-item p_one">
                        <a href="single-portfolio.html">
                            <img src="<?=base_url().'assets/cms/demo-images/gambar1.jpg'?>" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="<?=base_url().'assets/cms/images/icon_post.svg'?>" alt="">
                                    </p>
                                    <p class="portfolio-text">Harness</p>
                                    <p class="portfolio-sec-text">Cable</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $product=$this->MModel->getData("select * from product order by RAND() limit 4");
                    if($product) { 
                    foreach($product as $p) { ?>
                    <div class="grid-item element-item p_one_half">
                        <a href="single-portfolio2.html">
                            <img src="<?=base_url().'img/product/'.$p['foto_product']?>" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="<?=base_url().'assets/cms/images/icon_post.svg'?>" alt="">
                                    </p>
                                    <p class="portfolio-text">
                                        <?=$p['nama_product']?>
                                    </p>
                                    <p class="portfolio-sec-text">Cable</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } } ?>
                </div>

                <div class="clear"></div>
                <div class="block portfolio-load-more-holder">
                    <a  href="<?=base_url().'Welcome/product'?>" class="more-posts">LOAD MORE</a>
                    <img src="<?=base_url().'assets/cms/images/icon_infinity.svg'?>" alt="Load more">
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>


    <!-- About -->
    <div id="about" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <center>
                        <span>About</span>
                    </center>
                </div>
                <!-- <h2 class="entry-title">CRAFTERS</h2> -->
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <div class="one_half ">
                        <span style="color: #e54b76;">
                            <strong>VISION</strong>
                        </span>
                        <br>
                        <?=$setting->visi?>
                    </div>
                    <div class="one_half last ">
                        <span style="color: #e54b76;">
                            <strong>MISION</strong>
                        </span>
                        <br>
                        <?=$setting->misi?>
                            <br>
                    </div>
                    <div class="clear"></div>
                    <br>
                    <br>
                </div>

                <div class="full-width ">
                    <script>
                        var aboutImage_speed = "500";
                        var aboutImage_auto = "false";
                        var aboutImage_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative img aboutImage">
                        <a id="aboutImage_next" class="image_slider_next" href="#"></a>
                        <div class="caroufredsel_wrapper">
                            <ul id="aboutImage" class="image-slider slides">
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about_img_06.jpg'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about_img_04.jpg'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/building.jpg'?>" alt="">
                                </li>

                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <script>
                        var team1_speed = "500";
                        var team1_auto = "false";
                        var team1_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative team team1">
                        <a id="team1_next" class="image_slider_next" href="#"></a>
                        <div class="caroufredsel_wrapper">
                            <ul id="team1" class="image-slider slides">
                                <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">Tali Cahaya Buana</h4>
                                        <div class="member-content">
                                            <?=$setting->deskripsi?>
                                                <br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="<?=base_url().'assets/cms/demo-images/tcb.png'?>" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li>

                                <!-- <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">John Doe</h4>
                                        <p class="member-position">SEO MASTER</p>
                                        <div class="member-content">
                                            Eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est lorem adipisicing elit,
                                            sed do eiusmod tempor polor sit amet consectetur.
                                            <br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="<?=base_url().'assets/cms/demo-images/about_img_02.jpg'?>" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">John Doe</h4>
                                        <p class="member-position">PSD GURU</p>
                                        <div class="member-content">
                                            Eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est lorem adipisicing elit,
                                            sed do eiusmod tempor polor sit amet consectetur.
                                            <br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="<?=base_url().'assets/cms/demo-images/about_img_03.jpg'?>" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- end full-width div -->

            </div>
            <div class="clear"></div>
        </div>
    </div>


    <!-- News -->
    <div id="news" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <span>
                        <center>
                            Information
                        </center>
                    </span>
                </div>
                <!-- <h2 class="entry-title">STORIES</h2> -->
            </div>
            <div class="section-content-holder left">
                <div class="content-wrapper">
                    <div class="blog-holder block center-relative">
                        <?php $no=1; $info=$this->MModel->getData("select * from info");
                    if($info) {
                    foreach($info as $i) { ?>
                        <article class="relative blog-item-holder center-relative">
                            <div class="num">
                                <?=$no++?>
                            </div>
                            <div class="info">
                                <div class="author vcard "></div>
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <br>
                                            <button class="positive ui button" id="#" onclick="showModal('<?=$i['swf']?>')">Launch</button>
                                        </li>
                                        <li>
                                            <br>
                                            <a target="_blank" class="negative ui button" href="<?=base_url().'img/info/'.$i['pdf']?>" id="modallaunch">Download</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="#"><?=$i['judul_info']?></a>
                            </h3>
                            <div class="clear"></div>
                        </article>
                        <?php } } ?>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="block content-1170 center-relative">
            <div class="extra-content-left">
                <!-- <script> var text1_speed = "500";
                    var text1_auto = "false";
                    var text1_hover = "true";
                </script>
                <div class="text1 testimonial-slider-holder slider-holder">
                    <div class="caroufredsel_wrapper">
                        <ul id="text1" class="slides testimonial">
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">The difference between a Designer and Developer, when it
                                        comes to design skills, is the difference between shooting a bullet and throwing
                                        it.
                                    </p>
                                    <p class="testimonial-author">SCOTT HANSELMAN</p>
                                </div>
                                <div class="clear">
                                </div>
                            </li>
                            <li style="width: 500px;">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">To create anything–whether a short story or a magazine profile
                                        or a film or a sitcom–is to believe, if only momentarily, you are capable of magic.</p>
                                    <p class="testimonial-author">TOM BISSEL</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">As a profession, graphic designers have been shamefully remiss
                                        or ineffective about plying their craft for social or political betterment.</p>
                                    <p class="testimonial-author">STEVEN HELLER</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <a id="text1_next" class="carousel_text_next" href="#"></a>
                    <div class="clear"></div>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Video -->
    <div id="video" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <span>
                        <center>
                            Video
                        </center>
                    </span>
                </div>
                <!-- <h2 class="entry-title">OFFER</h2> -->
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <?=$deskripsi->desc_data_center?>
                        <div class="clear"></div>
                        <br>
                        <br>
                </div>
                <div class="full-width ">
                    <video width="100%" controls>
                        <source src="<?=base_url().'img/video/'.$video->video?>" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="clear"></div>
        </div>


        <div class="extra-content-full-width">
            <script>
                var fwslider1_speed = "500";
                var fwslider1_auto = "false";
                var fwslider1_hover = "true";
                var fwslider1_start = "0";
                var fwslider1_width = "400";
                var fwslider1_num = "5";
            </script>
            <div class="fwslider1 fw-image-slider-holder list_carousel relative">
                <div class="caroufredsel_wrapper">
                    <ul id="fwslider1" class="fw-image-slider">
                        <?php $mitra=$this->MModel->getData("select * from mitra"); 
                    if($mitra){
                    foreach($mitra as $m) {?>
                        <li class="fw-slide">
                            <img src="<?=base_url().'img/mitra/'.$m['foto_mitra']?>" alt="">
                            <p class="fw-slide-text">
                                <?=$m['nama_mitra']?>
                            </p>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
                <div class="clear"></div>
                <div id="fwslider1_fw_image_slide_pager" class="fw_carousel_pagination"></div>
            </div>
            <a id="fwslider1_fw_next" class="carousel_fw_next" href="#"></a>
            <div class="clear"></div>
        </div>
    </div>


    <!-- Skills -->

    <div id="skills" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <center>
                        <span>Partner</span>
                    </center>
                </div>
                <!-- <h2 class="entry-title">EXPERTISE</h2> -->
            </div>
            <div class="section-content-holder left">
                <div class="content-wrapper">
                    <div class="extra-content-full-width">
                        <script>
                            var fwslider1_speed = "500";
                            var fwslider1_auto = "false";
                            var fwslider1_hover = "true";
                            var fwslider1_start = "0";
                            var fwslider1_width = "400";
                            var fwslider1_num = "5";
                        </script>
                        <div class="fwslider1 fw-image-slider-holder list_carousel relative">
                            <div class="caroufredsel_wrapper">
                                <ul id="fwslider1" class="fw-image-slider">
                                    <?php if($mitra){
                                    foreach($mitra as $m) {?>
                                    <li class="fw-slide">
                                        <li class="fw-slide">
                                            <a href="<?=$m['link_mitra']?>"><img src="<?=base_url().'img/mitra/'.$m['foto_mitra']?>"
                                                    alt=""></a>

                                        </li>
                                    </li>
                                    <?php } }?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div id="fwslider1_fw_image_slide_pager" class="fw_carousel_pagination"></div>
                        </div>
                        <a id="fwslider1_fw_next" class="carousel_fw_next" href="#"></a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <span>
                        <center>
                            Contact
                        </center>
                    </span>
                </div>
                <!-- <h2 class="entry-title">Contact</h2> -->
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <div class="one_half ">
                        <div class="ft-panel">
                            <div class="head-ft-panel">
                                <span style="color: #e54b76;">
                                    <strong>
                                        <i class="fa fa-map-marker"></i>
                                        Address</strong>
                                </span>
                            </div>
                            <hr class="hr-color">
                            <div class="body-ft-panel">
                                <?=$setting->alamat?>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <img src="<?=base_url().'assets/cms/demo-images/logo_TCB.png'?>" style="width: 150px;" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="one_half last">
                        <div class="ft-panel">
                            <div class="head-ft-panel">
                                <span style="color: #e54b76;">
                                    <strong>
                                        <i class="fa fa-address-book"></i>
                                        Get In Touch</strong>
                                </span>
                            </div>
                            <hr class="hr-color">
                            <div class="body-ft-panel">
                                <p>
                                    <center>
                                        <a href="tel:<?=$setting->telepon?>" class="circular ui huge icon button">
                                            <i class="icon tty"></i>
                                        </a>
                                    </center>
                                </p>
                                <center>
                                    <p>
                                        <?=$setting->telepon?>
                                    </p>
                                </center>
                                <center>
                                    <p>
                                        <center>
                                            <a href="mailto:<?=$setting->email?>" class="circular ui huge icon button">
                                                <i class="icon envelope"></i>
                                            </a>
                                        </center>
                                    </p>
                                    <p>
                                        <?=$setting->email?>
                                    </p>
                                </center>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="full-width">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6339013182987!2d107.61740291436742!3d-6.934284894989952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e887161ff37b%3A0xd2022ea1b54061e0!2sTali+Cahaya+Buana!5e0!3m2!1sid!2sid!4v1535619159227"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </div>
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
    <script>

        jQuery(function ($) {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
                smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
                startAt: 0,
                directionNav: false,               //Integer: The slide that the slider should start on. Array notation (0 = first slide)
                slideshow: true,
                slideshowSpeed: 5000,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
            $('#modallaunch').click(function () {
                // $('.ui.modal')
                //     .modal('setting', 'closable', false)
                //     .modal('show');
                $('.ui.modal')
                    .modal({
                        closable: false,
                        onDeny: function () {
                            window.alert('Wait not yet!');
                            return false;
                        },
                        onApprove: function () {
                            window.alert('Approved!');
                        }
                    })
                    .modal('show')
                    ;
            });
            $.fn.showDeskripsi = function (id) {
                $.ajax({
                    url: "<?=base_url().'Welcome/getSubServis/'?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function (data) {
                        $('.modal-title').text(data.nama_sub_kategori);
                        $('#img_ket').attr('src', "<?=base_url().'img/servis/sub/'?>" + data.img_sub);
                        $('#deskripsi').html(data.deskripsi_sub_kategori);
                        $('#modalku').modal('show');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            };

        });

    </script>

    <script type="text/javascript">
 
        function showModal(swf)
        {
            var url = "<?=base_url().'img/info/'?>"+swf;
            <!-- alert(url); -->
            jQuery(function ($) {
            $('#magazine').attr('src',url);
             $('.ui.modal').modal('show');
            });
            
        }
    </script>

    <div class="ui modal">
        <i class="close icon"></i>
        <div class="header">
            Magazine
        </div>
        <div class="image content">
            <div>
                <object style="width:auto" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,18,0"
                    id="fullscreen" align="middle">
                    <param name="allowFullScreen" value="true" />
                    <param name="movie" value="fullscreen.swf" />
                    <param name="bgcolor" value="#fff" />
                    <embed id="magazine" width="100%" src="<?=base_url().'img/Magazine.swf'?>" allowFullScreen="true" bgcolor="#333333" name="fullscreen" align="middle"
                        type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                </object>
            </div>
        </div>
        <div class="actions">
            <div class="ui button">Cancel</div>
            <div class="ui button">OK</div>
        </div>
    </div>




</body>

</html>