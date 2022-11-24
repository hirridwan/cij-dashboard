<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Analisa;

use Livewire\Component;
use App\QuickAnalysis;
use Illuminate\Support\Facades\DB;

class QuickAnalysisDetail extends Component
{

    public function mount($id)
    {
        $this->analysis = QuickAnalysis::find($id);
        $this->score_rac = DB::select('select getScoreRAC(?) as score',array($this->analysis->no_factsheet));
        $this->score_rac_detail = DB::select('call getScoreRacDetail(?)',array($this->analysis->no_factsheet));
        $this->score_fitur_pendanaan= DB::select('select getScoreFiturPendanaan(?) as score',array($this->analysis->no_factsheet));
        $this->score_fitur_pendanaan_detail= DB::select('call getScoreFiturPendanaanDetail(?)',array($this->analysis->no_factsheet));
        // dd($this->score_rac_detail);
    }

    public function render()
    {
        return view('livewire.app.dashboard.p2p.analisa.quick-analysis-detail')->extends('layouts.master');
    }
}
