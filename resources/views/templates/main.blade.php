@extends('layouts.base')

@section('template_content')
    @include('templates.components.header')
    <main class="ps-main">
		@stack('content')
		@include('templates.components.footer')
    </main>
    @stack('modals')
@stop


@section('template_script')
	<script type="text/javascript">
		function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
		// use like
		r(function(){
			@stack('scripts')
		});	
	</script>

	@stack('script_plugins')
@stop