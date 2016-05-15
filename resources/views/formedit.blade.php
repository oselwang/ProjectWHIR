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
    <form id="form1" method="post" action="editvariable" data-parsley-validate
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
                                <input type="hidden" name="variableid" value="{{$variable->id}}">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patientname">Patient
                                        Initial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="patientname"
                                               class="form-control col-md-7 col-xs-12" value="{{$variable->patientname}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="age" class="date-picker form-control col-md-7 col-xs-12"
                                               type="date" value="{{$variable->age}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Education</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="education">
                                            <option value="Tak sekolah" @if($variable->education == 'Tak Sekolah') selected @endif>Tak sekolah</option>
                                            <option value="SD" @if($variable->education == 'SD') selected @endif>SD</option>
                                            <option value="SMP" @if($variable->education == 'SMP') selected @endif>SMP</option>
                                            <option value="SMA" @if($variable->education == 'SMA') selected @endif>SMA</option>
                                            <option value="D3" @if($variable->education == 'D3') selected @endif>D3</option>
                                            <option value="S1" @if($variable->education == 'S1') selected @endif>S1</option>
                                            <option value="S2" @if($variable->education == 'S2') selected @endif>S2</option>
                                            <option value="S3" @if($variable->education == 'S3') selected @endif>S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Housing</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="housing">
                                            <option value="Low" @if($variable->housing == 'Low') selected @endif>Low</option>
                                            <option value="Middle" @if($variable->housing == 'Middle') selected @endif>Middle</option>
                                            <option value="High" @if($variable->housing == 'High') selected @endif>High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="occupation">
                                            <option value="House Wife" @if($variable->occupation == 'House Wife') selected @endif>House Wife</option>
                                            <option value="Professional" @if($variable->occupation == 'Professional') selected @endif>Professional</option>
                                            <option value="Employee" @if($variable->occupation == 'Employee') selected @endif>Employee</option>
                                            <option value="Employer" @if($variable->occupation == 'Employer') selected @endif>Employer</option>
                                            <option value="Military" @if($variable->occupation == 'Military') selected @endif>Military</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Marital Status</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="marital">
                                            <option value="Single" @if($variable->marital == 'Single') selected @endif>Single</option>
                                            <option value="Married" @if($variable->marital == 'Married') selected @endif>Married</option>
                                            <option value="Divorce" @if($variable->marital == 'Divorce') selected @endif>Divorce</option>
                                            <option value="Widow" @if($variable->marital == 'Widow') selected @endif>Widow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Dietary Pattern</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="dietarypattern">
                                            <option value="Mostly Carbohydrate" @if($variable->dietarypattern == 'Mostly Carbohydrate') selected @endif>Mostly Carbohydrate</option>
                                            <option value="Mostly Protein" @if($variable->dietarypattern == 'Mostly Protein') selected @endif>Mostly Protein</option>
                                            <option value="Mostly Vegetables" @if($variable->dietarypattern == 'Mostly Vegetables') selected @endif>Mostly Vegetables</option>
                                            <option value="Mostly Fat" @if($variable->dietarypattern == 'Mostly Fat') selected @endif>Mostly Fat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="ethnic">Ethnic</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="ethnic"
                                               class="form-control col-md-7 col-xs-12" value="{{$variable->ethnic}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="province">Province</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="province"
                                               class="form-control col-md-7 col-xs-12" value="{{$variable->province}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mentrual State</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->menstrualstate == 'Menstrual') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrualstate" value="Menstrual" @if($variable->menstrualstate == 'Menstrual') checked @endif> &nbsp; Menstrual
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->menstrualstate == 'Climacterium') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrualstate" value="Climacterium" @if($variable->menstrualstate == 'Climacterium') checked @endif> Climacterium
                                            </label>
                                            <label class="btn btn-default @if($variable->menstrualstate == 'Postmenstrual') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="menstrualstate" value="Postmenstrual" @if($variable->menstrualstate == 'Postmenstrual') checked @endif>
                                                Postmenstrual
                                            </label>
                                        </div>
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
                        <div class="x_panel" id="form2">
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
                                           placeholder="Body Weight in kg" value="{{$variable->weight}}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control" name="height" id="inputSuccess3"
                                           placeholder="Body Height in cm" value="{{$variable->height}}">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Waist Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="waist" value="{{$variable->waist}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Neck Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="neck" value="{{$variable->neck}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hip Circumference</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="hip" value="{{$variable->hip}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Smoking State</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->smokingstate == 'Never') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Never" @if($variable->smokingstate == 'Never') checked @endif> &nbsp; Never
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->smokingstate == 'Passive') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Passive" @if($variable->smokingstate == 'Passive') checked @endif> Passive
                                            </label>
                                            <label class="btn btn-default @if($variable->smokingstate == 'Ex-smoker') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Ex-smoker" @if($variable->smokingstate == 'Ex-smoker') checked @endif>
                                                Ex-smoker
                                            </label>
                                            <label class="btn btn-default @if($variable->smokingstate == 'Current') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="smokingstate" value="Current" @if($variable->smokingstate == 'Current') checked @endif>
                                                Current
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Parital State</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="paritalstate">
                                            <option value="Null" @if($variable->paritalstate == 'Null') selected @endif>Null</option>
                                            <option value="1" @if($variable->paritalstate == '1') selected @endif>1</option>
                                            <option value="2" @if($variable->paritalstate == '2') selected @endif>2</option>
                                            <option value="3" @if($variable->paritalstate == '3') selected @endif>3</option>
                                            <option value="4" @if($variable->paritalstate == '4') selected @endif>4</option>
                                            <option value="etc" @if($variable->paritalstate == 'etc') selected @endif>etc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pregnant</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->pregnant == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pregnant" value="Yes" @if($variable->pregnant == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->pregnant == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pregnant" value="No" @if($variable->pregnant == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Birth Control</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->birthcontrol == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrol" value="Yes" @if($variable->birthcontrol == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->birthcontrol == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrol" value="No" @if($variable->birthcontrol == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @if($variable->birthcontrol == 'No' || empty($variable->birthcontrol)) hidden @endif" id="birthcontrol">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Please State</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->birthcontrolstate == 'Pill') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Pill" @if($variable->birthcontrolstate == 'Pill') checked @endif> &nbsp; Pill
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->birthcontrolstate == 'IUD') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="IUD" @if($variable->birthcontrolstate == 'IUD') checked @endif> IUD
                                            </label>
                                            <label class="btn btn-default @if($variable->birthcontrolstate == 'Injection') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Injection" @if($variable->birthcontrolstate == 'Injection') checked @endif>
                                                Injection
                                            </label><label class="btn btn-default @if($variable->birthcontrolstate == 'Condom') active @endif" data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Condom" @if($variable->birthcontrolstate == 'Condom') checked @endif> Condom
                                            </label><label class="btn btn-default @if($variable->birthcontrolstate == 'Calender') active @endif" data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                <input type="radio" name="birthcontrolstate" value="Calender" @if($variable->birthcontrolstate == 'Calender') checked @endif> Calender
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hormon Replacement
                                        Therapy(HRT)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->hrt == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hrt" value="Yes" @if($variable->hrt == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->hrt == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hrt" value="No" @if($variable->hrt == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @if($variable->hrt == 'No' || empty($variable->hrt)) hidden @endif" id="hrt">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Since When</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="date" class="form-control" name="hrtwhen" value="{{$variable->hrtwhen}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Diet Pill</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->dietpill == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dietpill" value="Yes" @if($variable->dietpill == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->dietpill == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dietpill" value="No" @if($variable->dietpill == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @if($variable->dietpill == 'No' || empty($variable->dietpill)) hidden @endif" id="dietpill">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Since When</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="date" class="form-control" name="dietpillwhen" value="{{$variable->dietpillwhen}}">
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
                        <div class="x_panel " id="form3">
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
                                            <label class="btn btn-default @if($variable->historyofmi == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofmi" value="Yes" @if($variable->historyofmi == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->historyofmi == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofmi" value="No" @if($variable->historyofmi == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">History of TIA or
                                        Stroke</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->historyoftia == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyoftia" value="Yes" @if($variable->historyoftia == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->historyoftia == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyoftia" value="No" @if($variable->historyoftia == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">History of PVD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->historyofpvd == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofpvd" value="Yes" @if($variable->historyofpvd == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->historyofpvd == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="historyofpvd" value="No" @if($variable->historyofpvd == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Daily Activity</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->dailyactivity == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dailyactivity" value="Yes" @if($variable->dailyactivity == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->dailyactivity == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="dailyactivity" value="No" @if($variable->dailyactivity == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Pressure</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->bloodpressure == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodpressure" value="Yes" @if($variable->bloodpressure == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->bloodpressure == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodpressure" value="No" @if($variable->bloodpressure == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resting Heart Rate</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->restingheartrate == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="restingheartrate" value="Yes" @if($variable->restingheartrate == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->restingheartrate == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="restingheartrate" value="No" @if($variable->restingheartrate == 'No') checked @endif> No
                                            </label>
                                        </div>
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
                        <div class="x_panel" id="form4">
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
                                            <label class="btn btn-default @if($variable->af == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="af" value="Yes" @if($variable->af == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->af == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="af" value="No" @if($variable->af == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Iskemik/pathologic Q Wave</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->iskemik == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="iskemik" value="Yes" @if($variable->iskemik == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->iskemik == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="iskemik" value="No" @if($variable->iskemik == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->lah == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lah" value="Yes" @if($variable->lah == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lah == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lah" value="No" @if($variable->lah == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->rah == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rah" value="Yes" @if($variable->rah == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->rah == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rah" value="No" @if($variable->rah == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->lvh == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvh" value="Yes" @if($variable->lvh == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lvh == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvh" value="No" @if($variable->lvh == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default  @if($variable->rvh == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvh" value="Yes"  @if($variable->rvh == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default  @if($variable->rvh == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvh" value="No"  @if($variable->rvh == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RBBB</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->rbbb == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rbbb" value="Yes" @if($variable->rbbb == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->rbbb == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rbbb" value="No" @if($variable->rbbb == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LBBB</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->lbbb == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lbbb" value="Yes" @if($variable->lbbb == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lbbb == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lbbb" value="No" @if($variable->lbbb == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">AV Block</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->avblock == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="avblock" value="Yes" @if($variable->avblock == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->avblock == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="avblock" value="No" @if($variable->avblock == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">SA Block</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->sablock == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="sablock" value="Yes" @if($variable->sablock == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->sablock == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="sablock" value="No" @if($variable->sablock == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Other Arrhythmias</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="otherarrhythmias" value="{{$variable->otherarrhythmias}}">
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
                        <div class="x_panel" id="form5">
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
                                            <label class="btn btn-default @if($variable->hemoglobin == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hemoglobin" value="Yes" @if($variable->hemoglobin == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->hemoglobin == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hemoglobin" value="No" @if($variable->hemoglobin == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Glucose</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->bloodglucose == 'Fasting') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodglucose" value="Fasting" @if($variable->bloodglucose == 'Fasting') checked @endif> &nbsp; Fasting
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->bloodglucose == 'Random') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="bloodglucose" value="Random" @if($variable->bloodglucose == 'Random') checked @endif> Random
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">HbA1c (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->hba1c == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hba1c" value="Yes" @if($variable->hba1c == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->hba1c == 'No') active @endif"  data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hba1c" value="No" @if($variable->hba1c == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Lipid</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->lipid == 'LDL-Cholesterol') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lipid" value="LDL-Cholesterol" @if($variable->lipid == 'LDL-Cholesterol') active @endif> &nbsp; LDL-Cholesterol
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lipid == 'TotalCholesterol') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lipid" value="Total Cholesterol" @if($variable->lipid == 'TotalCholesterol') active @endif> Total Cholesterol
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fasting Triglyceride (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->fastingtriglyceride == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="fastingtriglyceride" value="Yes" @if($variable->fastingtriglyceride == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->fastingtriglyceride == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="fastingtriglyceride" value="No" @if($variable->fastingtriglyceride == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">HDL-Cholesterol (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->hdlcholesterol == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hdlcholesterol" value="Yes" @if($variable->hdlcholesterol == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->hdlcholesterol == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="hdlcholesterol" value="No" @if($variable->hdlcholesterol == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Creatinine or eGFR-MDRD method (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->creatinine == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="creatinine" value="Yes" @if($variable->creatinine == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->creatinine == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="creatinine" value="No" @if($variable->creatinine == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Microalbuminuria or Proteinuria (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->microalbuminuria == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="microalbuminuria" value="Yes" @if($variable->microalbuminuria == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->microalbuminuria == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="microalbuminuria" value="No" @if($variable->microalbuminuria == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Uric acid (optional)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->uricacid == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="uricacid" value="Yes" @if($variable->uricacid == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->uricacid == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="uricacid" value="No" @if($variable->uricacid == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">PCOS (Polycystic Ovary Syndrome)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->pcos == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="Yes" @if($variable->pcos == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->pcos == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="No" @if($variable->pcos == 'No') checked @endif> No
                                            </label>
                                            <label class="btn btn-default @if($variable->pcos == 'Unknown') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="pcos" value="Unknown" @if($variable->pcos == 'Unknown') checked @endif> Unknown
                                            </label>
                                        </div>
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
                        <div class="x_panel" id="form6">
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
                                            <label class="btn btn-default @if($variable->lahecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lahecg" value="Yes" @if($variable->lahecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lahecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lahecg" value="No" @if($variable->lahecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RAH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->rahecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rahecg" value="Yes" @if($variable->rahecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->rahecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rahecg" value="No" checked="checked" @if($variable->rahecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->lvhecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvhecg" value="Yes" @if($variable->lvhecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->lvhecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="lvhecg" value="No" @if($variable->lvhecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->rvhecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvhecg" value="Yes" @if($variable->rvhecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->rvhecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="rvhecg" value="No" @if($variable->rvhecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">PH</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->phecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="phecg" value="Yes" @if($variable->phecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->phecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="phecg" value="No" @if($variable->phecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="ladecg" value="{{$variable->ladecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">IVSd</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="ivsdecg" value="{{$variable->ivsdecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVEDD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="lveddecg" value="{{$variable->lveddecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">RVD</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="rvdecg" value="{{$variable->rvdecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LVEF</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="lvefecg" value="{{$variable->lvefecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TAPSE</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="tapseecg" value="{{$variable->tapseecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TVG</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="tvgecg" value="{{$variable->tvgecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">E/A</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="eaecg" value="{{$variable->eaecg}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Abnormal Wall Motion</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->abnormalwallmotionecg == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="abnormalwallmotionecg" value="Yes" @if($variable->abnormalwallmotionecg == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->abnormalwallmotionecg == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="abnormalwallmotionecg" value="No" @if($variable->abnormalwallmotionecg == 'No') checked @endif> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Regurgitation</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default @if($variable->regurgitation == 'Yes') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="regurgitation" value="Yes" @if($variable->regurgitation == 'Yes') checked @endif> &nbsp; Yes
                                                &nbsp;
                                            </label>
                                            <label class="btn btn-default @if($variable->regurgitation == 'No') active @endif" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="regurgitation" value="No" @if($variable->regurgitation == 'No') checked @endif> No
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
