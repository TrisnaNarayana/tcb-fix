<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/components/grid.min.css"> -->
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/semantic.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <title>Merk / Perusahaan : TCB</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body style="background-color: rgb(20, 51, 111);
background-image: url(<?=base_url();?>assets/cms/demo-images/product.png);
background-repeat: no-repeat;
background-position: center top;
background-position-x: center;
background-position-y: top;
background-size: 100% 100%;">
<table class="doc-loader">
        <tr>
            <td>
                <img src="<?=base_url().'assets/cms/images/tcb_loading.gif'?>" alt="Loading..." />
            </td>
        </tr>
    </table>
    <div class="background">
        <div class="ui container">
            <div class="content">
                <div class="ui grid">
                    <div class="one column row">
                        <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">
                            <div class="block x" onclick="window.location='<?=site_url('welcome')?>';">
                                <a href="<?=site_url('Welcome');?>">
                                    <i class="reply icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if($data) { 
                    $no=1;
                    foreach($data as $d) { 
                    $nomor=$no++; ?>
                    <div class="one column row">
                        <?php if($nomor==1) { ?>
                        <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">
                            <div class="block x1" onclick="window.location='<?=site_url('welcome/kategori/'.$d['id_merk'])?>';" style="background:url(<?=base_url().'img/merk/'.$d['img_merk'];?>);background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="duo column row">
                    <?php
                        $no1=1;
                        foreach($data as $d) { 
                        $nomor1=$no1++; ?>
                        <?php if($nomor1>=2) { ?>
                            <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                                <div class="block x4" onclick="window.location='<?=site_url('welcome/kategori/'.$d['id_merk'])?>';" style="background:url(<?=base_url().'img/merk/'.$d['img_merk'];?>);background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                            </div>
                        <?php } 
                        }?>
                    </div>
                    <?php } ?>
                    <div class="one column row">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                        <?=$page?>
                    
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</body>

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>