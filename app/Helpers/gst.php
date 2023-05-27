<?php

namespace App\Helpers;

class Gst
{

    public function index($amount,$percentage)
    {
        $gst = $amount - ($amount * (100/(100 + $percentage)));
        $sgst = $cgst = $gst / 2;
        $origin = $amount / (1 + ($percentage / 100));

        return [
            'origin' => $origin,
            'gst' => $gst,
            'cgst' => $cgst,
            'sgst' => $sgst
        ];
        // echo $gst;
    }
}
