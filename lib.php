<?php

    session_start();
    
    function kiaz() {
        if (isset($_SESSION['akt_user_ID'])) {
            $akt_user_ID = $_SESSION['akt_user_ID'];
        } else {
            $akt_user_ID = -1;
        }
        return $akt_user_ID;
    }

?>