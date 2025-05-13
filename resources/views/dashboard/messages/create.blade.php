@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>نموذج الاتصال</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('messages.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name">الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="company">الشركة</label>
            <input type="text" name="company" class="form-control" value="{{ old('company') }}">
        </div>

        <div class="mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="phone">رقم الهاتف</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label for="subject">الموضوع</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" required>
        </div>

        <div class="mb-3">
            <label for="message">الرسالة</label>
            <textarea name="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
</div>
@endsection
