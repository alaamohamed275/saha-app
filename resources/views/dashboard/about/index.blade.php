@extends('layouts.dashboard')
@section('content')
<div class="container text-start">
    <h2 class="mb-4">{{ __('dashboard.about_info') }}</h2>

    @if($about)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ __('dashboard.header') }}:</h4>
                <p>{{ $about->header }}</p>

                <h4>{{ __('dashboard.about_description') }}:</h4>
                <p>{{ $about->about_description }}</p>

                <h4>{{ __('dashboard.mission') }}:</h4>
                <p>{{ $about->mission_description }}</p>

                <h4>{{ __('dashboard.message') }}:</h4>
                <p>{{ $about->message_description }}</p>

                <h4>{{ __('dashboard.vision') }}:</h4>
                <p>{{ $about->vision_description }}</p>

                <a href="{{ route('about-us.edit', $about->id) }}" class="btn btn-primary">
                    {{ __('dashboard.edit') }}
                </a>
            </div>
        </div>
    @else
        <a href="{{ route('about-us.create') }}" class="btn btn-success">
            {{ __('dashboard.add_info') }}
        </a>
    @endif
</div>
@endsection
