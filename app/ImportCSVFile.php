<?php

namespace App;

use \Maatwebsite\Excel\Files\ExcelFile as ExcelFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ImportCSVFile extends ExcelFile
{

        private $name;

        public function getFile()
        {
                $file = Input::file('csvfile');

                //@TODO: Pb with ADDRESS COLUMN

                $this-> name = $this->setName($file->getClientOriginalName());

                return $this->UploadFile($file);
        }

        public function UploadFile($file)
        {
                Storage::disk('gate')->put($this->name, file_get_contents($file));

                return storage_path('gate') .'\\'. $this->name;
        }

        public function setName($originalName)
        {
                return $name = time() . '_' . $originalName;
        }


}
