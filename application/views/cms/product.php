<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/components/grid.min.css"> -->
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/semantic.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/style.css">
    <link rel="shortcut icon" href="<?=base_url().'assets/cms/images/favicon.png'?>" />
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <title>Merk / Perusahaan : TCB</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?=base_url();?>assets/swt/sweetalert.css">

    

 
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
    <style>
  
    </style>
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
                    $no=1; ?>
                    <div class="duo column row">
                        <?php
                        $no1=1;
                        foreach($data as $d) { 
                        $id_merk=$d['id_merk'];
                        $cari=$this->MModel->get("select * from kategori a inner join product b on b.id_kategori=a.id_kategori where id_merk='$id_merk'") ; ?>
                        <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                                <div class="block x4" onclick="window.location='<?=site_url('welcome/kategori/'.$d['id_merk'])?>';" style="background:url(<?=base_url().'img/merk/'.$d['img_merk'];?>);background-size:cover;background-repeat:no-repeat;background-position:center;">
                                </div>
                                <div class="middle">
                            <?php if($cari) { ?>
                                <div class="text"><a href="<?=site_url('welcome/kategori/'.$d['id_merk'])?>">Click For View Brochure</a></div>
                            <?php } else { ?>
                                <div class="text bg-danger"><a href="<?=site_url('welcome/kategori/'.$d['id_merk'])?>">No Data</a></div>
                            <?php } ?>
                        </div>
                        </div>
                        <?php 
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<?php if($this->session->flashdata('nodata')){ ?>
    <script>
    swal("No Data", "Data not found", "error");
    </script>
<?php } ?>
</html>