@extends ('public.base')

@section('title', 'Accueil')

@section('content')

    @php
        $type = 'success';
        // primary - secondary - success - danger - infi - warning - light - dark
        // Cf. https://getbootstrap.com/docs/4.0/components/alerts/
    @endphp
    {{-- <x-alert :type="$type" class="fw-bold" id="Test">
        Des informations
    </x-alert> --}}

    {{-- <x-weather></x-weather> --}}

    <div class="bg-light p-3 mb-3 text-center">
        <div class="container">
            <h1>Agence Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores placeat omnis eos! Officia dolores
                inventore optio dolore laborum aliquam vero quae eius natus dolorum.</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers Biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <!-- col mt-2 -->
                    @include('property.card')
                </div>
            @endforeach
        </div>

        {{ $properties->links() }}
    </div>

@endsection
