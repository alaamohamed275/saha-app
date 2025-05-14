
@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">قائمة المهام</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('missions.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> إضافة مهمه جديدة
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم المهمه</th>
                    <th>الوصف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($missions as $mission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mission->name }}</td>
                    <td>{{ Str::limit($mission->description, 50) }}</td>
                    <td>
                        <a href="{{ route('missions.show', $mission->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('missions.edit', $mission->id) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('missions.destroy', $mission->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $missions->links() }}
    </div>
@endsection