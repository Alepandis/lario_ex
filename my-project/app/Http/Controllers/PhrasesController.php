<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Phrase;

class PhrasesController extends Controller
{
    /**
     * Create a new phrase in the database.
     */
    public function createPhrase(Request $request):RedirectResponse
    {
        $phrase = new Phrase;

        $phrase->phrase = $request->phrase;

        $phrase->save();


        return ('Su frase ha sido guardada');
    }

    public function getPhrasesDate($date){
        $phrases = Phrase::whereDate('created_at', $date);
    }
}
