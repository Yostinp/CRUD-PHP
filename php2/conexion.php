<?php
    try {
        $conexion = new PDO('mysql:host=localhost; dbname=bd-floreria', 'root', '');

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        $error = $e->getMessage();
        echo ('error ' . $error);
    }









    // class DB {
//     private $localhost;
//     private $db ;
//     private $user ;
//     private $password;
//     public function __construct(){
//             $this->localhost = 'localhost';
//             $this->db = 'login';
//             $this->user = 'root';
//             $this->password = '';
//     }
//     public function conexion(){
//         try{
//             $conexion = new PDO ('mysql:host=' . $this->localhost.';, dbname=bd-'.$this->db.';' , $this->user,$this->password);
//             $conexion ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//         }
//         catch (Exception $e){
//                 die('error ' . $e->getLine());
//         }
//     }
// }
    


    ?>