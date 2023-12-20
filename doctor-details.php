<?php include('header.php') ?>

<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Doctors Details</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow p-3 rounded-b">
                <div class="card-header bg-white rounded-tb">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div>
                                <img src="dist/img/doctor1.png" alt="Profile Photo" class="w-auto">
                            </div>
                            <div>
                                <h3 class="font-weight-bold mt-2">Dr. John Doe</h3>
                            </div>
                        </div>
                        <div>
                            <h4>Ratings</h4>
                            <!-- star icons -->
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h5 class="font-weight-bold">Specialization</h5>
                            <p>Cardiologist</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold">Experience</h5>
                            <p>10 years</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold">Fees ($/hr)</h5>
                            <p>$150</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold">Availability</h5>
                            <p>Monday to Friday, 9 AM - 5 PM</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="font-weight-bold">Reviews</h5>
                        <p>Excellent doctor, very knowledgeable and caring. Highly recommended!</p>
                    </div>
                </div>
            </div>

            <!-- filter -->
            <div class="mb-3 p-3 card border">
                <h3 class="mb-3">Patients</h3>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Disease / Illness"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <button class="btn btn-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                    </div>
                </div>
            </div>

            <div class="card bg-white p-4">
                <div class="table-res">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Patient ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Disease / illness</th>
                                <th scope="col">Appointed by</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time Slot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>101</td>
                                <td>John Doe</td>
                                <td>Fever</td>
                                <td>Dr. Smith</td>
                                <td>2023-12-19</td>
                                <td>10:00 AM - 11:00 AM</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Jane Smith</td>
                                <td>Headache</td>
                                <td>Dr. Johnson</td>
                                <td>2023-12-20</td>
                                <td>02:30 PM - 03:30 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<?php include('footer.php') ?>