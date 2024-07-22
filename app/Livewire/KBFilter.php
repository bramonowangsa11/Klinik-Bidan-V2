<?php

namespace App\Livewire;

use App\Models\Kb;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class KBFilter extends Component
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
    
    public function render()
    {
        $query = Kb::with(['Suami', 'Ibu']);

        if ($this->tanggal) {
            $query->whereDate('tgl_kb', $this->tanggal);
        }

        if ($this->bulan) {
            $query->whereMonth('tgl_kb', Carbon::parse($this->bulan)->month)
            ->whereYear('tgl_kb', Carbon::parse($this->bulan)->year);
        }

        if ($this->name) {
            $query->whereHas('Suami', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            })->orWhereHas('Ibu', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            });
        }
        $kbs = $query->orderBy('tgl_kb', 'desc')->paginate(5)->onEachSide(1);
        
        return view('livewire.k-b-filter', [
            'kbs' => $kbs,
        ])->layout('layouts.admin.kb-livewire');;
    }
    public function resetFilters(){
        $this->reset(['name', 'tanggal', 'bulan']);
        $this->resetPage();
    }
}