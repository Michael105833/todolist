<?php

function insertT(){

if(!empty($_GET['item'])){
    $insert = new insert($_GET['item']);
    if($insert->insertTask()){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You have inserted task successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }else
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Insert Task Error.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }
}

function deleteT(){

  if(!empty($_GET['delete'])){
      $delete = new delete($_GET['delete']);
      if($delete->deleteTask()){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You have deleted task successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }else
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> Delete Task Error.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
  }

  function editT(){

    if(!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
        if($edit->editTask()){
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You have edited task successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Edited Task Error.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      }
    }

function viewTable(){

    $view = new view();
    $view->viewData();
    $view->viewCompletedData();
}

function sanaol(){
  insertT();
  deleteT();
  editT();
}

?>

