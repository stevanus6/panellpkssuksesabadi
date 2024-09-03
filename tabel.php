<div class="card-body">
                            <div class="form-group text-left">
                                <a href="inputbayar_fdw" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Nama Karyawan</th>
                                        <th>Total Gaji Diterima</th>
                                        <th>Hari Kerja yang Dihitung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 1; $i <= 26; $i++):?> 
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>Tabel <?= chr(64+$i) ?></td>
                                                <td>Deskripsi Tabel <?= chr(64+$i) ?></td>
                                                <td><?=$i?> hari</td>
                                            </tr>
                                        <?php endfor; ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>Tabel A</td>
                                            <td>Deskripsi Tabel A</td>
                                           <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Tabel B</td>
                                            <td>Deskripsi Tabel B</td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tabel C</td>
                                            <td>Deskripsi Tabel C</td>
                                            <td></td>
                                          
                                        </tr> -->

                                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>