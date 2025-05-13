@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>تعديل المحتوى</h2>

    <form action="{{ route('about-us.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>العنوان الرئيسي</label>
            <input type="text" name="header" value="{{ $about->header }}" class="form-control" required dir="rtl">
        </div>

        <div class="form-group">
            <label>الشعار الحالي</label><br>
            @if ($about->logo)
                <img src="{{ asset('storage/' . $about->logo) }}" alt="الشعار" height="80">
            @endif
            <input type="file" name="logo" class="form-control mt-2">
        </div>

        <div class="form-group">
            <label>من نحن</label>
            <textarea name="about_description" class="form-control" rows="4" dir="rtl" required>{{ $about->about_description }}</textarea>
        </div>

        <div class="form-group">
            <label>مهمتنا</label>
            <textarea name="mission_description" class="form-control" rows="4" dir="rtl" required>{{ $about->mission_description }}</textarea>
        </div>

        <div class="form-group">
            <label>رسالتنا</label>
            <textarea name="message_description" class="form-control" rows="4" dir="rtl" required>{{ $about->message_description }}</textarea>
        </div>

        <div class="form-group">
            <label>رؤيتنا</label>
            <textarea name="vision_description" class="form-control" rows="4" dir="rtl" required>{{ $about->vision_description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">تحديث</button>
    </form>
</div>
@endsection
