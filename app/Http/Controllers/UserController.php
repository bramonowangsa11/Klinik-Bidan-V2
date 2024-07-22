<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function daftar(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'nik' => 'required|numeric| ',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'no_telp' => 'required|string|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

        ],[
            'name.required' => 'Nama wajib diisi.',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email sudah terdaftar',
            'nik.numeric' => 'Format NIK harus berupa angka.',
            'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'password.required'=>'Password wajib diisi',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.date' => 'Format tanggal lahir tidak valid.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.string' => 'Nomor telepon harus berupa teks.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        ]);

        $data = Pasien::where('nik',$validatedData['nik'])->first();
        if(is_null($data)){
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
        
            // Buat data pasien
            $pasien = Pasien::create([
                'name' => $validatedData['name'],
                'nik' => $validatedData['nik'],
                'alamat' => $validatedData['alamat'],
                'ttl' => $validatedData['ttl'],
                'no_telp' => $validatedData['no_telp'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'user_id' => $user->id,
            ]);
            Session::flash('success', 'User berhasil didaftarkan');
            return redirect('/');
        }
        else{
            if(is_null($data->user_id)){
                $user = User::create([
                    'name' => $validatedData['name'],
                    'email' => $validatedData['email'],
                    'password' => Hash::make($validatedData['password']),
                ]);
                
                $data->user_id = $user->id;
                $data->save();
                Session::flash('success', 'User berhasil didaftarkan');
                return redirect('/');
            }
            else{
                return redirect()->back()->withErrors(['nik' => 'NIK yang anda masukkan telah terdaftar sebagai user.']);
            }
        }
    }

    public function updateProfil(Request $request){
        $validate_data = $request->validate(['name' => 'required|string|max:255',
        'alamat' => 'required|string',
        'ttl' => 'required|date',
        'no_telp' => 'required|string|numeric',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

    ],[
        'name.required' => 'Nama wajib diisi.',
        'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
        'name.required' => 'Nama wajib diisi.',
        'name.string' => 'Nama harus berupa teks.',
        'alamat.required' => 'Alamat wajib diisi.',
        'alamat.string' => 'Alamat harus berupa teks.',
        'ttl.required' => 'Tanggal lahir wajib diisi.',
        'ttl.date' => 'Format tanggal lahir tidak valid.',
        'no_telp.required' => 'Nomor telepon wajib diisi.',
        'no_telp.string' => 'Nomor telepon harus berupa teks.',
        'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
    ]);

        $user_id = Auth::user()->id;
        $pasien = pasien::where('user_id',$user_id)->firstOrFail();
        $pasien->update([
            'name' => $validate_data['name'],
            'no_telp' => $validate_data['no_telp'],
            'alamat' => $validate_data['alamat'],
            'ttl' => $validate_data['ttl'],
            'jenis_kelamin' => $validate_data['jenis_kelamin'],
        ]);
    }
    public function GetUser(){
        $users = User::paginate(5)->onEachSide(1);
        if($users->isEmpty()){
            return view('layouts.admin.data-pengguna')->with('error','data user kosong');
        }
        return view('layouts.admin.data-pengguna',compact('users'));
    }
    public function index(){
       $id = Auth::user()->id;
       $user_data = Pasien::where('user_id',$id)->first();
       return view('layouts.users.dashboard-user',compact('user_data','id'));
    }
}