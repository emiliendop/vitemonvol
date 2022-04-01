<?php
    require_once('connexion_bd.php');

    class circuitutilisateur{
        public function __construct(){

        }
        public function get_datereservation1($id){
            global $connexion;
            $requet="SELECT `date_reservation` FROM `utilisateur_circuit` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['date_reservation'];
                $i++;
            }
            return $t;
        }
        public function getid_utilisateur($id){
            global $connexion;
            $requet="SELECT `id_utilisateur` FROM `utilisateur_circuit` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_utilisateur'];
                $i++;
            }
            return $t;
        }
        public function getid1($id_ut){
            global $connexion;
            $requet="SELECT `id` FROM `utilisateur_circuit` WHERE `id_utilisateur`=".$id_ut."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }
        public function getid2($id_circuit){
            global $connexion;
            $requet="SELECT `id` FROM `utilisateur_circuit` WHERE `id_utilisateur`=".$id_circuit."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }
        public function getcir($i){
            global $connexion;
            $requet="SELECT `id_circuit` FROM `utilisateur_circuit` WHERE `id`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_circuit'];
                $i++;
            }
            return $t;
        }
        public function ajouter_reser($id_reserv,$id_ut,$id_circuit)
        {
            global $connexion;

            $requet="INSERT INTO `utilisateur_circuit`(`date_reservation`,`id_utilisateur`,`id_circuit`)
            VALUES('".$id_reserv."','".$id_ut."','".$id_circuit."')";
            $result= $connexion->query($requet);
        }
        public function supprime_reserva1($i_reser){
            global $connexion;
            $requet="DELETE FROM `utilisateur_circuit` WHERE `id`=".$i_reser."";
            $result=$connexion->query($requet);
        }
    }
?>