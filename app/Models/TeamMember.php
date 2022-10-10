<?php

namespace App\Models;
use Gomee\Models\Model;
class TeamMember extends Model
{
    public $table = 'team_members';
    public $fillable = ['team_id', 'member_id', 'is_leader', 'job'];

    
    
}
