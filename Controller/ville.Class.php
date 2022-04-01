<?php
    require_once('connexion_bd.php');

    class ville{
        public function __construct($n,$h)
        {
            global $connexion;

            $requet="INSERT INTO `ville`(`nom`,`hotel`)
            VALUES('".$n."','".$h."')";
            $result= $connexion->query($requet);
            $result->close();
        }
        public function supprime_ville($i){
            global $connexion;
            $requet="DELETE FROM `ville` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
            $result->close();
        }
        public function modifie_ville($i,$n,$h){
            global $connexion;
            if($n!=null){
                $requet="UPDATE `ville` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            }
            if($h!=null){
                $requet="UPDATE `ville` set `hotel`='".$h."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            }
        }
    }
?>