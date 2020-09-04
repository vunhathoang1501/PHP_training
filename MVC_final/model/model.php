<?php
require_once "model/config.php";
class Model
{
    private $data;
    public function __construct()
    {
        $this->data= new DB();
    }
    public function getData(){
        $table = $this->data->ReturnData("SELECT * FROM `post`");
        while($arr=mysqli_fetch_array($table))
        {
            $rows[]=$arr;
        }
        return $rows;
    }
    public function getDataID($id){
        $table = $this->data->ReturnData("SELECT `id`, `title`, `description`, `image`, `status`, `create_at`, `update_at` FROM `post` WHERE id = ".$id);
        $arr=mysqli_fetch_array($table);
        return $arr;
    }
    public function delete($id){
        $this->data->ReturnData("DELETE FROM `post` WHERE id=".$id);
    }
    public function add($title,$description,$image,$status){

        $this->data->ReturnData("INSERT INTO `post` (`title`, `description`, `image`, `status`, `create_at`, `update_at`) VALUES ('".$title."','".$description."','".$image."','".$status."',NOW(),NOW())");
    }
    public function update($id,$title,$description,$status)
    {
        $this->data->ReturnData("UPDATE `post` SET `title`='".$title."',`description`='".$description."',`status`='".$status."', `update_at`= NOW() WHERE id=".$id);

    }

}   

