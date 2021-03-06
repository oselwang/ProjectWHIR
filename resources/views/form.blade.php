@extends('layout')
@section('style')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    @stop
    @section('content')

            <!-- page content -->
    <script>
        $(function () {
            $("#flash-pop-up").fadeIn(function () {
                setTimeout(function () {
                            $('#flash-pop-up').fadeOut();
                        }, 3000
                );
            });
        });
    </script>
    <form id="form1" method="post" action="variable" data-parsley-validate
          class="form-horizontal form-label-left">
        {{csrf_field()}}
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title">
                        <h3>Variables</h3>
                    </div>

                    <div class="title_right">

                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form I</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                @if(Session::has('flash_notification.message'))
                                    <div id="flash-pop-up" class="btn-success btn">{{Session::get('flash_notification.message')}}</div>
                                @endif

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patientname">Patient
                                        Initial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="patientname"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="age" class="date-picker form-control col-md-7 col-xs-12"
                                               type="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Education</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="education">
                                            <option value="Tak sekolah">Tak sekolah</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Housing</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="housing">
                                            <option value="Low">Low</option>
                                            <option value="Middle">Middle</option>
                                            <option value="High">High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="occupation">
                                            <option value="House Wife">House Wife</option>
                                            <option value="Professional">Professional</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Employer">Employer</option>
                                            <option value="Military">Military</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Marital Status</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="marital">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorce">Divorce</option>
                                            <option value="Widow">Widow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Dietary Pattern</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="dietarypattern">
                                            <option value="Mostly Carbohydrate">Mostly Carbohydrate</option>
                                            <option value="Mostly Protein">Mostly Protein</option>
                                            <option value="Mostly Vegetables">Mostly Vegetables</option>
                                            <option value="Mostly Fat">Mostly Fat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="ethnic">Ethnic</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="ethnic"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="province">Province</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="province"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mentrual State</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrual" value="Menstrual"> &nbsp; Menstrual
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrual" value="Climacterium"> Climacterium
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrual" value="Postmenstrual">
                                                Postmenstrual
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button id="btn-form1" class="btn btn-success">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#btn-form1').on('click', function (e) {
                        e.preventDefault();
                        $('#form2').removeClass('hidden');
                        $(this).addClass('disabled');
                    })
                </script>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel hidden" id="form2">
                            <div class="x_title">
                                <h2>Form II</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="weight" class="form-control has-feedback-left"
                                           id="inputSuccess2"
                                           placeholder="Body Weight in kg">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control" name="height" id="inputSuccess3"
                                           placeholder="Body Height in cm">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Waist Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="waist">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Neck Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="neck">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hip Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="hip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Smoking State</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Never"> &nbsp; Never
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Passive"> Passive
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Ex-smoker">
                                                Ex-smoker
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Current">
                                                Current
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Parital State</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="parital">
                                            <option value="Null">Null</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pregnant</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pregnant" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pregnant" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Birth Control</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrol" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrol" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group hidden" id="birthcontrol">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Please State</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Pill"> &nbsp; Pill
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="IUD"> IUD
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Injection">
                                                Injection
                                            </label><label class="btn btn-default" data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Condom"> Condom
                                            </label><label class="btn btn-default" data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Calender"> Calender
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hormon Replacement
                                        Therapy(HRT)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hrt" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hrt" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group hidden" id="hrt">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Since When</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="date" class="form-control" name="hrtwhen">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diet Pill</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dietpill" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dietpill" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group hidden" id="dietpill">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Since When</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="date" class="form-control" name="dietpillwhen">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button id="btn-form2" class="btn btn-success">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('input[type=radio][name=birthcontrol]').change(function () {
                                if (this.value == 'Yes') {
                                    $('#birthcontrol').removeClass('hidden');
                                } else if (this.value == 'No') {
                                    $('#birthcontrol').addClass('hidden');
                                }
                            })
                            $('input[type=radio][name=hrt]').change(function () {
                                if (this.value == 'Yes') {
                                    $('#hrt').removeClass('hidden');
                                } else if (this.value == 'No') {
                                    $('#hrt').addClass('hidden');
                                }
                            })
                            $('input[type=radio][name=dietpill]').change(function () {
                                if (this.value == 'Yes') {
                                    $('#dietpill').removeClass('hidden');
                                } else if (this.value == 'No') {
                                    $('#dietpill').addClass('hidden');
                                }
                            })
                            $('#btn-form2').on('click', function (e) {
                                e.preventDefault();
                                $('#form3').removeClass('hidden');
                                $(this).addClass('disabled');
                            })
                        </script>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel hidden" id="form3">
                            <div class="x_title">
                                <h2>Form III</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">History of MI</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofmi" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofmi" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">History of TIA or
                                        Stroke</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyoftia" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyoftia" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">History of PVD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofpvd" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofpvd" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Daily Activity</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dailyactivity" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dailyactivity" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Pressure</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodpressure" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodpressure" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resting Heart Rate</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="restingheartrate" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="restingheartrate" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button id="btn-form3" class="btn btn-success">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('#btn-form3').on('click', function (e) {
                            e.preventDefault();
                            $('#form4').removeClass('hidden');
                            $(this).addClass('disabled');
                        })
                    </script>

                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel hidden" id="form4">
                            <div class="x_title">
                                <h2>Form ECG</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">AF</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="af" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="af" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Iskemik/pathologic Q Wave</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="iskemik" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="iskemik" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lah" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lah" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rah" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rah" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvh" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvh" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvh" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvh" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RBBB</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rbbb" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rbbb" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LBBB</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lbbb" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lbbb" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">AV Block</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="avblock" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="avblock" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">SA Block</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="sablock" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="sablock" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Other Arrhythmias</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="otherarrhythmias">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button id="btn-form4" class="btn btn-success">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('#btn-form4').on('click', function (e) {
                            e.preventDefault();
                            $('#form5').removeClass('hidden');
                            $(this).addClass('disabled');
                        })
                    </script>
                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel hidden" id="form5">
                            <div class="x_title">
                                <h2>Form IV</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hemoglobin</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hemoglobin" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hemoglobin" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Glucose</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodglucose" value="Fasting"> &nbsp; Fasting
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodglucose" value="Random"> Random
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">HbA1c (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hba1c" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hba1c" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Lipid</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lipid" value="LDL-Cholesterol"> &nbsp; LDL-Cholesterol
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lipid" value="Total Cholesterol"> Total Cholesterol
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fasting Triglyceride (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="fastingtriglyceride" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="fastingtriglyceride" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">HDL-Cholesterol (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hdlcholesterol" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hdlcholesterol" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Creatinine or eGFR-MDRD method (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="creatinine" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="creatinine" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Microalbuminuria or Proteinuria (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="microalbuminuria" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="microalbuminuria" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Uric acid (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="uricacid" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="uricacid" value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">PCOS (Polycystic Ovary Syndrome)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="No"> No
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="Unknown"> Unknown
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button id="btn-form5" class="btn btn-success">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('#btn-form5').on('click', function (e) {
                            e.preventDefault();
                            $('#form6').removeClass('hidden');
                            $(this).addClass('disabled');
                        })
                    </script>
                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel hidden" id="form6">
                            <div class="x_title">
                                <h2>Form Echocardiography (optional)</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lahecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lahecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rahecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rahecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvhecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvhecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvhecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvhecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">PH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="phecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="phecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="ladecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">IVSd</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="ivsdecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVEDD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="lveddecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="rvdecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVEF</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="lvefecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TAPSE</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="tapseecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TVG</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="tvgecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">E/A</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="eaecg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Abnormal Wall Motion</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="abnormalwallmotionecg" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="abnormalwallmotionecg" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Regurgitation</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="regurgitation" value="Yes"> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default active" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="regurgitation" value="No" checked="checked"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button id="btn-form6" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- /page content -->

        <!-- bootstrap-wysiwyg -->
        <script src="{{asset('homejs/bootstrap-wysiwyg.min.js')}}"></script>
        <script src="{{asset('homejs/jquery.hotkeys.js')}}"></script>
        <script src="{{asset('homejs/prettify.js')}}"></script>
        <!-- jQuery Tags Input -->
        <script src="{{asset('homejs/jquery.tagsinput.js')}}"></script>
        <!-- Switchery -->
        <script src="{{asset('homejs/switchery.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('homejs/select2.full.min.js')}}"></script>
        <!-- Parsley -->
        <script src="{{asset('homejs/parsley.min.js')}}"></script>
        <!-- Autosize -->
        <script src="{{asset('homejs/autosize.min.js')}}"></script>
        <!-- jQuery autocomplete -->
        <script src="{{asset('homejs/jquery.autocomplete.min.js')}}"></script>
        <!-- starrr -->
        <script src="{{asset('homejs/starrr.js')}}"></script>
        <!-- bootstrap-daterangepicker -->
        <script>
            $(document).ready(function () {
                $('#birthday').daterangepicker({
                    singleDatePicker: true,
                    calender_style: "picker_4"
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- bootstrap-wysiwyg -->
        <script>
            $(document).ready(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                                'Times New Roman', 'Verdana'
                            ],
                            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                                return false;
                            })
                            .change(function () {
                                $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                            })
                            .keydown('esc', function () {
                                this.value = '';
                                $(this).change();
                            });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                                target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });

                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();

                        $('.voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('.voiceBtn').hide();
                    }
                }

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                }

                initToolbarBootstrapBindings();

                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });

                window.prettyPrint;
                prettyPrint();
            });
        </script>
        <!-- /bootstrap-wysiwyg -->

        <!-- Select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /Select2 -->

        <!-- jQuery Tags Input -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(document).ready(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /jQuery Tags Input -->

        <!-- Parsley -->
        <script>
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {
            }
        </script>
        <!-- /Parsley -->

        <!-- Autosize -->
        <script>
            $(document).ready(function () {
                autosize($('.resizable_textarea'));
            });
        </script>
        <!-- /Autosize -->

        <!-- jQuery autocomplete -->
        <script>
            $(document).ready(function () {
                var countries = {
                    AD: "Andorra",
                    A2: "Andorra Test",
                    AE: "United Arab Emirates",
                    AF: "Afghanistan",
                    AG: "Antigua and Barbuda",
                    AI: "Anguilla",
                    AL: "Albania",
                    AM: "Armenia",
                    AN: "Netherlands Antilles",
                    AO: "Angola",
                    AQ: "Antarctica",
                    AR: "Argentina",
                    AS: "American Samoa",
                    AT: "Austria",
                    AU: "Australia",
                    AW: "Aruba",
                    AX: "Åland Islands",
                    AZ: "Azerbaijan",
                    BA: "Bosnia and Herzegovina",
                    BB: "Barbados",
                    BD: "Bangladesh",
                    BE: "Belgium",
                    BF: "Burkina Faso",
                    BG: "Bulgaria",
                    BH: "Bahrain",
                    BI: "Burundi",
                    BJ: "Benin",
                    BL: "Saint Barthélemy",
                    BM: "Bermuda",
                    BN: "Brunei",
                    BO: "Bolivia",
                    BQ: "British Antarctic Territory",
                    BR: "Brazil",
                    BS: "Bahamas",
                    BT: "Bhutan",
                    BV: "Bouvet Island",
                    BW: "Botswana",
                    BY: "Belarus",
                    BZ: "Belize",
                    CA: "Canada",
                    CC: "Cocos [Keeling] Islands",
                    CD: "Congo - Kinshasa",
                    CF: "Central African Republic",
                    CG: "Congo - Brazzaville",
                    CH: "Switzerland",
                    CI: "Côte d’Ivoire",
                    CK: "Cook Islands",
                    CL: "Chile",
                    CM: "Cameroon",
                    CN: "China",
                    CO: "Colombia",
                    CR: "Costa Rica",
                    CS: "Serbia and Montenegro",
                    CT: "Canton and Enderbury Islands",
                    CU: "Cuba",
                    CV: "Cape Verde",
                    CX: "Christmas Island",
                    CY: "Cyprus",
                    CZ: "Czech Republic",
                    DD: "East Germany",
                    DE: "Germany",
                    DJ: "Djibouti",
                    DK: "Denmark",
                    DM: "Dominica",
                    DO: "Dominican Republic",
                    DZ: "Algeria",
                    EC: "Ecuador",
                    EE: "Estonia",
                    EG: "Egypt",
                    EH: "Western Sahara",
                    ER: "Eritrea",
                    ES: "Spain",
                    ET: "Ethiopia",
                    FI: "Finland",
                    FJ: "Fiji",
                    FK: "Falkland Islands",
                    FM: "Micronesia",
                    FO: "Faroe Islands",
                    FQ: "French Southern and Antarctic Territories",
                    FR: "France",
                    FX: "Metropolitan France",
                    GA: "Gabon",
                    GB: "United Kingdom",
                    GD: "Grenada",
                    GE: "Georgia",
                    GF: "French Guiana",
                    GG: "Guernsey",
                    GH: "Ghana",
                    GI: "Gibraltar",
                    GL: "Greenland",
                    GM: "Gambia",
                    GN: "Guinea",
                    GP: "Guadeloupe",
                    GQ: "Equatorial Guinea",
                    GR: "Greece",
                    GS: "South Georgia and the South Sandwich Islands",
                    GT: "Guatemala",
                    GU: "Guam",
                    GW: "Guinea-Bissau",
                    GY: "Guyana",
                    HK: "Hong Kong SAR China",
                    HM: "Heard Island and McDonald Islands",
                    HN: "Honduras",
                    HR: "Croatia",
                    HT: "Haiti",
                    HU: "Hungary",
                    ID: "Indonesia",
                    IE: "Ireland",
                    IL: "Israel",
                    IM: "Isle of Man",
                    IN: "India",
                    IO: "British Indian Ocean Territory",
                    IQ: "Iraq",
                    IR: "Iran",
                    IS: "Iceland",
                    IT: "Italy",
                    JE: "Jersey",
                    JM: "Jamaica",
                    JO: "Jordan",
                    JP: "Japan",
                    JT: "Johnston Island",
                    KE: "Kenya",
                    KG: "Kyrgyzstan",
                    KH: "Cambodia",
                    KI: "Kiribati",
                    KM: "Comoros",
                    KN: "Saint Kitts and Nevis",
                    KP: "North Korea",
                    KR: "South Korea",
                    KW: "Kuwait",
                    KY: "Cayman Islands",
                    KZ: "Kazakhstan",
                    LA: "Laos",
                    LB: "Lebanon",
                    LC: "Saint Lucia",
                    LI: "Liechtenstein",
                    LK: "Sri Lanka",
                    LR: "Liberia",
                    LS: "Lesotho",
                    LT: "Lithuania",
                    LU: "Luxembourg",
                    LV: "Latvia",
                    LY: "Libya",
                    MA: "Morocco",
                    MC: "Monaco",
                    MD: "Moldova",
                    ME: "Montenegro",
                    MF: "Saint Martin",
                    MG: "Madagascar",
                    MH: "Marshall Islands",
                    MI: "Midway Islands",
                    MK: "Macedonia",
                    ML: "Mali",
                    MM: "Myanmar [Burma]",
                    MN: "Mongolia",
                    MO: "Macau SAR China",
                    MP: "Northern Mariana Islands",
                    MQ: "Martinique",
                    MR: "Mauritania",
                    MS: "Montserrat",
                    MT: "Malta",
                    MU: "Mauritius",
                    MV: "Maldives",
                    MW: "Malawi",
                    MX: "Mexico",
                    MY: "Malaysia",
                    MZ: "Mozambique",
                    NA: "Namibia",
                    NC: "New Caledonia",
                    NE: "Niger",
                    NF: "Norfolk Island",
                    NG: "Nigeria",
                    NI: "Nicaragua",
                    NL: "Netherlands",
                    NO: "Norway",
                    NP: "Nepal",
                    NQ: "Dronning Maud Land",
                    NR: "Nauru",
                    NT: "Neutral Zone",
                    NU: "Niue",
                    NZ: "New Zealand",
                    OM: "Oman",
                    PA: "Panama",
                    PC: "Pacific Islands Trust Territory",
                    PE: "Peru",
                    PF: "French Polynesia",
                    PG: "Papua New Guinea",
                    PH: "Philippines",
                    PK: "Pakistan",
                    PL: "Poland",
                    PM: "Saint Pierre and Miquelon",
                    PN: "Pitcairn Islands",
                    PR: "Puerto Rico",
                    PS: "Palestinian Territories",
                    PT: "Portugal",
                    PU: "U.S. Miscellaneous Pacific Islands",
                    PW: "Palau",
                    PY: "Paraguay",
                    PZ: "Panama Canal Zone",
                    QA: "Qatar",
                    RE: "Réunion",
                    RO: "Romania",
                    RS: "Serbia",
                    RU: "Russia",
                    RW: "Rwanda",
                    SA: "Saudi Arabia",
                    SB: "Solomon Islands",
                    SC: "Seychelles",
                    SD: "Sudan",
                    SE: "Sweden",
                    SG: "Singapore",
                    SH: "Saint Helena",
                    SI: "Slovenia",
                    SJ: "Svalbard and Jan Mayen",
                    SK: "Slovakia",
                    SL: "Sierra Leone",
                    SM: "San Marino",
                    SN: "Senegal",
                    SO: "Somalia",
                    SR: "Suriname",
                    ST: "São Tomé and Príncipe",
                    SU: "Union of Soviet Socialist Republics",
                    SV: "El Salvador",
                    SY: "Syria",
                    SZ: "Swaziland",
                    TC: "Turks and Caicos Islands",
                    TD: "Chad",
                    TF: "French Southern Territories",
                    TG: "Togo",
                    TH: "Thailand",
                    TJ: "Tajikistan",
                    TK: "Tokelau",
                    TL: "Timor-Leste",
                    TM: "Turkmenistan",
                    TN: "Tunisia",
                    TO: "Tonga",
                    TR: "Turkey",
                    TT: "Trinidad and Tobago",
                    TV: "Tuvalu",
                    TW: "Taiwan",
                    TZ: "Tanzania",
                    UA: "Ukraine",
                    UG: "Uganda",
                    UM: "U.S. Minor Outlying Islands",
                    US: "United States",
                    UY: "Uruguay",
                    UZ: "Uzbekistan",
                    VA: "Vatican City",
                    VC: "Saint Vincent and the Grenadines",
                    VD: "North Vietnam",
                    VE: "Venezuela",
                    VG: "British Virgin Islands",
                    VI: "U.S. Virgin Islands",
                    VN: "Vietnam",
                    VU: "Vanuatu",
                    WF: "Wallis and Futuna",
                    WK: "Wake Island",
                    WS: "Samoa",
                    YD: "People's Democratic Republic of Yemen",
                    YE: "Yemen",
                    YT: "Mayotte",
                    ZA: "South Africa",
                    ZM: "Zambia",
                    ZW: "Zimbabwe",
                    ZZ: "Unknown or Invalid Region"
                };

                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });

                // initialize autocomplete with custom appendTo
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <!-- /jQuery autocomplete -->

        <!-- Starrr -->
        <script>
            $(document).ready(function () {
                $(".stars").starrr();

                $('.stars-existing').starrr({
                    rating: 4
                });

                $('.stars').on('starrr:change', function (e, value) {
                    $('.stars-count').html(value);
                });

                $('.stars-existing').on('starrr:change', function (e, value) {
                    $('.stars-count-existing').html(value);
                });
            });
        </script>
        @stop
                <!-- /Starrr -->
