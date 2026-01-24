<?php

namespace App\Http\Controllers;

use App\Exports\ExportNilai;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {

        $categoryId = request('filters.category_nilai_id.value');

        // return "hello export $categoryId";

        return Excel::download(new ExportNilai($categoryId), 'nilai.xlsx');
    }
}
