<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\anc;

class AncFilter extends Component
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
        $query = anc::with(['Suami', 'Istri']);

        if ($this->tanggal) {
            $query->whereDate('tgl_pemeriksaan', $this->tanggal);
        }

        if ($this->bulan) {
            $query->whereMonth('tgl_pemeriksaan', Carbon::parse($this->bulan)->month)
            ->whereYear('tgl_pemeriksaan', Carbon::parse($this->bulan)->year);
        }

        if ($this->name) {
            $query->whereHas('Suami', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            })->orWhereHas('Istri', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            });
        }
        $ancs = $query->orderBy('tgl_pemeriksaan', 'desc')->paginate(5)->onEachSide(1);
        
        return view('livewire.anc-filter', [
            'ancs' => $ancs,
        ])->layout('layouts.admin.anc');;
    }
}