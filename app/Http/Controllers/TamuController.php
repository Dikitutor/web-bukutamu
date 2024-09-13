<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){
        $tamu = Tamu::latest()->paginate(5);
        return view('home', compact(['tamu']));
    }

    public function create(){
        return view('tambah');
    }

    public function store(Request $request){
        // Validasi input termasuk tanggal
        $this->validate($request, [
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date' // Menambahkan validasi untuk tanggal
        ]);

        // Menyimpan data tamu ke database
        Tamu::create($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function edit($id){
        $tamu = Tamu::find($id);
        return view('edit', compact(['tamu']));
    }

    public function update($id, Request $request){
        // Validasi input termasuk tanggal
        $this->validate($request, [
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date' // Menambahkan validasi untuk tanggal
        ]);

        $tamu = Tamu::find($id);
        $tamu->update($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function delete($id){
        $tamu = Tamu::find($id);
        $tamu->delete();
        return redirect('/');
    }
}
