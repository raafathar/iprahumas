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
}
