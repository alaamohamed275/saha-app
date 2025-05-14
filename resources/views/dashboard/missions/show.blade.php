@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">تفاصيل المهمة</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">اسم المهمة: {{ $mission->name }}</h5>
            <p class="card-text">الوصف: {{ $mission->description }}</p>
            <p class="card-text"><small class="text-muted">تم الإنشاء في: {{ $mission->created_at->format('Y-m-d') }}</small></p>
            <a href="{{ route('missions.edit', $mission->id) }}" class="btn btn-primary">تعديل</a>
            <a href="{{ route('missions.index') }}" class="btn btn-secondary">العودة للقائمة</a>
        </div>
    </div>
@endsection