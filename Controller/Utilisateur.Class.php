<?php
    require_once('connexion_bd.php');

    class utilisateur{
        public function __construct($n,$p,$m,$mdp,$is_admin)
        {
            global $connexion;

            $requet="INSERT INTO `utilisateur`(`nom`,`prenom`,`mail`,`mdp`,`is_admin`)
            VALUES('".$n."','".$p."','".$m."','".$mdp."','".$is_admin."')";
            $result= $connexion->query($requet);
            $result->close();
        }
        public function supprime_utilisateur($i){
            global $connexion;
            $requet="DELETE FROM `` WHERE `id`='".$i."'";;
            $result=$connexion->query($requet);
            $result->close();
        }
        public function modifie_utilisateur($i,$n,$p,$m,$mdp,$is_admin){
            global $connexion;
            if($n!=null){
                $requet="UPDATE `utilisateur` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            }
            if($n!=null){
                $requet="UPDATE `utilisateur` set `prenom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            }
            if($n!=null){
                $requet="UPDATE `utilisateur` set `mail`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            } if($n!=null){
                $requet="UPDATE `utilisateur` set `mdp`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            } if($n!=null){
                $requet="UPDATE `utilisateur` set `is_admin`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            } if($n!=null){
                $requet="UPDATE `utilisateur` set `nom`='".$n."' where `id`='".$i."' ";
                $result= $connexion->query($requet);
                $result->close();
            }
        }
    }
?>