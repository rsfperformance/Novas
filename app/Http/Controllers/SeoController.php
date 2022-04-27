<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{

    public function store(Request $request)
    {
        Seo::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        Seo::find($id)->update($request->all());
        return back();
    }
    
}
