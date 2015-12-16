<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 16/12/2015
 * Time: 07:46
 */

namespace app\Http\Controllers;

use App\User;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('messages.message');
    }
}