<html>
<head>
    <meta charset="UTF-8">
    <title>zapisz</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<header>
<h3> Zapisz sie </h3>

</header>
    <body>
        <div class="b">
            <form method="post">
                
                <p>login<input type="text" name="login"></p><br>
                <p>password<input type="text" name="password"></p><br>
        
       <?php 
$conn = mysqli_connect('localhost', 'root', '', 'notka' );


            if(isset($_POST['login'])){
                $login=$_POST['login'];
                $password=$_POST['password'];
             

                $sql="INSERT INTO `user` (`id`, `login`, `password`, ) VALUES ('', '$login', '$password', )"; 
                $result= $conn->query($sql);
                echo $result;
                header('location:login.php');
              
            }


                ?>
                <input type="submit" value="Zakończ">
        </form>
        
        </div>
    </body>
</html>