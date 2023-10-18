<?php 
try {
    $pdo = new PDO('mysql:host=mysql.cms.gre.ac.uk;dbname=mdb_jf1504j;charset=ytf8mb4', 'jf1504j', 'jf1504j');
    $output = "Database Connection Established";
} catch (PDOException $e){
    $output = "Unable to connect to database sever:" . $e; //dev version 1
    // $output = "Unable to connect to the database server:" . $e->getMessage(); //dev version 2
    // $output = "Unable to connect to the database server:" ; //public version
}
include 'templates/output.htmp.php'