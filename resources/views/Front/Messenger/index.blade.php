@extends('Layout.Front')

@section('content')
    @include('messenger.partials.flash')

    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
@stop
