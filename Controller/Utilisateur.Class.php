<?php
    require_once('connexion_bd.php');
    require_once('circuit-utilisateur.php');

    class utilisateur{
        public function __construct(){

        }
        public function getnom($id){
            global $connexion;
            $requet="SELECT `nom` FROM `utilisateur` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['nom'];
            }
            return $t;
        }
        public function getprenom($id){
            global $connexion;
            $requet="SELECT `prenom` FROM `utilisateur` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['prenom'];
            }
            return $t;
        }
        public function getmailutil($id){
            global $connexion;
            $requet="SELECT `mail` FROM `utilisateur` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['mail'];
            }
            return $t;
        }
        public function getmotdepasse($id){
            global $connexion;
            $requet="SELECT `mdp` FROM `utilisateur` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['mdp'];
            }
            return $t;
        }
        public function getis_admin($id){
            global $connexion;
            $requet="SELECT `is_admin` FROM `utilisateur` WHERE `id`=".$id."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['is_admin'];
            }
            return $t;
        }
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `utilisateur`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id'];
                $i++;
            }
            return $i;
        }
        public function ajoute_utilisateur($n,$p,$m,$mdp,$is_admin)
        {
            global $connexion;

            $requet="INSERT INTO `utilisateur`(`nom`,`prenom`,`mail`,`mdp`,`is_admin`)
            VALUES('".$n."','".$p."','".$m."','".$mdp."','".$is_admin."')";
            $result= $connexion->query($requet);

        }
        public function supprime_utilisateur($i){
            global $connexion;
            $orange=new circuitutilisateur();
            $orange->supprime_reserva($orange->getid1($i));
            $requet="DELETE FROM `` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
        }
        public function modifie_utilisateur($i,$n,$p,$m,$mdp,$is_admin){
            global $connexion;
            if($n!=null){
                $requet="UPDATE `utilisateur` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);

            }
            if($n!=null){
                $requet="UPDATE `utilisateur` set `prenom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);

            }
            if($n!=null){
                $requet="UPDATE `utilisateur` set `mail`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            } if($n!=null){
                $requet="UPDATE `utilisateur` set `mdp`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);

            } if($n!=null){
                $requet="UPDATE `utilisateur` set `is_admin`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);

            } if($n!=null){
                $requet="UPDATE `utilisateur` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
    }
?>