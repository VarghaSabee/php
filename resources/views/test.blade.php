<!DOCTYPE html>
<html  ng-app='Autobase'>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="author" content="Sabee">

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/icon.png') }}"/>
    <title>Autobase</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- custom CSS -->
    <link href="{{ asset('bootstrap-3.3.6/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ asset('css/autobase.css')}}" rel="stylesheet">
    <link href="{{ asset('css/parsley.css')}}" rel="stylesheet">
    <!--   <link href="{{ asset('css/datepicker3.css')}}" rel="stylesheet"> -->
    <link href="{{ asset('css/datepick.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
            display: none !important;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--script src="http://techlabz.in/truebus/assets/js/jquery.js"></script-->


    <script src="{{ asset('js/jquery-ui.js')}}" ></script>

    <script src="{{ asset('js/jquery.raty.js')}}"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body >


<!--HEADER-BAR-->
<div class="tb_header">
    <div class="container">
        <div class="col-md-6" style="padding:0;">
            <div class="tb_logo"> <a href="https://szabee.herokuapp.com/"><img src="{{ asset('images/logo.png') }}"> </a> </div>
        </div>
        <div class="col-md-4" style="padding:0;">
            <div class="tb_navbar">
                <ul>
                    <li><a href="https://szabee.herokuapp.com/">Home &nbsp;<span style="color:#f0a2a3;"> |</span></a></li>

                    <li>
                        <!--                            <a href="">Print/SMS Ticket &nbsp;  <span style="color:#f0a2a3;"> |</span></a>
-->
                        <a href="#myModals" data-toggle="modal" data-target="#myModals">Print/SMS Ticket</a>  <span style="color:#f0a2a3;">
                    </li>
                    <li>
                        <a href="#myModals" data-toggle="modal" data-target="#myModals">Easy Cancel/Refund</a>  <span style="color:#f0a2a3;">

                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-2" style="padding:0;">

            <div class="signin_up">
                <ul>
                    <li><a href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a>  <span style="color:#f0a2a3;">/</span></li>
                    <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                </ul>
            </div>
            <!------logged end---------------->
        </div>
    </div>
    <div class="shadow"><img src="{{ asset('images/shadow.png')}}"></div>
</div>
<!--HEADER-BAR-END-->
<!-- Modal -->
<div class="modal fade" id="myModals" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
        <form id="login" data-parsley-validate="">
            <div class="login-block">
                <h1>Login</h1>
                <input type="text" name="username" placeholder="Email" class ="username" id="username" required=""/>
                <input type="password" class="password" name="password" placeholder="Password" id="pass" required=""/>
                <input type="checkbox" id="checkbox3" class="css-checkbox" name="rememberme"/>
                <label for="checkbox3"   class="css-label lite-red-check">Remember Me</label>

                <input  type="button" value="Login" style="position: relative;" onclick="Login()">
                <br>
                <div class="small_loader" style="text-align:center;display:none"><img src="{{ asset('images/loader-small.gif')}}"></div>
                <div class="login_res" style="text-align:center;"></div>
                <br>
                <div class="forgot"><a data-dismiss="modal" href="#myModalf"data-toggle="modal" data-target="#myModalf">Forgot Password?</a></div>
                <div class="sign_in"><a  data-dismiss="modal" href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a></div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
        <form id="signup" data-parsley-validate="">
            <div class="login-block">
                <h1>Sign Up</h1>
                <input class="name" id="register_firstname" name="name"  placeholder="Name" data-parsley-required="true"  data-parsley-trigger="change"
                       data-parsley-minlength="2" data-parsley-maxlength="20" data-parsley-pattern="^[a-zA-Z\  \/]+$" >
                <input type="email" value=""class ="username" placeholder="Email" name="username"  required/>
                <input class="mobile"  id="signup-username" type="text" name="mob" data-parsley-type="digits" data-parsley-required="true" data-parsley-trigger="change" required required minlength="3"
                       data-parsley-minlength="3" data-parsley-maxlength="15" placeholder="Mobile">
                <input type="password" value=""class="password" placeholder="Password" id="dfdfd" name="password" type="password" data-parsley-maxlength="15" data-parsley-minlength="6"required=""/>
                <input type="password" data-parsley-maxlength="15" data-parsley-minlength="6" data-parsley-equalto="#dfdfd" data-parsley-equalto-message="Password confirmation must match the password." class ="password"  required="" placeholder="Repeat Password" id="password" /><br>
                <span class="terms_tb">By signing up, you agree to our <a class="cond_tb" href="#">Terms and Conditions.</a></span> <br>
                <br>

                <input  type="button" value="Sign up" style="position: relative;" onclick="Signup()">
                <br>
                <div class="small_loader" style="text-align:center;display:none"><img src="{{ asset('images/loader-small.gif') }}"></div>
                <div class="signup_res" style="text-align:center;"></div>
                <br>
                <div class="account"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Already have an account?</a></div>
                <div class="sign_in"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Sign In</a></div>
            </div>
        </form>
    </div>
</div>



<div class="modal fade" id="myModalf" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
        <form id="forgot" data-parsley-validate="">
            <div class="login-block">
                <h1>Forgot Password</h1>
                <input type="email" name="email" placeholder="Email" class="username"  data-parsley-required="true"/>

                <!--    <span class="terms_tb">By signing up, you agree to our <a class="cond_tb" href="#">Terms and Conditions.</a></span> <br>
                   <br> -->

                <input  type="button" value="RESET" style="position: relative;" onclick="Forgot()">

                <br>
                <div class="small_loader" style="text-align:center;display:none"><img src="{{ asset('images/loader-small.gif')}}"></div>
                <div class="forgot_res" style="text-align:center;"></div>
                <br>
                <div class="account"><a href="#">Already have an account?</a></div>
                <div class="sign_in"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Sign In</a></div>
            </div>
        </form>
    </div>
</div>
<!--SEARCH-BAR-->
<div class="container" ng-controller="search">
    <div class="row" style="min-height:400px;margin-top:120px;">
        <div class="col-md-6">
            <form id="myForm" method="post" data-parsley-validate="" autocomplete="off">
                <section id="Search" class="LB XXCN  P20">
                    <h1 class="bookTic XCN TextSemiBold" >Online Bus Tickets Booking with Zero Booking Fees</h1>
                    <div class="searchRow clearfix">
                        <div class="LB">
                            <label class="inputLabel">From</label>
                            <input id="board_point"  class="XXinput searching" placeholder="Enter a city" type="text"  data-id="board_point" autocomplete="off" data-parsley-error-message="Please select a source city" tabindex="1" required/>
                            <div class="errorMessageFixed"> </div>
                        </div>
                        <span class="switchButton" id="switchButton"></span>
                        <div class="searchRight NoPaddingRight">
                            <label class="inputLabel">To</label>
                            <input id="Destination" class="XXinput searching" placeholder="Enter a city" type="text" tabindex="2" data-id="drop_point"  autocomplete="off" data-parsley-error-message="Please select a destination city" required />
                            <div class="errorMessageFixed"> </div>
                        </div>
                    </div>
                    <div class="searchRow clearfix">
                        <div class="LB">
                            <label class="inputLabel">Date of Journey</label>
                            <span class="blackTextSmall"></span>
                            <input id="Calenderfrom" class="XXinput calendar date-pick  pickup_date pickup_datef Calenderfrom" placeholder="dd-mm-yyyy" readonly type="text" title="Date in the format dd-mmm-yyyy"  tabindex="3" />
                        </div>
                        <div class="searchRight retJouney">
                            <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                            <input id="Calenderreturn" class="XXinput calendar date-pick pickup_dater" placeholder="dd-mm-yyyy" type="text" title="Date in the format dd-mmm-yyyy" readonly  tabindex="4" />


                        </div>

                    </div>
                    <div class="dateError">Onward date should be before return date</div>
                    <button class="button reset_new" id="resetBtn" ng-click="resetbtn()">Reset Date</button>
                    <button class="RB Xbutton" id="searchBtn" ng-click="homesearch()">Search Buses</button>
                </section>
            </form>
        </div>
        <div class="col-md-6">
            <div class="tb_bus">
                <img src="{{  asset('images/bus.png') }}">
            </div>
        </div>
    </div>
</div>
<!--SEARCH-BAR-END-->
<!--operator-BAR-->
<div class="tb_operator">
    <div class="container">
        <div class="tb_inner">
            <div class="row">
                <div class="wrapper">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="tb_operator">
                            <img src="{{ asset('images/routte.png')}}"> &nbsp;<span class="tb_operator1">5350 <small class="smalls">ROUTES</small></span>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-12 col-xs-12">
                        <div class="tb_operator left">
                            <img src="{{ asset('images/route.png')}}">  &nbsp;<span class="tb_operator2">220<small class="smalls"> BUS OPERATORS</small></span>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-12 col-xs-12">
                        <div class="tb_operator right">
                            <img src="{{ asset('images/ticket.png')}}">  &nbsp;<span class="tb_operator3">36,000 + <small class="smalls">TICKETS SOLD</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--operator-BAR end-->
<!--offers-BAR-->
<div class="tb_offers">
    <div class="shadow"><img src="{{ asset('images/shadow.png')}}"></div>
    <div class="outer">
        <div class="container">
            <div class="tb_inner">
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-4">
                            <div class="tb_offers1">
                                <img src="{{ asset('images/rupees.png')}}">
                                <div class="tb_list_offer">
                                    <div class="ofer_list">UPTO RS.100 OFF</div>
                                    <div class="ofer_list_bold">TRAVEL SMART</div>
                                    <div class="ofer_list_normal">Code:RBM120</div>
                                    <div class="ofer_list_normal">Book Using Pay Money</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tb_offers1_top">
                                <img src="{{ asset('images/bed.png')}}">
                                <div class="tb_list_offer" style=" border-right: 1px solid #dddddd;">
                                    <div class="ofer_list">UPTO 70% OFF</div>
                                    <div class="ofer_list_bold">ON HOTELS ACROSS UKRAINE</div>
                                    <div class="ofer_list_normal"> Offer Code:RBRTM120</div>
                                    <div class="ofer_list_normal">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tb_offers3">
                                <img src="{{ asset('images/phone.png')}}">
                                <div class="tb_list_offer">
                                    <div class="ofer_list"> &nbsp;&nbsp;FLAT Rs.100 OFF</div>
                                    <div class="ofer_list_bold left"> &nbsp;&nbsp;Autobase APP OFFER</div>
                                    <div class="ofer_list_normal">&nbsp;&nbsp; book via the Autobase APP</div>
                                    <div class="ofer_list_normal">&nbsp;&nbsp;  Code:ERHH54</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border">
            </hr>
        </div>
    </div>
</div><!--list-BAR-->
<div class="container">
    <div class="rb_list">
        <div class="row">
            <div class="wrapper">
                <div class="tb_inner">
                    <div class="col-md-3">
                        <div class="footer_main">
                            <h4 class="tb_head">Top Bus Routers</h4>
                            <div class="tb_route_list">
                                <ul>
                                    <li><a href="#">Kiev to Lviv</a></li>
                                    <li><a href="#">Lviv to Harkiv</a></li>
                                    <li><a href="#">Odessa to Lviv</a></li>
                                    <li><a href="#">Uzghorod to Lviv</a></li>
                                    <li><a href="#">Ivano Frankivsk to Lviv</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_main">
                            <h4 class="tb_head">Top Cities</h4>
                            <div class="tb_route_list">
                                <ul>
                                    <li><a href="#">Kiev to Lviv</a></li>
                                    <li><a href="#">Lviv to Harkiv</a></li>
                                    <li><a href="#">Odessa to Lviv</a></li>
                                    <li><a href="#">Uzghorod to Lviv</a></li>
                                    <li><a href="#">Ivano Frankivsk to Lviv</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_main">
                            <h4 class="tb_head">Top Rated</h4>
                            <div class="tb_route_list">
                                <ul>
                                    <li><a href="#">Kiev to Lviv</a></li>
                                    <li><a href="#">Lviv to Harkiv</a></li>
                                    <li><a href="#">Odessa to Lviv</a></li>
                                    <li><a href="#">Uzghorod to Lviv</a></li>
                                    <li><a href="#">Ivano Frankivsk to Lviv</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_main">
                            <h4 class="tb_head">Top Bus Operators</h4>
                            <div class="tb_route_list">
                                <ul>
                                    <li><a href="#">Kiev to Lviv</a></li>
                                    <li><a href="#">Lviv to Harkiv</a></li>
                                    <li><a href="#">Odessa to Lviv</a></li>
                                    <li><a href="#">Uzghorod to Lviv</a></li>
                                    <li><a href="#">Ivano Frankivsk to Lviv</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="border2">
    </hr>
</div>
<!--list-BAR end-->
<!--footer-BAR-->
<div class="container">
    <div class="row">
        <div class="tb_inner">
            <div class="col-md-9">
                <div class="tb_footer">
                    <ul>
                        <li><a href="#">About &nbsp;|</a></li>
                        <li><a href="#">FAQ   &nbsp;|</a></li>
                        <li><a href="#">Careers  &nbsp;|</a></li>
                        <li><a href="#">Autobase Coupons  &nbsp; |</a></li>
                        <li><a href="#">Contact Us   &nbsp;|</a></li>
                        <li><a href="#">Terms of Use   &nbsp;|</a></li>
                        <li><a href="#">Privacy Policy   &nbsp;|</a></li>
                        <li><a href="#">Autobase on Mobilenew .</a></li>
                    </ul>
                </div>
                <div class="footer_con">  &#169;  {{ date("Y") }} <a href="https://szabee.herokuapp.com/" style="text-decoration:none;">Techware Solution</a></div>
            </div>
            <div class="col-md-3">
                <div class="tb_social">
                    <ul>
                        <li>  <a href="#"><img src="{{ asset('images/facebook.png')}}"></a> </li>
                        <li>  <a href="#"> <img src="{{ asset('images/twitter.png')}}"></a></li>
                        <li>  <a href="#">  <img src="{{ asset('images/google.png')}}"></a></li>
                    </ul>
                </div>
                <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
            </div>
        </div>
    </div>
</div>	<script>

    base_url = "https://szabee.herokuapp.com/";

</script>
<!--   custom JavaScript -->

<script src="{{ asset('js/autobase.js')}}"></script>
<script src="{{ asset('bootstrap-3.3.6/dist/js/bootstrap.js')}}"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>



<script src="{{ asset('js/custom.js')}}"></script>


<script src="{{ asset('js/parsley.min.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script>
    $( document ).ready(function() {

        $('#pickDate').click(function (e) {
            $(this).next().datepicker('show');
        });
        $(".pickup_date").datepicker({

            minDate: 0//this option for allowing user to select from year range
        });


        $(".returnsd").datepicker({

            minDate: new Date($(".datetimepicker4").val())

            //this option for allowing user to select from year range
        });
        $(".pickup_date").on('change',function(e){

            $("#Calenderreturn").datepicker({

                minDate: new Date($(".Calenderfrom").val())

                //this option for allowing user to select from year range
            });
        });
        /*$(".date_of_birth").datepicker({
           changeYear: 'true',
            changeMonth: 'true'

        });*/
        /* $(".datepicker").datepicker({
           autoclose:'true',
            changeYear: 'true',
            changeMonth: 'true',
            yearRange: "2005:2015"

         });*/
        /*  var sd = new Date();
           var new_date=sd-60;

           $( ".date_picker" ).datepicker({
              changeMonth: 'true',
               changeYear: true,

               maxDate:  new Date()


            });*/
        /* $('.datepicker').datepicker({
     minDate: new Date(2014, 10, 30),
     maxDate: new Date(2015, 2, 5),
     setDate: new Date(2014, 10, 30)
 });*/
        $('ul.tabs li').click(function(){
            var id = $(this).data('id');
            //alert(id);
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');

            $('#pament_option').val(id);
        });
    });

</script>
</body>
</html>
