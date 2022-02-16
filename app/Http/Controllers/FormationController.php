<?php

namespace App\Http\Controllers;

use App\Models\CoursSkill;
use App\Models\Formation;
use App\Models\FormationDetail;
use Illuminate\Http\Request;
use App\Models\UserFormation;
use App\Models\Testimonial;

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
        $testimonials = Testimonial::all();
        $formations = Formation::orderBy('created_at','desc')->with(['instructor'])->limit(5)->get();
        return view('formations.index',[
                            'formations'=>$formations,
                            'testimonials' => $testimonials,
        ]);
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

        //if($request->input('g-recaptcha-response')){
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

                "paiement" => $request->payment,
                "type_formation" => $request->type_formation,
                "mode_formation" => $request->mode_formation,
                "available_for_update" => $request->available_for_update,
                "formation_id" => $request->formation_id,
            ]);

            
            if ($request->payment ==  "Réseau Mobile") {
                $messageBegin = "Faites votre transfert au numéro +243817663799 ";
            }elseif($request->payment == "Visa, UBA, Paypal"){
                $messageBegin = "";
            }elseif ($request->payment == "RapidTransfert (Ecobank)") {
                $messageBegin = "";
            }elseif ($request->payment == "Western Union") {
                $messageBegin = "Nom: Muyaya Iyuna Christian \n Pays: République démocratique du congo \n";
            }

            $from = "info@rfs-congo.com";
            $to =  $request->email;
            $subject = "Inscription chez RFS ACADEMIA";
            $messageMiddle = "Cher(e) ".$request->name.", votre inscription a abouti avec succès, vous avez choisi ".$request->payment." comme type de paiements \n";
            $messageEnd = "Contactez nous via whatsapp au +243817663799 ou par mail rfs-congo@gmail.com pour nous confirmez votre paiement à fin de valider votre inscription \n Merci!";

            $message = $messageBegin.$messageMiddle.$messageEnd;
            $messageToAdmin = "Un nouvel étudiant viens de s'inscrire à une de vos formations veillez consulter l'administration ";
            
            $headers = 'From: RFS ACADEMIA <' .$from . ">\r\n" .
            'Reply-To:'. $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to,$subject,$message, $headers);
            mail('chrismuya02@gmail.com',$subject,$messageToAdmin, $headers);
            notify()->success('Votre enregistrement a reussi');
        // }else{
        //     notify()->error('Veuillez confirmer que vous n\'etes pas un robot');
        // }
        return redirect()->back();
    }

    public function getFormulaire($id, $slug){
        return view('formations.form', ["formation_id" => $id]);
    }
}
