<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        $display = 'review';
        return view('review.crud', compact('display'));
    }


    public function store(Request $request)
    {
        $value = Arr::except($request->all(), ['file']);
        $data = Reviews::create($value);
        if (!empty($request->file)) {
            $str = Str::random(10);
            $request->file->move(base_path() . '/public/img_review/', $str . '.' . $request->file->getClientOriginalExtension());

            Reviews::find($data->id)->update([
                'file' => '/img_review/' . $str . '.' . $request->file->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        $value = Arr::except($request->all(), ['file']);
        Reviews::find($id)->update($value);
        if (!empty($request->file)) {
            if(is_file(base_path('/public' . Reviews::find($id)->file))){
                unlink(base_path('/public' . Reviews::find($id)->file));
            }
            $str = Str::random(10);
            $request->file->move(base_path() . '/public/img_review/', $str . '.' . $request->file->getClientOriginalExtension());

            Reviews::find($id)->update([
                'file' => '/img_review/' . $str . '.' . $request->file->getClientOriginalExtension()
            ]);
        }
        return back();
    }


    public function destroy($id)
    {
        if(is_file(base_path('/public' . Reviews::find($id)->file))){
            unlink(base_path('/public' . Reviews::find($id)->file));
        }
        Reviews::find($id)->delete();
        return back();
    }
}
