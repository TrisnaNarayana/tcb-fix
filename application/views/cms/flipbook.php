<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Tali Cahaya Buana</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/flip.css">
</head>
<body style="background-color: rgb(20, 51, 111);
background-image: url(<?=base_url();?>assets/cms/demo-images/book.png);
background-repeat: no-repeat;
background-position: center top;
background-position-x: center;
background-position-y: top;
background-size: 100% auto;">
<table class="doc-loader">
        <tr>
            <td>
                <img src="<?=base_url().'assets/cms/images/tcb_loading.gif'?>" alt="Loading..." />
            </td>
        </tr>
    </table>
<div class="container" style="margin-top:15%;">
    
    
    <div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fa fa-arrow-left"></i>
                        <h3>Back</h3>
                    </div>
                </div>
                <div class="service-content">
                    <a href="<?=site_url('Welcome/kategori');?>" class="btn btn-primary btn-lg" style="margin-top:30%;">Back</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-eye"></i>
                        <h3>View</h3>
                    </div>
                </div>
                <div class="service-content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, debitis.</p>
                <a href="#view-id" class="btn btn-primary btn-lg" data-toggle="modal" style="margin-top:5%;">Launch</a>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-download"></i>
                        <h3>Download</h3>
                    </div>
                </div>
                <div class="service-content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, debitis.</p>
                <a href="#" class="btn btn-primary btn-lg" style="margin-top:5%;">Contact Me</a>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                        <i class="fa fa-home"></i>
                        <h3>Home</h3>
                    </div>
                </div>
                <div class="service-content">
                <a href="<?=site_url('Welcome');?>" class="btn btn-primary btn-lg" style="margin-top:30%;">Home</a>

                </div>
            </div>
        </div>
    </div>
</div>
</body>


<div class="modal fade" id="view-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
