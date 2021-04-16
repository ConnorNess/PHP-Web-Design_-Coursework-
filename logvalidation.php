<?php

function isLogFormValid(){
    if (isset($_POST['logsubmit']) && isLogUserValid() && isLogPassValid())
        return true;
    else
        return false;
}

//Validation
function isLogUserValid(){
    if (!isset($_POST['logsubmit'])) return true;
        if ($_POST['logusername'] == '')
            return false;
        else
            return true;
}

function isLogPassValid(){
    if (!isset($_POST['logsubmit'])) return true;
        if ($_POST['logpassword'] == '')
            return false;
        else
            return true;
}


//Display warnings
function displayLogUserWarning(){
    echo "&nbsp;&nbsp;Please input a username.";
}

function displayLogPassWarning(){
    echo "&nbsp;&nbsp;Please input a password.";
}