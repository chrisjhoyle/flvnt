<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <title>FLVNT</title>
        <!--Bootstrap Style Sheet-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <!--Custom Style Sheet-->
        <link rel="stylesheet" href="css/style.css">
        <!--New Custom Style Sheet-->
        <link rel="stylesheet" href="css/custom.css">
        <!--New Updates Style Sheet-->
        <link rel="stylesheet" href="css/updates.css">
        <!--Animation Style Sheet-->
        <link href="css/animations.css" rel="stylesheet" type="text/css">
        <!--loader Style Sheet-->
        <link href="css/loader.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- LOADER -->
        <div id="preloader-1">
            <div id="status">
                <div class="bullet-1"></div>
            </div>
        </div>
        <!-- END OF LOADER -->

        @yield('content')

        <!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="copy">© Copyright . All Rights Reserved.</div>
						<div class="socail">
							<ul>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="instagram"></a></li>
								<li><a href="#" class="linkdin"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END OF FOOTER -->

        <!-- SUCCESS MODAL -->
    	<div class="modal fade" id="successModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="bootstrap-dialog-header">
                            <div class="bootstrap-dialog-close-button" data-dismiss="modal" aria-label="Close">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="bootstrap-dialog-title">Success!</div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="bootstrap-dialog-body">
                             <div class="bootstrap-dialog-message">Your request has been recieved.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF SUCCESS MODAL -->

        <!-- jquery-2.1.1.min.js -->
        <script src="js/jquery-2.1.1.min.js"></script>
		<!--modernizr.js-->
        <script src="js/modernizr.js"></script>
        <!--jquery.isotope.js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
		<!--jquery.waypoints.js-->
        <script src="js/jquery.waypoints.js"></script>
        <!-- bootstrap.js -->
        <script src="bootstrap/js/bootstrap.js"></script>
		<!-- Jquery.simplr.jquery.validate.js -->
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<!-- Jquery.simplr.jquery-validate.bootstrap-tooltip.js -->
		<script type="text/javascript" src="js/jquery-validate.bootstrap-tooltip.js"></script>
		<!-- Less.js -->
        <script type="text/javascript" src="less/less.js"></script>
        <!-- custom.js -->
		<script type="text/javascript" src="js/custom.js"></script>

    </body>
</html>
