<?php

namespace App\Models;
use Gomee\Models\Model;
class Team extends Model
{
    public $table = 'teams';
    public $fillable = ['name', 'description'];

    

    /**
     * lấy ra các thành viên trong team
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teamMembers()
    {
        return $this->hasMany('App\Models\TeamMember', 'team_id', 'id');
    }

    /**
     * lấy ra các thành viên trong team
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    public function members()
    {
        return $this->teamMembers()->join('users', 'users.id', '=', 'team_members.member_id')
                    ->select('team_members.*', 'users.name', 'users.email', 'users.avatar');
    }

    public function beforeDelete()
    {
        $this->teamMembers()->delete();
    }
    
}
