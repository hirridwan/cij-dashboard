<div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">DETAIL PEMBIAYAAN</h6>
                    <p class="card-description">Data Detail Pembiayaan</p>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Fintech</th>
                            <th>Nama Borrower</th>
                            <th>Nominal</th>
                            <th>No Factsheet</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->fintech->name}}</td>
                            <td>{{$item->nama_borrower}}</td>
                            <td>{{number_format($item->plafon_penawaran,2,',','.')}}</td>
                            <td>{{$item->no_factsheet}}</td>
                            <td>
                                @if ($item->quick_analysis)
                                    <a href="/analisa/quick-analysis-detail/{{$item->quick_analysis}}" class="btn btn-primary">
                                        Lihat Analisa
                                    </a>                                        
                                @else
                                <a href="#" wire:click.prevent="cekAnalisa('{{$item->no_factsheet}}')" class="btn btn-primary">
                                    Analisa
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
