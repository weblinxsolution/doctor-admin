<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
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
                            <th scope="col">Setting Name</th>
                            <th scope="col">Current Value</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Notification Preferences</td>
                            <td>Enabled</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Appointment Reminders</td>
                            <td>15 minutes before</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Time Zone</td>
                            <td>GMT+0:00</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                        </tr>
                        <!-- Add more settings entries as needed -->
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>