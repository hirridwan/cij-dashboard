<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Component;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\DatastudioData;

class NominalPembiayaan extends Component
{
    public $data;
    public $dataNominal2;
    public $lokasiBorrowerJawaBarat;
    public $lokasiBorrowerLuarJawaBarat;
    public function mount()
    {
        $this->data = DB::table('datastudio_data')
        ->join('finteches','datastudio_data.fintech_id','=','finteches.id')
        ->join('limit_kredit_fintech','datastudio_data.fintech_id','=','limit_kredit_fintech.fintech_id')
        ->select(DB::raw('
        finteches.name as nama_fintech,
        finteches.logo as logo,
        SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS nominal_aktif,
        SUM(if(datastudio_data.status_pembiayaan=2,datastudio_data.nominal_pembiayaan,0)) AS nominal_ditolak,
        SUM(if(datastudio_data.status_pembiayaan=3,datastudio_data.nominal_pembiayaan,0)) AS nominal_lunas,
        SUM(if(datastudio_data.status_pembiayaan=4,datastudio_data.nominal_pembiayaan,0)) AS nominal_new,
        SUM(if(datastudio_data.status_pembiayaan=5,datastudio_data.nominal_pembiayaan,0)) AS nominal_on_process,
        SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0))+SUM(if(datastudio_data.status_pembiayaan=3,datastudio_data.nominal_pembiayaan,0)) AS nominal_total,
        (SELECT limit_kredit_fintech.nominal WHERE limit_kredit_fintech.fintech_id=datastudio_data.fintech_id)-SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS sisa_limit,
        ROUND(((SELECT limit_kredit_fintech.nominal WHERE limit_kredit_fintech.fintech_id=datastudio_data.fintech_id)-SUM(if(datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)))/(SELECT limit_kredit_fintech.nominal WHERE limit_kredit_fintech.fintech_id=datastudio_data.fintech_id)*100,2) AS persen_limit
        '))
        ->groupBy('nama_fintech')
        ->orderByDesc('nominal_aktif')
        ->get();

        
        $this->dataNominal2= DB::table('datastudio_data')->select(DB::raw('
        sum(if(EXTRACT(YEAR_MONTH FROM datastudio_data.jatuh_tempo)=extract(year_month from date(NOW())) && datastudio_data.status_pembiayaan=1,datastudio_data.nominal_pembiayaan,0)) AS nominal_jatuh_tempo_bulan_ini,
        sum(if(EXTRACT(YEAR_MONTH FROM datastudio_data.jatuh_tempo)=extract(year_month from date(NOW())) && datastudio_data.status_pembiayaan=1,datastudio_data.nominal_bunga,0)) AS pbyad
        '))
        ->get();
        // dd($this->dataNominal2);

        $this->lokasiBorrowerJawaBarat = DB::table('datastudio_data')->select(DB::raw(' 
        COUNT(id) AS jml_borrower,
        SUM(nominal_pembiayaan) AS nominal,
        (SELECT sum(nominal_pembiayaan) FROM datastudio_data WHERE status_pembiayaan=1) total_nominal,
        round(sum(nominal_pembiayaan)/(SELECT sum(nominal_pembiayaan) FROM datastudio_data WHERE status_pembiayaan=1)*100,2) AS persen
        '))
        ->where('status_pembiayaan',1)
        ->where('lokasi_perusahaan',1)
        ->get();

        $this->lokasiBorrowerLuarJawaBarat = DB::table('datastudio_data')->select(DB::raw(' 
        COUNT(id) AS jml_borrower,
        SUM(nominal_pembiayaan) AS nominal,
        (SELECT sum(nominal_pembiayaan) FROM datastudio_data WHERE status_pembiayaan=1) total_nominal,
        round(sum(nominal_pembiayaan)/(SELECT sum(nominal_pembiayaan) FROM datastudio_data WHERE status_pembiayaan=1)*100,2) AS persen
        '))
        ->where('status_pembiayaan',1)
        ->where('lokasi_perusahaan',2)
        ->get();
    }

    public function render()
    {
        return view('livewire.app.dashboard.p2p.component.nominal-pembiayaan');
    }
}
