<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;
    
    public function companys(){
        return $this->belongsTo(Company::class, 'id_company');
    }
    
}
