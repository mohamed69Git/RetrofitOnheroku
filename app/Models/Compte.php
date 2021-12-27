<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = ['solde', 'nbr_ticket_fifty', 'nbr_ticket_cent'];
    use HasFactory;

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function achat(){
        return $this->hasMany(AchatTicket::class);
    }

    public function entre_resto(){
        return $this->hasMany(EntreResto::class);
    }
}
