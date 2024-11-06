<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Frontcontroller extends Controller
{
    
    public function welcome(){
        return view('welcome');
    }


    public function Details() {
        return view('pagina-di-dettaglio');
    }

    public function Articoli(){
        return view('tutti-gli-articoli');
    }

    public function form(){
        return view('form');
    }

    public function invioContatto(Request $request){
        $name = $request->input('nome');
        $cognome = $request->input('cognome');
        $mail = $request->input('mail');
        $info = $request->input('messaggio');


        // messaggio a contactmail collegato

       

     



       try {
        Mail::to($mail)->send(new ContactMail($name, $cognome, $mail, $info));
           //    ritorno dopo l'invio
           return redirect(route('home'))->with('emailSent', 'Abbiamo ricevuto la tua e-mail. Ti ricontatteremo il prima possibile');
       } catch(Exception $error){
           return redirect()->back()->with('emailError', 'Richiesta fallita. Ci scusiamo per il disagio.Riprova più tardi');
       }


    }
}
