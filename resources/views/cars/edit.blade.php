@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="w-4/8 m-auto text-center">
    @foreach ( $errors->all() as $error )

        <li class="text-red-500 list-none">
            {{ $error }}
        </li>                
        
    @endforeach
</div>
@endif

    <div class="m-autp w-4/8 py-24">
        <div class="text-center ">
            <h1 class="text-5xl uppercase bold">
                UPDATE CAR
             </h1>
        </div>
    </div> 

    <div class="flex justify-center pt-20">
        <form action="/cars/{{$auto->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          
                <div class="bold">
                <input 
                type="file" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="image"
                placeholder="brand name...">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="name"
               value="{{ $auto->name }}">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                value="{{ $auto->founded}}">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                value="{{ $auto->description }}">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="condition"
                value="{{ $auto->condition }}">
                
                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="modelNumber"
                value="{{ $auto->modelNumber}}">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="price"
                value="{{ $auto->price}}">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="agentNumber"
                value="{{ $auto->agentNumber}}">

                <button type="submit" class="bg-green-500 block shadow-xl5 mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>

            </div>
        </form>
    </div>

@endsection