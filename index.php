<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
  

   $select_validation = mysqli_query($conn, "SELECT * FROM `validation` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_validation) > 0){

      $row = mysqli_fetch_assoc($select_validation);


         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:.php');

      

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
} 
?>  
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" href="index.css">
</head>

<body class="container">

    <header> 
        <!-- logo -->
        <div>
            <img src="img/food logo.jpg" alt="">
        </div>

        <!--This is a menu-->
        <ul >
            <li> <a class="active" chref="%">Menu</a></li>
            <!-- <li><a href="catering.html">Catering</a></li> -->
            <li><a href="form.php">Contact</a></li>
            <li class="order"><a href="orders.html">Orders</a></li>
        </ul>

        <div class="menu">
            <span class="ham"></span>
            <span class="ham"></span>
            <span class="ham"></span>
        </div>
    </header>

    <main>
        <div class="one">
            <img src="img/new fruits.jpg">
            <p>WE PROVIDE FRUITS</p>
            <button>Order</button>
        </div>

        <div class="one">
            <img src="img/chicken 2.jpg">
            <p>WE PROVIDE CHICKEN STOCKS</p>
            <button> Order</button>
        </div>

        <div class="one">
            <img src="img/my food 1.jpg">
            <p>WE PROVIDE MEAL</p>
            <button onclick="">Order</button>
        </div>

    </main>

    <section class="section">
        <div class="comment">
            <P>
            <h2><u>GET TO KNOW ABOUT US</u></h2>
            </P>
            <div>To enhance online presence and engage with customers. Optimize website, menu, and online ordering for a
                seamless customer experience. Utilize and local search strategies to food drive traffic.</div>
            <div>We control the choice of the world, ever-lasting and Refreshing taste to our patronages. Be one.</div>
            <div>We offer meals, fruits and stocks as well with affordable cost with enough discount.</div>
        </div>
    </section> 
  

    <major id="major">
        <div class="chefs">
            <div class="chef">
                <img src="img/carton cooking.jpg">
            </div>

            <div class="chef">
                <img src="img/carton 2.jpg">
            </div>

            <div class="chef">
                <img src="img/carton 3.jpg">  
            </div>
        </div>
    </major>


    <section class="hero">
        <h1>DE ALES MEAL</h1>
        <p><b>YOUR SATISFACTION IS OUR GOAL!</b><br />

    </section>

    <class id="image">
        <div class="secondchild">
            <p>
            <h3>The most Conducive and Convenient</h3>
            </p>
            <img src="img/rest.jpg" alt="">
        </div>
    </class>

    <footer>
        <p> Get more info on Facebook <i>De Ales</i>,Whatapp 08144521719, Twitter, Instagram and Lots more.<br> </p>

        <div class="two">
            <div><img src="img/facebook logo.avif"></div>
            <div><img src="img/whatapp logo.png"></div>
            <div><img src="img/twitter logo.png"></div>
            <div><img src="img/instagram logo.jpg"></div>
        </div>
    </footer>



</body>

</html>