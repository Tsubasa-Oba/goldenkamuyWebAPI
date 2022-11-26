<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'characters';

    protected $fillable = 
    [
        'name',
        'team_id',
        'age'
    ];

    public function createCharacter($name, $team_id, $age)
    {
        $this->create([
            'name' => $name,
            'team_id' => $team_id,
            'age' => $age,
        ]);
    }

}
