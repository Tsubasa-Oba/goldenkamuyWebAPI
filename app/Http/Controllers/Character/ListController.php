<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Contracts\Routing\ResponseFactory;

class ListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $modelCharacter = Character::orderBy('team_id')->get();
        // inRandomOrder()->limit(5)->get();
        return response()->json(
            $modelCharacter,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
    }
}
