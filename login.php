<?php
session_start();
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'filesDb';


$conn = new mysqli($host, $username, $pass, $db);
if ($conn->connect_error) die('Something went wrong. Please try again later.');
$error_msg = '';
 
$error_msg = '';
if (isset($_POST['submit'])) {
    $password = $_POST['pass'];
    $query= "SELECT * FROM register WHERE password='$password'";
    $result = $conn->query($query);
if(!($result->num_rows > 0))
     {
        $error_msg = 'error password';
        print "<script> alert('password not valid')</script>";
    }
    if($error_msg === ''){

header("Location: resume.php");
    }
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
    <form action="./login.php" method="POST" id="register">
        <p>enter password</p>
        <div class="error-div">error message</div>
       
        <div class="form-input"> <label for="password">Password </label>
            <input type="password" name="pass" id="password" placeholder="field required">
        </div>
        <button type="submit" name="submit">submit</button>

    </form>
    <style>
        #register p {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 400;
            color: maroon;
            text-transform: capitalize;
        }

        #register {
            width: 50vw;
            display: flex;
            margin: 0 auto;
            flex-direction: column;
            padding: 20px;
            position: relative;
            background-color: green;
            box-shadow: 10px 5px 10px rgb(225, 225, 225, .5);
            border-radius: 15px;

        }

        #register .error-div {
            padding: 10px;
            /* box-shadow: 10px 5px 10px rgb(225, 225, 225, .5); */
            color: white;
            background-color: red;
            height: 12px;
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            outline: none;
            border: none;
            border-radius: 15px;
            display: none;



        }


        .form-input {
            display: flex;
            flex-direction: column;
            padding: 15px 0px;
            /* align-items: center; */
            justify-content: center;
            /* margin-top: 10px; */
        }

        #register input {
            padding: 10px 0px;
            color: black;
            height: 12px;
            width: 100%;
            display: flex;
            text-align: center;
            margin: 0 auto;
            outline: none;
            border: none;
            border-radius: 15px;
        }

        #register button {
            padding: 15px 0px;
            color: white;
            height: 40px;
            width: 100%;
            background-color: black;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            outline: none;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>

</body>

</html>