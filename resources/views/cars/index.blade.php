<?php ob_start(); ?> 
@extends('layouts.app')

{{-- @foreach ($cars as $car) --}}
    {{-- {{ $car['name']
        {{-- {{$car->name  }} --}}
{{-- @endforeach--}}
@section('content')

<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Cars
        </h1>
    </div>
{{-- {{ dd(Auth::user()) }} --}}
    @if ( Auth::user())
    <div class="pt-10">
        <a 
        href="/cars/create"
        class="borde-b-2 pb-2 text-6xl border-dotted italic text-blue-500">
        Add new car &rarr;
        </a>
    </div>

        
    @else
    <p class="py-12 italic ">
        Please login to add new car 
    </p>
        
    @endif
       
    
    <div class="w-5/6 py-10">
      @foreach ($autos as $auto)                                             
        <div class="m-auto">
            {{-- the edit function on the index page --}}

            @if (isset(Auth::user()->id) && Auth::user()->id == $auto->user_id)
                <div class="float-right">
                        <a 
                        class="border-b-2 pb-2 border-dotted italic text-green-500"
                        href="/cars/{{$auto->id}}/edit">
                        {{-- href="cars/edit"> --}}
                            Edit &rarr;
                        </a>
                

                        {{-- the delete form --}}

                        {{-- <form action="cars" method="POST"  --}}
                        <form action="/cars/{{ $auto->id }}" method="POST"
                                class="pt-4">
                            @csrf
                            @method('delete')

                            <button type="submit" 
                            class="border-b-2 pb-2 border-dotted italic text-red-500">
                                Delete &rarr;
                            </button>
                        </form> 
                </div>
            @endif
            

            
            <h2 class="text-gray-700 text-5xl hover:text-blue-500">
                <a href="/car/{{$auto->id}}/show">

                  {{ $auto->name }}  
              </a>  
              </h2>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{$auto->founded}}
            </span>
           
            {{-- <p class="text-lg text-red-700 py-6">
                {{$auto->modelNumber }} --}}
            </p>
            <p class="text-lg text-green-500 py-6">
              Description: {{$auto->description}}
            </p>
            <hr class="mt-4 mb-8">
        </div>
          
      @endforeach
    </div>
</div> 

@endsection