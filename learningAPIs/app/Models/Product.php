<?php

namespace App\Models;

use App\Http\Requests\createRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    public function data(){
        return $this->all();
    }
    public function store(createRequest $request){

         return $this->create($request->all());
    }
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
