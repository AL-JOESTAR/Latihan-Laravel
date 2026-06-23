<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class BukuController extends Controller
{
    public function index () {
        $data = Buku::get();

        return view ('/dashboard', compact(('data')));
    }

    public function edit(){
        return view('edit');
    }
}
