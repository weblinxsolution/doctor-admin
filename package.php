<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">Packages</h1>
                    <a href="add.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="table-res">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-nowrap">Package ID</th>
                            <th scope="col" class="text-nowrap">Package Name</th>
                            <th scope="col" class="text-nowrap">Description</th>
                            <th scope="col" class="text-nowrap">Price</th>
                            <th scope="col" class="text-nowrap">Duration</th>
                            <th scope="col" class="text-nowrap">Services Included</th>
                            <th scope="col" class="text-nowrap">Availability</th>
                            <th scope="col" class="text-nowrap">Action</th>
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
                            <td class="text-nowrap">
                                <a href="add.php" class="btn btn-primary m-1">Edit</a>
                                <button class="btn btn-danger m-1">Delete</button>
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
                            <td class="text-nowrap">
                                <a href="add.php" class="btn btn-primary m-1">Edit</a>
                                <button class="btn btn-danger m-1">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more package entries as needed -->
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>