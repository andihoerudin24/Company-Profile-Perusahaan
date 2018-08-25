<div class="row">
    <?php foreach ($visi as $row): ?>
        <?php
        if ($this->session->flashdata('edit')) {
            echo "<div class='alert alert-warning'>";
            echo $this->session->flashdata('edit');
            echo "</div>";
        }
        ?>    
        <div class="span6">
            <div class="widget">
                <div class="widget-content">
                    <div class="jumbotron">
                        <h1>Visi</h1>
                        <p><pre><?php echo $row->visi; ?></pre></p>
                        <p><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id; ?>) data-target='#Modaldua'>Edit</button></p>
                    </div> 
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="widget-content">
                    <div class="jumbotron">
                        <h1>Misi</h1>
                        <p><pre><?php echo $row->misi; ?></pre></p>
                        <p><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id; ?>) data-target='#Modal'>Edit</button></p>
                    </div> 
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<!-- Modal for edit -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="widget-content">
                    <?php echo form_open('Admin/Visi/edit') ?>
                    <div>
                        <label class="icon-magic">Misi</label>
                        <input type="hidden" name="id" id="id">
                        <textarea   name="misi" id="misi" ></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Modal for edit -->

<!-- Modal for edit -->
<div class="modal fade" id="Modaldua" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Visi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="widget-content">
                    <?php echo form_open('Admin/Visi/edit') ?>
                    <div>

                        <input type="hidden" name="id" id="idvisi">
                        <label class="icon-magic">Visi</label>
                        <textarea name="visi" id="visi" ></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Modal for edit -->

<script type="text/javascript">
    function show_by_id(id) {
    $.ajax({
    type: 'GET',
            url: '<?php echo base_url() ?>Admin/Visi/show_by_id',
            data: 'id=' + id,
            success: function (data) {
            var json = data,
                    obj = JSON.parse(json);
            $("#id").val(obj.id);
            $("#idvisi").val(obj.id);
            $("#visi").val(obj.visi);
            $("#misi").val(obj.misi);
            }
    })
    }
</script>
