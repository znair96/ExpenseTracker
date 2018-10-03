<?php

include 'connection.php';
$name = isset($_POST['Name']) ? $_POST['Name'] : NULL;
$username = isset($_POST['Uname']) ? $_POST['Uname'] : NULL;
$password = isset($_POST['pass']) ? $_POST['pass'] : NULL;
$gender = isset($_POST['gender']) ? $_POST['gender'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$error = "<p class='text-success'>Registered Successfully Click here to <a href = 'index.php'>Login</p>";
function dispError($error)
{
    return $error;
}

/*echo "<pre>";
print_r($_POST);
echo "</pre>";s
 */


if(isset($_POST['register'])) {
    $res = insert($_POST);
    if ($res) 
    {
       $a = dispError($error);
    } 
   
   
} 
 
?>
<!DOCTYPE html>
<html>

<head>
        <style> 
                
                body { 
                  color: rgb(33, 168, 33); 
                }
                </style>
                
    <style>
        a:link {
            float: right;
        }
    </style>
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=email],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
      <style>
    [class*="col-"] {
    width: 100%;
}
@media only screen and (max-width: 600px) {
    .regis{background: pink;}
    .log {background: pink;}
    /* For small devices: */
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 45%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 600px) {
    .regis{background: lightblue;}
    .log {background: lightblue;}
    /* For tablets: */
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 30%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    .regis{background: skyblue;}
    .log {background: skyblue;}
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
@media only screen and (min-width: 992px) {
    .regis{background: lightgreen;}
    .log {background: lightgreen;}
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
    </style>
      <style>
    div {
    width: 500px;
    height: 500px;
    background-color: white;
     margin: auto; 
}
    </style>

</head>

<body>
    <style>
         header{
            margin: 0px;
            background-color: lightgreen;
            padding: 5px;
            text-align: left;
            font-size: 15px;
            color: white;

         }
         
    </style>
    <header class="regis">
        <h2 id="header">ExpenseTracker
            <a href="index.php">Login</a>
    </h2>
    </header>
    
    <h1 align="center">Registration</h1>

    <div class= "col-3 col-s-3">
        <form action="#" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="Name" placeholder="Your name" required>

            <label for="Uname">UserName</label>
            <input type="text" id="Uname" name="Uname" placeholder="Your Username" required>

            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email" placeholder="Your E-mail" required>

            <label for="pass">Password</label>
            <br>
            <input type="Password" id="pass" name="pass" placeholder="Your password" required>
            <br>

            <label for="cpass">Confirm Password</label>
            <br>
            <input type="Password" id="cpass" name="cpass" placeholder=" Confirm Your password" required>
            <br>

            <label for="gender">Gender</label>
            <br>
            <select id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            <?php echo  isset($a) ? $a : ""?>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
    <style>
        footer {
            margin: 0px;
            background-color: lightgreen;
            padding: 30px;
            text-align: left;
            color: white;
        }
    </style>
    <footer class="log">
    <h1 id="footer"></h1>
    </footer>
    </style>

</body>

</html>
