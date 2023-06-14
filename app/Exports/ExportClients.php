<?php

namespace App\Exports;

use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportClients implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::select('name','email', 'Tex_Number', 'Facility')->get();
    }
    public function headings(): array
    {
        return [
            '#',
            'name',
            'email',
            'Tex_Number',
            'Facility',
        ];
    }
}
