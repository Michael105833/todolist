<?php


class edit extends config{ 
    public $id;

    public function __construct($id){

        $this->id= $id;
    }

public function editTask(){
    $con = $this->con(); //may connection na ito ung function sa config
    $sql = "UPDATE `tbl_todolist` SET `status` = 'COMPLETED', `date_completed` = NOW() where `id` = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
        return true;
    }
        return false;
}


}



?>