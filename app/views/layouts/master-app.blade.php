@include('partials.app-header')

@include('partials.main_navbar')

<!-- <div class="" id="sidebar-nav"> -->
<nav class="scroll-nav col-md-2 pull-left" id="test-this" role="navigation">
	<div class="scroll-nav__wrapper"><span class="scroll-nav__heading">Application ID:</span>
	<ol class="scroll-nav__list">
	<li class="scroll-nav__item description active in-view">
		<a href="#scrollNav-1" class="scroll-nav__link">Proposed Insured</a>
	</li>
	<li class="scroll-nav__item features in-view">
		<a href="#scrollNav-2" class="scroll-nav__link">Employment</a>
		</li>
	<li class="scroll-nav__item usage">
	<a href="#scrollNav-3" class="scroll-nav__link">Usage</a>
	</li>
	<li class="scroll-nav__item options">
		<a href="#scrollNav-4" class="scroll-nav__link">Options</a>
	</li>
	<li class="scroll-nav__item errors">
		<a href="#scrollNav-5" class="scroll-nav__link">Errors</a>
	</li>
	<li class="scroll-nav__item issues"><a href="#scrollNav-6" class="scroll-nav__link">Issues</a></li>
	<li class="scroll-nav__item license">
		<a href="#scrollNav-7" class="scroll-nav__link">License</a>
	</li><li class="scroll-nav__item authors">
	<a href="#scrollNav-8" class="scroll-nav__link">Authors</a></li><li class="scroll-nav__item colophon"><a href="#scrollNav-9" class="scroll-nav__link">Colophon</a></li>
	</ol>
	</div>
</nav>
<!-- </div> -->

<!--content that changes -->
<div class="col-md-8 pull-right" id="right-section">
	@yield('content')
</div>

<nav>
  <ul class="pager">
    <li><a>Next</a></li>
  </ul>
</nav>


<div class="clear-fix">
	@include('partials.footer')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
</script>

@yield('bottom-script')


</body>
</html>