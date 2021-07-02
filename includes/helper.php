<?php
session_start();


function direct_page($page, $control_session)
{

    if ($control_session) :
        if (isset($_SESSION['name'])) :
            header("Location: " . $page . ".php");
        endif;
    else :
        if (!isset($_SESSION['name'])) :
            header("Location: " . $page . ".php");
        endif;
    endif;
}

function get_all_data($sql)
{
    $pdo = new PDO ("mysql:host=localhost;dbname=test", "root", "");
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function delete_row_db($table,$col_value,$params){
    $pdo = new PDO ("mysql:host=localhost;dbname=test", "root", "");
    $query = $pdo->prepare("DELETE FROM $table WHERE $col_value = $params");
    $query->execute();
    return $query;
}

