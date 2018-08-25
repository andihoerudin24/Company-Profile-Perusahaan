<div class="row">
    <div class="span8">
        <div class="widget">
            <?php
            if ($this->session->flashdata('berhasil')) {
                echo "<div class='alert alert-info'>";
                echo $this->session->flashdata('berhasil');
                echo "</div>";
            } elseif ($this->session->flashdata('edit')) {
                echo "<div class='alert alert-warning'>";
                echo $this->session->flashdata('edit');
                echo "</div>";
            } elseif ($this->session->flashdata('hapus')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('hapus');
                echo "</div>";
            }
            ?> 
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Data Album</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Album</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($album as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama_album ?></td>
                                <td><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id_album; ?>) data-target='#Modal'>Edit</button></td>
                                <td><?php echo anchor('Admin/Album/Hapus/' . $row->id_album, 'Hapus', array('class' => 'btn btn-3d btn-info btn-sm')) ?></td>
                            </tr>
                        <?php  $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header"> <i class="icon-picture"></i>
                <h3>Tambah ALbum</h3>
            </div>
            <div class="widget-content">
                <?php echo form_open('Admin/Album') ?>
                <div>
                    <label class="icon-android">Nama Album</label>
                    <input type="text" name="nama_album" required="" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-sm">Tambah</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>



<!-- Modal for edit -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rubah Nama Album</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="widget-content">
                    <?php echo form_open('Admin/Album/edit') ?>
                    <div>
                        <input type="hidden" id="id_album" name="id_album">
                        <label class="icon-android">Nama Album</label>
                        <input type="text" id="nama_album" name="nama_album" required="" class="form-control">
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
    function show_by_id(id_album) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Admin/Album/show_by_id',
            data: 'id_album=' + id_album,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_album").val(obj.id_album);
                $("#nama_album").val(obj.nama_album);
            }
        })
    }

</script>