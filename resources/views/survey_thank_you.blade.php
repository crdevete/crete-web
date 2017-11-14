@include('layouts.thankyou_header')

<body id="form-body">
<!--<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>

</div>
-->
<div class="fullscreen_bg">

    <div class="panel">

        <div class="row">

            <div class="col-lg-12">
                <a href="{{route('home')}}" id="panel-header-form"><img id="form-logo" src="{{url('img/CRETE_icon.png')}}"><h4 id="panel-header-text">Crete Agency</h4></a>
            </div>

            <hr>
        </div>
        <div class="row" id="thank_you">
            <div class="col-lg-12">
                <h4>Thank you for Your Time</h4>
            </div>
            <div class="col-lg-12">
                <img src="{{url('img/success.png')}}">
            </div>
        </div>

    </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>


<!-- Javascripts
================================================== -->
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>