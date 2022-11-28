<?php

namespace App\Http\Livewire\App\Dashboard\Transaksi;

use Livewire\Component;
use App\KodeTransaksi;
use App\Fintech;
class TransaksiAngsuran extends Component
{
    public function mount()
    {
        $this->kode_transaksi = KodeTransaksi::all();
        $this->finteches = Fintech::all();
    }
    public function render()
    {
        return view('livewire.app.dashboard.transaksi.transaksi-angsuran')->extends('layouts.master');
    }
}
