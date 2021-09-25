<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'imegrada'
    ];

    public function firme() {
    	return $this->hasMany('App\Models\Firme');
    }
    

}
