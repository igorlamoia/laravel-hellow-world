@extends('layouts.app')

@section('header')
    @parent
@endsection


@section('content')
    <div style="
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
    ">
        @foreach ($pessoas as $pessoa)
            @include('components.avatar-card', $pessoa)
        @endforeach

    </div>
@endsection

@section('footer')
    @parent
@endsection
