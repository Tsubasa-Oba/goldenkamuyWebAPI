<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $name = $request->input('name');
        $team_id = $request->input('team_id');
        $age = $request->input('age');
        $characterModel = new Character;
        $characterModel->createCharacter($name, $team_id, $age);
    }
}
