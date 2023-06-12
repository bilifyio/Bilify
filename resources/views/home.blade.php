@extends('layouts.app')

@section('content')
    @include('layouts.navigation')

    <div class="flex justify-center py-12">
        {{ __('You are logged in!') }}
    </div>
@endsection
