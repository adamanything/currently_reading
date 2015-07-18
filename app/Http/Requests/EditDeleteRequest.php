<?php

namespace App\Http\Requests;


use Requests;
use Illuminate\Http\Request;

class EditDeleteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'link'  => 'required',
        ];
    }
}

/*
public function authorize()
{
    $commentId = $this->route('comment');

    return Comment::where('id', $commentId)
                  ->where('user_id', Auth::id())->exists();
}

*/