<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 30/11/2015
 * Time: 13:17
 */

namespace app\Http\Controllers;

use App\Article;
use App\User;
use Auth;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Event;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('id', 'ASC')->get();
        return view ('users', compact('users'));
    }


}