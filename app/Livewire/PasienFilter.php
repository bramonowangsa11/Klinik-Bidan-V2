<?php

namespace App\Livewire;

use App\Models\Pasien;
use Livewire\Component;
use Livewire\WithPagination;

class PasienFilter extends Component
{
    use WithPagination;
    public $name = '';
    public $tanggal = '';
    public $bulan = '';

    protected $queryString = ['name', 'tanggal','bulan'];
    
    public function updatingName(){
        $this->resetPage();
    }

    public function updatingTanggal(){
        $this->resetPage();
    }

    public function updatingBulan(){
        $this->resetPage();
    }

    public function res(){
        $this->resetPage(); 
    }

    public function filter(){
        $this->resetPage(); 
    }
    
    public function render()
    {
        $query = Pasien::query();

        if ($this->name) {
            $query->where('name','like','%'. $this->name. '%')
            ->orWhere('nik','like','%'. $this->name. '%');
        }
        $pasiens = $query->paginate(5)->onEachSide(1);
        
        return view('livewire.pasien-filter', [
            'pasiens' => $pasiens,
        ])->layout('layouts.admin.pasien');;
    }
}