<?php

namespace App\Models;
use Gomee\Models\Model;
class SlugContainer extends Model
{
    public $table = 'slug_containers';
    public $fillable = ['slug', 'obref', 'obref_id'];

    
    
}
