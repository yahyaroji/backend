<div class="container mt-3">
<h3 class="text-center">Halaman Hobby</h3>

<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#modalHobby">
  Tambah Hobby
</button>
<!-- Isi data hobby -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hobby</th>
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
<!-- Akhir data hobby -->

<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#modalEducation">
  Tambah Education
</button>
<!-- Isi data education -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tahun</th>
      <th scope="col">Nama Sekolah</th>
      <th scope="col">Program Keahlian</th>
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
<!-- Akhir data education -->

<!-- Modal hobby -->
<div class="modal fade" id="modalHobby" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Hobby</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="aksi.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Hobby</label>
            <input type="text" class="form-control" name="edtahun" placeholder="Masukkan Hobby">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="edsimpan">Simpan</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir modal hobby -->

<!-- Modal education -->
<div class="modal fade" id="modalEducation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Education</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="aksi.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
            <input type="text" class="form-control" name="edtahun" placeholder="Masukkan Tahun">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
            <input type="text" class="form-control" name="edsekolah" placeholder="Nama Sekolah">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Program Keahlian</label>
            <input type="text" class="form-control" name="edprogramkeahlian" placeholder="Masukkan Program Keahlian">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="eddeskripsi" placeholder="Deskripsi Singkat" rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="edsimpan">Simpan</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir modal education -->


</div>
