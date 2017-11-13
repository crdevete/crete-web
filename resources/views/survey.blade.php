@include('layouts.survey_header')

<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<body id="survey-body">

<div class="fullscreen_bg">

    <div class="panel">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('home')}}" id="panel-header-form"><img id="form-logo" src="{{url('img/CRETE_icon.png')}}"><h4 id="panel-header-text">Crete Agency</h4></a><h5 id="panel-header-text-small">Survey</h5>
            </div>
        </div>

        <hr>

        {!! Form::open(['method'=>'POST','action'=>'HomeController@postSurvey','id'=>'form1'])  !!}

            {!! csrf_field() !!}

        <!-- Question 1 -->
        <div class="row">
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">What is your job ?</label>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_1" value="School Student">School Student</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_1" value="University Student">University Student</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_1" value="Working">Working</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_1" value="Job less">Job less</label>
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">In your opinion, do you think you can find a good job with your university certificate ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_2" value="Yes">Yes</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_2" value="No">No</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_2" value="Don't know">Don't know</label>
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">Do you know what freelancing is ?, Have you ever worked as freelancer before ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_3" value="Yes">Yes</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_3" value="No">No</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_3" value="Not quite sure">Not quite sure</label>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">How long have you been a freelancer ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_4" value="0">0</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_4" value="Less than 1 year">Less than 1 year</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_4" value="1 year">1 year</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_4" value="2 years">2 years</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_4" value="more than 2  years">more than 2  years</label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">What Method you use to get your freelancing work ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5A" value="Not a Freelancer">Not a Freelancer</label>
                    </div>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5B" value="Forgien Websites (Upwork, Freelancer, Fever ... etc)">Forgien Websites (Upwork, Freelancer, Fever ... etc)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5C" value="Arabic websites (Mostaql, Khamsat ...etc)">Arabic websites (Mostaql, Khamsat ...etc) </label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5D" value="Part time work">Part time work</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5E" value="Friends">Friends</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="checkbox" name="question_5F" value="Other">Other</label>
                    </div>
                </div>
            </div>

        <!-- Question 6 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">Do you think getting freelance work is hard ? offline and online ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_6" value="Yes">Yes</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_6" value="No">No</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_6" value="Online Only">Online only</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_6" value="Offline Only">Offline only</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_6" value="Not sure">Not sure</label>
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">Do you think freelancing will be alternative for your full time job ?</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_7" value="Yes">Yes</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_7" value="No">No</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_7" value="Maybe">Maybe</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_7" value="Don't know">Don't know</label>
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">Do you prefer fixed monthly salary or hourly rate ? </label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_8" value="Monthly fixed">Monthly fixed</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_8" value="Hourly rate">Hourly rate</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_8" value="Any of them">Any of them</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_8" value="Not sure">Not sure</label>
                    </div>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="form-group">
                <div class="row">
                    <label id="freelancerquestion">In your thoughts, What expected Hourly rate for you in US dollars ? (1$ = 17.6LE)</label>
                </div>

                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_9" value="less than 2$">less than 2$</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_9" value="2$ to 5$">2$ to 5$</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_9" value="5$ to 10$">5$ to 10$</label>
                    </div>
                </div><div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_9" value="10$ to 20$">10$ to 20$</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio">
                        <label><input type="radio" name="question_9" value="more than 20$">more than 20$</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <textarea placeholder="Have A comment ? Please leave it here (Optional) .." class="form-control" rows="8" id="comment" name="comment"></textarea>
                </div>
            </div>


            <form id="captchasubmit" action="?" method="POST">
                <!--<div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="g-recaptcha" data-sitekey="6LcKFTQUAAAAAL4ao-dFItf0nr42kZjnMZZdkLNA"></div>
                    </div>
                </div>-->
                <div class="col-lg-12">
                    <button id="submitform" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            {!! Form::close() !!}
        </div>
    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>


<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">
    $('#form1').submit(function() {
        if ($('input:checkbox', this).is(':checked') &&
            $('input:radio', this).is(':checked')) {
            // everything's fine...
        } else {
            alert('Please select an option for each question!');
            return false;
        }
    });

</script>
</body>

</html>