<?php

class Panel extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // Oturum Kontrolü
        Session::checkSession();
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->view("header");
        $this->load->view("left");
        $this->load->view("home");
        $this->load->view("footer");
    }

    public function addNewContent()
    {
        $this->load->view("header");
        $this->load->view("left");
        $this->load->view("addNewContent");
        $this->load->view("footer");
    }

    public function addNewContentRun()
    {
        $form = $this->load->otherClasses('Form');

        $form->post('title')
            ->isEmpty()
            ->length(0, 100);

        $form->post('content')
            ->isEmpty();

        if ($form->submit()) {
            $data = array(
                'title' => $form->values['title'],
                'content' => $form->values['content']
            );

            $model = $this->load->model("panel_model");
            $result = $model->addNewContentRun($data);
            if ($result) {
                echo "Sorun Yok";
            } else {
                echo "Sorun Var";
            }
        } else {
            $data["formErrors"] = $form->errors;

            $this->load->view("header");
            $this->load->view("left");
            $this->load->view("addNewContent", $data);
            $this->load->view("footer");
        }
    }


    public function sliderDuzenle($asama=1, $array = array())
    {
        switch ($asama) {
            case 1:
                //İlk Aşama
                $this->load->view("header");
                $this->load->view("left");
                $this->load->view("sliderDuzenle");
                $this->load->view("footer");

                break;
            case 2:
                //İlk Aşama
                $upload = $this->load->otherClasses('Upload');
                $sonuc=$upload->ResimYukle(true);
                echo("<script type='text/javascript'> alert('$sonuc Adet Fotoğraf Yüklenmesi Tamamlandı')</script>");

                $this->load->view("header");
                $this->load->view("left");
                $this->load->view("sliderDuzenle");
                $this->load->view("footer");



                break;
            case 3:
                //İkinci Aşama
                break;
            default:

        }

    }

}
