<?php

class Tools
{
    static function getError()
    {
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            $_SESSION['error'] = '';
        }
    }

    static function setError($error)
    {
        $_SESSION['error'] = $error;
    }

    static function secure($data) {
        $data  = htmlspecialchars($data);
        $data = trim($data);
        $data = htmlentities($data);
        return $data; 
    }
    
    static function verifyMail($name){
        $ok = false;
        if(!empty($name)){
            if(filter_var($name,FILTER_VALIDATE_EMAIL) == true){
                $ok = true;
            }
        }
        return $ok;
    }


    static function isConnected(){
        if(isset($_SESSION['sign'])){
            return $_SESSION['sign'];
        }else{
            $_SESSION['sign'] = false;
        }
    }

    static function connected(){
        $_SESSION['sign'] = true;
    }

    static function disconnected(){
        $_SESSION['sign'] = false;
        session_destroy();
    }
}
