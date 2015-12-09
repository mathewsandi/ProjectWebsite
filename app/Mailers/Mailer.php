<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 09/12/2015
 * Time: 10:51
 */

namespace app\Mailers;

use App\User;
use Illuminate\Support\Facades\Mail;

abstract class Mailer
{
    public function sendTo($user, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)
                ->subject($subject);
        });
    }
}