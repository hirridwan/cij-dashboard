

                      <!-- ROW LINE CHART -->
<div class="row">
    <div class="col-12">
        <div class="row flex-grow">
        <div class="col-12 col-lg-12 col-lg-12 grid-margin stretch-card">
            <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">Performa P2P Lending 6 Bulan Terakhir</h4>
                    <p class="card-subtitle card-subtitle-dash">(Dalam Miliar Rupiah)</p>
                </div>
                <div id="performance-line-legend"></div>
                </div>
                <div class="chartjs-wrapper mt-5">
                <canvas id="jumlahDisburse"></canvas>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    @push('page_specified_js')
    <script>
        
        document.addEventListener('livewire:load',()=>{
            if ($("#jumlahDisburse").length) {
            var graphGradient = document.getElementById("jumlahDisburse").getContext('2d');
            var graphGradient2 = document.getElementById("jumlahDisburse").getContext('2d');
            var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
            saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
            saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
            var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
            saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
            saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');
            var salesTopData = {
                labels: @this.dataBulan,
                datasets: [{
                    label: 'Disburse',
                    data: @this.dataNominalDisburse,
                    backgroundColor: saleGradientBg,
                    borderColor: [
                        '#1F3BB3',
                    ],
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
                    pointBackgroundColor: ['#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)'],
                    pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
                },{
                    label: 'Repayment',
                    data: @this.dataNominalRepayment,
                    backgroundColor: saleGradientBg2,
                    borderColor: [
                        '#52CDFF',
                    ],
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
                    pointBackgroundColor: ['#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)'],
                    pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
                }]
            };
        
            var salesTopOptions = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: false,
                            color:"#F0F0F0",
                            zeroLineColor: '#F0F0F0',
                        },
                        ticks: {
                            beginAtZero: false,
                            autoSkip: true,
                            maxTicksLimit: 4,
                            fontSize: 10,
                            color:"#6B778C"
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 7,
                        fontSize: 10,
                        color:"#6B778C"
                        }
                    }],
                },
                legend:false,
                legendCallback: function (chart) {
                    var text = [];
                    text.push('<div class="chartjs-legend"><ul>');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                    console.log(chart.data.datasets[i]); // see what's inside the obj.
                    text.push('<li>');
                    text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
                    text.push(chart.data.datasets[i].label);
                    text.push('</li>');
                    }
                    text.push('</ul></div>');
                    return text.join("");
                },
                
                elements: {
                    line: {
                        tension: 0.4,
                    }
                },
                tooltips: {
                    backgroundColor: 'rgba(31, 59, 179, 1)',
                }
            }
            var salesTop = new Chart(graphGradient, {
                type: 'line',
                data: salesTopData,
                options: salesTopOptions
            });
            document.getElementById('performance-line-legend').innerHTML = salesTop.generateLegend();
            }
        });
      </script>
    @endpush
</div>
                      <!-- TUTUP ROW LINE CHART -->