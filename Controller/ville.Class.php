<?php
    require_once('connexion_bd.php');

    class ville{
        public function __construct(){
        }
        public function getnom($i){
            global $connexion;
            $requet="SELECT `nom` FROM `ville` WHERE `id`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['nom'];
            }
            return $t;
        }
        public function gethotel($i){
            global $connexion;
            $requet="SELECT `hotel` FROM `ville` WHERE `id`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['hotel'];
            }
            return $t;
        }
        public function ajout($n,$h){
            global $connexion;

            $requet="INSERT INTO `ville`(`nom`,`hotel`)
            VALUES('".$n."','".$h."')";
            $result= $connexion->query($requet);
            $result->close();
        }
        public function supprime_ville($i){
            global $connexion;
            $orange=new deplacement();
            $orange->supprime_deplacement($i);
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