<?php

namespace App\Controllers;
class Admin
{
    public $mail, $mailer;

    public function __construct()
    {
        $this->mail = new \Nette\Mail\Message;
        $this->mail->setFrom('Dmitrii <lom1666@gmail.com>');
        $this->mail->addTo('lom1666@gmail.com');
        $this->mail->setSubject('otredactirovano uspeshno');

        $this->mailer = new \Nette\Mail\SmtpMailer([
            'host' => 'smtp.gmail.com',
            'username' => 'lom1666@gmail.com',
            'password' => '*********',
            'secure' => 'ssl',
        ]);

    }

    public function NewsAdd()
    {
        if ($_SESSION['role'] == 'admin') {
            $news = new \App\Models\News;
            $news->title = $_POST['title'];
            $news->text = $_POST['text'];
            $news->uploadImg();
            $news->insert();
            $this->mail->Setbody('dobavlena novost ' . $news->title);
            $this->mailer->send($this->mail);
            header("Location: /");
        } else throw new E403Exception('Net Dostupa');
        header("Location: /");
    }


    public function UpdateNews()
    {
        if ($_SESSION['role'] == 'admin') {
            $article = \App\Models\News::findOne($_POST['id']);
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->update();
            header("Location: /");
        } else throw new E403Exception('Net Dostupa');
        header("Location: /");


    }

    public function DeleteNews()
    {
        if ($_SESSION['role'] == 'admin') {
            $article = \App\Models\News::findOne($_POST['id']);
            $article->Delete();
            header("Location: /");
        } else throw new E403Exception('Net Dostupa');
        header("Location: /");


    }


}
