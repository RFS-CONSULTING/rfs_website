<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;

class FormateurController extends Controller
{
    //
    public function store(Request $request){
        if($request->input('g-recaptcha-response')){
            $cvName = $request->file('cv')->getClientOriginalName();
            $cvPath = $request->file('cv')->store('public/formateurs/'.$request->name);
            
            $cardName = $request->file('card_identity_image')->getClientOriginalName();
            $cardPath = $request->file('card_identity_image')->store('public/formateurs/'.$request->name);
            $pdfName = $request->file('plan')->getClientOriginalName();
            $pdfPath = $request->file('plan')->store('public/formateurs/'.$request->name);
            $form = Formateur::create([
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
                "card_identity_image" => 'formateurs/'.$cardPath . '/' . $cardeName,
                "cv" => 'formateurs/'.$imagePath . '/' . $imageName,
                "plan" => 'formateurs/'.$pdfPath . '/' . $pdfName,

            ]);

            $from = "info@rfs-congo.com";
            $to =  $request->email;
            $subject = "Inscription formateur chez RFS ACADEMIA";
            $message = "Cher(e) ".$request->name.", votre inscription comme formteur de RSF ACADEMIA a abouti avec succès, nous vous contacterons bientôt";
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
