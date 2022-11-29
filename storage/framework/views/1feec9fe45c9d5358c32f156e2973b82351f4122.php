<div>
    <div class="row flex-grow">
        <div class="col-md-12 grid-margin">
            <div class="home-tab mb-4">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link text-center" wire:click.prevent="selectStatus(<?php echo e($status->id); ?>)" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true"><?php echo e($status->status." (".$status->jml.")"); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                    <h6 class="card-title">DETAIL PEMBIAYAAN</h6>
                    <p class="card-description">Data Detail Pembiayaan</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
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
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><?php echo e($item->tanggal_pembiayaan); ?></td>
                                <td><?php echo e($item->jatuh_tempo); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->no_rekening); ?></td>
                                <td><?php echo e($item->nama_borrower); ?></td>
                                <td><?php echo e($item->nama_payor); ?></td>
                                <td><?php echo e($item->sifat_pembiayaan); ?></td>
                                <td><?php echo e($item->jangka_waktu); ?></td>
                                <td><?php echo e($item->STATUS); ?></td>
                                <td><?php echo e($item->bunga); ?></td>
                                <td align="right"><?php echo e(number_format($item->nominal_pembiayaan,2,',','.')); ?></td>
                                <td align="right"><?php echo e($item->no_factsheet); ?></td>
                                <td><?php echo e($item->link_dokumen); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/nominatif-pembiayaan.blade.php ENDPATH**/ ?>