<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Doctors</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="mb-3 p-3 card border">
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
                            <input type="text" class="form-control" placeholder="Specialization" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <button class="btn btn-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                    </div>
                </div>
            </div>
            <div class="table-res">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="w-10">Profile Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Experience</th>
                            <th scope="col" class="w-7">Fees ($/hr)</th>
                            <th scope="col">Availability</th>
                            <th scope="col">Description</th>
                            <th scope="col">Reviews</th>
                            <th scope="col">Feedback</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="dist/img/doctor1.png" class="w-auto" alt=""></td>
                            <td>Dr. Emily Johnson</td>
                            <td>Cardiology</td>
                            <td>15 years</td>
                            <td>150</td>
                            <td>Monday to Friday, 9 AM - 5 PM</td>
                            <td>Experienced cardiologist specializing in heart diseases.</td>
                            <td>4.5/5 stars (28 reviews)</td>
                            <td>Very knowledgeable and caring. Explained the diagnosis thoroughly.</td>
                            <td><a href="doctor-details.php" class="btn btn-danger">Details</a></td>
                        </tr>
                        <tr>
                            <td><img src="dist/img/doctor2.png" class="w-auto" alt=""></td>
                            <td>Dr. Michael Davis</td>
                            <td>Orthopedics</td>
                            <td>12 years</td>
                            <td>120</td>
                            <td>Tuesday, Thursday, Saturday, 10 AM - 3 PM</td>
                            <td>Orthopedic surgeon with expertise in joint replacements.</td>
                            <td>4.8/5 stars (35 reviews)</td>
                            <td>Prompt and efficient service. Answered all my questions patiently.</td>
                            <td><a href="doctor-details.php" class="btn btn-danger">Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>