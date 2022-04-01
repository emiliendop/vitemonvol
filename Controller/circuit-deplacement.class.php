<?php
    require_once('connexion_bd.php');
    require_once('Deplacement.Class.php');
    class circuit_deplacement{
        public function __construct(){
        }
        public function get_id_deplacement($id_cir){  
            global $connexion;
            $requet="SELECT `id_deplacement` FROM `circuit_deplacement` WHERE `id_circuit`=".$id_cir."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_deplacement'];
                $i++;
            }
            return $t;
        }
        public function get_id_circuit($id_dep){  
            global $connexion;
            $requet="SELECT `id_circuit` FROM `circuit_deplacement` WHERE `id_circuit`=".$id_dep."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_circuit'];
            }
            return $t;
        }
        public function ajoutcirccuitdeplacement($id_cir,$id_dep)
        {
            global $connexion;

            $requet="INSERT INTO `circuit_deplacement`(`id_circuit`,`id_deplacement`)
            VALUES('".$id_cir."','".$id_dep."')";
            $result= $connexion->query($requet);
        }
        public function supprime_cir($id_cir){
            global $connexion;
            $re="SELECT `id_deplacement` FROM `circuit_deplacement` WHERE `id_circuit`=".$id_cir."";
            $do=$connexion->query($re);
            $requet="DELETE FROM `circuit_deplacement` WHERE `id_circuit`=".$id_cir."";;
            $result=$connexion->query($requet);
            while($a=$do->fetch_array(MYSQLI_ASSOC)){
                $orange=new deplacement();
                $orange->supprime_deplacement($a['id_deplacement']);
            }
        }
        public function supprime_dep($id_dep){
            global $connexion;

            $requet="DELETE FROM `circuit_deplacement` WHERE `id_deplacement`=".$id_dep."";;
            $result=$connexion->query($requet);
        }
    }
?>
