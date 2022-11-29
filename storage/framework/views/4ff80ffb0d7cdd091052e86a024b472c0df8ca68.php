<div class="row w-75 text-right" style="margin: auto;">
    <div class="col">
        <div class="btn-wrapper">
            <button onclick="printPage()" class="btn btn-primary">
                Cetak PDF
            </button>
        </div>
    </div>
</div>

<div class="page">
    <?php $__env->startPush('page_specified_css'); ?>
    <style>
        * {
                margin: 0;
                padding: 0;
                font-size: 12pt;
                font-family: Arial, Helvetica, sans-serif;
                box-sizing: border-box;
            }
            .col-lg {
                width: 500px; !important
            }

            img {
                height: 70px;
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
                    background-color: #f8f6ff;
                }

                th {
                    background-color: #6c7ae0;
                    height: 50px;
                    width: 200px;
                    color: white;
                }

                tr, td, th {
                    text-align: left;
                    margin: 8px;
                    padding: 8px;
                }  

                h2 {
                    font-weight: bold;
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
                    margin: 12px;
                    padding: 12px;
                    color: gray
                }  
            }
    </style>
    <?php $__env->stopPush(); ?>
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col">
                    <div class="main-header">
                        <div class="row-header" style="display: flex; flex-direction: row; justify-items: space-between;">
                            <div class="col">
                                <img src="https://bankcij.com/wp-content/uploads/2021/08/cropped-LOGO-CIJ-mini-e1630984123700.png" alt="">
                            </div>
                            <div class="col"></div>
                            <div class="col">
                                <img src="<?php echo e(asset('images/p2p.png')); ?>" alt="logo"/>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col">
                                <h2>QUICK ANALYSIS PEMBIAYAAN FINTECH</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 6px;">
                <div class="col">
                    <div class="tittle">
                        <h4>No. Factsheet</h4>
                    </div>
                    <div class="letter-code">
                        <h4 style="font-weight: bold; font-size: 16pt"><?php echo e($analysis->no_factsheet); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="row">
                <div class="col">
                    <table>
                        <tr>
                            <td style="font-weight: bold;">Nama Fintech</td>
                            <td>:</td>
                            <td><?php echo e($analysis->nama_fintech); ?></td>
                        </tr>
                        <tr style="background-color: #fff">
                            <td style="font-weight: bold;">Nama Borrower</td>
                            <td>:</td>
                            <td><?php echo e($analysis->nama_borrower); ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Plafon Penawaran</td>
                            <td>:</td>
                            <td><?php echo e(number_format($analysis->plafon_penawaran,0,',','.')); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table>
                        <tr>
                            <th>Fasilitas Aktif Fintech</th>
                        </tr>
                        <td>
                            <?php echo e(number_format($analysis->fasilitas_aktif_fintech,0,',','.')); ?>

                        </td>
                    </table>
                </div>
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
                        <td class="text-center"><?php echo e($analysis->komitmen_pemberian_kredit); ?>%</td>
                        <td align="right"><?php echo e(number_format($analysis->nominal_fasilitas_aktif,2,',','.')); ?></td>
                        <td class="text-center"><?php echo e($analysis->noa_fasilitas_aktif); ?></td>
                    </tr>
                </table>
            <div class="row">
                <div class="col">
                    <table>
                        <tr>
                            <th>% Komitmen Pemberian Kredit</th>
                            <th>Nominal Fasilitas Aktif</th>
                            <th>NOA Fasilitas Aktif</th>
                        </tr>
                        <tr>
                            <td><?php echo e($analysis->komitmen_pemberian_kredit); ?>%</td>
                            <td><?php echo e(number_format($analysis->nominal_fasilitas_aktif,2,',','.')); ?></td>
                            <td><?php echo e(number_format($analysis->noa_fasilitas_aktif,2,',','.')); ?></td>
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
                        <?php $__currentLoopData = $score_rac_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td width="500"><?php echo e(ucfirst(str_replace('_',' ',$item->parameter))); ?></td>
                            <td width="400"><?php echo e($item->value); ?></td>
                            <td><?php echo e($item->score); ?></td>
                        </tr>                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2" style="font-weight: bold; text-align: center;">Total Score</td>
                            <td><b><?php echo e($score_rac[0]->score); ?></b></td>
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
                        <?php $__currentLoopData = $score_fitur_pendanaan_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td width="500"><?php echo e(ucfirst(str_replace('_',' ',$item->parameter))); ?></td>
                                <td width="400"><?php echo e($item->value); ?></td>
                                <td><?php echo e($item->score); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2" style="font-weight: bold; text-align: center;">Total Score</td>
                            <td><b><?php echo e($score_fitur_pendanaan[0]->score); ?></b></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table>
                        <tr>
                            <th colspan="2">C. Payor Analisis</th>
                            <th class="text-center <?php if($analysis->pefindo_status=='HIGH RISK PEFINDO'): ?> bg-danger text-white <?php else: ?> bg-success text-white <?php endif; ?>"><?php echo e($analysis->pefindo_status); ?></th>
                        </tr>
                        <tr>
                            <td width="300">Total Payor</td>
                            <td><?php echo e($analysis->total_payor); ?></td>
                            <td rowspan="2" class="text-center"><?php echo e($analysis->pefindo_score); ?></td>
                        </tr>
                        <tr>
                            <td>Payor Scoring</td>
                            <td><?php echo e($analysis->score_payor); ?></td>
                        </tr>
                        <tr>
                            <td style="background-color: #6c7ae0; font-weight: bold; color: #fff;">RAC Scoring</td>
                            <td style="background-color: #6c7ae0; font-weight: bold; color: #fff; text-align: right;"><?php echo e($analysis->max_pembiayaan_persen); ?></td>
                            <td rowspan="2" class="<?php if($analysis->kelayakan_payor !='Payor Layak'): ?> text-danger <?php endif; ?>" style="text-align: center; background-color: #D8FDDA;"><b><?php echo e($analysis->kelayakan_payor); ?></b></td>
                        </tr>
                        <tr>
                            <td align="center" style="background-color: #f8f6ff;">Rekomendasi Pembiayaan</td>
                            <td align="center" style="background-color: #f8f6ff;"><?php echo e(number_format($analysis->nominal_rekomendasi,0,',','.')); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/dashboard/p2p/analisa/quick-analysis-detail.blade.php ENDPATH**/ ?>