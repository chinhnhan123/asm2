<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {
          font-family: 'Ubuntu', sans-serif;
          height: 100%;
              }
      /* slider */
      @import url(https://fonts.googleapis.com/css?family=Montserrat);



      body{
        background: #030321;
        font-family: Arial;
      padding: 100px;
      }


      /* slider */
      .main {
          background-color: #FFFFFF;
          width: 400px;
          height: 350px;
          margin: 7px auto;
          border-radius: 1.5em;
          box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
      }

      .sign {
          padding-top: 40px;
          color: #8C55AA;
          font-family: 'Ubuntu', sans-serif;
          font-weight: bold;
          font-size: 23px;
          text-align: center;
      }

      .un {
      width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
      }

      form.form1 {
          padding-top: 40px;
      }

      .pass {
              width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
      }


      .un:focus, .pass:focus {
          border: 2px solid rgba(0, 0, 0, 0.18) !important;
          
      }

      .submit {
        cursor: pointer;
          border-radius: 5em;
          color: #fff;
          background: linear-gradient(to right, #9C27B0, #E040FB);
          border: 0;
          padding-left: 40px;
          padding-right: 40px;
          padding-bottom: 10px;
          padding-top: 10px;
          font-family: 'Ubuntu', sans-serif;
          margin-left: 35%;
          font-size: 13px;
          box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      }

      a {
          text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
          color: #000;
          text-decoration: none;

      }
      .logup{
        text-align: center;
      margin-top:13px ;
      }

      @media (max-width: 600px) {
          .main {
              border-radius: 0px;
          }}
    </style>
  </head>
  <body>

      <form action="handle_logup.php" method ="POST">
  <div class="main">
    <p class="sign">Sign up</p>
    <form class="form1">
      <input class="un " type="text"  placeholder="Username" name="username">
      <input class="pass" type="password"  placeholder="Enter a new password" name="password">
      <input class="pass" type="password"  placeholder="Enter the password" name="password1">

      <button class="submit" name="submit" > Sign up</button> 

    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>