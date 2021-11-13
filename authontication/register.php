<html>
    <head>
      <style>
          form{
            border: 2px solid green;
            padding: 40px;
            margin: 60px auto;
            width: 30%;
            height: 350px;
            text-align:center
          }

          input[type=email],input[type=password],input[type=text]{
            width:90%;
            margin: 20px;
            border: 1px solid green;
            height: 25px
          }

          input[type=submit]{
            width:50%;
            background-color: green;
            color:white;
            margin:15px;
            border-radius: 5px;
            border:1px solid white;
            height: 30px
          }

      </style>
    </head>
    <body>
        <form action='userController.php' method='post'>
            <input type= 'text' name='username' placeholder='user name'><br>
            <input type= "email" name='email' placeholder='email'><br>
            <input type= 'password' name='password' placeholder='password'><br>
            <input type= 'password' name= 'confirm' placeholder = 'confirm password'><br>
            <input type= 'submit' name='register' value='submit'>
            <a href='login.php'>login</a>
        </form>
    </body>

</html>