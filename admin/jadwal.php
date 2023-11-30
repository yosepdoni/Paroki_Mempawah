
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<div class="col-md-12 mt-5">
    <div class="container">
    <a class="btn btn-primary mt-3 mb-2" href="index.php?p=form_jadwal"><i class="fa fa-plus"></i> Tambah Jadwal    
    </a>
    <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Perayaan</th>
                <th scope="col">Pastor</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  
                  include "koneksi.php";
                  $data = mysqli_query($conn, "select * from jadwal");
                  while($result = mysqli_fetch_array($data)){
                ?>
              <tr>
                <td><?php echo $result['hari']; ?></td>
                <td><?php echo date('d F Y', strtotime($result['tgl'])); ?></td>
                <td><?php echo $result['waktu']; ?></td>
                <td><?php echo $result['tempat']; ?></td>
                <td><?php echo $result['perayaan']; ?></td>
                <td><?php echo $result['pastor']; ?></td>
                <td>
                     <a href="index.php?p=edit_jadwal&id=<?=$result['id_jadwal'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
                     <a onclick="return confirm('apakah anda yakin? ');" href="index.php?p=ac_delete_jadwal&id=<?=$result['id_jadwal'] ?>" class="btn btn-danger btn-sm"><i class= "fa fa-trash">&nbsp;</i></a>
                    </td>
              </tr>
              <?php
                  
                }
              ?>
            </tbody>
          </table>
        </div>
    </div>
</div>

