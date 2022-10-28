<?php
require '../functions.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!-- My Own CSS -->
    <link rel="stylesheet" href="../css/style.css" />

    <title>Pendaftaran Santri Baru - Ponpes Al Hidayah</title>
  </head>
  <body>

    <!-- Form Pendaftaran -->
    <section class="form-pendaftaran" id="form-pendaftaran">
      <div class="container px-4 py-5">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="row">
              <div class="col-12 col-md-2">
                <div
                  class="nav lg:flex-column nav-pills"
                  id="v-pills-tab"
                  role="tablist"
                  aria-orientation="vertical"
                >
                  <button
                    class="nav-link active"
                    id="v-pills-satu-tab"
                    data-toggle="pill"
                    data-target="#v-pills-satu"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-satu"
                    aria-selected="true"
                  >
                    <i class="bi bi-1-circle"></i>
                  </button>
                  <button
                    class="nav-link"
                    id="v-pills-dua-tab"
                    data-toggle="pill"
                    data-target="#v-pills-dua"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-dua"
                    aria-selected="true"
                  >
                    <i class="bi bi-2-circle"></i>
                  </button>
                </div>
              </div>
              <div class="col-12 col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-satu"
                    role="tabpanel"
                    aria-labelledby="v-pills-satu-tab"
                  >
                    <form action="" method="post">
                      <div class="row">
                          <h5>Data Santri</h5>
                      </div>
                      <div class="row mt-2">
                        <div class="col-lg-6 form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input type="text" class="form-control" name="nama_santri" id="nama_santri"
                                placeholder="Naufal Mumtaz Adzaki">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="nama_panggilan">Nama Panggilan</label>
                            <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Mumtaz">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="B4, JL. Yudistira..." rows="4"
                                style="resize:none;"></textarea>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <textarea class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="B4, JL. Yudistira..."
                                rows="4" style="resize:none;"></textarea>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="anak_ke">Anak Ke</label>
                            <select class="form-control" name="anak_ke" id="anak_ke">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="jumlah_saudara">Jumlah Saudara</label>
                            <select class="form-control" name="jumlah_saudara" id="jumlah_saudara">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-lg-5 form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="d-flex">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="1">
                                    <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="2">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 form-group">
                            <label for="jenjang">Jenjang</label>
                            <select class="form-control" name="jenjang" id="jenjang">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="KULIAH">Kuliah</option>
                            </select>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-dua"
                    role="tabpanel"
                    aria-labelledby="v-pills-dua-tab"
                  >
                    ...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
