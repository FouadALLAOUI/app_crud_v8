<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documment extends Model
{
    use HasFactory;  
 
    protected $fillable = [
        'propr'        ,
        'intitule'     ,
        'auteur'       ,
        'description'  ,
        'type_document',
        'visibility'   ,
        'archive'      
    ];   

}
