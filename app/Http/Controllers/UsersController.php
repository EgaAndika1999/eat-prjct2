<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Import Session
use App\Models\Student;  // Import model Student

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tampilkan halaman login
        return view('login');
    }

    /**
     * Proses login dan simpan data ke session
     */
    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string',
        'kelas' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Cek apakah email sudah ada di database, jika ada update data
    $student = Student::updateOrCreate(
        ['email' => $request->email], // Kondisi untuk update berdasarkan email
        [
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]
    );

    // Redirect ke halaman dashboard dan lempar data pengguna
    return redirect()->route('dashboard')->with('user', $student);
}

// Controller untuk halaman dashboard
public function dashboard()
{
 // Ambil semua data dari tabel students
 $students = Student::all(); 
 // Lempar data ke view dashboard
 return view('dashboard', compact('students'));
}


    public function logout()
{
    Session::forget('user');  // Menghapus data user dari session
    return redirect()->route('login');  // Redirect ke halaman login
}
    public function create()
    {
        // Fungsi create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Fungsi store
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fungsi show
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fungsi edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fungsi update
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fungsi destroy
    }
}
