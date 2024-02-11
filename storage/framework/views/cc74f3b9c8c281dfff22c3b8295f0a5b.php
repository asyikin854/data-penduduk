<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navi.css')); ?>">
    <title>Sunting Waris</title>
</head>
<body>
    <div class="container">
    <form action="<?php echo e(route('waris.edit', $waris->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <td><input type="text" name="nama" value="<?php echo e($waris->nama); ?>" required></td>
        </tr><tr>
            <th>No kad. Pengenalan</th>
            <th>:</th>
            <td><input type="text" name="ic" value="<?php echo e($waris->ic); ?>" maxlength="12" required></td>
        </tr><tr>
            <th>Umur</th>
            <th>:</th>
            <td><input type="number" name="umur" value="<?php echo e($waris->umur); ?>" min="0" required></td>
        </tr><tr>
            <th>Hubungan</th>
            <th>:</th>
            <td><select name="hubungan" id="hubungan" required>
                <option value="Anak" <?php echo e($waris->hubungan == 'Anak' ? 'selected' : ''); ?>>Anak</option>
                <option value="Anak Tiri" <?php echo e($waris->hubungan == 'Anak Tiri' ? 'selected' : ''); ?>>Anak Tiri</option>    
                <option value="Anak Angkat" <?php echo e($waris->hubungan == 'Anak Angkat' ? 'selected' : ''); ?>>Anak Angkat</option>
                <option value="Anak Saudara" <?php echo e($waris->hubungan == 'Anak Saudara' ? 'selected' : ''); ?>>Anak Saudara</option>
                <option value="Isteri 1" <?php echo e($waris->hubungan == 'Isteri 1' ? 'selected' : ''); ?>>Isteri 1</option>
                <option value="Isteri 2" <?php echo e($waris->hubungan == 'Isteri 2' ? 'selected' : ''); ?>>Isteri 2</option>
                <option value="Isteri 3" <?php echo e($waris->hubungan == 'Isteri 3' ? 'selected' : ''); ?>>Isteri 3</option>
                <option value="Isteri 4" <?php echo e($waris->hubungan == 'Isteri 4' ? 'selected' : ''); ?>>Isteri 4</option>
            </select></td>
        </tr><tr>
            <th>Status</th>
            <th>:</th>
            <td><select name="status" required>
                <option value="">Select Status</option>
                <option value="Sekolah" <?php echo e($waris->status == 'Sekolah' ? 'selected' : ''); ?>>Sekolah</option>
                <option value="Bekerja" <?php echo e($waris->status == 'Bekerja' ? 'selected' : ''); ?>>Bekerja</option>
                <option value="Tidak Bekerja" <?php echo e($waris->status == 'Tidak Bekerja' ? 'selected' : ''); ?>>Tidak Bekerja</option>
            </select></td>
        </tr><tr>
            <th>Sekolah/Pekerjaan</th>
            <th>:</th>
            <td><input type="text" name="kerja" value="<?php echo e($waris->kerja); ?>"></td>
        </tr><tr>
            <th>Fizikal</th>
            <th>:</th>
            <td><select name="fizikal" id="fizikal" required>
                <option value="Sihat" <?php echo e($waris->fizikal == 'Sihat' ? 'selected' : ''); ?>>Sihat</option>
                <option value="Sakit" <?php echo e($waris->fizikal == 'Sakit' ? 'selected' : ''); ?>>Sakit</option>    
                <option value="OKU" <?php echo e($waris->fizikal == 'OKU' ? 'selected' : ''); ?>>OKU</option>
                </select></td>
        </tr><tr>
            <th>Mental</th>
            <th>:</th>
            <td><select name="mental" id="mental" required>
                <option value="Waras" <?php echo e($waris->mental == 'Waras' ? 'selected' : ''); ?>>Waras</option>    
                <option value="Tidak Waras" <?php echo e($waris->mental == 'Tidak Waras' ? 'selected' : ''); ?>>Tidak Waras</option>
                </select></td>
        </tr><tr>
            <th>Pendapatan</th>
            <th>:</th>
            <td><input type="number" name="pendapatan" value="<?php echo e($waris->pendapatan); ?>" min="0" required></td>
        </tr>
        <tr>
            <th><th><a href="<?php echo e(route('waris.details', ['id' => $waris->maklumat_pemohon_id])); ?>"><button type="button">Batal</button></a>
            <th colspan="2"><input type="submit" value="Update"></th>
        </tr>
    </table>
    </form>
</div>
</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views/warisEdit.blade.php ENDPATH**/ ?>