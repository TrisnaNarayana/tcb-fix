<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
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
    $countries=$this->MModel->getData("select * from merk");
			$opt = array('' => 'All Category');
      foreach ($countries as $country) {
            $opt[$country['id_merk']] = $country['nama_merk'];
      }
    $data['form_kategori'] = form_dropdown('',$opt,'','id="id_category" class="form-control"');
    $this->load->view('kategori/v_kategori',$data);
  }

  public function ajax_list()
  {
        $table = 'kategori';
        $column_order = array(null,"nama_kategori","img_kategori",null);
        $search = array("nama_kategori","img_kategori");
        $order = array("id_kategori" => "ASC");
        $join_ref="merk";
        $join="merk.id_merk=kategori.id_merk";
        $kategori=$this->input->post('id_category');

        if ($kategori) {
          $this->MModel->set_data("where","kategori.id_merk=".$kategori);
        }
        $this->MModel->set_data("join_ref",$join_ref);
        $this->MModel->set_data("join",$join);
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
            $row[] = '<img src="'.base_url().'img/merk/'.$l->img_merk.'" class="img-thumbnail" height="80px" width="80px"> <span>' .$l->nama_merk.'</span>';
            $row[] = '<img src="'.base_url().'img/kategori/'.$l->icon.'" class="img-thumbnail" height="80px" width="80px">';
            $row[] = $l->nama_kategori;
            //if($this->session->userdata('id_anggota_sess')!=0) {
            
              $row[] = '
                      <a href="'.base_url().'Kategori/detail/'.$l->id_kategori.'"  class="btn btn-success btn-xs" title="view"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0)" onclick="updateKategori('.$l->id_kategori.')" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" onclick="removeKategori('.$l->id_kategori.')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></a>';
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
      $data['detail']=$this->MModel->get("select * from kategori a inner join merk b on b.id_merk=a.id_merk where id_kategori='$id'");
      $this->load->view('kategori/v_detail_kategori',$data);
    }

    function add()
    {
      $judul="kategori";
      $nmfile=$judul.'--'.time();
      $config['upload_path'] = './img/kategori/'; //path folder
      $config['allowed_types'] = 'png|jpg|gif|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      //$config['encrypt_name'] = TRUE; //Enkripsi nama yang terslider
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./img/kategori/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 400 ;//1145; //;
              $config['height']=400; //456;//
              $config['new_image']= './img/kategori/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
                'icon'=>$gambar,
                'id_merk'=>$this->input->post('id_merk'),
                'nama_kategori'=>$this->input->post('nama_kategori'),
                'deskripsi'=>$this->input->post('deskripsi')
              );
              $this->MModel->add("kategori",$data);
              echo json_encode(array("status" => TRUE));
      }


      }else{
        $data = array(
          'id_merk'=>$this->input->post('id_merk'),
          'nama_kategori'=>$this->input->post('nama_kategori'),
          'deskripsi'=>$this->input->post('deskripsi')
        );
        $this->MModel->add("kategori",$data);
        echo json_encode(array("status" => TRUE));

    }

      
      


      
    }

    function update()
    {
      $judul="kategori";
      $nmfile=$judul.'--'.time();
      $config['upload_path'] = './img/kategori/'; //path folder
      $config['allowed_types'] = 'png|jpg|gif|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      //$config['encrypt_name'] = TRUE; //Enkripsi nama yang terslider
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if(!empty($_FILES['image']['name'])){

          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./img/kategori/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['width']= 400 ;//1145; //;
              $config['height']=400; //456;//
              $config['new_image']= './img/kategori/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data = array(
                'icon'=>$gambar,
                'id_merk'=>$this->input->post('id_merk'),
                'nama_kategori'=>$this->input->post('nama_kategori'),
                'deskripsi'=>$this->input->post('deskripsi')
              );
              $this->MModel->update("id_kategori",$this->input->post('id'),"kategori",$data);
              echo json_encode(array("status" => TRUE));
      }


      }else{
        $data = array(
          'id_merk'=>$this->input->post('id_merk'),
          'nama_kategori'=>$this->input->post('nama_kategori'),
          'deskripsi'=>$this->input->post('deskripsi')
        );
        $this->MModel->update("id_kategori",$this->input->post('id'),"kategori",$data);
        echo json_encode(array("status" => TRUE));

    }
      
    }

    public function get($id)
    {
      $data=$this->MModel->get("select * from kategori where id_kategori='$id'");
      echo json_encode($data);
    }

    public function hapus($id)
    {
      $hasil=$this->MModel->getData("select * from kategori where id_kategori='$id'");
      $this->MModel->hapus("id_kategori",$id,"kategori");
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

      $this->MModel->update("id_kategori",$id,"kategori",$data);
      redirect(base_url().'Kategori');
    }



}
