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
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index+1); ?></td>
                            <td><?php echo e($item->fintech->name); ?></td>
                            <td><?php echo e($item->nama_borrower); ?></td>
                            <td><?php echo e(number_format($item->plafon_penawaran,2,',','.')); ?></td>
                            <td><?php echo e($item->no_factsheet); ?></td>
                            <td>
                                <?php if($item->quick_analysis): ?>
                                    <a href="/analisa/quick-analysis-detail/<?php echo e($item->quick_analysis); ?>" class="btn btn-primary">
                                        Lihat Analisa
                                    </a>                                        
                                <?php else: ?>
                                <a href="#" wire:click.prevent="cekAnalisa('<?php echo e($item->no_factsheet); ?>')" class="btn btn-primary">
                                    Analisa
                                </a>
                                <?php endif; ?>
                            </td>
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
<?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/p2p/analisa/quick-analysis-index.blade.php ENDPATH**/ ?>