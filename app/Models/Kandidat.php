<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'firma_id'
    ];

    public function firme() {
    	return $this->belongsTo('App\Models\Firme');
    }
}
