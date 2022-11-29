<div class="container w-75 mt-4">
    <?php $__env->startPush('page_specified_css'); ?>
    <?php $__env->stopPush(); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Transaksi Pelunasan</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Fintech</label>
                                    <select class="js-example-basic-single w-100">
                                        <option>-- Nama Fintech --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $finteches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option>Tidak ada pilihan di database!</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Borrower</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nomor Rekening</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group my-0">
                                    <label for="">Nomor Factsheet</label>
                                    <input type="text" readonly class="form-control" value="Nomor Factsheet">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode Transaksi</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="">-- Pilih Kode Trx --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $kode_transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($item->kode); ?>"><?php echo e($item->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="">Tidak Ada Kode Transaksi di database!</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal Transaksi</label>
                                    <input type="date" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pokok</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bunga</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Diskon Bunga</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right">
                                <button class="btn-primary btn">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/transaksi/transaksi-angsuran.blade.php ENDPATH**/ ?>