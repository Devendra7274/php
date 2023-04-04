<?php
        session_start();
        unset($_session['username']);
        unset($_session['pass']);
        session_destroy();
        echo "session destroy";

?>