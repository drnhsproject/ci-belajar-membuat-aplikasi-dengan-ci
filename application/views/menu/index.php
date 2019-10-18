  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
      <div class="row">
          <div class="col-lg-6">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Makanan & Minuman</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Status</th>
                          <th scope="col">Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no = 1;
                        foreach ($makanan as $mkn) :
                            ?>
                          <tr>
                              <th scope="row"><?= $no++; ?></th>
                              <td><?= $mkn['nama_makanan']; ?></td>
                              <td><?= $mkn['harga']; ?></td>
                              <td><?= $mkn['status']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                      <?php
                        foreach ($minuman as $mnm) :
                            ?>
                          <tr>
                              <th scope="row"><?= $no++; ?></th>
                              <td><?= $mnm['nama_minuman']; ?></td>
                              <td><?= $mnm['harga']; ?></td>
                              <td><?= $mnm['status']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->