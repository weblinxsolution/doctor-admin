<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">Packages</h1>
                    <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</button>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Package ID</th>
                        <th scope="col">Package Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Services Included</th>
                        <th scope="col">Availability</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Basic Checkup</td>
                        <td>Standard health checkup including basic tests.</td>
                        <td>$100</td>
                        <td>1 hour</td>
                        <td>Physical examination, blood pressure measurement, basic lab tests</td>
                        <td>Available</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Comprehensive Package</td>
                        <td>Extensive health checkup with advanced diagnostics.</td>
                        <td>$250</td>
                        <td>2 hours</td>
                        <td>Physical examination, blood tests, imaging studies</td>
                        <td>Available</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more package entries as needed -->
                </tbody>
            </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>