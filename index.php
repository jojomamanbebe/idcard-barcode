<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JoJo Maman Bébé</title>

<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<!--    <script src="" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->


    <link rel="stylesheet" href="./public/css/app.css?v=0.1.2">


</head>
<body>
<style>
body {
	background-image: url("background.png");
	
}
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand text-center center-block">JoJo Maman Bébé ID Card Printer by Matt Thomas</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto"></ul>
</div>
</div>
</nav>



<div class="container my-5">
    <form action="print.php" method="get" target="_blank" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card">
					<div class="logo">
					<p style="text-align:center;">
					<img src="jojologo.jpg" alt="JoJo" max-width="10%" vspace="50" height=50% width=100% >
					</div>
					<div class="card-header">Fill employee details below and click print<br><br><b>Note:</b> Make sure to tick 'Print Background' or 'Background Graphics' in printer settings </div>
                    <div class="card-body mb-0">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Employee Name">
                        </div>
						<div class="form-group">
							<input type="text" class="form-control" name="job-title" placeholder="Job Title">
						</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="code" placeholder="Employee Number">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="print" value="yes" class="custom-control-input" id="auto-print" checked>
                                <label class="custom-control-label" for="auto-print">Automatically open print dialog</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="./public/js/app.js?v=0.1.2"></script>

</body>
</html>


