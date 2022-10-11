@extends('layouts.app')

@section('content')

    <div class="m-autp w-4/8 py-24">
        <div class="text-center ">
            <h1 class="text-5xl uppercase bold">
                create car
            </h1>
        </div>
    </div> 

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST" enctype="multipart/form-data">
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
                placeholder="brand name...">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                placeholder="founded...">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                placeholder="Description">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="condition"
                placeholder="condition">
                
                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="modelNumber"
                placeholder="modelNumber">

                <input 
                type="text" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="price"
                placeholder="price">

                <input 
                type="number" 
                class="block sadow-xl5 mb-10 p-2 w-80 italic placeholder-gray-400"
                name="agentNumber"
                placeholder="Agent phone number">

                <button type="submit" class="bg-green-500 block shadow-xl5 mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>

            </div>
        </form>
    </div>

@endsection