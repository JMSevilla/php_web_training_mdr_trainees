<?php

include_once "../Controller/postController.php";

if(isset($_POST['isbool']) == true) {
    $data = [
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname']
    ];
    $callback = new PostController();
    $callback->PostData($data);
}