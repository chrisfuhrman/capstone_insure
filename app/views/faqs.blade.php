@extends('layouts.default')
@section('content')

<div class="page-header">
    <div class="row">
        <!-- Page header, center on small screens -->
        <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-question-circle page-header-icon"></i>&nbsp;&nbsp;Frequently Asked Questions</h1>
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
                        <a href="#" class="btn btn-lg btn-primary btn-flat" data-toggle="modal" data-target="#modal-faq">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-sm-8 col-sm-pull-4">
        <div class="panel-group" id="accordion-example">
            <div class="panel">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-example" href="#collapseOne">
                        <strong>Q:</strong> What is Venture Lab?
                    </a>
                </div> <!-- / .panel-heading -->
                <div id="collapseOne" class="panel-collapse in">
                    <div class="panel-body">
                        <strong>A:</strong> 
                        Venture Lab is a hands-on innovation and entrepreneurship program that teaches young people to be next generation innovators and entrepreneurs through inspiration, experiential learning and mentorship.
                    </div> <!-- / .panel-body -->
                </div> <!-- / .collapse -->
            </div> <!-- / .panel -->

            <div class="panel">
                <div class="panel-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapseTwo">
                        <strong>Q:</strong> How does the Venture Lab Entrepreneur Program work?
                    </a>
                </div> <!-- / .panel-heading -->
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <strong>A:</strong> We develop experiential learning programs that introduce, inspire and encourage young people to enter and succeed in technical, creative and entrepreneurial fields. We’ve taught entrepreneurship and technology for over seven years and are always innovating our YOUTH ENTREPRENEURSHIP PROGRAMS to teach the most cutting edge and relevant curriculum.
                    </div> <!-- / .panel-body -->
                </div> <!-- / .collapse -->
            </div> <!-- / .panel -->

            <div class="panel">
                <div class="panel-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapseThree">
                        <strong>Q:</strong> How can I add a program for my school?
                    </a>
                </div> <!-- / .panel-heading -->
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <strong>A:</strong> Please <a href="javascript:" data-toggle="modal" data-target="#modal-faq">click this link</a> to contact us or send an email to <a href="mailto: hetali@venturelab.org">hetali@venturelab.org</a>
                    </div> <!-- / .panel-body -->
                </div> <!-- / .collapse -->
            </div> <!-- / .panel -->

        </div> <!-- / .panel-group -->
    </div>
</div>

<!-- Modal -->
<div id="modal-faq" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <form action="{{{ action('FaqsController@sendHelpRequest') }}}" class="modal-body" method="post">
                <input name="name" type="text" placeholder="Your name" class="form-control form-group-margin input-lg" required>
                <input name="email_address" type="email" placeholder="Your email" class="form-control form-group-margin input-lg" required >
                <textarea name="content" placeholder="Your question" class="form-control form-group-margin input-lg" rows="6" required></textarea>
                <div class="clearfix"><button type="submit" class="btn btn-lg btn-block btn-flat btn-primary">Send your question</button></div>
            </form>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>
<!-- / Modal -->

<script type="text/javascript">
    init.push(function() {
        $('#dashboard-recent .panel-body > div').slimScroll({height: 300, alwaysVisible: true, color: '#888', allowPageScroll: true});
    });
</script>

@stop