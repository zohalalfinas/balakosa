<?php

class Promo extends Controller {
    public function index () 
    {
        $data ["judul"] = "promo";
        $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
        $_SESSION['username'] = $data['user']['username'];
        $data['promo'] = $this->model('Promo_model')->getAllPromo($_SESSION['id_user']);
        $this ->view ("templates/headerdash", $data);
        $this ->view ("promo/index", $data);
        $this ->view ("templates/footerdash");
    }

}