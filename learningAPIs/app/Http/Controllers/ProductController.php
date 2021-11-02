<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $prod;
    public function __construct(Product $prod){
      $this->prod = $prod;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  $this->prod->data();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createRequest $request)
    {
        return $this->prod->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $this->prod->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createRequest $request, $id)
    {
        $product= $this->prod->find($id);
        $product->update( $request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return $this->prod->destroy($id); 
    }
    /**
     * show the specified resource
     * @param names
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
       return $this->prod->where('name', 'like','%'.$name.'%')->get(); 
    }
}
