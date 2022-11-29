<div class="container w-75 mt-4">
    @push('page_specified_css')
    @endpush
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Transaksi Pelunasan</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Fintech</label>
                                    <select class="js-example-basic-single w-100">
                                        <option>-- Nama Fintech --</option>
                                        @forelse ($finteches as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty
                                            <option>Tidak ada pilihan di database!</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Borrower</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nomor Rekening</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group my-0">
                                    <label for="">Nomor Factsheet</label>
                                    <input type="text" readonly class="form-control" value="Nomor Factsheet">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode Transaksi</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="">-- Pilih Kode Trx --</option>
                                        @forelse ($kode_transaksi as $item)
                                            <option value="{{$item->kode}}">{{$item->nama}}</option>
                                        @empty
                                            <option value="">Tidak Ada Kode Transaksi di database!</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal Transaksi</label>
                                    <input type="date" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pokok</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bunga</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Diskon Bunga</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right">
                                <button class="btn-primary btn">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>