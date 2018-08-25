<div class="row">
    <?php echo form_open_multipart('Admin/Keterangan/edit');
       echo form_hidden('id',$keterangan['id']);      
    ?>
    <div class="span6">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Judul Artikel</h3>
        </div>
        <div class="widget-content">
            <input type="text" required=""  value="<?php echo $keterangan['judul'] ?>" name="judul" class="form-control">
        </div>
    </div>
    <div class="span6">
        <div class="widget-header"> <i class="icon-picture"></i>
            <h3>Gambar Artikel</h3>
        </div>
        <div class="widget-content">
            <input type="file" name="userfile"  class="form-control">
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
               <textarea  name="keterangan"  id="editor" ><?php echo $keterangan['keterangan'] ?></textarea>
            </div>
            <div>

                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                <?php echo anchor('Admin/Keterangan', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
