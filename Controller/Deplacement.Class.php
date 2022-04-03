<?php
    require_once('connexion_bd.php');
    require_once('circuit-deplacement.class.php');

    class deplacement{
        public function __construct(){
        }
        public function get_id1($id_ville_depart){
            global $connexion;
            $requet="SELECT `id_` FROM `deplacement` WHERE `id_ville_depart`=".$id_ville_depart."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_deplacement'];
                $i++;
            }
            return $t;
        }
        public function get_id2($id_ville_arrivee){
            global $connexion;
            $requet="SELECT `id` FROM `deplacement` WHERE `id_circuit`=".$id_ville_arrivee."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $t;
        }
        public function getplaning($id){
            global $connexion;
            $requet="SELECT `planning_jour` FROM `deplacement` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['planning_jour'];
            }
            return $t;
        }
        public function getheurdepart($id){
            global $connexion;
            $requet="SELECT `heure_depart` FROM `deplacement` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['heure_depart'];
            }
            return $t;
        }
        public function getheure_arrivee($id){
            global $connexion;
            $requet="SELECT `heure_arrivee` FROM `deplacement` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['heure_arrivee'];
            }
            return $t;
        }
        public function getidville_depart($id){
            global $connexion;
            $requet="SELECT `id_ville_depart` FROM `deplacement` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_ville_depart'];
            }
            return $t;
        }
        public function getidville_arrivee($id){
            global $connexion;
            $requet="SELECT `id_ville_arrivee` FROM `deplacement` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_ville_arrivee'];
            }
            return $t;
        }

        public function ajouter_deplacement($p,$hd,$ha,$ivd,$iva)
        {
            global $connexion;

            $requet="INSERT INTO `deplacement`(`planning_jour`,`heure_depart`,`heure_arrivee`,`id_ville_depart`,`id_ville_arrivee`)
            VALUES('".$p."','".$hd."','".$ha."','".$ivd."','".$iva."')";
            $result= $connexion->query($requet);
        }
        public function supprime_deplacement($i){
            global $connexion;
            $orange=new circuit_deplacement();
            $orange->supprime_dep($i);
            $requet="DELETE FROM `deplacement` WHERE `id`=".$i."";;
            $result=$connexion->query($requet);
        }
        public function modifie_deplacement($i,$p,$hd,$ha,$ivd,$iva){
            global $connexion;
            if($p!=null){
                $requet="UPDATE `deplacement` set `planning_jour`='".$p."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($hd!=null){
                $requet="UPDATE `deplacement` set `heure_depart`='".$hd."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($p!=null){
                $requet="UPDATE `deplacement` set `heure_arrivee`='".$ha."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($p!=null){
                $requet="UPDATE `deplacement` set `id_ville_depart`='".$ivd."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($p!=null){
                $requet="UPDATE `deplacement` set `id_ville_arrivee`='".$iva."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
    }
?>