<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <title>Tali Cahaya Buana</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?=base_url().'assets/cms/images/favicon.png'?>" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel=" stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/clear.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/common.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/font-awesome.min.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/carouFredSel.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/prettyPhoto.css "?>' />
    <link rel="stylesheet " type="text/css " href='<?=base_url()."assets/cms/css/sm-clean.css "?>' />
    <link rel="stylesheet " href="<?=base_url(). 'assets/cms/css/flexslider.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/cms/css/semantic.min.css'?>">
    <link rel="stylesheet" type="text/css" href='<?=base_url()."assets/cms/style.css"?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url()."assets/cms/css/contact.css"?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"?>' />


    <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

</head>
<?php $setting=$this->MModel->get("select * from profile where id_profile='1'"); ?>
<?php $deskripsi=$this->MModel->get("select * from deskripsi where id_deskripsi='1'"); ?>
<?php $video=$this->MModel->get("select * from video where id_video='1'"); ?>
<?php $about=$this->MModel->get("select * from about_swf where id_about='1'"); ?>

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
                    <a href="#video">Video</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Slider Home -->
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
                                        <div class="text text-concat ellipsis">
                                                <?=$s['deskripsi_sub_kategori']?>
                                        </div>
                                     
                                       
                                        <br />
                                        <br>
                                        <div class="ui button" tabindex="0">
                                            <div onclick="showDeskripsi('<?=$s['id_sub_kategori']?>')" class="visible content">Read
                                                More
                                            </div>
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
					?>

<div class="ui list">
  <div class="item">
    <i class="folder icon"></i>
    <div class="content">
      <div class="header"><?=$s['nama_servis']?></div>
      <div class="list">
      <?php 
          $id = $s['id_servis'];
          $subservice = $this->MModel->getData("select * from sub_kategori where id_servis=$id");
          foreach($subservice as $b){?>
        <div class="item">
          <i class="folder icon"></i>
          <div class="content">
            <div class="header"><a href="javascript:void(0);" onClick="showDeskripsi(<?=$b['id_sub_kategori'];?>);"><?=$b['nama_sub_kategori']?></a></div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
                    <?php } } ?>
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
            </div>
            <div class="section-content-holder portfolio-holder left">
                <div class="grid" id="portfolio-grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item element-item p_one">
                        <a href="javascript:void(0);">
                            <img src="<?=base_url().'assets/cms/demo-images/banner-product-sm.png'?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="grid" id="portfolio-grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item element-item p_one">
                        <a href="<?=base_url().'Welcome/product'?>">
                            <img src="<?=base_url().'assets/cms/demo-images/banner-product.png'?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
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
                        <span class="judul">About</span>
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
                        var aboutImage_speed = "1000";
                        var aboutImage_auto = "true";
                        var aboutImage_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative img aboutImage">
                        <a id="aboutImage_next" class="image_slider_next" href="#"></a>
                        <div class="caroufredsel_wrapper">
                            <ul id="aboutImage" class="image-slider slides">
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about1.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about2.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about3.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about4.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about5.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about6.png'?>" alt="">
                                </li>
                                <li>
                                    <img src="<?=base_url().'assets/cms/demo-images/about/about7.png'?>" alt="">
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
                                        <img style="padding:50px; margin-top:100px;" src="<?=base_url().'assets/cms/demo-images/logo_TCB.png'?>"
                                            alt="">
                                        <center>
                                            <h3>Company Profile</h3>

                                            <button class="ui primary button" onclick="showComPro()">Launch</button>
                                        </center>


                                        </center>
                                    </div>
                                    <div class="clear"></div>
                                </li>
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
    <!-- <div id="news" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <span>
                        <center>
                            Information
                        </center>
                    </span>
                </div>
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
            </div>
        </div>
    </div> -->

    <!-- Video -->
    <div id="video" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <span>
                        <center>
                            Video
                        </center>
                    </span>
                </div>
                <!-- <h2 class="entry-title">OFFER</h2> -->
            </div>
            <div class="section-content-holder left">
                <div class="content-wrapper">
                    <?=$deskripsi->desc_data_center?>
                    <div class="clear"></div>
                    <br>
                    <br>
                </div>
                <div class="full-width ">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?=$video->video?>?rel=0&amp;showinfo=0"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
                                <img src="<?=base_url().'assets/cms/demo-images/logo_TCB.png'?>" style="width: 150px;"
                                    alt="">

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
                    .modal('show');
            });
        });

    </script>

    <script type="text/javascript">

        // $('#formC').on('submit', function (e) {
        //     $('#btnSave1').text('Menyimpan...');
        //     $('#btnSave1').attr('disabled', true);
        //     var url;
        //     if (save_method == 'add') {
        //         url = "<?=base_url().'Client/add';?>";
        //     } else {
        //         url = "<?=base_url().'Client/update';?>";
        //     }
        //     e.preventDefault();
        //     $.ajax({
        //         url: url,
        //         method: "POST",
        //         data: new FormData(this),
        //         contentType: false,
        //         cache: false,
        //         processData: false,
        //         success: function (data) {
        //             if (save_method == 'add') {
        //                 $('#addClient').modal('hide');
        //                 swal({
        //                     title: 'Sukses!',
        //                     text: 'Data berhasil di simpan',
        //                     type: 'success'
        //                 },
        //                     function () {
        //                         location.reload();
        //                     });
        //             }
        //             else {
        //                 $('#addClient').modal('hide');
        //                 swal({
        //                     title: 'Sukses!',
        //                     text: 'Data berhasil di ubah',
        //                     type: 'success'
        //                 },
        //                     function () {
        //                         location.reload();
        //                     });
        //             }
        //         }
        //     });
        // });

        function showModal(swf) {
            var url = "<?=base_url().'img/info/'?>" + swf;
            jQuery(function ($) {
                $('#magazine').attr('src', url);
                $('#modal').modal('show');
            });

        }

        function showComPro() {
            var url = "<?=base_url().'img/profile/'.$about->swf?>";
            jQuery(function ($) {
                $('#magazine').attr('src', url);
                $('#compro').modal('show');
            });

        }

        function addClient() {
            save_method = 'add';
            $('#formJ')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('label').hide();
            $('#addClient').modal('show');
            $('.modal-title').text('Add Client...');
        }

        function showDeskripsi(id) {
            jQuery(function ($) {
                $.ajax({
                    url: "<?=base_url().'Welcome/getSubServis/'?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function (data) {
                        $('#title').html(data.nama_sub_kategori);
                        $('#img_ket').attr('src', "<?=base_url().'img/servis/sub/'?>" + data.img_sub);
                        $('#deskripsi').html(data.deskripsi_sub_kategori);
                        jQuery(function ($) {
                            $('#desc').modal('show');
                        });
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            });





        }
    </script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <!-- <div class="ui modal" id="desc">
        <i class="close icon"></i>
        <div id="title" class="header"></div>
        <div class="image content">
            <div class="ui huge image">
                <img id="img_ket" src="/images/avatar/large/chris.jpg">
            </div>
        </div>
        <div class="description">
                <p id="deskripsi">Is it okay to use this photo?</p>
        </div>
        <div class="actions">
            <div class="ui black deny button">
                Confirm
            </div>
        </div>
    </div> -->

    <div class="ui basic modal" id="desc">

        <div class="content">
            <img src="" id="img_ket" width="100%" alt="">
            <p id="deskripsi">Your inbox is getting full, would you like us to enable automatic archiving of old
                messages?</p>
        </div>
        <div class="actions">
            <div class="ui green ok inverted button">
                <i class="checkmark icon"></i>
                Confirm
            </div>
        </div>
    </div>


    <div class="ui basic modal" id="compro">
        <div class="content">
            <object style="width:100%" height="100%" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,18,0"
                id="fullscreen" align="middle">
                <param name="allowFullScreen" value="true" />
                <param name="movie" value="fullscreen.swf" />
                <param name="bgcolor" value="#fff" />
                <embed id="magazine" width="100%" height="100%" src="<?=base_url().'img/Magazine.swf'?>"
                    allowFullScreen="true" bgcolor="#333333" name="fullscreen" align="middle" type="application/x-shockwave-flash"
                    pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        </div>
        <div class="actions">
            <div class="ui green ok inverted button">
                <i class="checkmark icon"></i>
                Confirm
            </div>
        </div>
    </div>

    <div class="menu-button"><i class="share alternate icon"></i>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=628988600980&text=Hai Tali Cahaya Buana"><i class="fa fa-whatsapp"></i></a>
        <a href="mailto:<?=$setting->email?>"><i class="fa fa-envelope"></i></a>
        <a href="tel:<?=$setting->telepon?>"><i class="fa fa-phone"></i> </a>
    </div>




</body>

</html>