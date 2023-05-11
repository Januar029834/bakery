@extends('layouts.app')

@section('title', 'Home | Vegist')

@section('styles')
    {{--  --}}
@endsection

@section('hero')

@endsection

@section('content')
    @include('home.corousel')
    {{-- @include('home.fact') --}}
    @include('home.about')
    @include('home.product')
@endsection
