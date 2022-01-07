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


        if (($request->typeRepas == 1 || $request->typeRepas == 3) && $compte->nbr_ticket_cent > 0) {

            $compte->update([
                'nbr_ticket_cent' => $compte->nbr_ticket_cent - 1,
            ]);
            EntreResto::create([
                'compte_id' => $compte->id,
                'type_repa_id' => $request->typeRepas,
                'created_at' => now()
            ]);
            return response()->json([
                "id" => $user->id,
                "message" => "OK"
            ]);
        } else if ($compte->nbr_ticket_fifty > 0) {
            $compte->update([
                'nbr_ticket_fifty' => $compte->nbr_ticket_fifty - 1,
            ]);
            EntreResto::create([
                'compte_id' => $compte->id,
                'type_repa_id' => $request->typeRepas,
                'created_at' => now()
            ]);
            return response()->json([
                "id" => $user->id,
                "message" => "OK"
            ]);
        } else

            return response()->json([
                "id" => $user->id,
                "message" => "KO"
            ]);
    }
    public function studentRestoVisitCount($id)
    {

        $compte = Compte::where('user_id', '=', $id)->first();
     
        $entrees = DB::table('entre_restos')->where('compte_id','=', $compte->id)
        ->selectRaw('entre_restos.created_at,type_repas.contexte')
            ->join('type_repas', 'entre_restos.type_repa_id', 'type_repas.id')
            ->orderByDesc('entre_restos.created_at')
            ->get();
  


        return response()->json($entrees);
    }
}
