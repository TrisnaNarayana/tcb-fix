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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/cms/css/flip.css">
</head>

<body style="background-color: rgb(20, 51, 111);
background-image: url(<?=base_url();?>assets/cms/demo-images/book.png);
background-repeat: no-repeat;
background-position: center top;
background-position-x: center;
background-position-y: top;
background-size: 100% auto;">
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
                        <a href="<?=site_url('Welcome/kategori/'.$detail->id_merk);?>" class="btn btn-primary btn-lg" style="margin-top:30%;">Back</a>
                    </div>
                </div>
            </div>
            <?php if($data) { ?>
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
                        <a href="javascript:void(0)" onclick="addClient()" class="btn btn-primary btn-lg" style="margin-top:5%;">Download</a>

                    </div>
                </div>
            </div>
            <?php } else {?>
            <div class="col-md-6 col-sm-6">
                <div class="service-box ">
                    <div class="service-icon red">
                        <div class="front-content">
                            <i class="fa fa-error"></i>
                            <h3>No Data</h3>

                        </div>
                    </div>
                    <div class="service-content">
                        <p>There Is No Data</p>
                        <a href="<?=base_url().'Welcome/kategori/'.$detail->id_kategori?>" class="btn btn-primary btn-lg" style="margin-top:5%;">Back</a>
                    </div>
                </div>
            </div>
            <?php } ?>
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
                <h4 class="modal-title">
                    <?=$data->nama_product?>
                </h4>
            </div>
            <div class="modal-body">
                <?php if($data->swf != '#') { ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <object class="embed-responsive embed-responsive-16by9" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,18,0"
                        id="fullscreen" align="middle">
                        <param name="allowFullScreen" value="true" />
                        <param name="movie" value="fullscreen.swf" />
                        <param name="bgcolor" value="#fff" />
                        <embed src="<?=base_url().'img/product/'.$data->swf?>" allowFullScreen="true" bgcolor="#333333" name="fullscreen" align="middle"
                            type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    </object>
                </div>
                <?php } else {?>
                <div class="embed-responsive embed-responsive-16by9">

                    <iframe width='1000' height='800' src='<?=base_url().' img/product/ '.$data->pdf?>' frameborder='0' allowfullscreen></iframe>

                </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#formC').on('submit', function (e) {
            $('#btnSave1').text('Menyimpan...');
            $('#btnSave1').attr('disabled', true);
            var url;
            if (save_method == 'add') {
                url = "<?=base_url().'Client/add';?>";
            } else {
                url = "<?=base_url().'Client/update';?>";
            }
            e.preventDefault();
            $.ajax({
                url: url,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (save_method == 'add') {
                        $('#addClient').modal('hide');
                        swal({
                            title: 'Sukses!',
                            text: 'Data berhasil di simpan',
                            type: 'success'
                        },
                            function () {
                                location.reload();
                            });
                    }
                    else {
                        $('#addClient').modal('hide');
                        swal({
                            title: 'Sukses!',
                            text: 'Data berhasil di ubah',
                            type: 'success'
                        },
                            function () {
                                location.reload();
                            });
                    }
                }
            });
        });
    });
    function addClient() {
        save_method = 'add';
        $('#formC')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('label').hide();
        $('#addClient').modal('show');
        $('.modal-title').text('Add Client...');
    }
</script>
<div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form" id="formC" action="#" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="">Nama Client</label>
                        <input type="text" name="nama_client" id="" placeholder="Nama Client" class="form-control">
                        <p class="help-block mb-0"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" placeholder="Email" class="form-control">
                        <p class="help-block mb-0"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggapan</label>
                        <textarea type="text" name="say" id="" placeholder="Tanggapan " class="form-control" rows="3" required></textarea>
                        <p class="help-block mb-0"></p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-raised btn-primary" id="btnSave1" onclick="">Save</button>
                <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>


</html>