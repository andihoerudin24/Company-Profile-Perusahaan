<div class="row">
    <div class="span12">
        <div class="widget">
            <?php
            if ($this->session->flashdata('berhasil')) {
                echo "<div class='alert alert-info'>";
                echo "<button type='button' class='close' data-dismiss='alert'>×</button>";
                echo "<strong>" . $this->session->flashdata('berhasil') . "</strong>";
                echo "</div>";
            } elseif ($this->session->flashdata('edit')) {
                echo "<div class='alert alert-info'>";
                echo "<button type='button' class='close' data-dismiss='alert'>×</button>";
                echo "<strong>" . $this->session->flashdata('edit') . "</strong>";
                echo "</div>";
            } elseif ($this->session->flashdata('hapus')) {
                echo "<div class='alert alert-info'>";
                echo "<button type='button' class='close' data-dismiss='alert'>×</button>";
                echo "<strong>" . $this->session->flashdata('hapus') . "</strong>";
                echo "</div>";
            }
            ?> 
            <div class="widget-header"><?php echo anchor('Admin/Pengaturan/add', 'Tambah', array('class' => 'btn btn-success btn-sm"')) ?> 
                <i class="icon-th-list"></i>
                <h3>Prngaturan</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Icon</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengaturan as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->judul; ?></td>
                                <td><?php echo $row->isi; ?></td>
                                <td><i class="<?php echo $row->icon; ?>"></i></td>
                                <td><?php echo anchor('Admin/Pengaturan/edit/' . $row->id_pengaturan, 'Edit', array('class' => 'btn btn-info')) ?></td>
                                <td><?php echo anchor('Admin/Pengaturan/Hapus/' . $row->id_pengaturan, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>