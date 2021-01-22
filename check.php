<?php

//get id from querystring
$id = (int)$_GET["id"];

//get a old data from file list.json
$old_data = file_get_contents('list.json');

//decode file JSON to array 
$old_json = json_decode($old_data, true);

//update status of task
if ($old_json[$id]['active'] == true)
    $old_json[$id]['active'] = false;
else $old_json[$id]['active'] = true;

//convert array data to json
$new_data = json_encode($old_json);

//Append file
file_put_contents('list.json', $new_data);

//redirect to index.php
header("Location: ./");

