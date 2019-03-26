<?php 
$cnn= new mysqli("localhost","root","","reportesgraficos") or die("error:".$cnn->connect_errno);

if(isset($POST['query'])){
    
    $respuesta=mysqli_real_escape_string($cnn,$_POST['query']);
    $data=array();
    $sql="select Nombre from articulos where Nombre like'%".$respuesta."%'";
    $res=$cnn->query($sql);
    if($res->num_rows>0){
        
        while($row=$res->fetch_assoc()){
            
            $data[]=$row["Nombre"];
            
        }
        
        echo json_encode($data)
        
        
    }
    
}
?>