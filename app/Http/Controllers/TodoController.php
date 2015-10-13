<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Request;

use \Log;
use Cms; 
use Queue;
use App\Commands\SendCms;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $todo = Todo::all();
        // echo json_encode($todo);
        // app('cms')->send("qqqqqqq");
        // die;
        return view('/home/todo')->with('todo',$todo);
        // return view('/home/todo');
        // echo "<pre>";
        // var_dump($todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //
        $data = array();
        $data['title'] = $request->input('title');
        $data['status'] = $request->input('status');
        $content =  new Todo;
        $content->title = $data['title'];
        // Cms::send("$content");
        // Log::info("$content");
        // $content->status = $data['status'];

        Queue::push(new SendCms($content));
        $content->save($data);
        echo json_encode($content);
        // print_r($content);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        // $data['title'] = $request->input('title');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postDestroy(Request $request)
    {
        $id = $request->input('id'); 
        Todo::destroy($id);
        
        // event(new AfterTodoDeleted($id));

        // return 'delete';
    }
}
