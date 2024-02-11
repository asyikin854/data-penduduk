<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maklumat Perbelanjaan</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/navi.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    <title>Suntingan Perbelanjaan</title>
</head>
<body>
    <div class="container">
    <form action="<?php echo e(route('perbelanjaan.edit', ['id' => $perbelanjaan->id])); ?>" method="POST">
    <table>
        <?php echo csrf_field(); ?>
        <h5>PERBELANJAAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('makan', $perbelanjaan->makan)); ?>" name="makan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Perubatan</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('perubatan', $perbelanjaan->perubatan)); ?>" name="perubatan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('bil', $perbelanjaan->bil)); ?>" name="bil" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Pengangkutan</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('pengangkutan', $perbelanjaan->pengangkutan)); ?>" name="pengangkutan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('sewa_rumah', $perbelanjaan->sewa_rumah)); ?>" name="sewa_rumah" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Persekolahan</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('persekolahan', $perbelanjaan->persekolahan)); ?>" name="persekolahan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Lain-lain</th>
                <th>:</th>
                <td>RM:<input type="number" value="<?php echo e(old('lain', $perbelanjaan->lain)); ?>" name="lain" step="0.01" min="0" required></td> 
            </tr><tr>
                <th><a href="<?php echo e(route('kewangan.details', ['id' => $perbelanjaan->maklumat_pemohon_id])); ?>"><button type="button">Back</button></a></th>
                <th colspan="2"><input type="submit" value="Update"></th>    
            </tr>   
        </tbody> 
    </table>
</form>     
</div>
</body>
</html>
</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views//perbelanjaanEdit.blade.php ENDPATH**/ ?>