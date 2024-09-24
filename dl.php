<?php

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
//----------------------
if ( !defined('ABSPATHUPPER') )
	define('ABSPATHUPPER', dirname(dirname(__FILE__)) . '/');
//---------------------------------------3-2-2020
if (!file_exists(ABSPATH.'dl-cache')) {
    mkdir(ABSPATH.'dl-cache', 0777, true);
    chmod(ABSPATH.'dl-cache', 0777);	
}
//---------------------------------------

$url = $_POST['text'];
$url_md5 = md5($url);
print_r($_POST);

?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>امن سازی لینک دانلود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css" media="screen">
    <link href="https://cdn.rawgit.com/rastikerdar/sahel-font/v1.0.0-alpha23/dist/font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="demo/custom.min.css">
    <link rel="icon" sizes="32x32" href="favicon.png">
      <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@latest/dist/css/persian-datepicker.min.css"/>
      <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
      <script src="https://unpkg.com/persian-date@latest/dist/persian-date.min.js"></script>
      <script src="https://unpkg.com/persian-datepicker@latest/dist/js/persian-datepicker.min.js"></script>
    <script></script>
</head>
<body class="rtl">
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <div class="container">
            <a href="../" class="navbar-brand">ابزارهای کاربردی و مفید</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

            </div>
        </div>
    </div>
    <div class="container">
            <!-- Containers-->


          <div class="page-header">
            <h1>امن سازی لینک دانلود</h1>
          </div>
          
<?php if(isset($_POST['text']) && !empty($_POST['text'])) { ?>	  
<div class="alert alert-success" style=" text-align: left !important;">
<?php

//		 foreach($dns_full as $element){
//			echo implode("<br/>\n", $element);
//		 }
		 
echo '<br>';

foreach ($output_array[0] as $element)	
echo $element . '<br>';
//print_r($output_array[0]);


		  ?>
</div>
<?php } ?>
	  
		 <form class="form-search" action="dl.php" method="post" >
			<textarea rows="5" name="text" id="text" class="span5 w-100 text-left" placeholder="لینک دانلود فایل را وارد نمایید" style=" text-align: left !important;"></textarea>
			<button  class="btn btn-primary btn-lg btn-block" type="submit" >لینک را امن کن</button>
		 </form>



                <footer id="footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li class="float-lg-right"><a href="#top">بازگشت به بالا</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="dist/js/bootstrap.bundle.min.js"></script>
            <script src="demo/custom.js"></script>
        </body>
        </html>
