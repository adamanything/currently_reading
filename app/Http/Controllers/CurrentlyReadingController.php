<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Currently_Reading;
use Auth;
use App\Http\Requests\EditDeleteRequest;
use App\Comments;



class CurrentlyReadingController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $readingList = currently_reading::all();
        return view('pages.index', compact('readingList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'link' => 'required']);

        $currently_reading = new Currently_Reading;
        $currently_reading->title = $request->title;
        $currently_reading->link = $request->link;
        $currently_reading->user_id = Auth::id();
        $currently_reading->save();

        return redirect('currently_reading');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $comments = Comments::get()->all();
        $reading = Currently_Reading::findOrFail($id);
        return view('pages.show', compact('reading', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $reading = Currently_Reading::findOrFail($id);
        return view('pages.edit', compact('reading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $updatedReading = Currently_Reading::findOrFail($id);
        $updatedReading->title = $request->title;
        $updatedReading->link  = $request->link;

        $updatedReading->save();

        return redirect('currently_reading');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
