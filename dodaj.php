 <html>
<head>
    <meta charset="UTF-8">
    <title>dodaj</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<header>
<h3> Dodaj </h3>

</header>
    <body>
        <div class="dod">
            <form method="post">
                
                <p>manga<input type="text" name="manga"></p><br>
                <p>chapter<input type="text" name="chapter"></p><br>
              <p>strona<input type="text" name="strona"></p><br>
                
         <?php 
$conn = mysqli_connect('localhost', 'root', '', 'notka' );


            if(isset($_COOKIE["id"])){
            
            }
                else 
                     $sql="SELECT `login` FROM `user` WHERE `login`=".$_COOKIE["id"]. 
                $name =$conn->query($sql)->fetch_assoc()["login"];
                

               if(isset($_POST["manga"]) && isset($_POST["chapter"]) && isset($_POST["strona"]){
                   $sql="INSERT INTO `notka`(`id,`manga`, `chapter`,`strona`) VAlUES(NULL,'".$_POST['manga']."','".$_POST['chapter']."','".$_POST['strona']."','".$_COOKIE['id']."'NULL);";
                   $conn->query($sql);
                   echo "dodaj";
               }
              
              



                ?>
                <input type="submit" value="dodaj">
            </form>
        </div>
       </body>
</html>