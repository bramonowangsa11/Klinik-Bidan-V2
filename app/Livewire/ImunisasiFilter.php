<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Imunisasi;
use Livewire\WithPagination;
use App\Models\CobaImunisasi;
use Illuminate\Support\Carbon;

class ImunisasiFilter extends Component
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
        $query = Imunisasi::with(['anak', 'ortu']);

        if ($this->tanggal) {
            $query->whereDate('tanggal', $this->tanggal);
        }

        if ($this->bulan) {
            $query->whereMonth('tanggal', Carbon::parse($this->bulan)->month)
            ->whereYear('tanggal', Carbon::parse($this->bulan)->year);
        }

        if ($this->name) {
            $query->whereHas('Anak', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            });
        }
        $imunisasi = $query->orderBy('tanggal', 'desc')->paginate(5)->onEachSide(1);
        
        return view('livewire.imunisasi-filter', [
            'imunisasi' => $imunisasi,
        ])->layout('layouts.admin.imunisasi');
    }
}