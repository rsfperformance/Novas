<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\ProjectBindCategory;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function  index()
    {
        $display = 'project';
        return view('projects.index', compact('display'));
    }
    public function create()
    {
        $display = 'project';
        return view('projects.crud', ['display'=>$display]);
    }
    public function store(Request $request)
    {
        $value = Arr::except($request->all(), ['category_id', 'photo', 'logo', 'number']);
        $data = Project::create($value);
		
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_project/', $str . '.' . $request->photo->getClientOriginalExtension());

            Project::find($data->id)->update([
                'photo' => '/img_project/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->logo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_project/', $str . '.' . $request->logo->getClientOriginalExtension());

            Project::find($data->id)->update([
                'logo' => '/img_project/' . $str . '.' . $request->logo->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->category_id)) {
            ProjectBindCategory::create([
                'category_id' => $request->get('category_id'),
                'project_id' => $data->id,
            ]);
        }
      	if($request->category_id == 1){
          Project::find($data->id)->update([
          		'number' => $request->get('number'),
          ]);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        $value = Arr::except($request->all(), ['category_id', 'photo', 'bind_id', 'logo']);
        $data = Project::find($id)->update($value);

        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . Project::find($id)->photo))){
                unlink(base_path('/public' . Project::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_project/', $str . '.' . $request->photo->getClientOriginalExtension());

            Project::find($id)->update([
                'photo' => '/img_project/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->logo)) {
            if(is_file(base_path('/public' . Project::find($id)->logo))){
                unlink(base_path('/public' . Project::find($id)->logo));
            }
            $str = Str::random(10);
            $request->logo->move(base_path() . '/public/img_project/', $str . '.' . $request->logo->getClientOriginalExtension());

            Project::find($id)->update([
                'logo' => '/img_project/' . $str . '.' . $request->logo->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->category_id)) {
            ProjectBindCategory::find($request->bind_id)->delete();
            ProjectBindCategory::create([
                'category_id' => $request->get('category_id'),
                'project_id' => $id,
            ]);
        }
        return back();
    }

    public function destroy($bind_id)
    {
        $data = ProjectBindCategory::find($bind_id);
        if(is_file(base_path('/public' . Project::find($data->project_id)->photo))){
            unlink(base_path('/public' . Project::find($data->project_id)->photo));
        }
        
        Project::find($data->project_id)->delete();
        ProjectBindCategory::find($bind_id)->delete();
        return back();
    }
}
