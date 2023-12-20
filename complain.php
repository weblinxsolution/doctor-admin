<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Complain</h1>
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
                            <th scope="col">Complaint ID</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Date Filed</th>
                            <th scope="col">Complaint Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Dr. Smith</td>
                            <td>2023-12-19</td>
                            <td>Medical Treatment</td>
                            <td>Unsatisfactory consultation experience</td>
                            <td>Pending</td>
                            <td>
                                <a href="complain-details.php" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Dr. Johnson</td>
                            <td>2023-12-20</td>
                            <td>Appointment Scheduling</td>
                            <td>Difficulty in scheduling appointments</td>
                            <td>In Progress</td>
                            <td>
                                <a href="complain-details.php" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Michael Johnson</td>
                            <td>Dr. Patel</td>
                            <td>2023-12-21</td>
                            <td>Communication</td>
                            <td>Poor communication during the visit</td>
                            <td>Resolved</td>
                            <td>
                                <a href="complain-details.php" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        <!-- Add more complaint entries as needed -->
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>