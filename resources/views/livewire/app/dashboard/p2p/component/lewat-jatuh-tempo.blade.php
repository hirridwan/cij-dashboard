
<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title card-title-dash">Lewat Jatuh Tempo</h4>
                                <div class="add-items d-flex mb-0">
                                    <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                    {{-- <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button> --}}
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background-color: #dedede;">
                                            <tr>
                                                <th>No</th>
                                                <th>Jatuh Tempo</th>
                                                <th>Nama Fintech</th>
                                                <th>Nama Borrower</th>
                                                <th>Nominal Pembiayaan</th>
                                                {{-- <th>Tunggakan Hari</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($LewatJatuhTempo as $item)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$item->jatuh_tempo}}</td>
                                                <td>{{$item->nama_fintech}}</td>
                                                <td>{{$item->nama_borrower}}</td>
                                                <td align="right">{{number_format($item->nominal_pembiayaan,2,',','.')}}</td>
                                                {{-- <td>{{$item->tunggakan_hari}}</td> --}}
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="1000" align="center">Tidak ada data !</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                        <thead>
                                            <tr style="font-weight: bold;">
                                                <td colspan="4" align="center">Total</td>
                                                <td align="right">{{number_format($LewatJatuhTempo->sum('nominal_pembiayaan'),2,',','.')}}</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>