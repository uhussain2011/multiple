<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $projects = Project::all();



        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd(request()->all());



        //$data = request()->all();


        //$data2 = request('name');
        //dd($data2);

        $this->validate(request(), [

            'name' => 'required|min:6|max:12',
            'description' => 'required'

        ]);


        $project = new Project();
        $project->name = request('name');
        $project->description = request('description');
        $project->completed = false;
        $project->save();


        return redirect('/project');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);


        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $project = Project::find($id);

        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'



        ]);


    

        $project = Project::find($id);

        $project->name = request('name');
        $project->description = request('description');

        $project->save();

        return redirect('/project');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        


       /* $project = Project::find($id);

        $project->delete();
*/

        $project =  Project::where('id', $id)->delete();


        return redirect('/project');

    }
}





