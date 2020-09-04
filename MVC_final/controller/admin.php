<?php

require_once "controller/user.php";

class Admin extends User
{
    public function index()
    {
        $view = $this->model->getData();
        require "view/admin/admin.php";

    }
    public function show(){
        $id = (int)$_GET["id"];
        $info = $this->model->getDataID($id);
        if (isset($info["title"])){
            $title= $info["title"];}
        if (isset($info["image"])){
            $image= $info["image"];}
        if (isset($info["description"])){
            $description= $info["description"];}
        if (isset($info["create_at"])){
            $create_at= (string)$info["create_at"];}
        if (isset($info["update_at"])){
            $update_at= (string)$info["update_at"];}   
        if (isset($info["status"])){
        if($info["status"]==0){
            $status = "Disabled";
        }
        else{
            $status = "Enabled";
        }
    }
        require_once "view/admin/show.php";
}
    public function edit(){
        $id = (int)$_GET["id"];
        $info = $this->model->getDataID($id);
        if (isset($info["image"])){
        $image = $info["image"];
    }
        require "view/admin/edit.php";
}
    public function upload(){
        if (isset($_POST["upload"])){
            $id = $_GET["id"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $status = $_POST["status"];
            }
        $this->model->update($id,$title,$description, $status);
        $this->index();
    }
    public function addview(){
        require_once "view/admin/add.php";
    }
    public function add(){
        if(isset($_POST["add"]))
        {
            $title = $_POST["title"];
            $image = $_POST["image"];
            $description = $_POST["description"];
            $status = $_POST["status"];
            $this->model->add($title,$description,$image,$status);
            $this->index();
        }
    }
    public function delete(){
        $id = (int)$_GET["id"];
        $this->model->delete($id);
        $view = $this->model->getData();
        require_once "view/admin/admin.php";
    }

}
?>