<?php

namespace App\Http\Controllers;

use App\Services\Contracts\FindSingleNumberInterface;


class SingleNumberController extends Controller
{
    private FindSingleNumberInterface $singleNumber;

    public function __construct(FindSingleNumberInterface $singleNumber)
    {
        $this->singleNumber = $singleNumber;
    }

    public function showSingleNumbers()
    {
        //przykładowe dane
        $numbers = [1, 2, 2, 3, 4, 4, 5];

        // Znalezienie liczb
        $singleNumbers = $this->singleNumber->findSingle($numbers);

        // Przekazanie znalezionych danych do widoku
        return view('singleNumbers', ['singleNumbers' => $singleNumbers]);
    }
}