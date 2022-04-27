<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $display = 'client';
        return view('clients.index', compact('display'));
    }

    public function create()
    {
        $display = 'client';
        return view('clients.crud', compact('display'));
    }

    public function store(Request $request)
    {
        $data = Clients::create($request->all());
        if (!empty($request->logo_color)) {
            $str = Str::random(10);
            $request->logo_color->move(base_path() . '/public/img_clients/', $str . '.' . $request->logo_color->getClientOriginalExtension());

            Clients::find($data->id)->update([
                'logo_color' => '/img_clients/' . $str . '.' . $request->logo_color->getClientOriginalExtension(),
            ]);
        }
        if (!empty($request->logo_dark)) {
            $str = Str::random(10);
            $request->logo_dark->move(base_path() . '/public/img_clients/', $str . '.' . $request->logo_dark->getClientOriginalExtension());

            Clients::find($data->id)->update([
                'logo_dark' => '/img_clients/' . $str . '.' . $request->logo_dark->getClientOriginalExtension(),
            ]);
        }
        return back();
    }

    public function update(Request $request,$id)
    {
        if (!empty($request->logo_color)) {
            if(is_file(base_path('/public' . Clients::find($id)->logo_color))){
                unlink(base_path('/public' . Clients::find($id)->logo_color));
            }
            $str = Str::random(10);
            $request->logo_color->move(base_path() . '/public/img_clients/', $str . '.' . $request->logo_color->getClientOriginalExtension());

            Clients::find($id)->update([
                'logo_color' => '/img_clients/' . $str . '.' . $request->logo_color->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->logo_dark)) {
            if(is_file(base_path('/public' . Clients::find($id)->logo_dark))){
                unlink(base_path('/public' . Clients::find($id)->logo_dark));
            }
            $str = Str::random(10);
            $request->logo_dark->move(base_path() . '/public/img_clients/', $str . '.' . $request->logo_dark->getClientOriginalExtension());

            Clients::find($id)->update([
                'logo_dark' => '/img_clients/' . $str . '.' . $request->logo_dark->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function destroy($id)
    {
        if(is_file(base_path('/public' . Clients::find($id)->logo_color))){
            unlink(base_path('/public' . Clients::find($id)->logo_color));
        }
        if(is_file(base_path('/public' . Clients::find($id)->logo_dark))){
            unlink(base_path('/public' . Clients::find($id)->logo_dark));
        }
        Clients::find($id)->delete();
        return back();
    }
}
