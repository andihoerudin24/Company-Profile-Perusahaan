<div class="row">
    <?php echo form_open_multipart('Admin/Pengaturan/edit');
      echo form_hidden('id_pengaturan',$pengaturan['id_pengaturan'])    
      ?>
    <div class="span6">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Judul</h3>
        </div>
        <div class="widget-content">
            <input type="text" value="<?php echo $pengaturan['judul'] ?>" required=""  name="judul" class="form-control">
        </div>
    </div>
    <div class="span6">
        <div class="widget-header"> <i class="icon-angle-down"></i>
            <h3>Icon</h3>
        </div>
        <div class="widget-content">
            <input type="text" name="icon" value="<?php echo $pengaturan['icon'] ?>"  required="" class="form-control">
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="span8">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Isi</h3>
            </div>
            <div class="widget-content">
                <textarea   name="isi"  id="editor" ><?php echo $pengaturan['isi'] ?></textarea>
            </div>
            <div>

                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                <?php echo anchor('Admin/Pengaturan', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
