<?php

namespace App\Models;
use Gomee\Models\Model;
class Metadata extends Model
{
    public $table = 'metadatas';
    public $fillable = ['ref', 'ref_id', 'name', 'value'];


    
}
