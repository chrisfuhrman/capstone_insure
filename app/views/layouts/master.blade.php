@include('partials.header')

@include('partials.navbar')
@include('partials.main_navbar')

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