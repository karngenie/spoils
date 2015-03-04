@extends('layouts.master')

@section('sidebar')  

    <p>This is appended to the master sidebar.</p>{{{ $numero }}}
@stop

@section('content')
    <p>This is my body content.</p>
@stop