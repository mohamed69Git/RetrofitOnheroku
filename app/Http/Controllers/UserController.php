<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Compte;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function sayHello(){
        return response()->json("WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOWOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO");
    }

    //function to create a new User
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return response()->json([
            'response' => $request->name
        ]);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $user = User::where('email', '=', $fields['email'])->first();
        if (!$user || ($fields['password'] != $user->password)) {
            return response()->json([
                'message' => 'Informations incorrectes',
                'status' => '404',
            ]);
        }

        $token = $user->createToken('appdepensetoken')->plainTextToken;
        return response()->json([
            'user' => $user,
            'status' => '200',
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $answer = $request->user()->currentAccessToken()->delete();
        if ($answer)
            return response()->json("Yuppa You are Logged Out");
        else return response()->json("ldki WECANTWECANTWECANTWECANTWECANT ");
    }

    public function findUser($email)
    {

        $user = User::where('email', '=', $email)->first();
        if ($user) {

            $compteUser = Compte::Where('user_id', '=', $user->id)->first();
            if ($compteUser) {
                if (now()->hour >= '19' && now()->hour <= '21') {
                    return response()->json([
                        'name' => $user->name,
                        'email' => $user->email,
                        'ticket_cent' => $compteUser->nbr_ticket_cent,
                        'ticket_fifty' => $compteUser->nbr_ticket_fifty,
                        'status' => 1,
                        "context" => "diner",
                    ]);
                }
                else if (now()->hour() >= '7' && now()->hour <= '10') {
                    return response()->json([
                        'name' => $user->name,
                        'email' => $user->email,
                        'ticket_cent' => $compteUser->nbr_ticket_cent,
                        'ticket_fifty' => $compteUser->nbr_ticket_fifty,
                        'status' => 1,
                        "context" => "petitDejeuner",
                    ]);
                   
                }
                else if (now()->hour >= '12' && now()->hour <= '14') {
                    return response()->json([
                        'name' => $user->name,
                        'email' => $user->email,
                        'ticket_cent' => $compteUser->nbr_ticket_cent,
                        'ticket_fifty' => $compteUser->nbr_ticket_fifty,
                        'status' => 1,
                        "context" => "repas",
                    ]);
                }
                else if(now()->hour == '10'){
                    return response()->json([
                        'name' => $user->name,
                        'email' => $user->email,
                        'ticket_cent' => $compteUser->nbr_ticket_cent,
                        'ticket_fifty' => $compteUser->nbr_ticket_fifty,
                        'status' => 1,
                        "context" => "lunch",
                    ]);
                }
                else {
                    return response()->json(['name' => $user->name,
                        'email' => $user->email,
                        'ticket_cent' => $compteUser->nbr_ticket_cent,
                        'ticket_fifty' => $compteUser->nbr_ticket_fifty,
                        'status' => 1,
                        'context' => 'null'
                    ]);
                }
            }
        }

        return response()->json([
            'status' => 0,
        ]);
    }
}
