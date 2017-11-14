@include('layouts.thankyou_header')

<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

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
                <h4>Thank you for Submiting, We will contact you Soon !!</h4>
            </div>
            <div class="col-lg-12">
                <img src="{{url('img/success.png')}}">

            </div>

            <div class="col-lg-12">
                <h6 id="redirect-txt">Can we take few minutes to fill out our Survey ?, Thank You, Redirecting Now.....</h6>
            </div>
        </div>

    </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script>setTimeout(function(){window.location.href='{{route('survey')}}'},5000);</script>


<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>

</html>