<?php namespace App\Http\Controllers;

use App\Article;
use App\Role;
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
use App\Permission;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
//		$articles = Article::latest()->published()->take(5)->get();
//		$latestUsers = User::orderBy('created_at', 'DESC')->take(5)->get();
//		$recentUsers = User::orderBy('updated_at', 'DESC')->take(5)->get();
//
//		return view('home', compact('articles', 'users', 'latestUsers', 'recentUsers'));
//		$permission = 'create-admin';
//		$role = Role::whereName('admin')->first();
//		$role->assignPermission($permission);
		$user = Auth::user();
		if ($user->can('create-post'))
		{
			return 'Hello';
		};
	}

}
