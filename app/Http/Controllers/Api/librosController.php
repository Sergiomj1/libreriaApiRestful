<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\User;

class librosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return libros::all();

    }



    public function store(Request $request)
    {


        $libro = libros::create([

        'titulo'=>$request->titulo,
        'autor'=>$request->autor,
            'num_paginas'=>$request->num_paginas,
        'precio'=>$request->precio,
            'descripcion'=>$request->descripcion,

        ]);


        return response()->json($libro, 201);

    }


    public function show($id)

    {

        return libros::where('id', $id)->get();

    }


    public function update(Request $request, $id)
    {

        $libro = libros::find($id);


            $libro->update([

                'titulo' => $request->titulo,
                'autor' => $request->autor,
                'num_paginas'=>$request->num_paginas,
                'precio'=>$request->precio,
                'descripcion'=>$request->descripcion,




            ]);

        return libros::where('id', $id)->get();


    }








    public function destroy($id)
    {
        $libro=libros::find($id);
        $libro->delete();
        return response()->json(null, 204);
    }

}
