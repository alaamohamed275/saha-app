@extends('layouts.dashboard')
@section('content')
<div class="container text-start">
    <h2 class="mb-4">معلومات عنا</h2>
    @if($about)
        <div class="card mb-3">
            <div class="card-body">
                <h4>رأس الصفحة:</h4>
                <p>{{ $about->header }}</p>
                <h4>الوصف:</h4>
                <p>{{ $about->about_description }}</p>
                <h4>مهمتنا:</h4>
                <p>{{ $about->mission_description }}</p>
                <h4>رسالتنا:</h4>
                <p>{{ $about->message_description }}</p>
                <h4>رؤيتنا:</h4>
                <p>{{ $about->vision_description }}</p>
                <a href="{{ route('about-us.edit', $about->id) }}" class="btn btn-primary">تعديل</a>
            </div>
        </div>
    @else
        <a href="{{ route('about-us.create') }}" class="btn btn-success">إضافة معلومات</a>
    @endif
</div>
@endsection