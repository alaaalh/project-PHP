<html>
    <head>
      <style>
          form{
            border: 2px solid green;
            padding: 20px;
            margin: 30px auto;
            width: 40%;
            height: 200px;
            text-align:center
          }

          input[type=email],input[type=password]{
            width:90%;
            margin: 15px;
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
            <input type="email" name='email' placeholder='email'><br>
            <input type='password' name='password' placeholder='password'><br>
            <input type='submit' name='submit' value='submit'>
        </form>
    </body>

</html>