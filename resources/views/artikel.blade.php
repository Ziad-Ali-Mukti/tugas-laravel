@extends('layout.index')

@section('main')
<div class="row">
    @foreach ($data as $d)
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $d->title }}</h5>
                <p class="card-text">{{ $d->description }}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection