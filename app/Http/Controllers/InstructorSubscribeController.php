<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstructorSubscribe;
use Illuminate\Support\Facades\Storage;

class InstructorSubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('instructors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->input('g-recaptcha-response')){
            $cv_path = Storage::putFile('cv_instructors', $request->file('cv'));
            // $indentite_path = Storage::putFile('indentity_instrucors', $request->file('card_identity_image'));
            // $programme_path = Storage::putFile('programme_instructor', $request->file('plan'));

            $identPath = $request->file('card_identity_image')->store('public/formateurs/'.$request->email);
            
            $cvPath = $request->file('cv')->store('public/formateurs/'.$request->email);
           
            $planPath = $request->file('plan')->store('public/formateurs/'.$request->email);


            $form = InstructorSubscribe::create([
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "postnom" => $request->postnom,
                "etat_civile" => $request->etat_civile,
                "nationalite" => $request->nationalite,

                "mail" => $request->email,
                "telephone" => $request->phone,
                "adress" => $request->address,

                "cv_path" => $cvPath,
                "identite_path" => $identPath,
                "programme_path" => $planPath,
            ]);

            $from = "info@rfs-congo.com";
            $to =  $request->email;
            $subject = "Inscription chez RFS ACADEMIA";
            $messageStart = "Cher(e) ".$request->nom.", votre demande d'inscription étant qu'instructeur a abouti. \n";
            $messageEnd = "Nous vous contacterons bientôt après examen de votre candidature. \n cordialement, \n Merci! ";

            $message = $messageStart.$messageEnd;
            $messageToAdmin = "Un nouvel instructeur viens de s'inscrire, veillez consulter l'administration ";
            
            $headers = 'From: RFS ACADEMIA <' .$from . ">\r\n" .
            'Reply-To:'. $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to,$subject,$message, $headers);
            mail('rfsacademia@gmail.com',$subject,$messageToAdmin, $headers);
            mail('rfsconsulting731@gmail.com',$subject,$messageToAdmin, $headers);
            mail('seleshabani4@gmail.com',$subject,$messageToAdmin, $headers);
            notify()->success('Votre enregistrement a reussi');
        }else{
            notify()->error('Veuillez confirmer que vous n\'etes pas un robot');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstructorSubscribe  $instructorSubscribe
     * @return \Illuminate\Http\Response
     */
    public function show(InstructorSubscribe $instructorSubscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstructorSubscribe  $instructorSubscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(InstructorSubscribe $instructorSubscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstructorSubscribe  $instructorSubscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstructorSubscribe $instructorSubscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstructorSubscribe  $instructorSubscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstructorSubscribe $instructorSubscribe)
    {
        //
    }
}
