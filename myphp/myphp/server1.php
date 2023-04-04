<?php
        session_start();
        if(isset($_session['username']))
        {
            echo $_session['username'];
            echo $_session['pass'];
        }
        else
        {
            echo "login first";
        }
?>