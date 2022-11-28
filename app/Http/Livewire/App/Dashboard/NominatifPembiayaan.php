<?php

namespace App\Http\Livewire\App\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\DatastudioData;
use Yajra\DataTables\Facades\DataTables;

class NominatifPembiayaan extends Component
{
    use WithPagination;
    protected $listeners=['updateData'];
    public $statusPembiayaan;
    public $paginationTheme='bootstrap';
    public $filter='*';
    public $paginate;
    public $data;
    
    public function mount()
    {
        $this->paginate = 25;
        $this->data = DB::select('call getPembiayaanByTglAndStatus(?,?,?)',array('2021-11-01',date('Y-m-d'),$this->filter));
        $this->statusPembiayaan = DB::table('status_pembiayaan')->get();
        $dataTables=Datatables::of($this->data);
        $this->dataTablesData=json_encode($dataTables->toArray(),true);
    }
    public function updatingFilter()
    {
        $this->resetPage();
    }

    

    public function selectStatus($id)
    {
        $this->filter=$id;
        $this->data=DB::select('call getPembiayaanByTglAndStatus(?,?,?)',array('2021-11-01',date('Y-m-d'),$this->filter));
        $this->emit('updateData');
    }

    public function render()
    {
        // dd(DB::select('call getPembiayaanByTglAndStatus(?,?,?)',array('2021-11-01',date('Y-m-d'),1)));
        return view('livewire.app.dashboard.nominatif-pembiayaan',[
            'statuses'=>DB::select('call getPembiayaanStatusCount')
        ])->extends('layouts.master');
    }
}
