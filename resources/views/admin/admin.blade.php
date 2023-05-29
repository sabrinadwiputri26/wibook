@extends('layout1')
@section('content')
<link rel="stylesheet" href="assets/css/styles.css">

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Data User</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sarah</td>
                                    <td>Balandongan</td>
                                    <td>085780687089</td>
                                    <td>sarah@gmail.com</td>
                                    <td>
                                       <button class="bg-transparent" style="border: none" ><a href="#" style="color: rgb(229, 83, 83)"><i class="fas fa-trash"></i></a></button>
                                       <button class="bg-transparent ms-2" style="border: none"  data-bs-toggle="modal" data-bs-target="#edit"><a href="#"><i class="fas fa-edit" style="color: rgb(82, 222, 159); font-size:13px"></i></a></button>
                                    </td>
                                </tr>
                                <tr>
                                 <th scope="row">2</th>
                                 <td>Aliyah</td>
                                 <td>Sukasuka</td>
                                 <td>098765432111</td>
                                 <td>aliyah@gmail.com</td>
                                 <td>
                                    <button class="bg-transparent" style="border: none" ><a href="#" style="color: rgb(229, 83, 83)"><i class="fas fa-trash"></i></a></button>
                                    <button class="bg-transparent ms-2" style="border: none"  data-bs-toggle="modal" data-bs-target="#edit"><a href="#"><i class="fas fa-edit" style="color: rgb(82, 222, 159); font-size:13px"></i></a></button>
                                 </td>
                                </tr>
                                <tr>
                                 <th scope="row">3</th>
                                 <td>Nazipa</td>
                                 <td>Pasir Angin</td>
                                 <td>085789674654</td>
                                 <td>nazipa@gmail.com</td>
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