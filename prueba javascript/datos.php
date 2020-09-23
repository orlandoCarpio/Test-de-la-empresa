<?php
            session_start();
            if (isset($_GET['id']) && preg_match("/^([0-9])*$/",$_GET['id'])) { 
                $_SESSION['array'][]=$_GET['id'];
                if(count($_SESSION['array'])!=10)
                    echo json_encode(['opcion'=>true,'cantidad'=>count($_SESSION['array'])]);
                else{
                    echo json_encode(['opcion'=>true,'datos'=>$_SESSION['array'],'cantidad'=>count($_SESSION['array'])]);
                    session_destroy();
                }
                
                
            }else{
                echo json_encode(['opcion'=>false]);
            }
        ?>