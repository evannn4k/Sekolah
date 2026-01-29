<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesanController extends Controller
{
    public function index()
    {
        $pesans = Pesan::latest()->paginate(10);

        return view("admin.pesan.index", [
            "pesans" => $pesans
        ]);
    }
}
