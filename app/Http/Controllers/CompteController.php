<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\User;

use Illuminate\Http\Request;

class CompteController extends Controller
{

    public function getCompte($id)
    {
        $compte = Compte::where('user_id', '=', $id)->first();
        return response()->json([
            'solde' => $compte->solde,
            'nbr_ticket_cent' => $compte->nbr_ticket_cent,
            'nbr_ticket_fifty' => $compte->nbr_ticket_fifty,
        ]);
    }

    public function envoyer(Request $request)
    {
        //debiter le compte de l'envoyeur
        $compte = Compte::where('user_id', '=', $request->idSender)->first();
        $user = User::where('numero_dossier', '=', $request->numdossier)->first();
        if ($user && $compte) {
            $compteReceiver = Compte::where('user_id', '=', $user->id)->first();


            if (($compte->nbr_ticket_cent >= $request->quantite) && ($request->price == 100)) {
                $compte->update([
                    'nbr_ticket_cent' => $compte->nbr_ticket_cent - $request->quantite,
                ]);
                $compteReceiver->update([
                    'nbr_ticket_cent' => $compteReceiver->nbr_ticket_cent + $request->quantite,
                ]);
                return response()->json("ok");
            } else if (($compte->nbr_ticket_fifty >= $request->quantite) && $request->price == 50) {

                $compte->update([
                    'nbr_ticket_fifty' => $compte->nbr_ticket_fifty - $request->quantite,
                ]);
                $compteReceiver->update([
                    'nbr_ticket_fifty' => $compteReceiver->nbr_ticket_fifty + $request->quantite,
                ]);
                return response()->json("ok");
            } else {
                return response()->json("non");
            }
        } else {
            return response()->json("Inexistant");
        }
        //     "price"=>$request->price,
        //     "numdossier"=>$request->numero_dossier,
        // ]);
    }
}
