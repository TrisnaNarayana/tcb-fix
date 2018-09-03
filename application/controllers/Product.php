<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MModel');
    if(!$this->session->userdata('username_sess'))
    {
      redirect(base_url().'__Login');
    }
  }

  public function index()
  {
    $countries=$this->MModel->getData("select * from kategori a inner join merk b on b.id_merk=a.id_merk");
    $opt = array('' => 'Semua Kategori');
    foreach ($countries as $country) {
          $opt[$country['id_kategori']] = $country['nama_merk'].' || '.$country['nama_kategori'];
    }
    $data['form_kategori'] = form_dropdown('',$opt,'','id="id_category" class="form-control"');

    $this->load->view('product/v_product',$data);
  }
  public function ajax_list()
  {
        $table = 'product a , merk b , kategori c';
        $column_order = array(null,"dibuat_pada","nama_product","nama_merk","nama_kategori",null);
        $search = array("dibuat_pada","nama_product","nama_merk","nama_kategori");
        $order = array("id_product" => "ASC");
        $kategori=$this->input->post('id_category');
        $merk=$this->input->post('id_merk');
        if($kategori)
        {
          $where="a.id_kategori=c.id_kategori and b.id_merk=c.id_merk and a.id_kategori='$kategori'";
        }
        else
        {
          $where="a.id_kategori=c.id_kategori and b.id_merk=c.id_merk";
        }
        
        // $join_ref = "kategori ";
        // $join = "kategori.id_kategori=product.id_kategori";
        $this->MModel->set_data("table",$table);
        $this->MModel->set_data("where",$where);
        // $this->MModel->set_data("join_ref",$join_ref);
        // $this->MModel->set_data("join",$join);
        $this->MModel->set_data("column_order",$column_order);
        $this->MModel->set_data("column_search",$search);
        $this->MModel->set_data("order",$order);

        $list = $this->MModel->get_datatables();
        $data = array();

        $no = $_POST['start'];
        foreach ($list as $l) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $l->dibuat_pada;
            $row[] = $l->nama_product;
            $row[] = $l->nama_merk;
            $row[] = $l->nama_kategori;
            $row[] = '<a href="'.base_url().'Product/Detail/'.$l->id_product.'"  class="btn btn-info btn-xs" title="Lihat"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0)" onclick="updateProduct('.$l->id_product.')" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" onclick="removeProduct('.$l->id_product.')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->MModel->count_all(),
                        "recordsFiltered" => $this->MModel->count_filtered(),
                        "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    function Detail($id)
    {
      $hasil=$this->MModel->get("select * from product a inner join kategori b inner join merk c on c.id_merk=b.id_merk and a.id_kategori=b.id_kategori where id_product='$id'");
      if($hasil)
      {
        $data['detail']=$hasil;
        $this->load->view('product/v_detail_product',$data);
      }
      else {
        redirect(base_url("Error404"));
      }

    }

    function deskripsi()
    {
      $hasil=$this->MModel->get("select * from deskripsi where id_deskripsi='1'");
      if($hasil)
      {
        $data['detail']=$hasil;
        $this->load->view('product/v_deskripsi_product',$data);
      }
      else {
        redirect(base_url("Error404"));
      }
    }

    function add()
    {
      $nmfile='product__'.time();
      $config['upload_path'] = './img/product/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./img/product/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 400;
              $config['height']= 400;
              $config['new_image']= './img/product/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
              'foto_product'=>$gambar,
              'dibuat_pada'=>$this->input->post('dibuat_pada'),
              'nama_product'=>$_POST['nama_product'],
              'deskripsi'=>$_POST['deskripsi'],
              'id_kategori'=>$_POST['id_kategori']
            );
            $this->MModel->add("product",$data);
            echo json_encode(array("status" => TRUE));

      }


      }else{
        $data = array(
        'dibuat_pada'=>$this->input->post('dibuat_pada'),
        'nama_product'=>$_POST['nama_product'],
        'deskripsi'=>$_POST['deskripsi'],
        'id_sub_kategori'=>$_POST['id_sub_kategori']
      );
            $this->MModel->add("product",$data);
            echo json_encode(array("status" => TRUE));

    }
    }

    function update()
    {
      $nmfile='product__'.time();
      $config['upload_path'] = './img/product/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./img/product/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 400;
              $config['height']= 400;
              $config['new_image']= './img/product/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
              'foto_product'=>$gambar,
              'dibuat_pada'=>$this->input->post('dibuat_pada'),
              'nama_product'=>$_POST['nama_product'],
              'deskripsi'=>$_POST['deskripsi'],
              'id_kategori'=>$_POST['id_kategori']
            );
            $this->MModel->update("id_product",$this->input->post('id'),"product",$data);

            echo json_encode(array("status" => TRUE));

      }


      }else{
              $data = array(
              'dibuat_pada'=>$this->input->post('dibuat_pada'),
              'nama_product'=>$_POST['nama_product'],
              'deskripsi'=>$_POST['deskripsi'],
              'id_sub_kategori'=>$_POST['id_sub_kategori']
            );
            $this->MModel->update("id_product",$this->input->post('id'),"product",$data);
            echo json_encode(array("status" => TRUE));

    }
    }

    public function updateDeskripsi()
    {
      $data = array(
        'desc_product'=>$this->input->post("deskripsi")
      );
      $this->MModel->update("id_deskripsi",1,"deskripsi",$data);
      echo json_encode(array("status" => TRUE));
    }

    public function get($id)
    {
      $data=$this->MModel->get("select * from product where id_product='$id'");
      echo json_encode($data);
    }

    public function hapus($id)
    {
      $this->MModel->hapus("id_product",$id,"product");
      echo json_encode(array("status"=>TRUE));

    }



}
