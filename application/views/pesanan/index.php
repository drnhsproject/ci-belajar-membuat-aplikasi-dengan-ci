  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
      <div class="row">
          <div class="col-lg-6">
              <?= form_open('Pesanan/savePesanan'); ?>

              <div class="form-group">
                  <label for="no_meja">No Transaksi</label>
                  <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" readonly value="<?= $code; ?>">
              </div>
              <div class="form-group">
                  <label for="no_meja">No Meja*</label>
                  <input type="text" class="form-control" id="no-meja" name="no_meja" placeholder="No. Meja" required>
              </div>
              <div class="form-group">
                  <label for="nama_barang">Menu*</label>
                  <select class="form-control" id="nama_barang" name="nama_barang">
                      <option>---Pilih Menu---</option>
                      <?php foreach ($makanan as $mkn) : ?>
                          <option><?= $mkn['nama_makanan']; ?></option>
                      <?php endforeach; ?>
                      <?php foreach ($minuman as $mnm) : ?>
                          <option><?= $mnm['nama_minuman']; ?></option>
                      <?php endforeach; ?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="qty">Harga*</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" required>
              </div>
              <div class="form-group">
                  <label for="qty">Banyaknya*</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Banyak Pesanan" required>
              </div>
              <div class="form-group">
                  <label for="qty">Jumlah*</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
              </div>
              <div class="form-group">
                  <label for="qty">ID-Pelayan*</label>
                  <input type="text" class="form-control" id="id_pelayan" name="id_pelayan" placeholder="Masukan ID anda" required>
              </div>
              <div class="form-group">
                  <label for="qty">Status*</label>
                  <input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Buat Pesanan</button>
              </div>
              </form>
          </div>
      </div>
      <hr class="devier">
      <table class="table table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">No Transaksi</th>
                  <th scope="col">No Meja</th>
                  <th scope="col">Nama Pesanan</th>
                  <th scope="col">Banyaknya</th>
                  <th scope="col">Opsi</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $no = 1;
                foreach ($pesanan as $ps) :
                    ?>
                  <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $ps['no_transaksi']; ?></td>
                      <td><?= $ps['no_meja']; ?></td>
                      <td><?= $ps['nama_barang']; ?></td>
                      <td><?= $ps['qty']; ?></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->