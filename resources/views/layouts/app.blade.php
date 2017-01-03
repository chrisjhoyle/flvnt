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

        @if($errors->has('email'))
            <div class="alert alert-info" style="margin-bottom:0px;">
                {{$errors->first('email')}}
            </div>
        @elseif($errors->has('password'))
            <div class="alert alert-info" style="margin-bottom:0px;">
                {{$errors->first('password')}}
            </div>
        @elseif(isset($info))
            <div class="alert alert-info" style="margin-bottom:0px;">
                {{$info}}
            </div>
        @endif

        @yield('content')

        <!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="copy">
                            &copy; Copyright . All Rights Reserved.

                             @if(\Auth::check() && \Auth::user()->is_admin)
                                 <a data-toggle="modal" data-target="#activationsModal">
                                     Pending Activations
                                 </a>
                             @endif

                             <a href="/logout">
                                 Logout
                             </a>
                        </div>
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

        @if(isset($modal))
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
                                 <div class="bootstrap-dialog-message">
                                     {{$modal['info']}}
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF SUCCESS MODAL -->

        	<script>
        		$('#successModal').modal({
        			show: true
        		});
        	</script>
        @endif

        @if(\Auth::check() && \Auth::user()->is_admin)
            <!-- PENDING ACTIVATIONS MODAL -->
        	<div class="modal fade" id="activationsModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="bootstrap-dialog-header">
                                <div class="bootstrap-dialog-close-button" data-dismiss="modal" aria-label="Close">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="bootstrap-dialog-title">Pending Activations</div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="bootstrap-dialog-body">
                                 <div class="bootstrap-dialog-message">
                                     <table class="table table-hover">
                                         <thead>
                                             <tr>
                                                 <th>#</th>
                                                 <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($usersNotActivated as $userNotActivated)
                                                 <tr>
                                                     <th scope="row">{{$userNotActivated->id}}</th>
                                                     <td>{{$userNotActivated->name}}</td>
                                                     <td>{{$userNotActivated->email}}</td>
                                                     <td><a href="users/acticate/{{$userNotActivated->id}}">Activate</a></td>
                                                 </tr>
                                             @endforeach
                                         </tbody>
                                    </table>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PENDING ACTIVATIONS MODAL -->
        @endif

    </body>
</html>
