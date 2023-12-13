<?php
function email_control($email){
    if (!str_contains($email, '@') || !str_contains($email, '.')) {
        $_SESSION['mail'] = $email;
        $_SESSION['auth'] = false;
        return false;
    } else {
        $_SESSION['mail'] = $email;
        $_SESSION['auth'] = true;
        return true;
    }
}
