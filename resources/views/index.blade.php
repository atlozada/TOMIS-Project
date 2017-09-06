@extends ('layouts.master')

@section('content')
    <link rel="prefetch" href="{{route('map')}}" />
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                TOMIS Application
            </div>

            <div class="subtitle m-b-md">
                Alexander Lozada
            </div>

            <div class="links">
                <a href="{{ route('map') }}">Map</a>
                <a href="https://www.mapbox.com/mapbox-gl-js/api/">Mapbox Gl JS Documentation</a>
                <a href="https://github.com/atlozada/TOMIS-Project">GitHub</a>
            </div>
        </div>
    </div>
@endsection
