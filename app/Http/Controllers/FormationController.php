<?php

namespace App\Http\Controllers;

use App\Models\CoursSkill;
use App\Models\Formation;
use App\Models\FormationDetail;
use Illuminate\Http\Request;
use App\Models\UserFormation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formations = Formation::orderBy('created_at','desc')->with(['instructor'])->limit(5)->get();
        return view('formations.index',['formations'=>$formations]);
    }

    public function getAll()
    {
        //
        $formations = Formation::with(['instructor'])->paginate(6);
        return view('formations.all',['formations'=>$formations]);
    }

    public function search(Request $request)
    {

        $query = $request->get('searchquery');
        $formations = Formation::where('title','like',"%$query%")->paginate(5);
        
        return view('formations.search',['formations'=>$formations,'searchquery'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $formation = Formation::where('slug',$slug)->with(['instructor'])->first();
        $skills = CoursSkill::where('formation_id',$formation->id)->get();
        $formationDetails = FormationDetail::where('formation_id',$formation->id)->get();
        $similarFormations = Formation::limit(3)->get();
        // dd($similarFormations);
        return view('formations.show',['formation'=>$formation,
        'skills'=>$skills,'formationDetails'=>$formationDetails,'similarFormations'=>$similarFormations]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subscribe(Request $request){
        if($request->input('g-recaptcha-response')){
            $form = UserFormation::create([
                "name" => $request->name,
                "secondname" => $request->secondname,
                "firstname" => $request->firstname,
                "statut" => $request->statut,
                "autreStatut" => $request->autreStatut,

                "compagnie" => $request->compagnie,
                "domaine" => $request->domaine,
                "address" => $request->address,
                "address2" => $request->address2,
                "city" => $request->city,
                "country" => $request->country,
                "code_postal" => $request->code_postal,
                "email" => $request->email,
                "phone" => $request->phone,
                "sig" => $request->sig,
                "teledetection" => $request->teledetection,
                "outils-collectes" => $request->outils,
                "language" => $request->language,
                "paiement" => $request->payment,
                "type_formation" => $request->type_formation,
                "mode_formation" => $request->mode_formation,
                "available_for_update" => $request->available_for_update
            ]);

            $from = "info@rfs-congo.com";
            $to =  $request->email;
            $subject = "Inscription chez RFS ACADEMIA";
            $message = "Cher(e) ".$request->name.", votre inscription a abouti avec succès, nous vous contacterons bientôt";
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

    public function getFormulaire(){
        return view('formations.form');
    }
}
