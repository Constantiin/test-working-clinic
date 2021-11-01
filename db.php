<?php

    $db = new PDO('sqlite:base.db');

    $result = $db->query("SELECT * FROM `checks`"); 
    
?>