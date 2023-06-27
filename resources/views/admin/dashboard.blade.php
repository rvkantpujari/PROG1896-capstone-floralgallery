@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - FlowerGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <h1>Hi, {{Auth::guard('admin')->user()->first_name}}. This is Admin Dashboard.</h1>
@endsection