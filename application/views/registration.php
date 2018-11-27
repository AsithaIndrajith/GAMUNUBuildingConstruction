<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Gamunu Builders</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../../public/css/registration.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Apply for job</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="insertForm" method="post">
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="worker_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">National Identity Card Number</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="worker_nic" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mobile Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="worker_phone" placeholder="0771234567" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="worker_address" placeholder="23/C,Nelum Place" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Job Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6" style="width:100%;height:40px" name="job_type" required>
                                        <option value="mason">Mason</option>
                                        <option value="electrisian">Electrisian</option>
                                        <option value="plumber">Plumber</option>
                                        <option value="helper">Helper</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="send Application">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../public/vendors/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="../../public/js/registration.js"></script>

</body>

</html>
<!-- end document-->