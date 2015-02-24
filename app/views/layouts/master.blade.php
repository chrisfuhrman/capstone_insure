@yield('top-script')

@include('partials.header')

{{-- @include('partials.navbar') --}}
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

		function swapRadio(event)
		{

		    var idName = $(this).attr('id'),
		    id = $('#'+idName),
		    classNames = id.attr('class');

		    var isHilighted = (classNames.search('btn-info') != -1) ? true : false;

		    if(idName == event.data.item2) {
		        var otherBtn = event.data.item1;
		        otherBtn = $('#' + otherBtn);

		    } else {
		        var otherBtn = event.data.item2;
		        otherBtn = $('#' + otherBtn);
		    }

		    if(!isHilighted) {
		        id.removeClass('btn-default').addClass('btn-info');
		        id.children().prop('checked', true);
		        otherBtn.children().prop('checked', false);
		        otherBtn.removeClass('btn-info').addClass('btn-default');
		    }
		}

</script>

@yield('bottom-script')

</body>
</html>