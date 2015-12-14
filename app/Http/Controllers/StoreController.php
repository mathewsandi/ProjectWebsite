<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 08/12/2015
 * Time: 10:27
 */

namespace app\Http\Controllers;

use App\User;
use Gate;
use App\Tag;
use App\Status;
use App\Http\Requests;
use App\Http\Requests\StatusRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Request;
use App\Point;
use App\Item;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('store.store', compact('points', 'user'));
    }

    public function show($id)
    {
        $product = Item::findOrFail($id);
        $name = $product->item;
        $info = $product->information;
        $price = $product->price;
        $url = $product->url;

        return view('store.item', compact('info', 'price', 'name', 'url'));
    }
}