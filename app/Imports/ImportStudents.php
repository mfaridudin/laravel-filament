<?php

namespace App\Imports;

use App\Models\StudentsModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportStudents implements ToModel
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new StudentsModel([
            'nis' => $row[0],
            'name' => $row[1],
            'gender' => $row[2],
            'birthday' => $row[3],
            'religion' => $row[4],
        ]);
    }
}
