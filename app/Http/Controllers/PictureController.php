<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 14/01/2016
 * Time: 11:47
 */

namespace app\Http\Controllers;


use App\Picture;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PictureController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('picture',compact('user'));
    }

    public function store()
    {
        $input = Input::all();

        $fileName = $input['test']->getClientOriginalName();

        $path = public_path('/images/' . Auth::user()->username);

        $image = Image::make($input['test']->getRealPath());

        File::exists($path) or File::makeDirectory($path, 0755, true);
        $image->save($path . '/' . $fileName)
            ->resize(80,80)
            ->save($path .'/'.'tn.jpg');

        $picture = new Picture();
        $picture->user_id = Auth::user()->id;
        $picture->thumbnailName = 'images/'.Auth::user()->username.'./tn.jpg';
        $picture->save();

        return redirect('picture');
    }
}