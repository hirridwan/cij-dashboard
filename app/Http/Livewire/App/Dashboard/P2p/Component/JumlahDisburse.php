<?php

namespace App\Http\Livewire\App\Dashboard\P2p\Component;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class JumlahDisburse extends Component
{
    public $data;
    public $dataRepayment;
    public $dataBulan = Array();
    public $dataNominalDisburse = Array();
    public $dataNominalRepayment = Array();
    
    public function mount()
    {
        $this->data = DB::select('call getNominalDisbursePerBulan');
        $this->dataRepayment = DB::select('call getNominalRepaymentPerBulan');
        foreach($this->dataRepayment as $data)
        {
            array_push($this->dataNominalRepayment,$data->nominal);
        }
        foreach($this->data as $data)
        {
            // dd($data->bulan);
            array_push($this->dataBulan,$data->month_name);
            array_push($this->dataNominalDisburse,$data->nominal);
        }
        // dd($this->dataBulan);
    }

    public function render()
    {
        return view('livewire.app.dashboard.p2p.component.jumlah-disburse');
    }
}
