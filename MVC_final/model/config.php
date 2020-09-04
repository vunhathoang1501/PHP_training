<?php
class DB
{
    const host = 'localhost';
    const username = 'root';
    const password = '';
    const dbname = "post";
    private $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect(self::host,self::username,self::password,self::dbname);
    }
    public function ReturnData($query){
        return mysqli_query($this->connect,$query);
    }
}

