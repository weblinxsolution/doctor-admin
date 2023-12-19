<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Appointments</h1>
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
            <th scope="col">Appointment ID</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Date</th>
            <th scope="col">Time Slot</th>
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
            <td>10:00 AM - 11:00 AM</td>
            <td>Scheduled</td>
            <td>
                <button class="btn btn-primary">View Details</button>
                <button class="btn btn-danger">Cancel</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>Dr. Johnson</td>
            <td>2023-12-20</td>
            <td>02:30 PM - 03:30 PM</td>
            <td>Completed</td>
            <td>
                <button class="btn btn-primary">View Details</button>
                <button class="btn btn-secondary">Reschedule</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Michael Johnson</td>
            <td>Dr. Patel</td>
            <td>2023-12-21</td>
            <td>09:00 AM - 10:30 AM</td>
            <td>Upcoming</td>
            <td>
                <button class="btn btn-primary">View Details</button>
                <button class="btn btn-danger">Cancel</button>
            </td>
        </tr>
        <!-- Add more appointment entries as needed -->
    </tbody>
</table>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php include('footer.php') ?>