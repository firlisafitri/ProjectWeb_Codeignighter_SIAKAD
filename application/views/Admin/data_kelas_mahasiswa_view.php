 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Data Mahasiswa Kelas</h4>
                            </div>
                            <div class="card-body">


                            <?php foreach ($tbl_kelas as $kelas) { ?>

                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Kelas</label>
                                                    <input type="text" class="form-control" name="kd_kelas" readonly="readonly" value="<?php echo $kelas->kd_kelas ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kelas</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="nm_kelas" value="<?php echo $kelas->nm_kelas ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="jurusan" value="<?php echo $kelas->jurusan ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="semester" value="<?php echo $kelas->semester ?>">
                                                </div>
                                            </div>
                                        </div>      

                            <?php } ?>

                            </div>
                        </div>
                    
                

                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Daftar Mahasiswa Kelas</h4>
                            </div>
                            <div class="card-body">

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_mhs as $mhs) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $mhs->nim_mhs ?></td>
                                                <td><?php echo $mhs->nm_mhs ?> </td>
                                                
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
    </div>