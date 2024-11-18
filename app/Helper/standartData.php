<?php

namespace App\Helper;

use Illuminate\Support\Str;

trait standartData
{
    /**
     * Base Create Data
     * @param array $data
     * @return array
     */
    public function baseCreateData($data, $pivotTable = false)
    {
        if (!isset($data["id"]) && !$pivotTable)
            $data["id"] = Str::uuid()->toString();

        if (!isset($data["created_at"]))
            $data["created_at"] = now();

        return $data;
    }

    /**
     * Base Update Data
     * @param array $data
     * @return array
     */
    public function baseUpdateData($data)
    {
        if (!isset($data["updated_at"]))
            $data["updated_at"] = now();

        return $data;
    }

    /**
     * Success response
     * 
     * @see https://medium-com.translate.goog/@noumcpe0007/laravel-11-rest-api-authentication-using-sanctum-tutorial-12231b02354b?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=tc&_x_tr_hist=true  
     * @param array $data data respon
     * @param string $message pesan respon
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($data = "", $message, $status = 200)
    {
        $res = [
            "success" => true,
            "message" => $message
        ];

        $data != "" ? $res["data"] = $data : "";

        return response()->json($res, $status);
    }

    /**
     * Error response
     * 
     * @see https://medium-com.translate.goog/@noumcpe0007/laravel-11-rest-api-authentication-using-sanctum-tutorial-12231b02354b?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=tc&_x_tr_hist=true  
     * @param string $error pesan error
     * @param array $errorMessage pesan error dalam bentuk array  
     * @param int $code kode error
     * @return \Illuminate\Http\Response
     */
    public function errorResponse($error, $errorMessage = [], $code = 404)
    {
        $res = [
            "error" => true,
            "message" => $error
        ];

        if (!empty($errorMessage)) {
            $rea['data'] = $errorMessage;
        }

        return response()->json($res, $code);
    }
}
