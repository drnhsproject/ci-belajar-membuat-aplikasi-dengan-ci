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
                         <th scope="col">No Transaksi</th>
                         <th scope="col">Nama Barang</th>
                         <th scope="col">Harga</th>
                         <th scope="col">Qty</th>
                         <th scope="col">Total</th>
                         <th scope="col">Status</th>
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
                             <td><?= $ps['nama_barang']; ?></td>
                             <td><?= $ps['harga']; ?></td>
                             <td><?= $ps['qty']; ?></td>
                             <td><?= $ps['jumlah']; ?></td>
                             <td><?= $ps['status']; ?></td>
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