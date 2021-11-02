@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">
                @yield('title', 'Movies')
            </h5>
            <div class="card-body">
                <livewire:movie-table />
            </div>
        </div>
    </div>
</div>
@endsection
