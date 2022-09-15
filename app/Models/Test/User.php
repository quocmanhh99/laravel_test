<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function games()
    {
        return $this->belongsToMany(Game::class,'game_user','user_id','game_id');
    }
}
