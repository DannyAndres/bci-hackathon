@extends('layouts.app')

@section('content')
<div class="container">
    @foreach(\App\Company::where('verified',1)->get() as $company)
        <span>{{ $company }}</span>
        <hr>
    @endforeach
</div>
@endsection
