
<div class="row">
    <div class="col-lg-8 d-flex flex-column">
        <div class="row flex-grow">
        <div class="col-12 grid-margin">
            <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">Status Pembiayaan / Nominal Pembiayaan</h4>
                    <p class="card-subtitle card-subtitle-dash">Status Pembiayaan / Nominal Pembiayaan</p>
                </div>
                <div>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fintech</th>
                        <th>Aktif</th>
                        <th>Lunas</th>
                        <th>Total Keseluruhan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dataItem)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$dataItem->nama_fintech}}</td>
                        <td>{{number_format($dataItem->nominal_aktif,0,',','.')}}</td>
                        <td>{{number_format($dataItem->nominal_lunas,0,',','.')}}</td>
                        <td>{{number_format($dataItem->nominal_total,0,',','.')}}</td>
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
    <div class="col-lg-4 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card bg-primary card-rounded pb-4">
                    <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Jatuh Tempo Bulan Ini</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                <h2 class="text-white">{{number_format($dataNominal2[0]->nominal_jatuh_tempo_bulan_ini/1000000000,2,',','.')}} M</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">On Process</h4>
                        <div class="row">
                        <div class="col-sm-12">
                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                            <h2 class="text-white">{{number_format($data[0]->nominal_on_process/1000000000,2,',','.')}} M</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card bg-primary card-rounded pb-4">
                    <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Pendapatan Bunga</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                <h2 class="text-white">{{number_format($dataNominal2[0]->nominal_jatuh_tempo_bulan_ini/1000000000,2,',','.')}} M</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Pendapatan Yang Akan Diterima</h4>
                        <div class="row">
                        <div class="col-sm-12">
                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                            <h2 class="text-white">{{number_format($data[0]->nominal_on_process/1000000000,2,',','.')}} M</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                            <div>
                                <p class="text-small mb-2">Borrower Jawa Barat</p>
                                <h4 class="mb-0 fw-bold">{{$lokasiBorrowerJawaBarat[0]->persen}}%</h4>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between align-items-center">
                            {{-- <div class="circle-progress-width">
                                <div id="borrowerJawaBaratOutstanding" class="progressbar-js-circle pr-2"></div>
                            </div> --}}
                            <div>
                                <p class="text-small mb-2">Outstanding</p>
                                <h4 class="mb-0 fw-bold">{{number_format($lokasiBorrowerJawaBarat[0]->nominal/1000000000,2,',','.')}} M</h4>
                            </div>
                            <div class="circle-progress-width">
                                <div id="borrowerJawaBaratPercent" class="progressbar-js-circle pr-2"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                            <div>
                                <p class="text-small mb-2">Borrower Luar Jawa Barat</p>
                                <h4 class="mb-0 fw-bold">{{$lokasiBorrowerLuarJawaBarat[0]->persen}}%</h4>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between align-items-center">
                            {{-- <div class="circle-progress-width">
                                <div id="borrowerJawaBaratOutstanding" class="progressbar-js-circle pr-2"></div>
                            </div> --}}
                            <div>
                                <p class="text-small mb-2">Outstanding</p>
                                <h4 class="mb-0 fw-bold">{{number_format($lokasiBorrowerLuarJawaBarat[0]->nominal/1000000000,2,',','.')}} M</h4>
                            </div>
                            <div class="circle-progress-width">
                                <div id="borrowerLuarJawaBaratPercent" class="progressbar-js-circle pr-2"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @push('page_specified_js')
    <script>
        document.addEventListener('livewire:load',()=>{
        
        if ($('#borrowerJawaBaratPercent').length) {
            var bar = new ProgressBar.Circle(borrowerJawaBaratPercent, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15, 
                easing: 'easeInOut',
                duration: 1400,
                text: {
                autoStyleContainer: false
                },
                from: {
                color: '#52CDFF',
                width: 15
                },
                to: {
                color: '#677ae4',
                width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);
        
                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }
        
                }
            });
        
            bar.text.style.fontSize = '0rem';
            bar.animate(@this.lokasiBorrowerJawaBarat[0].persen/100); // Number from 0.0 to 1.0
            }
            if ($('#borrowerJawaBaratOutstanding').length) {
            var bar = new ProgressBar.Circle(borrowerJawaBaratOutstanding, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                autoStyleContainer: false
                },
                from: {
                color: '#34B1AA',
                width: 15
                },
                to: {
                color: '#677ae4',
                width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);
        
                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }
        
                }
            });
        
        bar.text.style.fontSize = '0rem';
        bar.animate(@this.lokasiBorrowerJawaBarat[0].nominal/@this.lokasiBorrowerJawaBarat[0].total_nominal); // Number from 0.0 to 1.0
        }
        
        
        if ($('#borrowerLuarJawaBaratPercent').length) {
            var bar = new ProgressBar.Circle(borrowerLuarJawaBaratPercent, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15, 
                easing: 'easeInOut',
                duration: 1400,
                text: {
                autoStyleContainer: false
                },
                from: {
                color: '#52CDFF',
                width: 15
                },
                to: {
                color: '#677ae4',
                width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);
        
                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }
        
                }
            });
        
            bar.text.style.fontSize = '0rem';
            bar.animate(@this.lokasiBorrowerLuarJawaBarat[0].persen/100); // Number from 0.0 to 1.0
            }
            if ($('#borrowerLuarJawaBaratOutstanding').length) {
            var bar = new ProgressBar.Circle(borrowerLuarJawaBaratOutstanding, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                autoStyleContainer: false
                },
                from: {
                color: '#34B1AA',
                width: 15
                },
                to: {
                color: '#677ae4',
                width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);
        
                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }
        
                }
            });
        
        bar.text.style.fontSize = '0rem';
        bar.animate(@this.lokasiBorrowerLuarJawaBarat[0].nominal/@this.lokasiBorrowerLuarJawaBarat[0].total_nominal); // Number from 0.0 to 1.0
        }
        });
    </script>
    @endpush
</div>