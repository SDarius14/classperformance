<?php

use App\Http\Controllers\PDFController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     $students = Student::all(); // Fetch student data from the database
    return view('welcome', compact('students')); 
});

Route::post('grades/viewPDF', [PDFController::class, 'viewPDF'])->name('view-pdf');
Route::post('grades/downloadPDF', [PDFController::class, 'downloadPDF'])->name('download-pdf');

Route::post('grades/exportExcel', [PDFController::class, 'exportExcel'])->name('export-excel');