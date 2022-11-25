<div class="page">
    @push('page_specified_css')
    <style>
        * {
                margin: 0;
                padding: 0;
                font-size: 12pt;
                font-family: Arial, Helvetica, sans-serif;
                box-sizing: border-box;
            }

            @media screen {
                .page {
                width: 210mm;
                display: flex;
                flex-direction: column;
                margin-top: 50px;
                box-shadow: inset;
                /* border: 1px solid black; */
                /* border-radius: 8px; */
                width: 210mm;
                max-width: 210mm;   
                padding: 10mm;
                margin: 10mm auto;
                border: 1px #D3D3D3 solid;
                border-radius: 5px;
                background: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            .header {
                text-align: center;
            }

            /* table styling */
            table {
                margin: 18px 0;
                width: 100%;
                padding: 8px;
                border-collapse: collapse;
            }

            tr:nth-child(even) {
                background-color: #eaeaea;
            }

            th {
                background-color: #dedede;
            }

            tr, td, th {
                text-align: left;
                margin: 8px;
                padding: 8px;
            }  


            }
            @media print {
                .page {
                    font-size: 12pt;
                    width: 210mm;
                    margin: auto;
                }
                .header {
                text-align: center;
            }

            /* table styling */
            table {
                margin: 18px 0;
                width: 100%;
                padding: 8px;
                border-collapse: collapse;
            }

            tr:nth-child(even) {
                background-color: #eaeaea;
            }

            th {
                background-color: #dedede;
            }

            tr, td, th {
                text-align: left;
                margin: 8px;
                padding: 8px;
            }  

            }
    </style>
    @endpush
    <div class="header">
        <div class="row">
            <div class="col">
                <div class="main-header">
                    <h2>QUICK ANALYSIS PEMBIAYAAN FINTECH</h2>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 6px;">
            <div class="col">
                <div class="tittle">
                    <h4>No. Factsheet</h4>
                </div>
                <div class="letter-code">
                    <h4>{{$analysis->no_factsheet}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td width="200">Nama Fintech</td>
                        <td>:</td>
                        <td>{{$analysis->nama_fintech}}</td>
                        <td>Fasilitas Aktif Fintech</td>
                    </tr>
                    <tr>
                        <td>Nama Borrower</td>
                        <td>:</td>
                        <td>{{$analysis->nama_borrower}}</td>
                        <td rowspan="2">{{number_format($analysis->fasilitas_aktif_fintech,0,',','.')}}</td>
                    </tr>
                    <tr>
                        <td>Plafon Penawaran</td>
                        <td>:</td>
                        <td>{{number_format($analysis->plafon_penawaran,2,',','.')}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>% Komitmen Pemberian Kredit</th>
                        <th>Nominal Fasilitas Aktif</th>
                        <th>NOA Fasilitas Aktif</th>
                    </tr>
                    <tr>
                        <td>{{$analysis->komitmen_pemberian_kredit}}%</td>
                        <td>{{number_format($analysis->nominal_fasilitas_aktif,2,',','.')}}</td>
                        <td>{{number_format($analysis->noa_fasilitas_aktif,2,',','.')}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th colspan="2">A. Risk Acceptance Criteria(RAC)</th>
                        <th width="200">Score</th>
                    </tr>
                    @foreach ($score_rac_detail as $item)
                    <tr>
                        <td width="500">{{ucfirst(str_replace('_',' ',$item->parameter))}}</td>
                        <td width="400">{{$item->value}}</td>
                        <td>{{$item->score}}</td>
                    </tr>                        
                    @endforeach
                    <tr>
                        <td colspan="2">Total Score</td>
                        <td><b>{{$score_rac[0]->score}}</b></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th colspan="2">B. Fitur Pendanaan Pinjaman</th>
                        <th width="200">Score</th>
                    </tr>
                    @foreach ($score_fitur_pendanaan_detail as $item)
                        <tr>
                            <td width="500">{{ucfirst(str_replace('_',' ',$item->parameter))}}</td>
                            <td width="400">{{$item->value}}</td>
                            <td>{{$item->score}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Total Score</td>
                        <td><b>{{$score_fitur_pendanaan[0]->score}}</b></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th colspan="2">C. Payor Analisis</th>
                        <th class="text-center @if($analysis->pefindo_status=='HIGH RISK PEFINDO') bg-danger text-white @else bg-success text-white @endif">{{$analysis->pefindo_status}}</th>
                    </tr>
                    <tr>
                        <td width="300">Total Payor</td>
                        <td>{{$analysis->total_payor}}</td>
                        <td rowspan="2" class="text-center">{{$analysis->pefindo_score}}</td>
                    </tr>
                    <tr>
                        <td>Payor Scoring</td>
                        <td>{{$analysis->score_payor}}</td>
                    </tr>
                    <tr>
                        <td style="background-color: #dedede; font-weight: bold;">RAC Scoring</td>
                        <td style="background-color: #dedede; font-weight: bold;"">{{$analysis->max_pembiayaan_persen}}</td>
                        <td rowspan="2" class="@if($analysis->kelayakan_payor !='Payor Layak') text-danger @endif" style="text-align: center; background-color: #D8FDDA;"><b>{{$analysis->kelayakan_payor}}</b></td>
                    </tr>
                    <tr>
                        <td align="center">Rekomendasi Pembiayaan</td>
                        <td align="center">{{number_format($analysis->nominal_rekomendasi,0,',','.')}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
