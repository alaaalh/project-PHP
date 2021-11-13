<?php
    //connection with database
    $conn = new mysqli("localhost","root","" ,"crad");

    //event in submit button
    if(isset($_POST['submit'])){

        $email = inputvalidation($_POST['email']);
        $password = inputvalidation($_POST['password']);

        //create table in database
        $conn->query("
            create table user(
                id int auto_increment primary key,
                email varchar(40),
                password varchar(40)
            )
        ");

        //check if account regstration or not
        $selected = $conn->query("
            SELECT id, email, password FROM user WHERE email= '{$email}'
        ");
        $data = $selected->fetch_all(MYSQLI_ASSOC);
    
        //store account in database
        if(strlen($password)>10 && filter_var($email , FILTER_VALIDATE_EMAIL) && $data){
            $conn->query("
            insert into user set
            email='{$email}',
            password='{$password}'
            ");
        }else{
            header('location:login.php');
        };

        //event register button
    }else if(isset($_POST['register'])) {

        $name = inputvalidation($_POST['username']);
        $email = inputvalidation($_POST['email']);
        $password = inputvalidation($_POST['password']);
        $confirm = inputvalidation($_POST['confirm']);

         //create table in database
        $conn->query("
        create table user(
            id int auto_increment primary key,
            email varchar(40),
            password varchar(40)
        )
       ");

        //check if account regstration or not
        $selected = $conn->query("
        SELECT id, email, password FROM user WHERE email= '{$email}'
        ");
        $data = $selected->fetch_all(MYSQLI_ASSOC);

        if(filter_var($email , FILTER_VALIDATE_EMAIL) && !$data && $password == $confirm && strlen($password)>10 ){
            $conn->query("
            insert into user set
            email='{$email}',
            password='{$password}'
            ");
        }else{
            header('location:register.php');
        };
    };

    //validation
    function inputvalidation($input){
        $data = trim($input);
        $datastrip = stripcslashes($data);
        $validation = htmlspecialchars($datastrip);
        return $validation;
    }

?>