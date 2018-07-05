@extends('news.layout.single')

@section('content')
<section class="row">
	<article class="post column">
	<h1 class="post-title">Mọi chi tiết và đặt quảng cáo </h1>
	<h1> Hoàng Phúc  - sdt : 01223366456 ..</h1>
	<!-- Map -->
	<div id="map" class="row flex-video widescreen"></div>
	<!-- End Map -->
</article>
</section>
@endsection
@section('js')
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
@endsection