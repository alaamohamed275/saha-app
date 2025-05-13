@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>إنشاء محتوى جديد</h2>

    <form action="{{ route('about-us.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>العنوان الرئيسي</label>
            <input type="text" name="header" class="form-control" required dir="rtl">
        </div>

        <div class="form-group">
            <label>شعار الموقع</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <div class="form-group">
            <label>من نحن</label>
            <textarea name="about_description" class="form-control" rows="4" dir="rtl" required></textarea>
        </div>

        <div class="form-group">
            <label>مهمتنا</label>
            <textarea name="mission_description" class="form-control" rows="4" dir="rtl" required></textarea>
        </div>

        <div class="form-group">
            <label>رسالتنا</label>
            <textarea name="message_description" class="form-control" rows="4" dir="rtl" required></textarea>
        </div>

        <div class="form-group">
            <label>رؤيتنا</label>
            <textarea name="vision_description" class="form-control" rows="4" dir="rtl" required></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">حفظ</button>
    </form>
</div>
@endsection
