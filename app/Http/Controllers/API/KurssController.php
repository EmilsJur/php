<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class KurssController extends Controller
{
    public function store(KurssStoreRequest $request)
    {
        $kurss = Kurss::create($request->validated());
        return response()->json($kurss, 201);
    }

}
