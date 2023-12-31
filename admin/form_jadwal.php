<div class="col-md-12 mt-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Jadwal</h5>
                <form method="POST" action="aksi/ac_post_jadwal.php">
                    <div class="mb-3">
                        <label for="Hari" class="form-label">Hari</label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        <select name="hari" id="Hari" class="form-control">
                        <option value="Minggu">Minggu</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="Tanggal" name="tgl" required>
                    </div>
                    <div class="mb-3">
                        <label for="Waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control" id="Waktu" name="waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="Tempat" name="tempat" placeholder="Tempat" required>
                    </div>
                    <div class="mb-3">
                        <label for="Perayaan" class="form-label">Perayaan</label>
                        <input type="text" class="form-control" id="Perayaan" name="perayaan" placeholder="Perayaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="pastor" class="form-label">Pastor</label>
                        <input class="form-control" id="Pastor" name="pastor"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

