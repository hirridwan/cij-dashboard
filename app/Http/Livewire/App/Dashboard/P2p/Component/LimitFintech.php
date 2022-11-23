<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Component;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LimitFintech extends Component
{
    public function mount()
    {
        
        $this->limitFintech = DB::table('datastudio_data')
        ->join('finteches','datastudio_data.fintech_id','=','finteches.id')
        ->join('limit_kredit_fintech','datastudio_data.fintech_id','limit_kredit_fintech.fintech_id')
        ->select(DB::raw('
        finteches.name,
        finteches.logo,
        SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS outstanding,
        round(SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0))/limit_kredit_fintech.nominal*100,2) AS persen_outstanding,
        limit_kredit_fintech.nominal AS nominal_limit,
        limit_kredit_fintech.nominal-SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS sisa_limit,
        100-round(SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0))/limit_kredit_fintech.nominal*100,2) AS sisa_persen
        '))
        ->groupBy('name')
        ->orderByDesc('outstanding')
        ->get();
    }
    public function render()
    {
        return view('livewire.app.dashboard.p2p.component.limit-fintech');
    }
}
