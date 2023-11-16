<?php
include "connect.php";

function get_all($table){
    global $conn;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function get_where($table, $where){
    global $conn;
    $query = "SELECT * FROM $table WHERE $where";
    $result = mysqli_query($conn, $query);
    return $result;
}

// insert data
function insert($table, $data){
    global $conn;
    $fields = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $query = "INSERT INTO $table ($fields) VALUES ('$values')";
    $result = mysqli_query($conn, $query);
    return $result;
}

// update data
function update($table, $data, $where){
    global $conn;
    $fields = array();
    foreach($data as $key => $value){
        $fields[] = "$key = '$value'";
    }
    $fields = implode(", ", $fields);
    $query = "UPDATE $table SET $fields WHERE $where";
    $result = mysqli_query($conn, $query);
    return $result;
}

// delete data
function delete($table, $where){
    global $conn;
    $query = "DELETE FROM $table WHERE $where";
    $result = mysqli_query($conn, $query);
    return $result;
}
?>