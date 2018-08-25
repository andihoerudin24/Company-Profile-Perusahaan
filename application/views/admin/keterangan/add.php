<div class="row">
    <?php echo form_open_multipart('Admin/Keterangan/add') ?>
    <div class="span6">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Judul</h3>
        </div>
        <div class="widget-content">
            <input type="text" required=""  name="judul" class="form-control">
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="span8">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Keterangan</h3>
            </div>
            <div class="widget-content">

                <textarea  name="keterangan"  id="editor" ></textarea>
            </div>
            <div>
               <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                <?php echo anchor('Admin/Keterangan', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
