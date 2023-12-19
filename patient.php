<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Patient</h1>
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
                            <input type="text" class="form-control" placeholder="Disease / Illness" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <button class="btn btn-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Patient ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Disease / illness</th>
                        <th scope="col">Appointed by</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time Slot</th>
                        <th scope="col">Action</th>
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
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Jane Smith</td>
                        <td>Headache</td>
                        <td>Dr. Johnson</td>
                        <td>2023-12-20</td>
                        <td>02:30 PM - 03:30 PM</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>