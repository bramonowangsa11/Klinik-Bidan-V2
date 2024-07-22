<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SeatController extends Controller
{
public function index()
{
// Data kursi contoh
$seats = range(1, 14); // Kursi bernomor dari 1 hingga 20
$selectedSeats = [3, 5, 8, 12]; // Kursi yang sudah dipilih

return view('layouts.users.seats', compact('seats', 'selectedSeats'));
}
    public function submitSeats(Request $request)
    {
        // Proses data kursi yang dipilih di sini
        $selectedSeats = $request->input('selectedSeats');
        // Lakukan apa pun yang diperlukan, seperti menyimpan ke database

        return redirect()->back()->with('success', 'Kursi berhasil dipilih!');
    }
}