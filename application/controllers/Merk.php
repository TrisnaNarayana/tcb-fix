<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller
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
    $this->load->view('merk/v_merk');
  }

  public function ajax_list()
  {
        $table = 'merk';
        $column_order = array(null,"nama_merk","img_merk",null);
        $search = array("nama_merk","img_merk");
        $order = array("id_merk" => "ASC");
        $this->MModel->set_data("table",$table);
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
            $row[] = '<img src="'.base_url().'img/merk/'.$l->img_merk.'" class="img-thumbnail" height="100px" width="100px">';
            $row[] = $l->nama_merk;
            //if($this->session->userdata('id_anggota_sess')!=0) {
            
              $row[] = '
                      <a href="javascript:void(0)" onclick="updateMerk('.$l->id_merk.')" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" onclick="removeMerk('.$l->id_merk.')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></a>';
            //}
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
      $data['detail']=$this->MModel->get("select * from merk where id_merk='$id'");
      $this->load->view('merk/v_detail_merk',$data);
    }

    function add()
    {
      $judul="merk";
      $nmfile=$judul.'--'.time();
      $config['upload_path'] = './img/merk/'; //path folder
      $config['allowed_types'] = 'png|jpg|gif|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      //$config['encrypt_name'] = TRUE; //Enkripsi nama yang termerk
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./img/merk/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 1001 ;//1145; //;
              $config['height']=1001; //456;//
              $config['new_image']= './img/merk/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
              'img_merk'=>$gambar,
              'nama_merk'=>$this->input->post('nama_merk'),
            );
            $this->MModel->add("merk",$data);
            echo json_encode(array("status" => TRUE));
      }


      }else{
        $data = array(
        'nama_merk'=>$this->input->post('nama_merk'),
      );
            $this->MModel->add("merk",$data);
            echo json_encode(array("status" => TRUE));

    }
    }

    function update()
    {
      $judul="merk";
      $nmfile=$judul.'--'.time();
      $config['upload_path'] = './img/merk/'; //path folder
      $config['allowed_types'] = 'png|jpg|gif|jpeg'; //type yang dapat diakses bisa anda sesuaikan
    //  $config['encrypt_name'] = TRUE; //Enkripsi nama yang termerk
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              $config['image_library']='gd2';
              $config['source_image']='./img/merk/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 1001 ;//1145; //;
              $config['height']=1001; //456;//
              $config['new_image']= './img/merk/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
              'img_merk'=>$gambar,
              'nama_merk'=>$this->input->post('nama_merk'),
            );
            $this->MModel->update("id_merk",$this->input->post('id'),"merk",$data);

            echo json_encode(array("status" => TRUE));

      }


      }else{
        $data = array(
        'nama_merk'=>$this->input->post('nama_merk'),
      );
            $this->MModel->update("id_merk",$this->input->post('id'),"merk",$data);
            echo json_encode(array("status" => TRUE));

    }
    }

    public function get($id)
    {
      $data=$this->MModel->get("select * from merk where id_merk='$id'");
      echo json_encode($data);
    }

    public function hapus($id)
    {
      $hasil=$this->MModel->getData("select * from merk where id_merk='$id'");
      $this->MModel->hapus("id_merk",$id,"merk");
      echo json_encode(array("status"=>TRUE));

    }


    function updateTampilkan($id,$status)
    {
      if($status=="Y")
      {
        $data=array("tampilkan"=>"N");
      }
      else
      {
        $data=array("tampilkan"=>"Y");
      }

      $this->MModel->update("id_merk",$id,"merk",$data);
      redirect(base_url().'Merk');
    }



}
