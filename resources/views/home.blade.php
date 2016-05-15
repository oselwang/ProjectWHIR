@extends('layout')
@section('style')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    @stop
@section('content')

    <div class="right_col" role="main">

        <div class="features" id="features">
            <div class="row  ">
                <div class="cherry-box  ">
                    <div class="inner">
                        <div class="container">
                            <div class="row row-edge">
                                <div class="col-md-12 full-width">
                                    <div class="cherry-services extraservice_1 boxed-layout">
                                        <div class="row">
                                            <div class="services-listing">
                                                <div id="services-270"
                                                     class="cherry-services_item item-1 clearfix odd col-xs-12 clear-col-xs col-sm-6 clear-col-sm col-md-3 clear-col-md col-lg-3 clear-col-lg">
                                                    <div class="servcircle">
                                                        <img src="{{asset('strategy/images/f1.png')}}" alt="Strategy">
                                                        <h3 class="cherry-services_title">Study Design</h3>
                                                    </div>
                                                    <div class="servdescr">
                                                        <div class="cherry-services_excerpt">Multicenter Observational descriptive study</div>
                                                    </div>
                                                </div>
                                                <div id="services-269"
                                                     class="cherry-services_item item-2 clearfix even col-xs-12 clear-col-xs col-sm-6 col-md-3 col-lg-3">
                                                    <div class="servcircle">
                                                        <img src="{{asset('strategy/images/f2.png')}}" alt="Strategy">
                                                        <h3 class="cherry-services_title">Study Population</h3>
                                                    </div>
                                                    <div class="servdescr">
                                                        <div class="cherry-services_excerpt">&ge;2500 subjects from multicenter in Indonesia(25-100 subjects from each center)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="services-268"
                                                     class="cherry-services_item item-3 clearfix odd col-xs-12 clear-col-xs col-sm-6 clear-col-sm col-md-3 col-lg-3">
                                                    <div class="servcircle">
                                                        <img src="{{asset('strategy/images/f3.png')}}" alt="Strategy">
                                                        <h3 class="cherry-services_title">Inclusion</h3>
                                                    </div>
                                                    <div class="servdescr">
                                                        <div class="cherry-services_excerpt">
                                                            <ul>
                                                                <li>Female</li>
                                                                <li>&ge; 18 year-old</li>
                                                                <li>Cardiovascular disease(CAD, Heart Failure, Arrhythmia, Stroke, Valvular heart disease, PVD, Peripartal cardiomyopathy, Pulmonary hypertension</li>
                                                                <li>Signed informed consent</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="services-264"
                                                     class="cherry-services_item item-4 clearfix even col-xs-12 clear-col-xs col-sm-6 col-md-3 col-lg-3">
                                                    <div class="servcircle">
                                                        <img src="{{asset('strategy/images/f4.png')}}" alt="Strategy">
                                                        <h3 class="cherry-services_title">Exclusion</h3>
                                                    </div>
                                                    <div class="servdescr">
                                                        <div class="cherry-services_excerpt">
                                                            <ul>
                                                                <li>Has other terminal diseases</li>
                                                                <li>Not willing to participate in registry</li>
                                                                <li>Congenital diseaselay</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

