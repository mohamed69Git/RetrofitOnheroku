<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRepas extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function entre_resto(){
        return $this->hasMany(EntreResto::class);
    }
}
