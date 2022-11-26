<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'teams';

    protected $primaryKey ='team_id';

    protected $fillable = 
    [
        'team_name',
    ];

    public function createTeam($team_name)
    {
        $this->create([
            'team_name' => $team_name,
        ]);
    }

}
