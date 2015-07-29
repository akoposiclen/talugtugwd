<script type="text/javascript" src="{{ URL::asset('js/jquery-1.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/other-bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countdown.min.js') }}"></script>


@if(!Auth::check())
	<script src="{{ URL::asset('js/modernizr.custom.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/classie.js') }}"></script>
	<script src="{{ URL::asset('js/cbpScroller.js') }}"></script>
	<script>
	    new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
	    new cbpScroller( document.getElementById( 'cbp-so-scroller2' ) );
	</script>
@endif