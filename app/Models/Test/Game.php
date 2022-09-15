<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    public function users()
    {
        return $this->belongsToMany(User::class,'game_user','user_id','game_id');
    }
}
