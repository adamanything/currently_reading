<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Comments;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('doesUserOwn', ['only' => ['show']]);
    }
    THIS MIDDLEWARE ISNT WORKING THE IDEA OF AUTHING USER SHOULD BE IN THE REQUEST TO CHECK THEY OWN THE POST
    */

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $readingId)
    {
        $comment = new Comments;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->reading_id  = $readingId;

        $comment->save();

        return redirect("currently_reading/$readingId");
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
        $comment = Comments::findOrFail($id);
        return view('pages.comment', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $reading_id = Comments::where('id', $id)->first();
        $redirectId = $reading_id->reading_id;

        $comment = Comments::findOrFail($id);
        $comment->comment = $request->comment;
        $comment->save();


        return redirect("currently_reading/$redirectId")  ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //testing git
    }
}
