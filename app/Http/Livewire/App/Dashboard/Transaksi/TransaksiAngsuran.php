<?php

namespace App\Http\Livewire\App\Dashboard\Transaksi;

use Livewire\Component;

class TransaksiAngsuran extends Component
{
    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.app.dashboard.transaksi.transaksi-angsuran')->extends('layouts.master');
    }
}
