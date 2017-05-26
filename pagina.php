<?php 
session_start();
require_once("conexion.php");
//print_r($_POST);          

if($_POST['accion']=='ingresar'){
        
      
       $usuacorr=$_POST['usuacorr'];
       $usuacont=$_POST['usuacont'];

        $sql="SELECT usuacorr,usuacont FROM usuarios WHERE usuacorr='".$usuacorr."' AND usuacont='".$usuacont."'";
        $uno=$bd->query($sql);
        $response['sqllogin']=$sql;
        $dos=$uno->execute();
        if($uno->rowCount()>0){
            $response['resp']=1;
        }else{
            $response['resp']=0;
        }   
 
       
            //$response['resp']=1;  
        echo json_encode($response);
        $bd=null;
        exit();
    }      