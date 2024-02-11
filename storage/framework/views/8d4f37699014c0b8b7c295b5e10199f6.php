<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggungan dan Waris</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/navi.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/table2.css')); ?>">
</head>
<body>
    <div class="container">
    <div class="navigation-bar">
        <a href="<?php echo e(route('index')); ?>" class="tab laman">Laman Utama</a>
        <a href="<?php echo e(route('pemohon.details', ['id' => $pemohon->id])); ?>" class="tab">Profil Peribadi</a>
        <a href="<?php echo e(route('kewangan.details', ['id' => $pemohon->id])); ?>" class="tab">Kewangan</a>
        <a href="<?php echo e(route('waris.details', ['id' => $pemohon->id])); ?>"class="tab active">Tanggungan dan Waris</a>
        <a href="#"class="tab">Harta</a>
        <a href="#"class="tab">Bantuan</a>
        <a href="#"class="tab">Had Kifayah</a>
        <a href="#"class="tab">Lampiran Dokumen</a>
        <a href="#"class="tab">Rumusan Siasatan</a>
        <a href="#"class="tab">Sejarah Bantuan</a>
    </div>
    
<?php if($waris->isNotEmpty()): ?>
    <?php
                $count=1;
            ?>
<h5>MAKLUMAT TANGGUNGAN</h5>
<table>
    <thead>
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Sekolah</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Keperluan</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $waris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warisData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($warisData->status == 'Sekolah'): ?>
    <tbody>
            <tr>
                <td><?php echo e($count++); ?> </td>
                <td><?php echo e($warisData->nama); ?></td>
                <td><?php echo e($warisData->ic); ?> </td>
                <td><?php echo e($warisData->umur); ?> </td>
                <td><?php echo e($warisData->hubungan); ?> </td>
                <td><?php echo e($warisData->kerja); ?> </td>
                <td><?php echo e($warisData->fizikal); ?> </td>
                <td><?php echo e($warisData->mental); ?> </td>
                <td><?php echo e($warisData->pendapatan); ?> </td>
                <td><button type="button"><a href="<?php echo e(route('waris.Eview', $warisData->id)); ?>">Edit</a></button></td>
            </tr>       
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
    </tbody>
</table>
<br>
<?php
$count2=1;
?>
<h5>MAKLUMAT WARIS</h5>
<br>
<table>
    <thead>
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Pekerjaan</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Pendapatan</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $waris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warisData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($warisData->status == 'Bekerja' || $warisData->status == 'Tidak Bekerja'): ?>
    <tbody>
            <tr>
                <td><?php echo e($count2++); ?> </td>
                <td><?php echo e($warisData->nama); ?></td>
                <td><?php echo e($warisData->ic); ?> </td>
                <td><?php echo e($warisData->umur); ?> </td>
                <td><?php echo e($warisData->hubungan); ?> </td>
                <td><?php echo e($warisData->kerja); ?> </td>
                <td><?php echo e($warisData->fizikal); ?> </td>
                <td><?php echo e($warisData->mental); ?> </td>
                <td><?php echo e($warisData->pendapatan); ?> </td>
                <td><a href="<?php echo e(route('waris.Eview', $warisData->id)); ?>"><button>Edit</button></a></td>
            </tr>        
            <?php endif; ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table> 
<?php else: ?>
    <p>Tiada maklumat waris</p>
<?php endif; ?>
</div>
</body>
</html>
<?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views/warisDetails.blade.php ENDPATH**/ ?>