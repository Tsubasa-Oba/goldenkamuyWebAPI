<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Http\Requests\Character\UpdateRequest;
use App\Models\Character;
use Illuminate\Contracts\Routing\ResponseFactory;

class ProfController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, ResponseFactory $responseFactory)
    {
        $modelCharacter = Character::where('id', $request->id())->firstOrFail();
        return response()->json(
            $modelCharacter,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
    }
}
