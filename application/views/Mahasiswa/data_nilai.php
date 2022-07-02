
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-book"></i> &nbsp;&nbsp;&nbsp;Data Nilai</h4>
                            </div>
                            <div class="card-body">
                                
                                

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>Mata Kuliah</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>Mata Kuliah</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_jadwal as $jadwal) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $jadwal->nm_kelas ?>/<?php echo $jadwal->semester ?></td>
                                                <td><?php echo $jadwal->nm_matkul ?></td>
                                                <td><?php echo $jadwal->thn_ajar ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Mahasiswa/Mahasiswa/data_nilai_view/'.$jadwal->id_jadwal.'' ?>" class="btn btn-info">View Nilai</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>