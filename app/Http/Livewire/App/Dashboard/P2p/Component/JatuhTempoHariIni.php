<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Component;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class JatuhTempoHariIni extends Component
{
    public function mount()
    {        
        $this->jatuhTempoHariIni=DB::table('datastudio_data')
        ->join('finteches','datastudio_data.fintech_id','=','finteches.id')
        ->select(DB::raw('
        datastudio_data.jatuh_tempo,
        finteches.name as nama_fintech,
        datastudio_data.nama_borrower,
        datastudio_data.nominal_pembiayaan,
        datastudio_data.tunggakan_hari
        '))
        ->where('datastudio_data.jatuh_tempo','=',date('Y-m-d'))
        ->where('datastudio_data.status_pembiayaan',1)
        ->get();
    }
    
    public function render()
    {
        return view('livewire.app.dashboard.p2p.component.jatuh-tempo-hari-ini');
    }
}
