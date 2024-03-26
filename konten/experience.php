<div class="container mt-3">
<h3 class="text-center">Halaman Experience</h3>

<!-- Button trigger modal experience -->
<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#modalExperience">
  Tambah Experience
</button>


<!-- Isi data experience -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tahun</th>
      <th scope="col">Perusahaan</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
<!-- akhir isi data experience -->


<!-- Button trigger modal skills -->
<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#modalSkills">
  Tambah Skills
</button>

<!-- Isi data skills -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Skills</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
<!-- Akhir isi data skills -->



<!-- Modal experience -->
<div class="modal fade" id="modalExperience" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Experience</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="aksi.php" method="POST">
        <div class="modal-body">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Tahun</label>
              <input type="text" class="form-control" name="extahun placeholder="Masukkan Tahun">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Perusahaan</label>
              <input type="text" class="form-control" name="experusahaan" placeholder="Nama Perusahaan">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" name="expekerjaan" placeholder="Masukkan Pekerjaan">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
              <textarea class="form-control" name="exdeskripsi" placeholder="Deskripsi Singkat Pekerjaan" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="exsimpan">Simpan</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir modal experience -->

<!-- Modal skills -->
<div class="modal fade" id="modalSkills" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Skills</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="aksi.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Skills</label>
            <input type="text" class="form-control" name="sskills" placeholder="Masukkan Skills">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="ssimpan">Simpan</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir modal skills -->


</div>
