<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Create a new phrase in the database.
     */
    public function createComment(Request $request):RedirectResponse
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $commet->save();


        return ('Tu comentario ha sido guardado');
    }
}
