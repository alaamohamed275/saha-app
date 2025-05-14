@extends('layouts.dashboard') 

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>بيانات المستخدم</h2>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">اسم المستخدم: {{ $user->name }}</h5>
            <p class="card-text">البريد الإلكتروني: {{ $user->email }}</p>
            <p class="card-text"><small class="text-muted">تم الإنشاء في: {{ $user->created_at->format('Y-m-d') }}</small></p>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">تعديل</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">العودة للقائمة</a>
        </div>
    </div>
@endsection
