<?php
require_once "model/model.php";

class User
{
    protected $model;
    public function __construct()
    {
        $this->model= new Model();
    }
    public function index(){
        $view = $this->model->getData();
        require_once "view/user/user.php";

    }
}
