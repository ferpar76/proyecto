
<!doctype html>



<html>

<head>
    
    
</head>

<body>
    
<?php

    
    

try{
   
    $nom=$_POST["login"];
    $contra=$_POST["password"];
    
    $base = new PDO("mysql:host=localhost;dbname=reportesgraficos","root","");
    //$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $resultado=$base->prepare("call login(?,?)");
    $resultado->bindParam(1,$nom);  
    $resultado->bindParam(2,$contra);
    $resultado->execute();
    
    $numeroRegistro=$resultado->rowCount();
    echo $numeroRegistro;
    
    if($numeroRegistro!=0){
        
        session_start();
        
        $_SESSION["usuario"]=$_POST["login"];//comprueba el login
            
       
          header("location:index.php");
        
    }else{
        echo "hola";
        
        header("location:login.php");
        
    }
    
}catch(Exception $e){
    
    
    die("Error:".$e->getMessage());
    
}




?>


</body>
</html>
