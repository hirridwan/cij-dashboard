<div>
    <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <div class="row">
                  <div class="col-sm-12">
                    {{-- <div class="statistics-details d-flex align-items-center justify-content-between">
                      <div>
                        <p class="statistics-title">Nominal Pembiayaan</p>
                        <h5 class="rate-percentage">{{number_format($dataNominal1[0]->nominal_total/1000000000,2,',','.')}} M</h5>
                        <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                      </div>
                      <div>
                        <p class="statistics-title">Aktif</p>
                        <h5 class="rate-percentage">{{number_format($dataNominal1[0]->nominal_aktif/1000000000,2,',','.')}} M</h5>
                        <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> -->
                      </div>
                      <div>
                        <p class="statistics-title">on Process</p>
                        <h5 class="rate-percentage">{{number_format($dataNominal1[0]->nominal_on_process/1000000000,2,',','.')}} M</h5>
                        <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                      </div>
                      <div class="d-none d-md-block">
                        <p class="statistics-title">Lunas</p>
                        <h5 class="rate-percentage">{{number_format($dataNominal1[0]->nominal_lunas/1000000000,2,',','.')}} M</h5>
                        <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p> -->
                      </div>
                      <div class="d-none d-md-block">
                        <p class="statistics-title">Lewat Jatuh Tempo</p>
                        <h5 class="rate-percentage">{{number_format($dataNominal1[0]->nominal_lewat_jatuh_tempo/1000000000,2,',','.')}} M</h5>
                        <!--<p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                      </div>
                    </div> --}}
                  </div>
                </div>

                @livewire('app.dashboard.p2p.component.nominal-pembiayaan')

                @livewire('app.dashboard.p2p.component.jumlah-disburse')

                @livewire('app.dashboard.p2p.component.jatuh-tempo-hari-ini')

                @livewire('app.dashboard.p2p.component.lewat-jatuh-tempo')

              </div>
            </div>
          </div>
        </div>
      </div>
</div>