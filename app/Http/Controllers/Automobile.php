<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AutoModel;
use App\Http\Middleware;


class Automobile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
        //$this->middleware('except');
     
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
     
         $autos = AutoModel::all()->toJson();
         $autos = json_decode( $autos);

       
  
        return view('cars.index',
            ['autos' => $autos]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('/cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     
        $request->validate([
             'name'=> 'required',
             'founded'=>'required|integer|min:0|max:2021',
             'description'=>'required',
             'image'=>'required|mimes:jpg,png,webp,jpeg|max:5048'
    
                 ]); 
                //changing the image original name to a new name in a prescribe format
               $newImageName = time().'-'.$request->name.'-'.$request->image->extension();

            //storing the image in a public >>image folder 
               $request->image->move(public_path('images'),$newImageName);
                 

                $autos =AutoModel::create([//u can also use 'make' in place of create. but in that case, you use '$car->save' method at the end to save.
                    'name'=>$request->input('name'),
                    'founded'=>$request->input('founded'),
                    'description'=>$request->input('description'),
                    'condition'=>$request->input('condition'),
                    'modelNumber'=>$request->input('modelNumber'),
                    'agentNumber'=>$request->input('agentNumber'),
                    'price'=>$request->input('price'),
                    'image_path'=>$newImageName,
                    'user_id'=>auth()->user()->id
                ]);
                    //$Auto->image_path=$newImageName;
             

            return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);

        $autos = AutoModel::find($id);
       return view('/cars.show')->with('auto', $autos);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd($id);
        $autos = AutoModel::find($id);
        return view('/cars.edit')->with('auto', $autos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'founded'=>'required|integer|min:0|max:2021',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,webp,jpeg|max:5048'
        ]);

        $newImageName = time().'-'.$request->name.'-'.$request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        $auto= AutoModel::where('id',$id)->update([
                    'name'=>$request->input('name'),
                    'founded'=>$request->input('founded'),
                    'description'=>$request->input('description'),
                    'condition'=>$request->input('condition'),
                    'modelNumber'=>$request->input('modelNumber'),
                    'agentNumber'=>$request->input('agentNumber'),
                    'price'=>$request->input('price'),
                    'image_path'=>$newImageName
        ]);
    return redirect('/cars');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autos = AutoModel::find($id);
        $autos->delete();
        return redirect('/cars');
    }
}
