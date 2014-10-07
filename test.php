<?php

/**
 * @author Mike Shea
 * @copyright 2014
 * 
 * 
 */
$json=file_get_contents("timers.json");
$data = json_decode($json);
/*
if (count($data->events)) {
    //open table
    echo "<table>";
    
    //cycle through the array
    foreach ($data->events as $idx => $events) {
        
        //output a row
        echo "<tr>";
        echo "<td>$events->name</td>";
        echo "<td>$events->type</td>";
        echo "<td>$events->name</td>";
        echo "<td>$events->type</td>";
        echo "<td>$events->name</td>";
        echo "<td>$events->type</td>";
        echo "<td>$events->name</td>";
        echo "<td>$events->type</td>";
        echo "</tr>";
    }
    
    //close the table
    echo "</table>";
    }
*/

echo "<pre>";
print_r($data);
echo "</pre>";

?>