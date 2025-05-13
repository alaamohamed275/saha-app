@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>إضافة معلومات التواصل</h2>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>رقم الهاتف</label>
            <input type="text" name="phone" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="address" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط فيسبوك</label>
            <input type="url" name="facebook" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط انستغرام</label>
            <input type="url" name="instagram" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط لينكدإن</label>
            <input type="url" name="linkedin" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط تويتر</label>
            <input type="url" name="twitter" class="form-control" dir="rtl">
        </div>

        <button type="submit" class="btn btn-success mt-3">حفظ</button>
    </form>
</div>
@endsection
