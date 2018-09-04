<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller
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
    $this->load->view('info/v_info');
  }

  public function ajax_list()
  {
        $table = 'info';
        $column_order = array(null,"tgl_input","judul_info",null);
        $search = array("tgl_input","judul_info");
        $order = array("id_info" => "ASC");
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
            $row[] = $l->tgl_input;
            $row[] = $l->judul_info;
            $row[] = '<a href="'.base_url().'img/info/'.$l->pdf.'"> Download</a>';
            $row[] = '<a href="'.base_url().'Info/Detail/'.$l->id_info.'"  class="btn btn-info btn-xs" title="Lihat"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0)" onclick="updateInfo('.$l->id_info.')" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" onclick="removeInfo('.$l->id_info.')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></a>';
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
      $hasil=$this->MModel->get("select * from info where id_info='$id'");
      if($hasil)
      {
        $data['detail']=$hasil;
        $this->load->view('info/v_detail_info',$data);
      }
      else {
        redirect(base_url("Error404"));
      }

    }

    function add()
    {
      if(!empty($_FILES['image']['name'])){
          $nmfile='swf__'.time();
          $config['upload_path'] = './img/info/'; //path folder
          $config['allowed_types'] = 'swf'; //type yang dapat diakses bisa anda sesuaikan
          $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
          $config['file_name']=$nmfile;
    
          $this->upload->initialize($config);
          if ($this->upload->do_upload('image')){
              $gbr = $this->upload->data();
              $swf=$gbr['file_name'];
          }
          else
          {
            $swf= "#";
          }

      }
      else
      {
        $swf = '#';
      }
      if(!empty($_FILES['pdf']['name'])){
        $nmfile='pdf__'.time();
        $config['upload_path'] = './img/info/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $config['file_name']=$nmfile;
  
        $this->upload->initialize($config);
        if ($this->upload->do_upload('pdf')){
            $gbr = $this->upload->data();
            $pdf=$gbr['file_name'];
        }
        else 
        {
          $pdf="#" ;
        }
      }
      else
      {
        $pdf = '#';
      }

      if($pdf != "#" && $swf != "#")
      {
        $data = array(
          'swf'=>$swf,
          'pdf'=>$pdf,
          'judul_info'=>$_POST['judul']
        );
      }
      else if($pdf != "#" && $swf=="#")
      {
        $data = array(
          'pdf'=>$pdf,
          'judul_info'=>$_POST['judul']
        );
      }
      else if($pdf == "#" && $swf!="#")
      {
        $data = array(
          'swf'=>$swf,
          'judul_info'=>$_POST['judul']
        );
      }else
      {
        $data = array(
          'judul_info'=>$_POST['judul']
        );
      }
      
      $this->MModel->add("info",$data);
      echo json_encode(array("status" => TRUE));
    }

  

    function update()
    {
      if(!empty($_FILES['image']['name'])){
        $nmfile='swf__'.time();
        $config['upload_path'] = './img/info/'; //path folder
        $config['allowed_types'] = 'swf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $config['file_name']=$nmfile;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('image')){
            $gbr = $this->upload->data();
            $swf=$gbr['file_name'];
        }
        else
        {
          $swf= "#";
        }

    }
    else
    {
      $swf = '#';
    }
    if(!empty($_FILES['pdf']['name'])){
      $nmfile='pdf__'.time();
      $config['upload_path'] = './img/info/'; //path folder
      $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
      $config['file_name']=$nmfile;

      $this->upload->initialize($config);
      if ($this->upload->do_upload('pdf')){
          $gbr = $this->upload->data();
          $pdf=$gbr['file_name'];
      }
      else 
      {
        $pdf="#" ;
      }
    }
    else
    {
      $swf = '#';
    }

    if($pdf != "#" && $swf != "#")
    {
      $data = array(
        'swf'=>$swf,
        'pdf'=>$pdf,
        'judul_info'=>$_POST['judul']
      );
    }
    else if($pdf != "#" && $swf=="#")
    {
      $data = array(
        'pdf'=>$pdf,
        'judul_info'=>$_POST['judul']
      );
    }
    else if($pdf == "#" && $swf!="#")
    {
      $data = array(
        'swf'=>$swf,
        'judul_info'=>$_POST['judul']
      );
    }else
    {
      $data = array(
        'judul_info'=>$_POST['judul']
      );
    }
    $this->MModel->update("id_info",$this->input->post('id'),"info",$data);
    echo json_encode(array("status" => TRUE));
    }

    public function get($id)
    {
      $data=$this->MModel->get("select * from info where id_info='$id'");
      echo json_encode($data);
    }

    public function hapus($id)
    {
      $this->MModel->hapus("id_info",$id,"info");
      echo json_encode(array("status"=>TRUE));

    }



}