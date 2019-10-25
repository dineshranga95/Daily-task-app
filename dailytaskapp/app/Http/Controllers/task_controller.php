<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taskap;
class task_controller extends Controller
{
    public function store(Request $request){
           $task=new Taskap;
           $this->validate($request,[
               'task'=>'required|max:100|min:5',
           ]);
           $task->task=$request->task;
            $task->save();
            
            $data=Taskap::all();
            //dd($data);
           return view('task')->with('tasks',$data);
        //   dd($request->all());
    }
    public function markcompleted($id){
        $task=Taskap::find($id);
        $task->is_completed=1;
        $task->save();
        return redirect()->back();
    }
    public function marknotcompleted($id){
        $task=Taskap::find($id);
        $task->is_completed=0;
        $task->save();
        return redirect()->back();
    }
    public function delete($id){
        $task=Taskap::find($id);
    
        $task->delete();
        return redirect()->back();
    }
    public function update($id){
        $task=Taskap::find($id);
    
        $task->update();
        return view('update')->with('task',$task);
    }
    public function updatedata(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=Taskap::find($id);
        $data->task=$task;
        $data->save();
        return view('task');
    }


}
