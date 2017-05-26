<?php

$sipro=explode("/",$_SERVER['SCRIPT_NAME'] );$sipro=$sipro[1];
session_start();
include ($_SERVER['DOCUMENT_ROOT']."/".$sipro."/conexion_PDO.php");

if($_POST['accion']=='insertar'){

    $cliedocu=$_POST['cliedocu'];
    $clienomb=$_POST['clienomb'];
    $clieapel=$_POST['clieapel'];
    $clietele=$_POST['clietele'];
    $clieciud=$_POST['clieciud'];
    $cliedire=$_POST['cliedire'];
    $clieedad=$_POST['clieedad'];
    $cliecorr=$_POST['cliecorr'];
    $cliepass=$_POST['cliepass'];
    
    $strSQL="INSERT INTO clientesivo(cliedocu,clienomb,clieapel,clietele,clieciud,cliedire,clieedad,cliecorr,cliepass)VALUES('$cliedocu','$clienomb','$clieapel','$clietele','$clieciud','$cliedire','$clieedad','$cliecorr','$cliepass')"; 
        $bd->query($strSQL);
        if($bd->execute()){
            $response['resp']=1;    
        }
        echo json_encode($response);
        $bd=null;
        exit(); 
 } else if($_POST['accion']=='listar'){
        $strSQL='SELECT clienomb,clietele,cliecorr FROM clientesivo order by clienomb;';
        $bd->query($strSQL);
        $lista=$bd->resultset();
        $response['datos']=$lista;
        $response['resp']=1;
         
        echo json_encode($response);
        $bd=null;
        exit();
   } 
  else if($_POST['accion']=='edicion'){
       $cliedocu=$_POST['cliedocu'];
       $cliecorr=$_POST['cliecorr'];
       $clietele=$_POST['clietele'];

       $strSQL="UPDATE clientesivo SET cliecorr='$cliecorr', clietele='$clietele' WHERE cliedocu='".$_POST['cliedocu']."'";
       $bd->query($strSQL);
       if($bd->execute()){
           $response['resp']=1;
       }
       echo json_encode($response);
       $bd=null;
       exit();
 }
 
  else if($_POST['accion']=='eliminar'){
        $cliedocu=$_POST['cliedocu'];

        $strSQL="DELETE FROM clientesivo WHERE cliedocu='".$_POST['cliedocu']."'";
        $bd->query($strSQL);
        if($bd->execute()){
                $response['resp']=1;
            }   
        echo json_encode($response);
        $bd=null;
        exit();
  }
        else if($_POST['accion']=='crear'){
        $cliedocu=$_POST['cliedocu'];
        $peditipo=$_POST['peditipo'];
        $peditall=$_POST['peditall'];
        $pedicolo=$_POST['pedicolo'];
        $pediespe=$_POST['pediespe'];
        
        $strSQL="INSERT INTO pedidoivo(cliedocu,peditipo,peditall,pedicolo,pediespe) VALUES('$cliedocu','$peditipo','$peditall','$pedicolo','$pediespe')";
        $bd->query($strSQL);
        if($bd->execute()){
            $id=$bd->lastInsertId();
            $response['id']=$id;
                $response['resp']=1;
        
        }
        echo json_encode($response);
        $bd=null;
        exit();
 } else if($_POST['accion']=='cargardatos'){
               $cliendocu=$_POST['cliedocu'];

           $strSQL="SELECT pedinume, peditipo, peditall, pedicolo, clieciud, cliedire FROM clientesivo as c INNER JOIN pedidoivo  as p ON c.cliedocu = p.cliedocu where p.cliedocu='".$_POST['cliedocu']."';";
           $bd->query($strSQL);
           $cargardatos=$bd->resultset();
            if($cargardatos){
                
                $response['datos']=$cargardatos;
                $response['resp']=1;
            }
            echo json_encode($response);
            $bd=null;
            exit();
    }
    else if($_POST['accion']=='ingresar'){
        
      
       $cliecorr=$_POST['cliecorr'];
       $cliepass=$_POST['cliepass'];

        $strSQL="SELECT cliecorr,cliepass FROM clientesivo WHERE cliecorr='".$cliecorr."' AND cliepass='".$cliepass."'";
        $bd->query($strSQL);
        $response['sqllogin']=$strSQL;
        $bd->execute();
        if($bd->rowCount()>0){
           $_SESSION['contrasena']=$cliepass;
            $response['resp']=1;
        }else{
            $response['resp']=0;
        }   
 
       
            //$response['resp']=1;  
        echo json_encode($response);
        $bd=null;
        exit();
    }      
            