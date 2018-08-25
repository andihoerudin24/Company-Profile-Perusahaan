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
            <div class="widget-header"> <i class="icon-credit-card"></i>
                <h3>Testi Moni Client</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tstimoni</th>
                            <th>Isi Testimoni</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($testimoni as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><pre><?php echo $row->isi_testi ?></pre></td>
                                <td><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id_moni; ?>) data-target='#Modal'>Edit</button></td>
                                <td><?php echo anchor('Admin/Testimoni/Hapus/' . $row->id_moni, 'Hapus', array('class' => 'btn btn-3d btn-info btn-sm')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header"> <i class="icon-music"></i>
                <h3>Tambah Testimoni</h3>
            </div>
            <div class="widget-content">
                <?php echo form_open('Admin/Testimoni') ?>
                <div>
                    <label class="icon-user">Nama</label>
                    <input type="text" name="nama" required="" class="form-control">
                    <hr>
                    <label class="icon-magic">Isi Testi</label>
                    <textarea  name="isi_testi"  id="editor" ></textarea>
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
                <h5 class="modal-title" id="exampleModalLabel">Rubah Nama Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="widget-content">
                    <?php echo form_open('Admin/Testimoni/edit') ?>
                    <div>
                        <input type="hidden" id="id_moni" name="id_moni">
                        <label class="icon-user">Nama</label>
                        <input type="text" name="nama" id="nama" required="" class="form-control">
                        <hr>
                        <label class="icon-magic">Isi Testi</label>
                        <textarea   name="isi_testi"  id="isi_testi" ></textarea>
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
    function show_by_id(id_moni) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Admin/Testimoni/show_by_id',
            data: 'id_moni=' + id_moni,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_moni").val(obj.id_moni);
                $("#nama").val(obj.nama);
                $("#isi_testi").val(obj.isi_testi);
                
            }
        })
    }

</script>