<?php

function isRegisterFormValid(){
    if (isset($_POST['registersubmitsubmit']) && isRegisterUserValid() && isRegisterPassValid())
        return true;
    else
        return false;
}

//Validation
function isRegisterUserValid(){
    if (!isset($_POST['registersubmitsubmit'])) return true;
        if ($_POST['registersubmitusername'] == '')
            return false;
        else
            return true;
}

function isRegisterPassValid(){
    if (!isset($_POST['registersubmitsubmit'])) return true;
        if ($_POST['registersubmitpassword'] == '')
            return false;
        else
            return true;
}


//Display warnings
function displayRegisterUserWarning(){
    echo "&nbsp;&nbsp;Please input a username.";
}

function displayRegisterPassWarning(){
    echo "&nbsp;&nbsp;Please input a password.";
}