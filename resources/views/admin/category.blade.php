@extends('layout1')
@section('content')

            <section class="section">
                <div class="row">
                  <div class="col-lg-11">
                    <h3 style="margin-top: 10px; margin-left:100px">Create Book</h3>
                    <div class="card"  style="margin-left: 90px; margin-top:20px">
                      <div class="card-body">
                        <h5 class="card-title">Form Create Book</h5>
          
                        <!-- General Form Elements -->
                        <form>
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Writer</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Publisher</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">No ISBN</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Synopsis</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Category Book</label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">Novel</option>
                                <option value="2">Fiksi</option>
                                <option value="3">Dongeng</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
          
                        </form>
            </section>

                <div class="row my-5">
        
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Book ID</th>
                                    <th scope="col">Category ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Writer</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Synopsis</th>
                                    <th scope="col">Cover Book</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Bintang</td>
                                    <td>Gramedia</td>
                                    <td>Persahabatan ketiga anak–yang memiliki rasa ingin tahu sangat tinggi dan banyak</td>
                                    <td>Warna Biru</td>
                                    <td>
                                       <button class="bg-transparent" style="border: none" ><a href="#" style="color: rgb(229, 83, 83)"><i class="fas fa-trash"></i></a></button>
                                       <button class="bg-transparent ms-2" style="border: none"  data-bs-toggle="modal" data-bs-target="#edit"><a href="#"><i class="fas fa-edit" style="color: rgb(82, 222, 159); font-size:13px"></i></a></button>
                                    </td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>

            </div> 
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

@endsection