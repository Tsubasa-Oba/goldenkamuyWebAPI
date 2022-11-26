<?php

namespace App\Http\Controllers\character;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Http\Requests\Character\UpdateRequest;

class DeleteController extends Controller
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
        $modelCharacter->delete();
    }
}
