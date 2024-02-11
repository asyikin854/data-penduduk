<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maklumat Pemohon</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/navi.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>
    <div class="container">
    <div class="navigation-bar">
        <a href="<?php echo e(route('index')); ?>" class="tab laman">Laman Utama</a>
        <a href="<?php echo e(route('pemohon.details', ['id' => $pemohon->id])); ?>" class="tab active">Profil Peribadi</a>
        <a href="<?php echo e(route('kewangan.details', ['id' => $pemohon->id])); ?>" class="tab">Kewangan</a>
        <a href="<?php echo e(route('waris.details', ['id' => $pemohon->id])); ?>"class="tab">Tanggungan dan Waris</a>
        <a href="# "class="tab">Harta</a>
        <a href="# "class="tab">Bantuan</a>
        <a href="# "class="tab">Had Kifayah</a>
        <a href="# "class="tab">Lampiran Dokumen</a>    
        <a href="# "class="tab">Rumusan Siasatan</a>
        <a href="# "class="tab">Sejarah Bantuan</a>
    </div>

    <h5>MAKLUMAT PEMOHON</h5>
    <table>
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <th>:</th>
                <td><?php echo e($pemohon->nama); ?> </td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td><?php echo e($pemohon->ic); ?></td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td><?php echo e($pemohon->jantina); ?></td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td><?php echo e($pemohon->tarikh_lahir); ?></td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td><?php echo e($pemohon->status); ?></td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td><?php echo e($pemohon->mental); ?></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td><?php echo e($pemohon->islam); ?></td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td><?php echo e($pemohon->fizikal); ?></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2"><?php echo e($pemohon->alamat); ?>

                    <br><?php echo e($pemohon->poskod); ?>

                    <br><?php echo e($pemohon->bandar); ?>

                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td><?php echo e($pemohon->nombor_rumah); ?></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td><?php echo e($pemohon->nombor_bimbit); ?>;</td>
            </tr>    
        </tbody>    
    </table>
    <center><h4><a href="<?php echo e(route('pemohon.Eview', ['id' => $pemohon->id])); ?>">Edit Pemohon</a></h4></center>
    <br>
    <?php if($pasangan): ?>
    <table>
        <h5>MAKLUMAT PASANGAN</h5>
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <th>:</th>
                <td><?php echo e($pasangan->nama); ?></td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td><?php echo e($pasangan->ic); ?></td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td><?php echo e($pasangan->jantina); ?></td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td><?php echo e($pasangan->tarikh_lahir); ?></td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td><?php echo e($pasangan->status); ?></td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td><?php echo e($pasangan->mental); ?></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td><?php echo e($pasangan->islam); ?></td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td><?php echo e($pasangan->fizikal); ?></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2"><?php echo e($pasangan->alamat); ?>

                    <br><?php echo e($pasangan->poskod); ?>

                    <br><?php echo e($pasangan->bandar); ?>

                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td><?php echo e($pasangan->nombor_rumah); ?></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td><?php echo e($pasangan->nombor_bimbit); ?></td>
            </tr>    
        </tbody> 
    </table>
<center><h4><a href="<?php echo e(route('pasangan.Eview', ['id' => $pasangan->id])); ?>">Edit Pasangan</a></h4></center><br>
    <?php else: ?>
    <p>Pemohon tidak mempunyai maklumat pasangan</p>
    <?php endif; ?>
</div>
<br><br><br>
</body>
</html>
</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views/pemohonDetails.blade.php ENDPATH**/ ?>