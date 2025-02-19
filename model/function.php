<?php


//transform date agl en français
function convertDateToFR($date){
    $retour= date("d-m-Y", strtotime($date)); 
    return $retour; 
}