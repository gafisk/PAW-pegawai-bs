<?php
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai ='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h4 class="mt-4"> Edit Data Pegawai </h4>
<hr>
<form class="mb-5" method="post" action="?hal=pegawai_update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="foto">Foto</label>
        <div class="col-sm-10">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input class="custom-file-input mb-2" type="file" id="foto" name="foto">
                <img src="images/<?= $data['foto'] ?>" class="img-fluid" width="150">
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group row mt-5">
        <label class="col-sm-2 col-form-label" for="nama"> Nama Lengkap </label>
        <div class="col-sm-10">
            <input class="form-control" type="text" id="nama" name="nama" value="<?=$data['nama_pegawai'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="jk">Jenis Kelamin</label>
        <?php
            if($data['jenis_kelamin'] == "L"){
                $l = "checked";
                $p = "";
            }else{
                $l = "";
                $p = "checked";
            }
        ?>
        <div class="col-sm-10">
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jk" name="jk" value="L" <?= $l ?>>
                <label for="jkl" class="custom-control-label">Laki-laki</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jk" name="jk" value="P" <?= $p ?>>
                <label for="jkp" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label"> Tanggal Lahir </label>
        <div class="col-sm-2">
            <input class="form-control-plaintext" type="date" id="tangga" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label"> jabatan </label>
        <div class="col-sm-10">
            <select class="custom-select" id="jabatan" name="jabatan">
                <option value=""> - Pilih Jabatan - </option>
                <?php
                    $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                    while($j = mysqli_fetch_array($queryjabatan)){
                        echo "<option value='$j[id_jabatan]'";
                        if($j['id_jabatan'] == $data['id_jabatan']) echo "Selected";
                        echo ">$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label"> Keterangan </label>
        <div class="col-sm-10">
            <textarea class="form-control" id="keterangan"
            name="keterangan"><?= $data['keterangan'] ?></textarea>
        </div>
    </div>
    
    <div class="float-right mb-5">
        <button type="submit" class="btn btn-info">
            <i class="oi oi-task"> Simpan</i>
        </button>
        <button type="reset" class="btn btn-warning">
            <i class="oi oi-circle-x"> Reset</i>
        </button>
    </div>

</form>