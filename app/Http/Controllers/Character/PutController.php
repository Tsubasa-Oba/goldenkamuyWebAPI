<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Requests\Character\UpdateRequest;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
        $modelCharacter = Character::where('id', $request->id())->firstOrFail();
        $modelCharacter->name =$request->input('name');
        $modelCharacter->team_id =$request->input('team_id');
        $modelCharacter->age =$request->input('age');
        $modelCharacter->save();
    }
}
