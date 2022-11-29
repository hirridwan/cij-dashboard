
<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title card-title-dash">Lewat Jatuh Tempo</h4>
                                <div class="add-items d-flex mb-0">
                                    <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                    
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background-color: #dedede;">
                                            <tr>
                                                <th>No</th>
                                                <th>Jatuh Tempo</th>
                                                <th>Nama Fintech</th>
                                                <th>Nama Borrower</th>
                                                <th style="text-align:center;">Nominal Pembiayaan</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $LewatJatuhTempo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($loop->index+1); ?></td>
                                                <td><?php echo e($item->jatuh_tempo); ?></td>
                                                <td><?php echo e($item->nama_fintech); ?></td>
                                                <td><?php echo e($item->nama_borrower); ?></td>
                                                <td align="right"><?php echo e(number_format($item->nominal_pembiayaan,2,',','.')); ?></td>
                                                
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="1000" align="center">Tidak ada data !</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <thead>
                                            <tr style="font-weight: bold;">
                                                <td colspan="4" align="center">Total</td>
                                                <td align="right"><?php echo e(number_format($LewatJatuhTempo->sum('nominal_pembiayaan'),2,',','.')); ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/p2p/component/lewat-jatuh-tempo.blade.php ENDPATH**/ ?>