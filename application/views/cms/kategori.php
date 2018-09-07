<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category <?=$detail->nama_merk?></title>
    <link rel="shortcut icon" href="<?=base_url().'assets/cms/images/favicon.png'?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/kategori.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/semantic.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/breadcrumb.css">


</head>

<body style="background-color: rgb(20, 51, 111);
background-image: url(<?=base_url();?>assets/cms/demo-images/bg-product.png);
background-repeat: no-repeat;
background-position: center top;
background-position-x: center;
background-position-y: top;
background-size: 100% auto;">
    <div class="wrapper">


        <div class="page__section">
            <ul class="breadcrumbs breadcrumbs_type5">
            <li class="breadcrumbs__item"><a href="<?=base_url().'Welcome'?>" class="breadcrumbs__element">Home</a></li>
            <li class="breadcrumbs__item"><a href="<?=base_url().'Welcome/product'?>" class="breadcrumbs__element">Product</a></li>
            <li class="breadcrumbs__item breadcrumbs__item_active"><span class="breadcrumbs__element"><?=$detail->nama_merk?></span></li>
            </ul>
        </div>   
        <br>
        <div class="cols">
        <?php if($data) {
        foreach($data as $d) { ?>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(<?=base_url().'img/kategori/'.$d['icon'];?>)">
                        <div class="inner">
                            <p><?=$d['nama_kategori']?></p>
                            <span><?=$detail->nama_merk?></span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p><?=$d['deskripsi']?></p>
                            
                                <p><a href="<?=site_url('welcome/flipbook/'.$d['id_kategori'])?>" class="btn btn-kategori"><i class="arrow right icon"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } } ?>
        </div>
    </div>
</body>

</html>