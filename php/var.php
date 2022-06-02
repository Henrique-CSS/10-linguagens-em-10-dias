<?php
$intValue = array();
$intName = array();
$intId = 0;
function NewInt($name, $value) {
    global $intId, $intName, $intValue;
    $intId++;
    $intValue[$intId] = $value;
    $intName[$intId] = $name;
    return $intId;
}
function GetInt($name) {
    global $intName, $intValue;
    $position = array_search($name, $intName);
    return $intValue[$position]
}