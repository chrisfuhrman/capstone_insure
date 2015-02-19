@extends('layouts.master')
@section('content')


<div class="container">
    <div class="page-header">
        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-question-circle page-header-icon"></i>&nbsp;&nbsp;Learning Center</h1>
        </div>
    </div> <!-- / .page-header -->

    <!--
    <div class="row">
        <form action="" class="col-sm-4 form-faq">
            <input type="text" placeholder="Enter keyword or question..." class="form-control input-sm rounded">
        </form>
    </div>
    -->

        @if (Session::has('emailSuccess'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('emailSuccess') }}    
            </div>
        @elseif (Session::has('emailError'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('emailError') }}
            </div>
        @endif


        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-4 col-sm-push-8">
                <div class="panel no-border panel-dark">
                    <div class="panel-body text-center">
                        <p class="text-lg text-slim">
                            Can't find the answer?
                        </p>
                        <div style="margin-top: 20px;">
                            <a href="{{{ action('ExtrasController@showContact') }}}" class="btn btn-lg btn-primary btn-flat">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-sm-8 col-sm-pull-4">
            <div class="panel-group" id="accordion-example">
                <div class="panel">
                    <div class="panel-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-example" href="#collapseOne">
                            <strong>Q:</strong> What is InsureJoy?
                        </a>
                    </div> <!-- / .panel-heading -->
                    <div id="collapseOne" class="panel-collapse in">
                        <div class="panel-body">
                            <strong>A:</strong> 
                            InsureJoy is an independant insurance agency with the intent of helping you find the best possible insurance solution for you, your family, and your budget.
                        </div> <!-- / .panel-body -->
                    </div> <!-- / .collapse -->
                </div> <!-- / .panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapseTwo">
                            <strong>Q:</strong> How does InsureJoy work?
                        </a>
                    </div> <!-- / .panel-heading -->
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>A:</strong> We take some basic information which can by found by beginning the "Get Your Hassle Free Quote" form on the front page. Once you answer a few simple questions, you will be shown any and all insurance options available to you, beginning with the cheapest option first.
                        </div> <!-- / .panel-body -->
                    </div> <!-- / .collapse -->
                </div> <!-- / .panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapseThree">
                            <strong>Q:</strong> How soon will I hear from InsureJoy?
                        </a>
                    </div> <!-- / .panel-heading -->
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>A:</strong> Typically the time it takes to process one of the completed insurance applications takes 1 - 2 weeks.
                        </div> <!-- / .panel-body -->
                    </div> <!-- / .collapse -->
                </div> <!-- / .panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapseFour">
                            <strong>Q:</strong> Where can I learn more about life insurance?
                        </a>
                    </div> <!-- / .panel-heading -->
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <strong>A:</strong> We are willing to answer any and all questions about life insurance!
                        </div> <!-- / .panel-body -->
                    </div> <!-- / .collapse -->
                </div> <!-- / .panel -->
                

            </div> <!-- / .panel-group -->
        </div>
    </div>
</div>


<script type="text/javascript">
    init.push(function() {
        $('#dashboard-recent .panel-body > div').slimScroll({height: 300, alwaysVisible: true, color: '#888', allowPageScroll: true});
    });
</script>

@stop