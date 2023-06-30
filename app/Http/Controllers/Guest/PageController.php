<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        // Inserisci la prima riga solo se non è già presente nel database
        // if (Train::where('train_code', 'T001')->count() == 0) {
        //     $train = new Train();
        //     $train->company = 'Trenitalia';
        //     $train->departure_station = 'Roma Termini';
        //     $train->arrival_station = 'Milano Centrale';
        //     $train->departure_time = '08:00';
        //     $train->arrival_time = '12:00';
        //     $train->train_code = 'T001';
        //     $train->number_of_carriages = 10;
        //     $train->on_time = true;
        //     $train->cancelled = false;
        //     $train->save();
        // }

        // Inserisci la seconda riga solo se non è già presente nel database
        // if (Train::where('train_code', 'T002')->count() == 0) {
        //     $train = new Train();
        //     $train->company = 'Italo';
        //     $train->departure_station = 'Napoli Centrale';
        //     $train->arrival_station = 'Firenze Santa Maria Novella';
        //     $train->departure_time = '09:30';
        //     $train->arrival_time = '11:30';
        //     $train->train_code = 'T002';
        //     $train->number_of_carriages = 8;
        //     $train->on_time = true;
        //     $train->cancelled = false;
        //     $train->save();
        // }

        // Inserisci la terza riga solo se non è già presente nel database
        // if (Train::where('train_code', 'T003')->count() == 0) {
        //     $train = new Train();
        //     $train->company = 'Italo';
        //     $train->departure_station = 'Parma';
        //     $train->arrival_station = 'Reggio Emilia';
        //     $train->departure_time = '09:00';
        //     $train->arrival_time = '9:30';
        //     $train->train_code = 'T003';
        //     $train->number_of_carriages = 6;
        //     $train->on_time = false;
        //     $train->cancelled = false;
        //     $train->save();
        // }

        //prendo solo i treni NON cancellati
        $trains = Train::where('cancelled', false)->get();

        return view('welcome', compact('trains'));
    }
}
