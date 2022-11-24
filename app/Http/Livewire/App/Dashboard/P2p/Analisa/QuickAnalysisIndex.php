<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Analisa;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\DatastudioData;

class QuickAnalysisIndex extends Component
{
    public function mount()
    {
        $this->data = DatastudioData::all();
    }

    public function cekAnalisa($no_factsheet)
    {
        DB::select('call getQuickAnalysisByNoFactsheet(?)',array($no_factsheet));
        $data = DatastudioData::where('no_factsheet',$no_factsheet)->get();
        return redirect()->route('analisa.quick-analysis.detail',$data[0]->quick_analysis);
    }

    public function render()
    {
        return view('livewire.app.dashboard.p2p.analisa.quick-analysis-index')->extends('layouts.master');
    }
}
