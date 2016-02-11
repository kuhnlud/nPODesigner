<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ImportCSVFile;
use Maatwebsite\Excel\Facades\Excel;

class designerController extends Controller
{
        public function import(ImportCSVFile $import, Request $request)
        {
                $retour = $import->select(array('long_gate_name', 'description', 'address'))->toArray();

                dd($retour);

        }

}
