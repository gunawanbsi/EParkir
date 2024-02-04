<section class="bg vh-100">
<div class="container" style="padding-top: 8rem;">

<div class="container-fluid">
<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel List Lokasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                    <thead>
                    <tr style="text-align:center;">
                        <th>ID Lokasi</th>
                        <th>Nama Lokasi</th>
                        <th>kapasitas</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
          
          <?php foreach($lokasi as $row) : ?>
        <tr style="text-align:center;">
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->lokasi ?></td>
            <td><?php echo $row->kapasitas ?></td>
            <td style="text-align:center;">
            <?php echo anchor('user/kendaraan/' .$row->id, '<div class="btn btn-primary"> Pilih Lokasi </div>') ?> 
        </tr>
         <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>  
  

  </div>
</div>
</div>
</div>
</section>