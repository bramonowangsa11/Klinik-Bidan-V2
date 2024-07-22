<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Reservasi;
use Livewire\WithPagination;

class ReservasiFilter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
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
    public function resetFilters(){
        $this->reset(['name', 'tanggal', 'bulan']);
        $this->resetPage();
    }
    public function render()
    {
        $query = Reservasi::with(['user']);

        if ($this->tanggal) {
            $query->whereDate('tgl_reservasi', $this->tanggal);
        }

        if ($this->bulan) {
            $query->whereMonth('tgl_reservasi', Carbon::parse($this->bulan)->month)
            ->whereYear('tgl_reservasi', Carbon::parse($this->bulan)->year);
        }

        $reservasis = $query->paginate(5)->onEachSide(1);
        
        return view('livewire.reservasi-filter', [
            'reservasis' => $reservasis,
        ])->layout('layouts.admin.reservasi');
    }
}