<?php

namespace App\Http\Controllers;

use SheetDB\SheetDB;
use Illuminate\Http\Request;

class SheetDBController extends Controller
{
    public function get()
    {
        $sheetdb = new SheetDB('rtvq67u3kqff1');
        dd($sheetdb->get());
    }
    public function create()
    {
        $sheetdb = new SheetDB('rtvq67u3kqff1');
        $sheetdb->create([
            ['nama'=>'Reza','absen'=>'28','kelas'=>'XI RPL 1','waktu'=>'12:00:00','status'=>'Hadir'],
            ['nama'=>'Akbar','absen'=>'20','kelas'=>'XI RPL 1','waktu'=>'12:00:00','status'=>'Hadir'],
        ]);
    }
}
