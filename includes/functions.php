<?php
$data = require('data/gallery.php');


// _Renvoi la photo ayant l'id [id], ou FALSE si cet 
//identifiant est introuvable_
function findOneById(int $id): array{
    global $data;
    foreach($data as $keydata){
        if($id === $keydata['id']){
            return $keydata;
        }
    }
    //Introuvable
    return false;
}
    
//_Renvoi le nombre de photos présente dans la base de données._ 
function getCount(): int{
    global $data;
    return count($data);
}

// _Renvoi les [limit] photos, à partir de la photo [offset]._
function findPaged(int $limit, int $offset = 0): array{
    global $data;
    return array_slice($data, $offset, $limit);    
}

function findLatest($limit){
    global $data;

    $i = 0;
    $result = [];
    foreach($data as $key => $value) {
        $date[$key] = $value['date'];
    }
    array_multisort($date, SORT_DESC, $data);
    foreach($data as $photo)
        if($i != $limit){
            $result[] = $photo;
            $i++;
        }
    return $result;
}
?>