<div class="row">
    {{-- table --}}
    <div class="col-lg-12 d-flex flex-column">
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
                    <thead style="background-color: #dedede;">
                    <tr>
                        <th>No</th>
                        <th>Nama Fintech</th>
                        <th>Aktif</th>
                        <th>Lunas</th>
                        <th>Total Disburse</th>
                        <th>Limit Fintech</th>
                        <th>Sisa Limit</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dataItem)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        {{-- <td>{{$dataItem->nama_fintech}}</td> --}}
                        <th class="py-2">
                            <img class="img"style="object-fit: scale-down; width:100px; height:50px;" src="{{asset('storage/'.$dataItem->logo)}}" alt="profile">
                        </th>
                        <td align="right">{{number_format($dataItem->nominal_aktif,0,',','.')}}</td>
                        <td align="right">{{number_format($dataItem->nominal_lunas,0,',','.')}}</td>
                        <td align="right">{{number_format($dataItem->nominal_total,0,',','.')}}</td>
                        <td>
                            {{number_format($dataItem->outstanding/1000000000,2,',','.')."M / ".number_format($dataItem->nominal_limit/1000000000,2,',','.')." M"}}
                            <div class="progress mt-1" style="width:200px;">
                                <div class="progress-bar 
                                @switch(100-$dataItem->sisa_persen)
                                    @case(100-$dataItem->sisa_persen>50 && 100-$dataItem->sisa_persen<80)
                                    bg-warning
                                    @break
                                    @case(100-$dataItem->sisa_persen>80)
                                    bg-danger
                                    @break
                                    @default
                                    bg-success
                                @endswitch
                                " role="progressbar" style="width: {{100-$dataItem->sisa_persen}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>{{number_format($dataItem->sisa_limit/1000000000,2,',','.')." M (".strval($dataItem->sisa_persen)." %)"}}</td>
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