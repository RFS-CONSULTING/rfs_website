<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterclass;
class MasterClassController extends Controller
{
    //
    public function index(){

        return view('masterclass.index');
    }

    public function create(){

        return view('masterclass.form');

    }
    public function store(Request $request){
        if($request->input('g-recaptcha-response')){
            $email_exist = Masterclass::where("email",$request->email)->first();
            if($email_exist){
                notify()->error('Cette adresse e-mail est déjà enregistrée ');

            }else{
                $form = Masterclass::create([
                    "name" => $request->name,
                    "secondname" => $request->secondname,
                    "firstname" => $request->firstname,
                    "statut" => $request->statut,
                    "autreStatut" => $request->autreStatut,
                    "domaine" => $request->domaine,
                    "address" => $request->address,
                    "city" => $request->city,
                    "country" => $request->country,
                    "code_postal" => $request->code_postal,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "suggestion" => $request->suggestion,

    
                ]);
    
                $from = "info@rfs-congo.com";
                $to =  $request->email;
                $subject = "Inscription pour la masterclass edition 1";
                $message = "Cher(e) ".$request->name.", votre inscription à la masterclass édition 1 a abouti, nous vous enverrons d'autres informations supplémentaires bientôt. 
                ";
                $headers = 'From: RFS ACADEMIA <' .$from . ">\r\n" .
                'Reply-To:'. $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($to,$subject,$message, $headers);
                notify()->success('Votre enregistrement a reussi');
            
            }
        }else{
            notify()->error('Veuillez confirmer que vous n\'etes pas un robot');
        }
           
        return redirect()->back();
    }
}
