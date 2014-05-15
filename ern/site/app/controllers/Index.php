<?php

class Index extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->anasayfa();
    }
    
    public function anasayfa(){
        $this->load->view("header");
        $this->load->view("home");
        $this->load->view("footer");
    }
    
    public function isimListele(){
        $index_model = $this->load->model("index_model");
        $data["isimListele"] = $index_model->isimListele();
        
        $this->load->view("isimListele", $data);
    }
    
    public function yeniMakale(){
        $this->load->view("yeniMakale");
    }
    
    public function makaleKaydet(){
        $baslik = $_POST['baslik'];
        $icerik = $_POST['icerik'];
        $etiket = $_POST['etiket'];
        
        $index_model = $this->load->model("index_model");
        
        $data = array(
            "baslik" => $baslik,
            "icerik" => $icerik,
            "etiket" => $etiket
        );
        
        $result = $index_model->makaleKaydet($data);
        
        if($result == 1){
            $data["mesaj"] = array(
                "mesaj" => "Kayıt işlemi başarıyla gerçekleşti."
            );
        }else{
            $data["mesaj"] = array(
                "mesaj" => "Kayıt işlemi yapılırken bir sorun oluştu."
            ); 
        }
        
        $this->load->view("yeniMakale", $data);
        
    }

    public function makaleListele(){
        $index_model = $this->load->model("index_model");
        $data["makaleListele"] = $index_model->makaleListele();
        
        $this->load->view("makaleListele", $data);
    }
    
    public function makaleDuzenle(){}
    public function makaleSil(){}
    
}
