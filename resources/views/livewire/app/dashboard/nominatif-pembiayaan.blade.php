
<div class="content-wrapper" style="font-size:9pt;">
    <div class="row flex-grow">
        <div class="col-md-12 grid-margin">
            <div class="home-tab mb-4">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($statuses as $status)
                        <li class="nav-item">
                            <a class="nav-link text-center" wire:click.prevent="selectStatus({{$status->id}})" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">{{$status->status." (".$status->jml.")"}}</a>
                        </li>
                        @endforeach

                    </ul>
                    <div>
                        <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <th>Tanggal Awal</th>
                                <th>Tanggal Jt Tempo</th>
                                <th>Nama Fintech</th>
                                <th>No. Rekening</th>
                                <th>Nama Borrower</th>
                                <th>Nama Payor</th>
                                <th>Sifat Pembiayaan</th>
                                <th>JKW</th>
                                <th>Status</th>
                                <th>Bunga</th>
                                <th>Nominal Pembiayaan</th>
                                <th>No Factsheet</th>
                                <th>Dokumen</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->tanggal_pembiayaan}}</td>
                                <td>{{$item->jatuh_tempo}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->no_rekening}}</td>
                                <td>{{$item->nama_borrower}}</td>
                                <td>{{$item->nama_payor}}</td>
                                <td>{{$item->sifat_pembiayaan}}</td>
                                <td>{{$item->jangka_waktu}}</td>
                                <td>{{$item->STATUS}}</td>
                                <td>{{$item->bunga}}</td>
                                <td>{{number_format($item->nominal_pembiayaan,2,',','.')}}</td>
                                <td>{{$item->no_factsheet}}</td>
                                <td>{{$item->link_dokumen}}</td>
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
