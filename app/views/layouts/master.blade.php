@yield('top-script')

@include('partials.header')

@include('partials.navbar')
@include('partials.main_navbar')

@if (Session::has('successMessage'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('successMessage') }}    
    </div>
@elseif (Session::has('errorMessage'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('errorMessage') }}
    </div>
@endif

<!--content that changes -->
@yield('content')


@include('partials.footer')


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
</script>

@yield('bottom-script')


</body>
</html>