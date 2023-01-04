<?php 

class Home extends Controller {
    public function index ()
    {   
        $data["judul"] = "Home";
        $this->view("header/header", $data);
        $this->view("home");
        $this->view("footer/footer");
    }
}

?>