<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Test_ApiModel;

class Test_ApiController extends Controller
{
    public function test_api()
    {
        /*  return response()->json(Test_ApiModel::get(), 200); */
        return response(Test_ApiModel::paginate(1), 200);
    }
    public function test_apiById($id)
    {
        return response()->json(Test_ApiModel::find($id), 200);
    }
    public function test_apiSave(Request $request)
    {
        $test_api = Test_ApiModel::create($request->all());
        return response()->json($test_api, 201);
    }
}
