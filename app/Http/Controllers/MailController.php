<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\enviarMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    
    

 public function enviarMail(Request $request){



          $email = "mcd77.1990@gmail.com";


          $request->perfil_evento = str_replace('-','/',$request->perfil_evento);

          $request->tipo_evento = str_replace('-','/',$request->tipo_evento);

          $request->tipo_evento = str_replace('_',' ',$request->tipo_evento);


          Mail::to($email)->send(new enviarMail($request));

          return "true";


}


    
}
