@extends('layout1')
@section('content')

            <section class="section">
                <div class="row">
                  <div class="col-lg-11">
                    <h3 style="margin-top: 10px; margin-left:100px">Create Book</h3>
                    <div class="card"  style="margin-left: 90px; margin-top:20px">
                      <div class="card-body">
                        <h5 class="card-title">Create Category</h5>
          
                        <!-- General Form Elements -->
                        <form>
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control">
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>Novel</td>
                                    <td>
                                       <button class="bg-transparent" style="border: none" ><a href="#" style="color: rgb(229, 83, 83)"><i class="fas fa-trash"></i></a></button>
                                       <button class="bg-transparent ms-2" style="border: none"  data-bs-toggle="modal" data-bs-target="#edit"><a href="#"><i class="fas fa-edit" style="color: rgb(82, 222, 159); font-size:13px"></i></a></button>
                                    </td>
                                </tr>
                            </tbody>
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