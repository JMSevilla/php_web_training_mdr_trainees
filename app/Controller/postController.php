<?php

include_once "../Database/database.php";
include_once "../Queries/Query.php";

interface IPost {
    public function PostData($data);
}

class PostController extends Database implements IPost{
    public function PostData($data){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $querybuilder = new QueryBuilder();
            if($this->php_prepare($querybuilder->postQuery('post/insert'))){
                $this->php_dynamic_handler(":fname", $data['firstname']);
                $this->php_dynamic_handler(":lname", $data['lastname']);
                if($this->php_execution()){
                    $response = array(
                        "status" => "success"
                    );
                    echo json_encode($response);
                }
            }
        }
    }
}