<!doctype html>
<html>
<head>
    <meta name="description" content="A store from where you can buy every medicine on less amount,on offer all medicine,">
    <meta name="keywords" content="buy medicine,purchase medicine,offer medicine"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#002244"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" /> 
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>PHRAMACY STORE</title>
    <style type="text/css">
        body { 
  background: url("Medicine-Wallpapers-HD.jpg") no-repeat center center fixed; 
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
        .bg_img{
            color: orangered;
            box-sizing: border-box;
            background-color:rgba(0,0,0,0.5);
            border-radius: 20px;
            max-width: 560px;
            margin-top: 90px;
            padding-top: 20px;
            border: none;
            outline: none;
            margin-bottom: 200px;
        }
       input[type=text], input[type=number],input[type=password],select[id="who_are_you"],.textarea
        {
            background-color: antiquewhite;
            border-radius: 10px;
            outline: none;
            background-color: #f1f1f1;
            border: none;
            width: calc(100%);
            text-align: center;
        }
        .button_design{
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            outline: none !important;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: none;
            outline: none;
            width: 70px;
        }
        .button_design:hover{
            background-color: red;
        }
        .button_design_sign_up:hover{
            background-color: dodgerblue;
        }
        input[type=text]:focus, input[type=number] : focus,input[type=password]:focus,select[id="who_are_you"]:focus{
            background-color: #ddd;
            outline: none;
        }
        .login_text{
            color: white;
            background-color: rebeccapurple;
            border-radius: 10px;
        }
    </style>
  </head>
<body>
<div class="container-fluid bg_img">
    <center><p class="login_text">Supplier</p></center>
<form action="supplier2.inc.php" method="post">
        <div>
<label for="name">Full Name : </label>
<input type="text" id="name" placeholder="Full Name" name="supname" required>
    </div>
<div>  
<label for="address">Address : </label>
<textarea cols="72" rows="5" class="textarea" name="address"></textarea>
</div>
            <div>
<label for="city">city : </label>
<input type="text" id="city" placeholder="city" name="city" required>
    </div>        <div>
<label for="state">state : </label>
<input type="text" id="state" placeholder="state" name="state" required>
    </div>
    <div>
<label for="phone">Phone no: </label>
<input type="number" id="phone" placeholder="mobileno" name="m" required>
    </div>
    
    <div>
    <center><button name="submit" type="submit" class="button_design">Add</button></center>
    </div>
</form>    
</div>        
</body>    
</html>