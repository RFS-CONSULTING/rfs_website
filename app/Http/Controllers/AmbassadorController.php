<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambassador;

class AmbassadorController extends Controller
{
    //
    public function index(){
        return view('ambassador.index');
    }

    public function store(Request $request){
        if($request->input('g-recaptcha-response')){
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->store('public/ambassadors/'.$request->name);
            $form = Ambassador::create([
                "name" => $request->name,
                "secondname" => $request->secondname,
                "firstname" => $request->firstname,
                "statut" => $request->statut,
                "compagnie" => $request->compagnie,
                "domaine" => $request->domaine,
                "address" => $request->address,
                "profession" => $request->profession,
                "nationalite" => $request->nationalite,
                "country" => $request->country,
                "email" => $request->email,
                "etudes" => $request->etudes,
                "phone" => $request->phone,
                "image" => 'ambassadors/'.$imagePath . '/' . $imageName,
            ]);

            $from = "info@rfs-congo.com";
            $to =  $request->email;
            $subject = "Inscription Ambassadeur de RFS ACADEMIA";
            $message = "Cher(e) ".$request->name.", votre inscription comme ambassadeur de RSF ACADEMIA a abouti avec succès, nous vous contacterons bientôt";
            $headers = 'From: RFS ACADEMIA <' .$from . ">\r\n" .
            'Reply-To:'. $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to,$subject,$message, $headers);
            
            notify()->success('Votre enregistrement a reussi');
        }else{
            notify()->error('Veuillez confirmer que vous n\'etes pas un robot');
        }
        return redirect()->back();
    }
}
