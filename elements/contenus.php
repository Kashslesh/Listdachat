<?php 
if(isset($_GET)){
    if(isset($_GET["suprimer"])){
        if($_GET["suprimer"] = 1){
            unlink('myfile.txt') or die ('textERR');
        }
    }
}
if(isset($_POST)){
    if (isset($_POST['list'])){
        $input_info = $_POST["list"];

    $fp = fopen("myfile.txt","a");
    $test = fwrite($fp, $input_info."\n");
    fclose($fp);
    
    }
}
if (file_exists("myfile.txt")){
    $file_array = file("myfile.txt");
}else {
    $file_array = [];
    file_put_contents("myfile.txt", "");
}




?>
<div class="container">
    <div class="resultat">
        <ul>
            <?php
    for($i = 0; $i < count($file_array);$i++){
        echo "<li><p>$file_array[$i]</p></li>";
    }
        
    ?>;
    </ul>
</div>
<div class="divIput">
<form action="index.php" method="POST">
<input type="text" id="list" name="list">
<button>ajouter</button>
</form>
<form method="GET" action="index.php?delete=1">
<button name="suprimer" type="submit">Suprimer</button>
</form>