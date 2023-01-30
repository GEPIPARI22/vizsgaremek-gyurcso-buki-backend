<?php

namespace App\Traits;

trait HttpResponses {
    protected function success($data, $code = 200, $message = null) {
        return response()->json([
            'status'=> 'A kérés sikeres volt.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $code, $message = null) {
        return response()->json([
            'status'=> 'Hiba történt...',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
