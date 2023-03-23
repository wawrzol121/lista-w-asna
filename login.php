<html>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="styl.css">
</head>
<header>
<h3> Logowanie</h3>

</header>
<body>
    <form method="post">
        <div class="b">
            <p>login <input type="text" name="login"></p>
            <p>hasło <input type="text" name="password"></p>
    
         <?php
        $con = new mysqli("localhost", "root", "", "notka");

             if(isset($_POST["login"])){
            $sql= "SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'";
            $res = $con->query($sql);
            $row = $res->fetch_array();
            if(count($row)>0){
                setcookie("id",$row["id"]);
                header('location:notka.php');
                }
                }

          

                


        ?>
        
   
        <input type="submit" value="Zaloguj">
    </div>
    </form>
    <div class="b1"><button type="button"><a href="zapisz.php">Zapisz się</a></button></div>
   
    
   
    
    
    </body>
</html>