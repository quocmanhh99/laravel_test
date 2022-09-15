<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;
    protected $table = 'game_user';
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany(User::class,'game_user','user_id','game_id');
    }

    public function games()
    {
        return $this->hasMany(Game::class,'id','game_id');
    }

}
