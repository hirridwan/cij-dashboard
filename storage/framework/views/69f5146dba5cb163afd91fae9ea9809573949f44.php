<div>
  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
          <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
          <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
            <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
            <input type="text" class="form-control">
          </div>
          <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Import
          </button>
          <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="printer"></i>
            Print
          </button>
          <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
            Download Report
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
          <div class="row flex-grow">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Nominal Pembiayaan</h6>
                    <div class="dropdown mb-2">
                      <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h4 class="mb-2"><?php echo e(number_format($dataNominal1[0]->nominal_total/1000000000,2,',','.')); ?> M</h4>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success">
                          <span>+3.3%</span>
                          <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Aktif</h6>
                    <div class="dropdown mb-2">
                      <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h4 class="mb-2"><?php echo e(number_format($dataNominal1[0]->nominal_aktif/1000000000,2,',','.')); ?> M</h4>
                      <div class="d-flex align-items-baseline">
                        <p class="text-danger">
                          <span>-2.8%</span>
                          <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">On Process</h6>
                    <div class="dropdown mb-2">
                      <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h4 class="mb-2"><?php echo e(number_format($dataNominal1[0]->nominal_on_process/1000000000,2,',','.')); ?> M</h4>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success">
                          <span>+2.8%</span>
                          <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Lunas</h6>
                    <div class="dropdown mb-2">
                      <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h4 class="mb-2"><?php echo e(number_format($dataNominal1[0]->nominal_lunas/1000000000,2,',','.')); ?> M</h4>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success">
                          <span>+2.8%</span>
                          <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- row -->

      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.dashboard.p2p.component.nominal-pembiayaan')->html();
} elseif ($_instance->childHasBeenRendered('l-1548748789-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l-1548748789-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l-1548748789-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l-1548748789-0');
} else {
    $response = \Livewire\Livewire::mount('app.dashboard.p2p.component.nominal-pembiayaan');
    $html = $response->html();
    $_instance->logRenderedChild('l-1548748789-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.dashboard.p2p.component.jumlah-disburse')->html();
} elseif ($_instance->childHasBeenRendered('l-1548748789-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l-1548748789-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l-1548748789-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l-1548748789-1');
} else {
    $response = \Livewire\Livewire::mount('app.dashboard.p2p.component.jumlah-disburse');
    $html = $response->html();
    $_instance->logRenderedChild('l-1548748789-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.dashboard.p2p.component.jatuh-tempo-hari-ini')->html();
} elseif ($_instance->childHasBeenRendered('l-1548748789-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l-1548748789-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l-1548748789-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l-1548748789-2');
} else {
    $response = \Livewire\Livewire::mount('app.dashboard.p2p.component.jatuh-tempo-hari-ini');
    $html = $response->html();
    $_instance->logRenderedChild('l-1548748789-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('app.dashboard.p2p.component.lewat-jatuh-tempo')->html();
} elseif ($_instance->childHasBeenRendered('l-1548748789-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l-1548748789-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l-1548748789-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l-1548748789-3');
} else {
    $response = \Livewire\Livewire::mount('app.dashboard.p2p.component.lewat-jatuh-tempo');
    $html = $response->html();
    $_instance->logRenderedChild('l-1548748789-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div><?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/p2p-lending.blade.php ENDPATH**/ ?>