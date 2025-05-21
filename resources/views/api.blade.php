@extends('layout.index')

@section('main')
<div class="row">
    @php
        $customNames = ['Ziad Ali Mukti', 'I Putu Gede Satria Januarta', 'Riyan Daniarta', 'Irzal Rifqi'];
    @endphp

    @foreach ($data as $index => $d)
        @php
            $fotoIndex = ($index % 4) + 1;
            $fotoPath = "images/foto{$fotoIndex}.jpeg";

            // Tentukan nama yang dipakai
            $displayName = $customNames[$index] ?? (is_array($d) ? $d['name'] : $d->name);

            // Ambil email dan role dari data asli
            $email = is_array($d) ? $d['email'] : $d->email;
            $role = is_array($d) ? $d['role'] : $d->role;
        @endphp

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset($fotoPath) }}" class="img-fluid rounded-start w-100" alt="Foto">

                <div class="card-body">
                    <h5 class="card-title">{{ $displayName }}</h5>
                    <p class="card-text mb-1"><strong>Email:</strong> {{ $email }}</p>
                    <p class="card-text"><strong></strong> {{ $role }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection