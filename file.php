<?php include 'register.php'; ?>
<?php include 'signin.php'; ?>

<!DOCTYPE HTML>
<html>
    
    <head>
        
        <title>FULL TEST</title>
        
        <style>
            
             body{
                font-family: Arial;
                background-color: darkgrey;
                margin: 0;
                padding: 0;
            }
            
            #flyin{
                animation: slide 0.5s forwards;
            }
            
            #bar{
                background-image: linear-gradient(to right, black, #4CAF50);
                height = 15px;
                color: white;
                position: absolute;
                top: 0;
                width: 100%;
                margin: 0;
                padding-left: 10px;
            }
            
            #part2{
                background-color: white;
                margin-top: 80px;
                height: 100%;
                width: 100%;
                position: absolute;
            }
            
            .container{
                margin-top = 15px;
                padding-left: 10px;
                background-color: white;
                height: 100%;
                width: 50%;
                position: absolute;
            }
            
            .register{
                left: 0;
            }
            
            .signin{
                left: 50%;
                right: 0;
            }
            
            .registerbtn{
                background-color: #4CAF50;
                opacity: 0.9;
                padding: 16px 20px;
                cursor: pointer;
                width: 250px;
            }
            
           .registerbtn:hover{
                opacity: 1;
            }
            
            .submitbtn{
                background-color: #4CAF50;
                opacity: 0.9;
                padding: 16px 20px;
                cursor: pointer;
                width: 250px;
            }
            
            .submitbtn:hover{
                opacity: 1;
            }
            .line{
                height: 100%;
                position: absolute;
                left: 50%;
                border-left: 1px solid gray;
                top: 0;
            }
            
        </style>
        
    </head>
    
    <body>
        
        <div id = "bar">
            <h1 id = "flyin">WELCOME</h1>
        </div>
        
        <div id = "part2">
            
            <form action = "register.php" method = "POST">
            
                <div class = "container register">
                    <h1>REGISTER</h1>
                    <hr>
                    <label for = "email" ><b>Email</b></label>
                    <br>
                    <input type = "text"  placeholder = "Type Email" name  = "email" required>
                    <br><br>
                    <label for="pass"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Type Password" name="pass" required>
                    <hr>
                    <br>
                    <button type = "submit" name="register-btn" class = "registerbtn">REGISTER</button>
                </div>
            
            </form>    
        
        
        
            <form action = "signin.php" method = "POST">   
             
                <div class = "container signin">
                    <h1>SIGN IN</h1>
                    <hr >
                    <label for = "email" ><b>Email</b></label>
                    <br>
                    <input type = "text" placeholder = "Type Email" name = "email" required>
                    <br><br>
                    <label for="pass"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Type Password" name="pass" required>
                    <hr>
                    <br>
                    <button type = "submit" name="signin-btn" class = "submitbtn">SUBMIT</button>
                </div>
             
            </form>
        
            <div class= "line"></div>
            
        </div>
                    
    </body>
    
</html>