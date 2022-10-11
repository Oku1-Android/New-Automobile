@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24 ">
        <div class="text-center  text-red ">
            <img style="display:inline"
            class="inline"
            
            src="{{ asset('images/'.$auto->image_path) }}" alt="car imag
            
            class="w-4/20 pl-5 mb-8 ml-80 shadow-xl">
            <h1 class="text-5xl uppercase bold mt-4">
                {{$auto->name}}
            </h1>

        <div class="py-9 text-center">
            </div>
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{$auto->founded}}
                </span>
                
                <p class="text-lg text-gray-700 py-2">
                    {{$auto->description}}
                </p> 
                <p class="text-lg text-gray-700 py-3">
                    {{$auto->condition}}
                </p>  
                <p class="text-lg text-gray-700 py-3">
                    {{$auto->modelNumber}}
                </p> 
                <p class="text-lg text-gray-700 py-3">
                    {{$auto->price}}
                </p>
                <p class="text-lg text-gray-700 py-3">
                    {{$auto->agentNumber}}
                </p>     
              
@endsection