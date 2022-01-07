<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreResto extends Model
{
    use HasFactory;

    protected $fillable = ['compte_id', 'type_repa_id', 'created_at'];
    public $timestamps = false;

    public function compte(){
        return $this->belongsTo(Compte::class);
    }

    public function type_repa(){
        return $this->belongsTo(TypeRepas::class);
    }
}
    