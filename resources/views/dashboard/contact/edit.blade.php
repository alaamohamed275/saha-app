@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>تعديل معلومات التواصل</h2>

    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>رقم الهاتف</label>
            <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="address" value="{{ $contact->address }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>البريد الإلكتروني</label>
            <input type="email" name="email" value="{{ $contact->email }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط فيسبوك</label>
            <input type="url" name="facebook" value="{{ $contact->facebook }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط انستغرام</label>
            <input type="url" name="instagram" value="{{ $contact->instagram }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط لينكدإن</label>
            <input type="url" name="linkedin" value="{{ $contact->linkedin }}" class="form-control" dir="rtl">
        </div>

        <div class="form-group">
            <label>رابط تويتر</label>
            <input type="url" name="twitter" value="{{ $contact->twitter }}" class="form-control" dir="rtl">
        </div>

        <button type="submit" class="btn btn-primary mt-3">تحديث</button>
    </form>
</div>
@endsection
