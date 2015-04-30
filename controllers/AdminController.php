<?php
//require __DIR__ . '/../models/NewsArticle.php';


class AdminController
{
public $mail,$mailer;
    public function __construct()
    {
        $this->mail = new Nette\Mail\Message;
        $this->mail->setFrom('Dmitrii <lom1666@gmail.com>');
        $this->mail->addTo('lom1666@gmail.com');
        $this->mail->setSubject('otredactirovano uspeshno');

        $this->mailer = new Nette\Mail\SmtpMailer([
            'host' => 'smtp.gmail.com',
            'username' => 'lom1666@gmail.com',
            'password' => '*********',
            'secure' => 'ssl',
        ]);

    }
    public function NewsAdd()
    {
        $news = new NewsArticle();
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];
        $news->uploadImg();
        $news->insert();
        $this->mail->Setbody('dobavlena novost '.$news->title);
        $this->mailer->send($this->mail);
        header("Location: /");
    }



    public function UpdateNews()
    {
        $article = NewsArticle::findOne($_POST['id']);
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->update();
        header("Location: /");


    }

    public function DeleteNews()
    {
        $article = NewsArticle::findOne($_GET['id']);
        $article->Delete();
        header("Location: /");

    }


}
