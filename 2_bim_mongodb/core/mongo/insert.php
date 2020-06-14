<?php

function insert($obj, $collection){
    require_once __DIR__."/manager.php";

    $db= new \MongoDB\Driver\Bulkwrite;

    $db->insert($obj);

    $manager->executeBulkwrite($collection, $db);
}