<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\AnalyticsJob;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function makeHit(Request $request, string $model, int $id, string $action)
    {
        $model = 'App\\Models\\' . ucfirst($model);

        $model = $model::findOrFail($id);

//        resolve('SSPEcommerce')->makeHit(
//            class_basename($model),
//            $id,
//            $action
//        );


        // DONT NEED TO USE THIS !!!!
        AnalyticsJob::dispatch(
            class_basename($model),
            $id,
            $action
        );

        return response()->json([
            'message' => 'Hit created successfully'
        ]);

    }
}
