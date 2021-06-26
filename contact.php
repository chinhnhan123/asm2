
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Contact</title>
<style>
                *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{

            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
        }

        #header {
        position: fixed;
        top:0;
        right: 0;
        left: 0;
        height: 50px;
        background-color: #000;
        z-index: 1;
        }
        #nav {
            display: inline-block;
        }

        #nav li {
        position: relative;
        }
        #nav .subnav{
            display: none;
            position: absolute;
            background-color: #fff;
            list-style-type: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #nav> li{
            display: inline-block;
        }

        #nav> li> a {
            color: #fff;
            text-transform: uppercase;

        }

        #nav li a {
            display: block;
            text-decoration: none;
            line-height: 50px;
            padding: 0 24px;
        }

        #nav .subnav a {
            color: #000;
        }
        #nav li:hover .subnav {
            display: inline-block;
        }

        #nav> li:hover> a,
        #nav .subnav li:hover A{
            background-color:#ccc ;
            color: #000;
        }
        body{
            background: -webkit-linear-gradient(left, #f1f4f8, #e5ebec);
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            color: #000;
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(1deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #000;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0c0d0e;
            border: none;
            cursor: pointer;
        }
</style>
</head>
<body>
<div id="main">
    <div id="header">
        <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#men">Men </a></li>
            <li><a href="#women">Women </a></li>
            <li><a href="#sale">Sale </a></li>
            <li>
                <a href="#sports">Sport </a>
                <ul class="subnav">
                    <li><a href="#sports">Football</a></li>
                    <li><a href="#sports">Running</a></li>
                    <li><a href="#sports">Basketball</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact </a></li>
        </ul>
    </div>
    
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://media.istockphoto.com/vectors/startup-icon-vector-id1074164928?k=6&m=1074164928&s=612x612&w=0&h=dD2gAKmO5MNG-eOh2WE34ZMoLSpF0j_YSYvTFKl-FfA=" alt="rocket_contact"/>
            </div>
            <form action="handle_contact.php" method="post">
                <h3>Contact Us</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name"  class="form-control" placeholder="Your Full Name *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control"  placeholder="Your Email *" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control"  placeholder="Your Phone Number *" value="" pattern="[0-9]{10}" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Send" />
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <input type="text" name="birthday" class="form-control" placeholder="Your date of birth *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Your Address *" value="" required/>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>
</html>