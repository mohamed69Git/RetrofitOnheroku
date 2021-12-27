<?php

namespace App\Http\Controllers;

use \App\Models\Compte;
use \App\Models\EntreResto;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntreRestoController extends Controller
{
    public function apply(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        $compte = Compte::where('user_id', '=', $user->id)->first();
        if ($user && $compte) {

            if ($request->typeRepas == 1 || $request->typeRepas == 2) {

                $compte->update([
                    'nbr_ticket_cent' => $compte->nbr_ticket_cent - 1,
                ]);
            } else {
                $compte->update([
                    'nbr_ticket_fifty' => $compte->nbr_ticket_fifty - 1,
                ]);
            }

            EntreResto::create([
                'comptes_id' => $compte->id,
                'type_repas_id' => $request->typeRepas,
                'created_at' => now()
            ]);
        }


        return response()->json([
            "id" => $request->typeRepas,
        ]);
    }

    public function studentRestoVisitCount($id)
    {

        $compte = Compte::where('user_id', '=', $id)->first();
        // $entrees = EntreResto::where('compte_id',   '=', $compte->user_id)->selectRaw('entre_restos.created_at,type_repas.contexte')
        // ->orderByDesc()
        // ->join('type_repas','entre_restos.type_repa_id', 'type_repas.id')
        
        // ->get();
        $entrees = DB::table('entre_restos')->where('compte_id',   '=', $compte->user_id)->selectRaw('entre_restos.created_at,type_repas.contexte')
        ->join('type_repas', 'entre_restos.type_repa_id', 'type_repas.id')
        ->orderByDesc('entre_restos.created_at')
        ->get();
        // $entreFirst = Compte::find(2)->entre_resto;
        // $entrees = collect([]);
        // foreach ($entreFirst as $entre) {

        //     $entrees->prepend($entre);

        //     $entrees[0]->prepend(collect(["sallo" => $entre->type_repa->nom]));
        //     $entrees[0][0]->prepend(collect(["ndella" => "khandiou"]));
        // }

        
        return response()->json($entrees);
    }
}
