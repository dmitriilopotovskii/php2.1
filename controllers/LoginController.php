<?php


class LoginController
{
    public function isAdmin()
    {
        $login = Login::GetLogin();
        $role = $login->role;
        if ($role == 'admin')
        {   session_start();
            $_SESSION['role'] = 'admin';
        }
        else
        {
            throw new E403Exception('net dostupa');
        }
    }


}