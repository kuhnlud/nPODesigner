<?php

namespace App;

use \Maatwebsite\Excel\Files\ExcelFile as ExcelFile;
use App\Http\Requests;
use  Illuminate\Support\Facades\Input;

class ImportCSVFile extends ExcelFile
{

        public function getFile(){

                $file = Input::file('csvfile');

                $filename = $this->UploadFile($file);

                return $filename;

        }

        public function UploadFile($file)
        {
                $name = $this->setName($file->getClientOriginalName());

                $file->move('gatter/import', $name);

                return 'gatter/import/' . $name;
        }

        public function setName($originalName)
        {
                return $name = time() . '_' . $originalName;
        }


}
