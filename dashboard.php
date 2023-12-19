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
                        <th scope="col">Plan</th>
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
                        <td>Mothly</td>
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
                        <td>Yearly</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include('footer.php') ?>