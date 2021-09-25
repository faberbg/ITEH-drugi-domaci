<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firme extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'naziv', 
        'opis',
        'pozicija',
        'grad_id'
    ];

    public function grad() {
    	return $this->belongsTo('App\Models\Grad');
    }
    public function kandidat() {
    	return $this->hasMany('App\Models\Kandidat');
    }
}
