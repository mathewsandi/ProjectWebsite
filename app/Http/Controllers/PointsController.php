<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 08/12/2015
 * Time: 08:42
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

class PointsController extends Controller
{

}