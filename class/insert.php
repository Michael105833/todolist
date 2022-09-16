<?php

class insert extends config{ //si config para magamit sa class na to
    public $task;

    public function __construct($task){

        $this->task= $task;
    }
//function na magpapasok ng data

public function insertTask(){
    $con = $this->con(); //may connection na ito ung function sa config
    $sql = "INSERT INTO `tbl_todolist`(`item`)VALUES('$this->task')";
    $data = $con->prepare($sql);
    if($data->execute()){
        return true;
    }
        return false;
}
}




// una dedeclare connection
// pangalawa gagawa ng query
// next prepare sql
// next execute query


// sample debug var_dump($data); die(); --sa baba ng prepare
// if($data->execute()){
//     return true;
// }else 
// return false;

// if($insert->insertTask()){ -- if rin ito
//     echo "Task Inserted Successfully";
// }else
//     echo "Task Insert Error";
// }


?>