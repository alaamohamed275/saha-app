@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>عرض الرسالة</h1>

    <div class="mb-3">
        <label><strong>الاسم:</strong></label>
        <p>{{ $message->name }}</p>
    </div>

    <div class="mb-3">
        <label><strong>الشركة:</strong></label>
        <p>{{ $message->company ?? '—' }}</p>
    </div>

    <div class="mb-3">
        <label><strong>البريد الإلكتروني:</strong></label>
        <p>{{ $message->email }}</p>
    </div>

    <div class="mb-3">
        <label><strong>رقم الهاتف:</strong></label>
        <p>{{ $message->phone ?? '—' }}</p>
    </div>

    <div class="mb-3">
        <label><strong>الموضوع:</strong></label>
        <p>{{ $message->subject }}</p>
    </div>

    <div class="mb-3">
        <label><strong>نص الرسالة:</strong></label>
        <p>{{ $message->message }}</p>
    </div>

    <a href="{{ route('messages.index') }}" class="btn btn-secondary">رجوع إلى القائمة</a>
</div>
@endsection
