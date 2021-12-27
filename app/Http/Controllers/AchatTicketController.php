<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use App\Models\AchatTicket;

use Illuminate\Support\Carbon;

class AchatTicketController extends Controller
{
    public function acheter(Request $request)
    {
        //--------------------------------
        $compte = Compte::where('user_id', '=', $request->userid)->first();
        if ($compte->solde > ($request->price * $request->quantite)) {
            if ($request->price == 100 || $request->price == (-100)) {
                $compte->update([
                    'solde' => $compte->solde - $request->price * $request->quantite,
                    'nbr_ticket_cent' => ($compte->nbr_ticket_cent) + $request->quantite * ($request->price / 100),
                ]);
                AchatTicket::create([
                    'type_repas_id' => 1,
                    'quantite' => $request->quantite,
                    'compte_id' => $compte->id,
                    'created_at' =>now()
                ]);
            }
            if ($request->price == 50 || $request->price == (-50)) {
                $compte->update([
                    'solde' => $compte->solde - $request->price * $request->quantite,
                    'nbr_ticket_fifty' => ($compte->nbr_ticket_fifty + ($request->quantite * ($request->price / 50))),
                ]);
                AchatTicket::create([
                    'type_repas_id' => 2,
                    'quantite' => $request->quantite,
                    'compte_id' => $compte->id,
                    'created_at' =>now()
                ]);
            }

            return response()->json(["message" => "done"]);
        } else
            return response()->json([
                "message" => "nothing"
            ]);

        //--------------------


        // return response()->json(['val'=>$compte]);
        // if(now()->hour >= '19' && now()->hour <='21')
        // {
        //     return response()->json(now()->hour);

        // }
        // else return response()->json("nonon");


        // if(now() >= )

        // AchatTicket::create([
        //     'quantite'=>$quantite,
        //     'compte_id'=>$compte->id,



        // ]);(
        // return response()->json([
        //     "userid"=>(int)$request->userid,
        //     "quantite"=>(int)$request->quantite,
        //     "price"=>(int)$request->price,
        // ]);
    }


    public function compte()
    {
        return response()->json(Compte::where('id', '=', 2)->first());
    }
}
