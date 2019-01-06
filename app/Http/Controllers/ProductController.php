<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Scalar\String_;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'index';
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'create';
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
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //return 'show';


        return Product::find((string)$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return 'edit';
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
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //return 'destroy';
        $product=new Product();
        $d = $product->delete((string)$id);
        return $d;
    }
    public function count()
    {

        //return 'destroy';
        return Product::count();
    }
    public function average()
    {

        //return 'destroy';
        return Product::avg('quantity');
    }
    public function maxQuantity()
    {

        //return 'destroy';
        return Product::max('quantity');
    }

    public function findByName($name)
    {

        //return 'destroy';


        return Product::where('name', (string)$name)->get();



    }
    public function like($name)
    {

        //return 'destroy';


        return Product::where('name', 'like',"%$name%")->get();



    }

    public function pluck()
    {

        //return 'destroy';

        $product=new Product();
        $plucked = $product->pluck('name');
        return $plucked->all();
    }

    public function take()
    {

        //return 'destroy';


        return Product::take(5)->get();

    }

    public function first()
    {

        //return 'destroy';
        return Product::first();
    }
    public function distinct()
    {

        //return 'destroy';


        return Product::Distinct('name')->get();



    }
    public function orderBy($property)
    {

        //return 'destroy';


        return Product::orderBy($property,'desc')->get();



    }


}
