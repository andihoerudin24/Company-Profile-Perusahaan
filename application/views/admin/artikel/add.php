<div class="row">
    <?php echo form_open_multipart('Admin/Artikel/add') ?>
    <div class="span6">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Judul Artikel</h3>
        </div>
        <div class="widget-content">
            <input type="text" required=""  name="judul" class="form-control">
        </div>
    </div>
    <div class="span6">
        <div class="widget-header"> <i class="icon-picture"></i>
            <h3>Gambar Artikel</h3>
        </div>
        <div class="widget-content">
            <input type="file" name="userfile" class="form-control">
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="span4">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Kategori Artikel</h3>
            </div>
            <div class="widget-content">
                <?php echo cmb_dinamis('id_kategori', 'kategori', 'nama_kategori', 'id_kategori') ?>
            </div>
        </div>
    </div>
    <div class="span8">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Nulis Artikel</h3>
            </div>
            <div class="widget-content">

                <textarea  name="isi_artikel"  id="editor" ></textarea>
            </div>
            <div>

                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                <?php echo anchor('Admin/Artikel', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
