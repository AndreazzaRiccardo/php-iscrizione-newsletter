<?php
/**
 * Controlla se l'email è formattata correttamente
 * @param mixed $email
 * 
 * @return [boolean] true se è valida, false altrimenti
 */
function email_control($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ./thankyou.php');
    } else {
        return false;
    }
}
