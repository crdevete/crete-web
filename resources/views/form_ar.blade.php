<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>انضم إلينا</title>
    <link rel="shortcut icon" type="image/png" href="{{url('img/CRETE_icon.png')}}}" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="form-body">

<div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>

<div class="fullscreen_bg">
    <div class="panel">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('homeArabic')}}" id="panel-header-form"><img id="form-logo" src="{{url('img/CRETE_icon.png')}}"><h4 id="panel-header-text">Crete شركة</h4></a><h5 id="panel-header-text-small">! انضم الينا</h5>
            </div>
            <hr>
        </div>

        {!! Form::open(['method'=>'POST','action'=>'FormController@postFormArabic'])  !!}

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <input required type="text" class="form-control Arabic" placeholder="الإسم الأخير" name="first_name">
                </div>
                <div class="col-lg-6">
                    <input required type="text" class="form-control Arabic" placeholder="الإسم الأول" name="last_name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 Arabic">
                    <input required type="email" class="form-control Arabic" aria-describedby="emailHelp" placeholder="البريد الالكترونى" name="email">
                    <small id="emailHelp" class="form-text text-muted">.لن يتم مشاركة بريدك الالكترونى مع أى جهة أخرى</small>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 Arabic">
                    <input type="text" class="form-control Arabic" placeholder="(رابط صفحتك الشخصية (اختيارى" name="social_profile">
                    <small id="emailHelp" class="form-text text-muted">... مثل : فيسبوك , تويتر </small>
                </div>
            </div>
            <div class="form-group">

                <div class="col-lg-2">
                    <input required type="text" class="form-control Arabic" placeholder="السن" name="age">
                </div>
                <div class="col-lg-4 Arabic">
                    <select required class="form-control Arabic-select" name="city">
                        <option disabled selected>المدينة :</option>
                        <option>القاهرة</option>
                        <option>الجيزة</option>
                        <option>الإسكندرية</option>
                        <option>الدقهلية</option>
                        <option>البحر الأحمر</option>
                        <option>البحيرة</option>
                        <option>الفيوم</option>
                        <option>الغربية</option>
                        <option>الإسماعيلية</option>
                        <option>المنوفية</option>
                        <option>المنيا</option>
                        <option>القليوبية</option>
                        <option>الوادى الجديد</option>
                        <option>الشرقية</option>
                        <option>السويس</option>
                        <option>أسوان</option>
                        <option>أسيوط</option>
                        <option>بنى سويف</option>
                        <option>بورسعيد</option>
                        <option>دمياط</option>
                        <option>جنوب سيناء</option>
                        <option>كفر الشيخ</option>
                        <option>مطروح</option>
                        <option>قنا</option>
                        <option>شمال سيناء</option>
                        <option>سوهاج</option>
                        <option>أخرى</option>

                    </select>
                </div>

                <div class="col-lg-6">
                    <input type="text" class="form-control Arabic" placeholder="(موبايل (اختيارى" name="phone">
                </div>
            </div>


            <div class="form-group">



                <div class="col-lg-5">
                    <input id="gradyear" type="text" class="form-control" placeholder="سنة التخرج" name="graduation_year">

                </div>


                <div class="col-lg-7 right-float">
                    <select required class="form-control Arabic-select" id="seljob" name="current_job">
                        <option disabled selected >الوظيفة الحالية :</option>
                        <option>طالب مدرسى</option>
                        <option>طالب جامعى</option>
                        <option>خريج</option>
                        <option>موظف</option>
                        <option>أخرى</option>

                    </select>
                </div>

                <div class="col-lg-5">
                    <input id="otherjob" type="text" class="form-control Arabic" placeholder="اذكر من فضلك" name="other_job">

                </div>

            </div>

            <div class="form-group" id="school">

                <div class="col-lg-6">
                    <select class="form-control Arabic-select" id="selstage" name="school_stage">
                        <option disabled selected>المرحلة :</option>
                        <option>الإعدادية</option>
                        <option>الثانوية</option>

                    </select>
                </div>

                <div class="col-lg-6">
                    <input type="text" class="form-control Arabic" placeholder="إسم المدرسة" name="school_name">

                </div>

            </div>


            <div class="form-group" id="undergraduate">

                <div class="col-lg-6">
                    <select class="form-control Arabic-select" id="selFaculty" name="faculty">
                        <option disabled selected>كلية :</option>
                        <option>الهندسة</option>
                        <option>الحاسبات و المعلومات</option>
                        <option>الطب</option>
                        <option>الصيدلة</option>
                        <option>التجارة</option>
                        <option>الألسن</option>
                        <option>أخرى</option>

                    </select>
                </div>

                <div class="col-lg-6">
                    <select class="form-control Arabic-select" id="selUniversity" name="university">
                        <option disabled selected>جامعة :</option>
                        <option>القاهرة</option>
                        <option>عين شمس</option>
                        <option>حلوان</option>
                        <option>الإسكندرية</option>
                        <option>الأمريكية</option>
                        <option>الألمانية</option>
                        <option>البريطانية</option>
                        <option>أخرى</option>



                    </select>
                </div>

            </div>

            <div id="mentionotherstudent" class="form-group">

                <div class="col-lg-6">
                    <input id="otherFaculty" type="text" class="form-control Arabic" placeholder="من فضلك اذكرها" name="other_faculty">

                </div>
                <div class="col-lg-6">
                    <input id="otherUniversity" type="text" class="form-control Arabic" placeholder="من فضلك اذكرها" name="other_university">

                </div>
            </div>

            <div class="form-group" id="work">
                <div class="col-lg-3">
                    <input id="otherFaculty" type="text" class="form-control Arabic" placeholder="سنوات الخبرة" name="years_of_experience">

                </div>

                <div class="col-lg-5">
                    <input id="otherUniversity" type="text" class="form-control Arabic" placeholder="المهنة" name="job_role">

                </div>
                <div class="col-lg-4">
                    <input id="otherFaculty" type="text" class="form-control Arabic" placeholder="الشركة" name="company">

                </div>

            </div>
            <div id="frquest" class="form-group">


                <div class="col-lg-4">

                    <div class="right-float">
                        <label class="radio-inline"><input type="radio" name="freelancer_before" id="nofreelancer" value="لا">لا</label>
                        <label class="radio-inline "><input type="radio" required name="freelancer_before" id="yesfreelancer" value="نعم">نعم</label>
                    </div>
                </div>
                <div class="col-lg-8">
                    <label class="right-float" id="freelancerquestion">هل قمت بالعمل من قبل فى مجال العمل الحر ؟</label>


                </div>
            </div>

            <div class="form-group" id="freelancer">
                <div class="col-lg-6">
                    <input id="otherjobtitle" type="text" class="form-control Arabic" placeholder="اذكرها من فضلك" name="other_freelancing_job">
                </div>
                <div class="col-lg-6">
                    <select class="form-control Arabic-select" id="seljobtitle" name="freelancing_Job">
                        <option disabled selected>الوظيفة :</option>
                        <option>مطور مواقع</option>
                        <option>مطور برامج موبايل</option>
                        <option>مصمم</option>
                        <option>كاتب</option>
                        <option>مترجم</option>
                        <option>أخرى</option>




                    </select>

                </div>
                <div id="freelancerwebsites">

                    <div class="col-lg-5">
                        <input type="text" class="form-control Arabic" placeholder="رابط ملفك الشخصى" name="websites_link">
                    </div>
                    <div class="col-lg-7 right-float Arabic">
                        <input id="otherUniversity" type="text" class="form-control Arabic" placeholder="المواقع التى تعمل عليها" name="freelancing_websites">
                        <small id="emailHelp" class="form-text  text-muted"> Upwork, Freelancer مثل</small>
                    </div>
                </div>


            </div>


            <div class="form-group">

                <div class="col-lg-12">
                    <textarea placeholder="..لديك تعليق ؟ من فضلك شاركنا تعليقك هنا" class="form-control Arabic" rows="8" id="comment" name="comment"></textarea>
                </div>
            </div>



            <form id="captchasubmit" action="?" method="POST">
               <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="g-recaptcha" data-sitekey="6LcKFTQUAAAAAL4ao-dFItf0nr42kZjnMZZdkLNA"></div>
                    </div>
                </div>
                -->
                <div class="col-lg-12">
                    <button id="submitform" type="submit" class="btn btn-primary">انضم إلينا</button>
                </div>

                {!! Form::close() !!}
            </form>
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