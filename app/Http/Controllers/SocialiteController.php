<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite; 

class SocialiteController extends Controller
{
    // Les tableaux des providers autorisés
    protected $providers = [ "google", "github", "facebook" ];

     # redirection vers le provider
    public function redirect ($provider) {

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }


    // Callback du provider
    public function callback ($provider) {

        if (in_array($provider, $this->providers)) {


        	// Les informations provenant du provider
        	$data = Socialite::driver($provider)->user();
        	// $data = Socialite::driver($provider);
            // dd($data->getEmail());

            // Les informations de l'utilisateur
            $user = $data->user;

            // voir les informations de l'utilisateur
            // dd($data->getAvatar());

            // token
            $token = $data->token;

            // Les informations de l'utilisateur
            $id = $data->getId();
            $name = $data->getName();
            // $nickname = $data->getName();
            $email = $data->getEmail();
            // $avatar = $data->getAvatar();

             # 1. On récupère l'utilisateur à partir de l'adresse email
             $user = User::where("email", $email)->first();

             # 2. Si l'utilisateur existe
             if (isset($user)) {
                 // Mise à jour des informations de l'utilisateur
                //  dd($data);
                 $user->name = $name;
                 $user->email = $email;
                 $user->provider = $provider;
                //  $user->profile_photo_path = $avatar;
                 $user->provider_id = $id;
                 $user->save();

                # 4. On connecte l'utilisateur
                auth()->login($user);
    
                # 5. On redirige l'utilisateur vers /home
                if (auth()->check()) return redirect(route('home'));
             } else{
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'provider' => $provider,
                    // 'profile_photo_path' => $avatar,
                    'provider_id' => $id,
                ]);

                auth()->login($user);

                return redirect(route('home'));
             }
         }
         abort(404);
    }
}

