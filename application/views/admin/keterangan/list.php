<div class="row">
    <div class="span12">
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
            <div class="widget-header"><?php echo anchor('Admin/Keterangan/add', 'Tambah', array('class' => 'btn btn-success btn-sm"')) ?> 
                <i class="icon-save"></i>
                <h3>Keterangan Service</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>foto</th>
                            <th>keterangan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($keterangan as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->judul; ?></td>
                                <td><img width="50" src="<?php echo base_url() ?>uploads/keterangan_service/<?php echo $row->foto ?>"  alt="image" /></td>
                                <td><?php echo $row->keterangan; ?></td>
                                <td><?php echo anchor('Admin/Keterangan/edit/' . $row->id, 'Edit', array('class' => 'btn btn-info')) ?></td>
                                <td><?php echo anchor('Admin/Keterangan/Hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>