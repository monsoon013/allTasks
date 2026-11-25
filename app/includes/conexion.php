<?php

$uri=getenv("MONGODB_URI");

if(!$uri){
    throw new RuntimeException("neno non configuraches a url");
}

$manager = new MongoDB\Driver\Manager($uri);
$usuarios = "alltasks_db.users";
$proyectos = "alltasks_db.projects";
$tarjetas = "alltasks_db.cards";

?>