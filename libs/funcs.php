<?php

function debug($date, $die = false){
    echo '<pre>'; print_r($date); echo '</pre>';
    if($die){
        die;
    }
}