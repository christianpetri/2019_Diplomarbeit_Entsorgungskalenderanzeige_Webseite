<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 04.03.2019
 * Time: 11:08
 */


define("DOCUMENT_ROOT", $_SERVER["DOCUMENT_ROOT"]);
include DOCUMENT_ROOT . "/../database/connect.php";

header("Content-Type: text/plain");

$circle_id = "";

if (isset($_GET["circleId"])) {
    $circle_id = $_GET["circleId"];
}

if($circle_id != "") {
    $result = $DB->getCheckIfCircleIdExists($circle_id);
    $check = htmlspecialchars($result[0]['result']);
    if($check){
        echo "1";
    } else{
        echo "0";
    }
} else {
    echo "0";
}
