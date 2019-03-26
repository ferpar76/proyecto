


















    
    <?php
    
        try{
            
            $conexion=new PDO("mysql:host=localhost;dbname=reportesgraficos","root","");
            $conexion->exec("set character set utf8");
            
           
            
            
        }catch( Exection $e){
            
            
            die("Error:".$e->GetMessaje());
            
            
            
        }
    
    
    ?>
    
    

