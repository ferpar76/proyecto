    
<?php


try{
    
   if(isset($_POST["articulo"])){
    $nom=$_POST["articulo"];}
    if(isset($_POST["numero"])){
        
        $cant=$_POST["numero"];
        
    }
    
   
    
    $base = new PDO("mysql:host=localhost;dbname=reportesgraficos","root","");
    //$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $resultado=$base->prepare("call mostrarVenta(?)");
    $resultado->bindParam(1,$nom);
    $resultado->execute();
    
  
      

    
}catch(Exception $e){
    
    
    die("Error:".$e->getMessage());
    
}
      



?>
