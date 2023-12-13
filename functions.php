<?php
function email_control($email) {
    if(!str_contains($email, '@') && !str_contains($email, '.')) {
        return 'La mail inserita NON è valida';
    } else {
        return 'Mail valida';
    }
}
?>