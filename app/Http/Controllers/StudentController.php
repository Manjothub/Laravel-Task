<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        $tableData = [];

        foreach ($tables as $table) {
            $tableName = current((array)$table);
            $columns = DB::select("SHOW COLUMNS FROM $tableName");

            $rows = DB::table($tableName)->get();

            $tableData[] = [
                'tableName' => $tableName,
                'columns' => $columns,
                'rows' => $rows,
            ];
        }

        return view('students', compact('tableData'));
    }
}
