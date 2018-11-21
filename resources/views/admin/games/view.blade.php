@php($title = $game->name)

@extends('layouts.main')

@section('breadclumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">GameAP</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.games.index') }}">Games</a></li>
        <li class="breadcrumb-item active">{{ $game->name }}</li>
    </ol>
@endsection

{{-- Content --}}
@section('content')
    
@endsection