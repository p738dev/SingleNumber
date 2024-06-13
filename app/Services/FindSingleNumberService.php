<?php
declare(strict_types=1);

namespace App\Services;

use App\Services\Contracts\FindSingleNumberInterface;

class FindSingleNumberService implements FindSingleNumberInterface {
    
    public function findSingle(array $numbers) {
        $values = [];

        foreach ($numbers as $number) {
            if (isset($values[$number])) {
                $values[$number]++;
            } else {
                $values[$number] = 1;
            }
        }

        $singleNumbers = [];
        foreach ($values as $number => $value) {
            if ($value === 1) {
                $singleNumbers[] = $number;
            }
        }

        return $singleNumbers;
    }
}