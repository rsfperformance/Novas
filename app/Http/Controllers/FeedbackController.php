<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    public function index()
    {
        $display = 'feedback';
        return view('feedback.index', compact('display'));
    }

    public function create()
    {
        $data = Feedback::create([
            'name' => \request()->get('name', null),
            'name_company' => \request()->get('name_company', null),
            'phone' => \request()->get('phone', null),
        ]);
      $token = '1360772397:AAFZpf1k6vrzGo9ZsiSPslxDwZNL0vxhwc4';
//
      $text = "Имя: ". $data->name ."\n" . "Телефон: " . $data->phone . ($data->name_company ? ("\n" ."Компания: " . $data->name_company) : '');
//      $rustam = ['text' => $text,'chat_id' => '642217520'];
      $alexandr = ['text' => $text,'chat_id' => '-1001778111673'];

         file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($alexandr));
//         file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($rustam));


    }

    public function store(Request $request)
    {
        Feedback::create([
            'name' => $request->get('name', null),
            'name_company' => $request->get('name_company', null),
            'phone' => $request->get('phone', null),
        ]);
      $token = '1360772397:AAFZpf1k6vrzGo9ZsiSPslxDwZNL0vxhwc4';
      $text = "Имя: ".$request->get('name', null) ."\n" . "Телефон: ".$request->get('phone', null). ($_REQUEST['name_company'] ? ("\n" ."Компания: ".$request->get('name_company', null)) : '');
      $my = ['text' => $text,'chat_id' => '642217520'];
      $alexandr = ['text' => $text,'chat_id' => '699444778'];
      file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($my) );
      file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($alexandr) );      
    }

    public function show(Feedback $feedback)
    {
        //
    }

    public function update(Request $request, $id)
    {
        Feedback::find($id)->update([
            'comment' => $request->get('comment'),
            'view' => 1,
        ]);
        return back();
    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return back();
    }
}
