<?php


class delete extends config{ 
    public $id;

    public function __construct($id){

        $this->id= $id;
    }

public function deleteTask(){
    $con = $this->con(); //may connection na ito ung function sa config
    $sql = "DELETE FROM `tbl_todolist` WHERE `id` = $this->id";
    $data = $con->prepare($sql);
    if($data->execute()){
        return true;
    }
        return false;
}


}
?>