<?php

//sanitise data when going in// escape when data coming out
function escape($string){
    return htmlentities($string, ENT_QUOTES,'UTF-8');
}