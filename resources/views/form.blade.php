@include('layouts.form_header')

<body id="form-body">

<div class="fullscreen_bg">

    <div class="panel">

        <div class="row">
           <a href="form-ar" class="language-switcher"><p>شاهد هذا الاستطلاع باالعربية<i class="fa fa-language" aria-hidden="true"></i></p></a>
            <div class="col-lg-12">
                <a href="{{route('home')}}" id="panel-header-form"><img id="form-logo" src="{{url('img/CRETE_icon.png')}}"><h4 id="panel-header-text">Crete Agency</h4></a>
                <h5 id="panel-header-text-small">Join Us !</h5>
            </div>
            <hr>
        </div>

        <div class="row">

            {!! Form::open(['method'=>'POST','action'=>'FormController@store']) !!}

            {!! csrf_field() !!}

            <div class="form-group">
                <div class="col-lg-6">
                    <input required type="text" class="form-control" placeholder="First Name" name="first_name">
                </div>
                <div class="col-lg-6">
                    <input required type="text" class="form-control" placeholder="Last Name" name="last_name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <input required type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="form-control" placeholder="Social Profile Link (Optional)" name="social_profile">
                    <small id="emailHelp" class="form-text text-muted">Ex. Linkedin, Twitter ..etc</small>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Phone (Optional)" name="phone">
                </div>
                <div class="col-lg-4">
                    <input required for="inputCity" class="form-control" placeholder="City" name="city">
                </div>
                <div class="col-lg-2">
                    <input required type="text" class="form-control" placeholder="Age" name="age">
                </div>
            </div>


            <div class="form-group">

                <div class="col-lg-7">
                    <select required class="form-control" id="seljob" name="current_job">
                        <option disabled selected>Current Job :</option>
                        <option>School Student</option>
                        <option>Undergraduate</option>
                        <option>Graduated</option>
                        <option>Working</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="col-lg-5">

                    <input id="otherjob" type="text" class="form-control" placeholder="Please Mention" name="other_job">
                </div>
                <div class="col-lg-5">
                    <input id="gradyear" type="text" class="form-control" placeholder="Graduation Year" name="graduation_year">
                </div>
            </div>

            <div class="form-group" id="school">
                <div class="col-lg-6">
                    <select class="form-control" id="selstage" name="school_stage">
                        <option disabled selected>Stage :</option>
                        <option>Primary</option>
                        <option>Secondary</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="School Name" name="school_name">
                </div>
            </div>


            <div class="form-group" id="undergraduate">

                <div class="col-lg-6">
                    <select class="form-control" id="selFaculty" name="faculty">
                        <option disabled selected>Faculty :</option>
                        <option>Engineering</option>
                        <option>Computer Science</option>
                        <option>Medicine</option>
                        <option>Pharmacy</option>
                        <option>Commerce</option>
                        <option>Alsun</option>
                        <option>Other</option>

                    </select>
                </div>

                <div class="col-lg-6">
                    <select class="form-control" id="selUniversity" name="university">
                        <option disabled selected>University :</option>
                        <option>Cairo</option>
                        <option>Ain Shams</option>
                        <option>Helwan</option>
                        <option>Alexandria</option>
                        <option>AUC</option>
                        <option>GUC</option>
                        <option>BUE</option>
                        <option>Other</option>
                    </select>
                </div>

            </div>

            <div id="mentionotherstudent" class="form-group">
                <div class="col-lg-6">
                    <input id="otherFaculty" type="text" class="form-control" placeholder="Please Mention Your Faculty" name="other_faculty">
                </div>
                <div class="col-lg-6">
                    <input id="otherUniversity" type="text" class="form-control" placeholder="Please Mention Your University" name="other_university">
                </div>
            </div>

            <div class="form-group" id="work">
                <div class="col-lg-4">
                    <input id="otherFaculty" type="text" class="form-control" placeholder="Company" name="company">
                </div>
                <div class="col-lg-5">
                    <input id="otherUniversity" type="text" class="form-control" placeholder="Job Role" name="job_role">
                </div>
                <div class="col-lg-3">
                    <input id="otherFaculty" type="text" class="form-control" placeholder="Years of Experience" name="years_of_experience">
                </div>
            </div>

            <div id="frquest" class="form-group">

                <div class="col-lg-8">
                    <label id="freelancerquestion">Have you ever worked as freelancer before ?</label>
                </div>

                <div class="col-lg-4">
                    <label class="radio-inline"><input type="radio" required name="freelancer_before" id="yesfreelancer" value="Yes">Yes</label>
                    <label class="radio-inline"><input type="radio" name="freelancer_before" id="nofreelancer" value="No">No</label>
                </div>
            </div>

            <div class="form-group" id="freelancer">
                <div class="col-lg-6">
                    <select class="form-control" id="seljobtitle" name="freelancing_Job">
                        <option disabled selected>Job Title :</option>
                        <option>Web Developer</option>
                        <option>Mobile Developer</option>
                        <option>Graphic Designer</option>
                        <option>Writer</option>
                        <option>Translator</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <input id="otherjobtitle" type="text" class="form-control" placeholder="Please Mention" name="other_freelancing_job">
                </div>

                <div id="freelancerwebsites">
                    <div class="col-lg-7">
                        <input id="otherUniversity" type="text" class="form-control" placeholder="Websites you worked on" name="freelancing_websites">
                        <small id="emailHelp" class="form-text text-muted">Ex. Upwork, Freelancer, Fever ..etc</small>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Website Profile Link" name="websites_link">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-12">
                    <textarea placeholder="Have A comment ? Please leave it here (Optional) .." class="form-control" rows="8" id="comment" name="comment"></textarea>
                </div>
            </div>

            <form id="captchasubmit" action="?" method="POST">
                <!--<div class="row">
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
</body>

</html>