<?php
    //connection with database
    $conn = new mysqli("localhost","root","" ,"crad");

    if(isset($_POST['submit'])){

        $email = inputvalidation($_POST['email']);
        $password = inputvalidation($_POST['password']);

        $conn->query("
            create table user(
                id int auto_increment primary key,
                email varchar(40),
                password varchar(40)
            )
        ");

        if(strlen($password)>10 && filter_var($email , FILTER_VALIDATE_EMAIL)){
            $conn->query("
            insert into user set
            email='{$email}',
            password='{$password}'
            ");
        }else{
            echo 'please write at the least 10 character'.'<br';
            echo strlen($password);
            header('location:login.php');
        };



    };

    function inputvalidation($input){
        $data = trim($input);
        $datastrip = stripcslashes($data);
        $validation = htmlspecialchars($datastrip);
        return $validation;
    }

?>