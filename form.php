<?php
include 'config.php';

if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country= mysqli_real_escape_string($conn, $_POST['country']);

    $sq2 = "INSERT INTO `validation` (name, email, date, time, phone, country) VALUES ('$name', '$email','$date', '$time', '$phone', '$country');";
    mysqli_query($conn, $sq2) or die('Query Failed');


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    body{
    background-image: url("img/crab background.jpg");
            }
    form{
        background-color: aqua;
        padding: 15px;
    }
    .form {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding: 10px;
        width: 100%;
        color:black;
    }

    .formholder {
        display: flex;
        border-radius: 20px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        /* opacity: 0.1; */
        margin-bottom: 10px;
        /* length:100%; */
        padding: 20px;
        /* width: 100%; */
        flex-basis: 1000px;
    }


    input {
        width: 100%;
        height: 30px;
        margin-top: 10px;
        margin-bottom: 10px;
        /* margin: 10px 0; */
    }


    .formcontainer {
        flex-basis: 700px;

    }
    #form input{
        outline: none;
    }

    .form h1{
        align-items:center;
    }
    .btn{
        padding: 10px;
    }
    </style>
</head>
<body>  
    <a href="index.php" style="color: white; font-size: 30px; font-weight: bold;">Home</a>
    <section class="form">
        <div class="formholder ">
            <div class="formcontainer">
                <form action="" method="post" id="form">
                    <h1><b>Make a Reservation<b></h1>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    <br>
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                    <br>
                    <label for="phone">Phone:</label>
                    <input type="number" id="phone" name="phone"  required>
                    <br>
                    <label for="country"> Country:</label>
                    <input type="country" id="country" name="country"  required>
                    <br>
                    <input type="submit" name="submit" value="login now" class="btn">
                    

                    <!-- <button type="submit">Reserve Table</button></div> -->
                </form>
            </div>
        </div>
    </section>

    
            

</body>
</html>