<?php

namespace App\Http\Controllers;

use App\Exports\StudentsGradesExport;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PDFController extends Controller
{
    //
    public function viewPDF()
    {
        $students = Student::all();
        $pdf = PDF::loadView('pdf.students', array('students' => $students));
        return $pdf->stream();
    }

    public function downloadPDF()
    {
        $students = Student::all();
        $pdf = PDF::loadView('pdf.students', array('students' => $students));
        return $pdf->download('students-grades.pdf');
    }

    public function exportExcel()
    {
        return Excel::download( new StudentsGradesExport, 'students-grade.xlsx');
    }
}