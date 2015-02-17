@extends('layouts.master-app')


@section('top-script')

<?php

$user = new User();




?>
@stop


@section('content')

	@include('PolicyApps.app-head')
	@include('PolicyApps.BannerLife.sec_a')

@stop