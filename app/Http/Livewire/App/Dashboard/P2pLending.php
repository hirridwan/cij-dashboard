<?php

namespace App\Http\Livewire\App\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class P2pLending extends Component
{
    public $dataNominal1;
    public $dataNominal2;
    public $jatuhTempoHariIni;

    public function mount()
    {
        $this->dataNominal1 = DB::table('datastudio_data')->select(DB::raw('
        sum(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0))+sum(if(datastudio_data.status_pembiayaan=3,datastudio_data.nominal_pembiayaan,0)) AS nominal_total,
        sum(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS nominal_aktif,
        sum(if(datastudio_data.status_pembiayaan=5,datastudio_data.nominal_pembiayaan,0)) AS nominal_on_process,
        sum(if(datastudio_data.status_pembiayaan=3,datastudio_data.nominal_pembiayaan,0)) AS nominal_lunas,
        sum(if(datastudio_data.jatuh_tempo<DATE(NOW()) && datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS nominal_lewat_jatuh_tempo
        '))
        ->get();
        // dd($this->dataNominal1);
        $this->jatuhTempoHariIni=DB::table('datastudio_data')
        ->join('finteches','datastudio_data.fintech_id','=','finteches.id')
        ->select(DB::raw('
        datastudio_data.jatuh_tempo,
        finteches.name as nama_fintech,
        datastudio_data.nama_borrower,
        datastudio_data.nominal_pembiayaan,
        datastudio_data.tunggakan_hari
        '))
        ->where('datastudio_data.jatuh_tempo','=','date(now())')
        ->where('datastudio_data.status_pembiayaan',1)
        ->get();

    }
    public function render()
    {
        return view('livewire.app.dashboard.p2p-lending')->extends('layouts.master');
    }
}
