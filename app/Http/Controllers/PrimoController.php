<?php

namespace App\Http\Controllers;

use App\Mail\ContattoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PrimoController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contattaci(){
        return view ('contattaci');
    }

    public function inviato(Request $request){
        $nome=$request->input('nome1');
        $cognome=$request->input('cognome1');
        $email=$request->input('email1');
        $testo=$request->input('textarea1');
        Mail::to($email)->send(new ContattoEmail($nome, $cognome, $email, $testo));
        return redirect()->route('homepage')->with('messaggio', 'richiesta inviata corretamente');
    }
}
