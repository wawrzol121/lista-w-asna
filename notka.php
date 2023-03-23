<html >
<head>
    <meta charset="utf-8" />
    <title>lista</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
    <h1>Lista </h1>
    <br>
    <a href="add.php"><input type="submit" value="Dodaj " > </a> 
    </div>
    
<div class="Lista"> 
    

<?php
$conn = new mysqli("localhost", "root", "", "notka");

       $sql= '"SELECT manga ,chapter , strona FROM manga "';
         
    $res = $conn->query("SELECT `manga`,`chapter`,`strona`,  FROM `manga`");
    $manga = $res->fetch_all(MYSQLI_ASSOC);
    for($i = 0; $i<count($manga); $i++){
        echo"<h3>id = ".$manga[$i]["id"]."</h3>";
        echo"<h3>manga = ".$manga[$i]["manga"]."</h3>";
        echo"<h3>chapter = ".$manga[$i]["chapter"]."</h3>";
        echo"<h3>strona = ".$manga[$i]["strona"]."</h3>";

    

?>
     </div>
</body>
</html>
