<?php 
declare(strict_types=1);

namespace App\Services\Contracts;

interface FindSingleNumberInterface {

    public function findSingle(array $numbers);
}