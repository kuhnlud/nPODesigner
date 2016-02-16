<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ImportCSVFile;
use Maatwebsite\Excel\Facades\Excel;

class designerController extends Controller
{

        private $columnsName  = [
                'long_gate_name',
                'description',
                'address'
        ];

        public function import(ImportCSVFile $import, Request $request)
        {
                //@TODO: validation before the import:
                //-- Is a file selected?

                $gatters = $import->select($this->columnsName)->toArray();

                //@TODO: validation form the import:
                //-- Is it an actuel gatter liste?
                //-- As it Gate_name or Long_gate_name?


                //@TODO: ADDRESS COLUMN --

                return view('pages.gatter', compact('gatters'));
        }

}
