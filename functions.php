<?php
session_start();
function email_control($email){
    if (!str_contains($email, '@') || !str_contains($email, '.')) {
        $_SESSION['auth'] = false;
        return false;
    } else {
        $_SESSION['auth'] = true;
        $_SESSION['mail'] = $email;
        return true;
    }
}
