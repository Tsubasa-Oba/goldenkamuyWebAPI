<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\Team\UpdateRequest;

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
        $modelTeam = Team::where('team_id', $request->team_id())->firstOrFail();  
        $modelTeam->team_name =$request->input('team_name');
        $modelTeam->save();
    }
}
