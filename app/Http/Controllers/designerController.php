<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ImportCSVFile;
use Maatwebsite\Excel\Facades\Excel;

class designerController extends Controller
{

        public $columnsName  = [
                'long_gate_name',
                'description',
                'address'
        ];

        public function import(ImportCSVFile $import, Request $request)
        {

                $gatters = $import->select($this->columnsName)->toArray();

                return view('pages.gatter', compact('gatters'));
                //dd($retour);
        }

}
