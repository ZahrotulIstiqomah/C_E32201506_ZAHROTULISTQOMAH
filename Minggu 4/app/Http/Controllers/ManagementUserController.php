<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "hallo ini adalah metode index,dalam controller ManagemenUser";
        //return "Metode ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Zahrotul Istiqomah";

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","pemograman web"];

        return view('home', compact('nama','pelajaran'));
    }
    public function create()
    {
        return "Metode ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request)
    {
        return "Metode ini nantinya akan digunakan untuk menciptakan data user yg baru";
    }
    public function show($id)
    {
        return "Metode ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }
    public function edit($id)
    {
        return "Metode ini nantinya akan digunakan untuk menampilkan form untuk mengubah data dengan id-" . $id;
    }
    public function update(Request $request,$id)
    {
        return "Metode ini nantinya akan digunakan untuk mengubah data user dengan id-" . $id;
    }
    public function destroy($id)
    {
        return "Metode ini nantinya akan digunakan untuk menghapus data user id-" . $id;
    }
}