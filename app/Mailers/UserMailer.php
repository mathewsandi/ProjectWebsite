<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 09/12/2015
 * Time: 10:58
 */

namespace app\Mailers;

use App\User;

class UserMailer extends Mailer
{
    public function __construct(Mailer $mailer)
    {

    }

    public function welcome(User $user)
    {
        dd($this);

        $view = 'emails.welcome';
        $data = [];
        $subject = 'Welcome to Sezgi!';

        $random = $this->sendTo($user, $subject, $view, $data);

        return $random;
    }
}