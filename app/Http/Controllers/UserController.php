<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $value =  Arr::except($request->all(), ['photo', 'password']);
        User::find($id)->update($value);

        if (!empty($request->password)) {
            User::find($id)->update([
                'password' => Hash::make($request->get('password'))
            ]);
        }
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . User::find($id)->photo))){
                unlink(base_path('/public' . User::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_user/', $str . '.' . $request->photo->getClientOriginalExtension());

            User::find($id)->update([
                'photo' => '/img_user/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
}
