<?php
    $name = isset( $_REQUEST['name'] ) ? $_REQUEST['name'] : '';
	$jobtitle = isset( $_REQUEST['job-title'] ) ? $_REQUEST['job-title'] : '';
    $code = isset( $_REQUEST['code'] ) ? $_REQUEST['code'] : '';
    $print = isset( $_REQUEST['print'] ) ? ( $_REQUEST['print'] === 'yes' ) : false;
    if( empty( $name ) OR empty( $code ) OR empty( $jobtitle ) ){
        header('Location: ./');
        exit;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link rel="stylesheet" href="./public/css/print.css?v=0.1.2">
</head>
<body>


<div class="id-card">
    <div class="id-card-header">
        <div class="heading">JoJo Maman Bébé</div>
        <div class="name"><?php echo htmlentities( $name )?></div>
		<div class="job-title"><?php echo htmlentities( $jobtitle )?></div>
    </div>
    <div class="id-card-body">
        <canvas id="id-card-barcode" data-code="<?php echo htmlentities( $code )?>"></canvas>
    </div>
</div>

<script src="./public/js/app.js?v=0.1.2"></script>
<?php if( $print ): ?>
    <script>setTimeout(function(){ window.print(); }, 100);</script>
<?php endif; ?>
</body>
</html>
