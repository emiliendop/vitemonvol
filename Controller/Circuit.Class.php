<?php
    require_once('connexion_bd.php');
    require_once('circuit-deplacement.class.php');
    require_once('circuit-utilisateur.php');

    class circuit{
        public function __construct(){
        }
        public function get_nom($i){
            global $connexion;
            $requet="SELECT`nom` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function get_description($i){
            global $connexion;
            $requet="SELECT`description` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function get_nombre_place_total($i){
            global $connexion;
            $requet="SELECT`nombre_place_total` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function get_date_debut($i){
            global $connexion;
            $requet="SELECT`date_debut` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function get_date_fin($i){
            global $connexion;
            $requet="SELECT`date_fin` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function get_prix($i){
            global $connexion;
            $requet="SELECT`prix` FROM `circuit`Where `id`=".$i."";
            $result= $connexion->query($requet);
            return $result;
        }
        public function ajout_circuit($n,$d,$dd,$nbr,$df,$p)//ajouter un circuit
        { 
            global $connexion;

            $requet="INSERT INTO `circuit`(`nom`,`description`,`nombre_place_total`,`date_debut`,`date_fin`,`prix`)
            VALUES('".$n."','".$d."','".$nbr."','".$dd."','".$df."','".$p."')";
            $result= $connexion->query($requet);
        }
        public function supprime_circuit($i)//suprimer un circuit il suprimme automatique les deplacement en passant pas circuit deplacemnt et les reservation lier au circuit
        {
            global $connexion;
            $circuit_depla=new circuit_deplacement($i);
            $circuit_depla->supprime_cir($i);
            $circuit_ut=new circuitutilisateur();
            $circuit_ut->supprime_reserva($circuit_ut->getid1($i));
            $requet="DELETE FROM `circuit` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
        }
        public function modifie_circuit($i,$n,$d,$nbr,$dd,$df,$p)//modifie un circuit 
        {
            global $connexion;
            if($n!=null){
                $requet="UPDATE `circuit` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($d!=null){
                $requet="UPDATE `circuit` set `description`='".$d."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($nbr!=null){
                $requet="UPDATE `circuit` set `nombre_place_total`='".$nbr."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($dd!=null){
                $requet="UPDATE `circuit` set `date_debut`='".$dd."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($df=null){
                $requet="UPDATE `circuit` set `date_fin`='".$df."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($p!=null){
                $requet="UPDATE `circuit` set `prix`='".$p."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
    }
    
?>