<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
class EventController extends Controller
{
    //
    public function index(){
        if(auth()->check()){
            $id = auth()->user()->id;
        }
        //$events = Event::where('user_id', $id)->get();
        $events = Event::where('user_id', $id)
        ->orderBy('event_date', 'asc')
        ->orderBy('event_time', 'asc')
        ->get();
        return view('dashboard', ['events' => $events]);
        
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $data = $request->validate([
                'event_name' => 'required', 
                'event_date' => 'required|date',
                'event_time' => 'required|date_format:H:i',
            ]);

            $data['user_id'] = $user_id;
            $newEvent = Event::create($data);
            return redirect(route('dashboard'))->with('success', 'Event created');
        }
        // $data = $request->validate([
        //     'event_name' => 'required', 
        //     'event_date' => 'required|date',
        //     'event_time' => 'required|date_format:H:i',
        //     'user_id' => 'required',
        // ]);
        // if (Auth::check()) {
        // $data['user_id'] = Auth::user()->id;
        // $newEvent = Event::create($data);
        // return redirect(route('dashboard'))->with('success', 'Product created');
        // }
    }
    
    public function edit(Event $event){
        return view('edit', ['event' => $event]);
    }

    public function update(Event $event, Request $request){
        $data = $request->validate([
            'event_name' => 'required', 
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
            'event_name' => 'nullable', 
            'event_date' => 'nullable', 
            'event_time' => 'nullable', 
        ]);

        $event->update($data);

        return redirect(route('dashboard'))->with('success', 'Product Updated Successfuly');
    }

    public function destroy(Event $event){
        $event->delete();
        return redirect(route('dashboard'))->with('success', 'Product Updated Successfuly');
        
}

}
