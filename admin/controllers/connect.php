<?php
    include_once dirname(__FILE__).'/../models/User.php';

    if(isset($_POST)){
        $usr = new User();
        $usr->setEmail(Tools::secure($_POST['mail']))->setPass(Tools::secure($_POST['psw']));

        if(empty($usr->getEmail()) or empty($usr->getPass())){
            Tools::setError("Insert your E-mail and Password !");
            Back();
        }else{
           if(Tools::verifyMail($usr->getEmail())){
               echo 'Pas : '.$_POST['psw'];
                $res = $usr->isUser();
               if($res){
                   setcookie('email', $res['email'], time() + 86400, null,null, false, true);
                   setcookie('idUser', $res['id'], time() + 86400, null,null, false, true);
                   setcookie('pics', $res['pics'], time() + 86400, null,null, false, true);
                   setcookie('phone', $res['phone'], time() + 86400, null,null, false, true);
                   setcookie('name', $res['fullname'], time() + 86400, null,null, false, true);
                   Tools::connected();
                   header('Location:home.php?');
               }else{
                   Tools::setError('Your E-mail or Password is not valid !');
                   back();
               }
           }else{ Tools::setError('Insert a valid E-mail !'); Back();}
        }
    }else{ Back(); }

    function Back()
    {
        header('Location:index.php');
    }