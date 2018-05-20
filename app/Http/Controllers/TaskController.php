<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use DateTime;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTasks(){
        
        if (Auth::check()){
            $allTasks = Task::orderBy('created_at', 'DESC')->get();
            return $allTasks;
        }
        else {
            return "invalid";
        }
            
           
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $myTask = new Task;
        $myTask->title = $request->title;
        $myTask->user_id = Auth::id();
        $myTask->status = false;

        $now = new DateTime();

        $myTask->due_date = $now; 
        $myTask->save();

        return $myTask;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $editTask = Task::where('id', $request->id)->first();
        $editTask->title = $request->title;
        $editTask->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delTask= Task::where('id', $id)->first();
        $delTask->delete();
    }


    public function toggleTask(Request $request){
        $toggleTask= Task::where('id', $request->id)->first();
        $toggleTask->status = !$toggleTask->status;
        $toggleTask->save();
    }


    public function logoutUser(Request $request){
        Auth::logout();
         return view('welcome');
    }
}
