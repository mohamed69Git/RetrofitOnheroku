<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatTicket extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'compte_id',
        'type_repa_id',
        'created_at',
        'quantite',       
    ];

    public function compte(){
        return $this->belongsTo(Compte::class);
    }
}
