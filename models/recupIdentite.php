<?php
class Identite{

public static function recupIdentite(){
	$query = DataBase::bdd()->prepare("SELECT * from identite");
	$query->execute();
        $fetch  = $query->fetch();
        return sizeof($fetch) > 0 ? $fetch : false;
    }

}


