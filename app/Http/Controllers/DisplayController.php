<?php

namespace App\Http\Controllers;

use App\Pool;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function display_create_pool()
    {
    	return view('create_pool');
    }

    public function display_pool()
    {
        
        $user_pool = Auth::user()->pool_id;
        $pool = Pool::where('id', $user_pool)->get()->first();

        $date = $pool->start_date;

        $datetime1 = new DateTime(date('Y-m-d'));
        $datetime2 = new DateTime($date);
        $interval = $datetime1->diff($datetime2);
        $rest_date =  $interval->format('%a');
        $done = $rest_date;

        $titre = $pool->titre;
        $destination = $pool->destination;
        $description = $pool->description;
        $cost_travel = $pool->cost_travel;
        $participants = $pool->participants;
        $current_money = $pool->current_money;


		return view('pool', compact('done', 'titre', 'destination', 'description', 'cost_travel', 'participants', 'current_money'));

    }

    public function display_modif_pool()
    {


        $user_pool = Auth::user()->pool_id;
        $pool = Pool::where('id', $user_pool)->get()->first();   
            
        $titre = $pool->titre;
        $destination = $pool->destination;
        $description = $pool->description;
        $cost_travel = $pool->cost_travel;
        $participants = $pool->participants;
        $current_money = $pool->current_mone;
        $start_date = $pool->start_date;
        $vip = $pool->vip;


		return view('modif_pool', compact('vip','start_date','titre', 'destination', 'description', 'cost_travel', 'participants', 'current_money'));
    }

    public function profile()
    {

        $user = Auth::user();

        $nom = $user->nom;
        $prenom = $user->prenom;
        $telephone = $user->telephone;
        $birthday = $user->date_de_naissance;
        $email = $user->email;

		return view ('modif_profile', compact('nom', 'prenom', 'telephone', 'birthday', 'email'));
		
    }
}
