<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome to your ToDo List!") }}
                </div>
                
                <div>
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
                    
                    <div class="container mx-auto p-6 text-gray-900">
                        <h1 class="text-2xl font-bold mb-4">Upcoming Events</h1>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-100 text-center uppercase">Event Name</th>
                                        <th class="px-6 py-3 bg-gray-100 text-center uppercase">Date</th>
                                        <th class="px-6 py-3 bg-gray-100 text-center uppercase">Time</th>
                                        <th class="px-6 py-3 bg-green-500 text-center uppercase">Edit</th>
                                        <th class="px-6 py-3 bg-red-500 text-center uppercase">Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($events as $event)   
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">{{ucfirst(strtolower($event->event_name))}}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">{{date('F j, Y', strtotime($event->event_date))}}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">{{date('h:i A', strtotime($event->event_time))}}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">
                                            <a href="{{route('event.edit', ['event' => $event])}}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-yellow-500">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">
                                            <form method ="post" action="{{route('event.destroy',['event' => $event])}}">
                                                @csrf
                                                @method('delete') 
                                                <input class = "bg-red-500 text-white py-2 px-1 rounded hover:bg-yellow-500" type="submit" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                
                <div class="p-6">
                    <a href="{{route('event.create')}}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-yellow-500">Add new event</a> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
