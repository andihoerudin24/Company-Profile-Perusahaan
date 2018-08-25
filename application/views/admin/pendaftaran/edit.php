<div class="row">
    <?php
    echo form_open_multipart('Admin/Pendaftaran/edit');
    echo form_hidden('id_pendaftar', $sertifikat['id_pendaftar']);
    ?>
    <div class="span4">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Nama</h3>
        </div>
        <div class="widget-content">
            <input type="text" required=""  value="<?php echo $sertifikat['nama'] ?>" name="nama" class="form-control">
        </div>
    </div>
    <div class="span4">
        <div class="widget-header"> <i class="icon-picture"></i>
            <h3>Alamat</h3>
        </div>
        <div class="widget-content">
            <textarea name="alamat" class="form-control"><?php echo $sertifikat['alamat'] ?></textarea>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Jenis Sertifikat</h3>
            </div>
            <div class="widget-content">
                <?php echo cmb_dinamis('id_sertifikat', 'sertifikat', 'nama_sertifikat', 'id_sertifikat', $sertifikat['id_sertifikat']) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="span3">
        <div class="widget-header"> <i class="icon-picture"></i>
            <h3>No Telpon</h3>
        </div>
        <div class="widget-content">
            <input type="number" class="form-control" name="no_telpon" value="<?php echo $sertifikat['no_telpon'] ?>">
        </div>
    </div>
    <div class="span3">
        <div class="widget-header"> <i class="icon-picture"></i>
            <h3>Gelar</h3>

        </div>
        <div class="widget-content">
            <input type="text" class="form-control" name="gelar" value="<?php echo $sertifikat['gelar'] ?>">

        </div>
    </div>

    <div class="span3">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Nama Pt</h3>
        </div>
        <div class="widget-content">
            <input type="text" class="form-control" name="nama_pt" value="<?php echo $sertifikat['nama_pt'] ?>">
        </div>
    </div>
    
    <div class="span3">
        <div class="widget-header"> <i class="icon-th-list"></i>
        </div>
        <div class="widget-content">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                <?php echo anchor('Admin/Pendaftaran', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
         
        </div>
    </div>
</div>
<?php echo form_close(); ?>
