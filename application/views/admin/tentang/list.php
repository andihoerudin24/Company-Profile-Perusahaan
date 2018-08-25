<div class="row">
    <?php echo form_open('Admin/Tentang') ?>
    <?php foreach ($tentang as $row): ?>
        <div class="span8">
            <div class="widget">
                <div class="widget-content">
                    <div class="widget-header"> 
                        <i class="icon-adjust"></i>
                        <h3>Sejarah</h3>
                    </div>
                    <textarea  name="sejarah"  id="editor" ><?php echo $row->sejarah ?></textarea>
                    <button type="submit" name="submit" class="btn btn-danger">Edit</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php echo form_close();  ?>
</div>
