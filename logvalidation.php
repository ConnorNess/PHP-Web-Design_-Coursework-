<?php

function isFormValid(){
    if (isset($_POST['submit']) && isUserValid() && isPassValid())
        return true;
    else
        return false;
}

//Validation
function isUserValid(){
    if (!isset($_POST['submit'])) return true;
        if ($_POST['username'] == '')
            return false;
        else
            return true;
}

function isPassValid(){
    if (!isset($_POST['submit'])) return true;
        if ($_POST['password'] == '')
            return false;
        else
            return true;
}


//Display warnings
function displayUserWarning(){
    echo "&nbsp;&nbsp;Please input a username.";
}

function displayPassWarning(){
    echo "&nbsp;&nbsp;Please input a password.";
}