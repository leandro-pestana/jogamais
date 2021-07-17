<?php

session_start();
if($_POST["role"] != null && $_POST["role"] != "") {
    $_SESSION["jogamais_lgpd"] = "true";
    $_SESSION["jogamais_ga"] = $_POST["ativaga"];
}

?>