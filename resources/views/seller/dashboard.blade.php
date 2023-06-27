@extends('seller.layouts.app')

@section('title', 'Seller Dashboard - FlowerGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <h1>Hi, {{Auth::guard('seller')->user()->first_name}}. This is Seller Dashboard.</h1>
@endsection