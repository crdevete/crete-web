<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إستطلاع</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('img/CRETE_icon.png')}}" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
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

<body class="Arabic-body" id="survey-body">


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
            <a href="{{route('survey')}}" class="language-switcher"><p>See this Survey in English<i class="fa fa-language" aria-hidden="true"></i></p></a>
            <div class="col-lg-12">
                <a href="{{route('homeArabic')}}" id="panel-header-form"><img id="form-logo" src="{{url('img/CRETE_icon.png')}}"><h4 id="panel-header-text">Crete شركة</h4></a><h5 id="panel-header-text-small">إستطلاع</h5>
            </div>


        </div>

        <hr>

        {!! Form::open(['method'=>'POST','action'=>'HomeController@postSurveyArabic','id'=>'form1'])  !!}

        <div class="row">

            <div class="form-group ">

                <div class="row ">
                    <label class="right-float" id="freelancerquestion">ما هى وظيفتك ؟</label>
                </div>


                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label ><input type="radio" name="question_1">طالب مدرسى</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_1">طالب جامعى</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_1">موظف</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_1">عاطل عن العمل</label>
                    </div>
                </div>
            </div>


            <div class="form-group">

                <div class="row">
                    <label class="right-float" id="freelancerquestion">فى رأيك .. هل تعتقد انك يمكنك الحصول على وظيفة بشهادتك الجامعية فقط ؟</label>
                </div>



                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_2" value="نعم">نعم</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_2" value="لا">لا</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_2" value="لا أعرف">لا أعرف</label>
                    </div>
                </div>

            </div>

            <div class="form-group">

                <div class="row">
                    <label class="right-float" id="freelancerquestion">هل تعرف ما هو العمل الحر ؟ هل قمت بالعمل كحر من قبل ؟</label>
                </div>



                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_3" value="نعم">نعم</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_3" value="لا">لا</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_3" value="غير متأكد">غير متأكد</label>
                    </div>
                </div>

            </div>

            <div class="form-group">

                <div class="row">
                    <label class="right-float" id="freelancerquestion">منذ متى و انت تعمل فى مجال العمل الحر ؟</label>
                </div>



                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_4" value="0">0</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_4" value="أقل من عام">أقل من عام</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_4" value="عام">عام</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_4" value="عامين">عامين</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_4" value="أكثر من عامين">أكثر من عامين</label>
                    </div>
                </div>

            </div>

            <div class="form-group">

                <div class="row">
                    <label class="right-float" id="freelancerquestion">ما هى الطريقة اللتى تتبعها لتحصل على عمل حر ؟</label>
                </div>



                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5">لا أعمل كحر</label>
                    </div>
                </div>
                <div class="row">

                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5" value="مواقع أجنبية مثل Upwork, Freelancer">مواقع أجنبية مثل Upwork, Freelancer</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5" value="مواقع عربية مثل مستقل و خمسات">مواقع عربية مثل مستقل و خمسات </label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5" value="دوام جزئ">دوام جزئى</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5" value="أصدقاء">أصدقاء</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="checkbox" name="question_5" value="أخرى">أخرى</label>
                    </div>
                </div>

            </div><div class="form-group">

                <div class="row">
                    <label class="right-float" id="freelancerquestion">هل تعتقد ان الحصول على عمل حر صعب ؟ من خلال الانترنت او خارجه ؟</label>
                </div>



                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_6" value="نعم">نعم</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_6" value="لا">لا</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_6" value="من خلال الانترنت">من خلال الانترنت</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_6" value="خارج الانترنت">خارج الانترنت</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_6" value="غير متأكد">غير متأكد</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="right-float" id="freelancerquestion">هل تعتقد ان العمل الحر يمكن أن يحل محل دوامك الكلى ؟</label>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_7" value="نعم">نعم</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_7" value="لا">لا</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_7" value="ممكن">ممكن</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_7" value="لا اعرف">لا أعرف</label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <label class="right-float" id="freelancerquestion">هل تفضل الحصول على مرتب شهرى ام العمل بالساعة ؟</label>
                </div>

                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_8" value="مرتب شهرى">مرتب شهرى</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_8" value="العمل بالساعة">العمل بالساعة</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_8" value="أي منهم">أي منهم</label>
                    </div>
                </div><div class="row ">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_8" value="غير متأكد">غير متأكد</label>
                    </div>
                </div>

            </div><div class="form-group">
                <div class="row">
                    <label class="right-float" id="freelancerquestion">فى اعتقادك .. ما هو أجرك فى الساعة بالدولار ؟ $الدولار = 17.6 جنيه مصرى</label>
                </div>

                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_9" value="أقل من $2">أقل من $2</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_9" value="من 2$ الى $5">من 2$ الى $5</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_9" value="من $5 الى $10">من $5 الى $10</label>
                    </div>
                </div><div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_9" value="من $10 الى $20">من $10 الى $20</label>
                    </div>
                </div>
                <div class="row">
                    <div class="radio right-float Arabic-select">
                        <label><input type="radio" name="question_9" value="أكثر من $20">أكثر من $20</label>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <textarea placeholder="..لديك تعليق ؟ من فضلك شاركنا تعليقك هنا" class="form-control Arabic" rows="8" id="comment" name="comment"></textarea>
                </div>
            </div>



            <form id="captchasubmit" action="?" method="POST">
                <!--<div class="col-lg-12">
                    <div class="col-lg-12">


                        <div class="g-recaptcha" data-sitekey="6LcKFTQUAAAAAL4ao-dFItf0nr42kZjnMZZdkLNA"></div>
                    </div>
                </div>

                -->
                <div class="col-lg-12">
                    <button id="submitform" type="submit" class="btn btn-primary">إرسال</button>
                </div>
            </form>

        </div>


    </div>



</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

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


<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>

</html>