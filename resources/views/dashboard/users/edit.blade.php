@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>تعديل بيانات المستخدم</h2>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label>كلمة المرور (اتركها فارغة إذا لم ترغب في التغيير)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">تحديث</button>
    </form>
</div>
@endsection
