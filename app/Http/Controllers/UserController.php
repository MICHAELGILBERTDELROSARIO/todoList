<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class UserController extends Controller
{
    //

    public function store(Request $request){
        $data = $request->validate([
            'event_name' => 'required', 
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
        ]);
        $newEvent = Event::create($data);
        
    }

    public function create(){
        return view('create');
    }

    public function events(){
        return view('events');
    }


}
