<div>
    <div class="row flex-grow">
        <div class="col-md-12 grid-margin">
            <div class="card card-rounded">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title card-title-dash">DETAIL PEMBIAYAAN</h4>
                            <p class="card-subtitle card-subtitle-dash">Data Detail Pembiayaan</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-pembiayaan">
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
    @push('page_specified_js')
    <script>
        $(document).ready( function () {
            $('#table-pembiayaan').DataTable();
        });
    </script>
    @endpush
</div>
