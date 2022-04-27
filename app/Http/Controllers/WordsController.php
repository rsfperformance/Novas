<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class WordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('folder.index');
    }

    public function create()
    {
        $display = 'word';
        return view('word.crud', compact('display'));
    }

    public function store(Request $request)
    {
        if(!empty($request->photo)){
            $value = Arr::except($request->all(), ['photo']);
            $data = Model::create($value);

            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_folder/', $str . '.' . $request->photo->getClientOriginalExtension());

            Model::find($data->id)->update([
                'photo' => '/img_folder/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        else{
            Words::create($request->all());
        }
        return back();
    }


    public function update(Request $request,$id)
    {
        if (!empty($request->photo)) {
            $value = Arr::except($request->all(), ['photo']);
            Model::find($id)->update($value);

            if (is_file(base_path('/public' . Model::find($id)->photo))) {
                unlink(base_path('/public' . Model::find($id)->photo));
            }

            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_folder/', $str . '.' . $request->photo->getClientOriginalExtension());

            Model::find($id)->update([
                'photo' => '/img_folder/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        } else {
            Words::find($id)->update($request->all());
        }
        return back();
    }


    public function destroy($id)
    {
        if(!empty(Words::find($id)->photo)){
            if(is_file(base_path('/public' . Model::find($id)->photo))){
                unlink(base_path('/public' . Model::find($id)->photo));
            }
            Words::find($id)->delete();
        }
        else{
            Words::find($id)->delete();
        }
        return back();
    }
}
