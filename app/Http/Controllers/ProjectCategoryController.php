<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        ProjectCategory::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        ProjectCategory::find($id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        ProjectCategory::find($id)->delete();
        return back();
    }
}
