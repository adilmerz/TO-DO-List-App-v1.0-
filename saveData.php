<?php

    //define variables
    $newTask = null;
    $time = date("Y/m/d");
   
    //get a old data from file list.json
    $old_data = file_get_contents('list.json');
    
    //decode file JSON to array 
    $old_json = json_decode($old_data, true);  
    
    //set size of array for id value
    $id = sizeof($old_json);
  
    //get value tapping by user in input 
    $newTask = $_POST["txtNewTask"];

    //ignore null value of input 
if($newTask!=null){
     
    //write a new task
    $task = array(  
         'id'     =>  $id  ,  
         'time'   =>  $time ,  
         'task'   =>  $newTask, 
         'active' =>   false 
    );

    $old_json[] = $task;  

    //convert array data to json
    $new_data = json_encode($old_json); 
    
    //Append file
    file_put_contents('list.json', $new_data);
}
    //redirect to index.php
    header("Location: ./");
?>