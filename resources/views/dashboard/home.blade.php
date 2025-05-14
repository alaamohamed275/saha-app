@extends('layouts.dashboard')

@section('title', __('dashboard.dashboard'))

@section('breadcrumb')
    <li class="breadcrumb-item active">{{ __('dashboard.dashboard') }}</li>
@endsection
<style>
    /* Dashboard Card Hover Effect */
.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1.5rem 0 rgba(58, 59, 69, 0.2) !important;
}

/* Border Left Colors */
.border-left-primary {
    border-left: 0.25rem solid #4e73df !important;
}

.border-left-success {
    border-left: 0.25rem solid #1cc88a !important;
}

.border-left-info {
    border-left: 0.25rem solid #36b9cc !important;
}

.border-left-warning {
    border-left: 0.25rem solid #f6c23e !important;
}

/* Chart Container */
.chart-area {
    position: relative;
    height: 20rem;
    width: 100%;
}
</style>
@section('content')
<div class="container-fluid">
    <!-- Statistics Cards -->
    <div class="row">
        <!-- Users Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {{ __('dashboard.total_users') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['users'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-success h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {{ __('dashboard.total_services') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['services'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-concierge-bell fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-info h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                {{ __('dashboard.total_messages') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['messages'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Missions Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                {{ __('dashboard.total_missions') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['missions'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Messages & Users -->
    <div class="row">
        <!-- Recent Messages -->
        <div class="col-lg-6 mb-4">
            <div class="card dashboard-card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('dashboard.recent_messages') }}</h6>
                    <a href="{{ route('messages.index') }}" class="btn btn-sm btn-link">{{ __('dashboard.view_all') }}</a>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @forelse($stats['recentMessages'] as $message)
                        <a href="{{ route('messages.show', $message->id) }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{ $message->name }}</h6>
                                <small>{{ $message->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-1 text-truncate">{{ $message->message }}</p>
                            <small>{{ $message->email }}</small>
                        </a>
                        @empty
                        <div class="list-group-item">
                            {{ __('dashboard.no_recent_messages') }}
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Users -->
        <div class="col-lg-6 mb-4">
            <div class="card dashboard-card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('dashboard.recent_users') }}</h6>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-link">{{ __('dashboard.view_all') }}</a>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @forelse($stats['recentUsers'] as $user)
                        <a href="{{ route('users.show', $user->id) }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">{{ $user->name }}</h6>
                                    <small class="text-muted">{{ $user->email }}</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $user->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                        @empty
                        <div class="list-group-item">
                            {{ __('dashboard.no_recent_users') }}
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card dashboard-card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('dashboard.monthly_stats') }}</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="monthlyStatsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Monthly Stats Chart
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('monthlyStatsChart').getContext('2d');
    
    // Example data - replace with actual data from your controller
    const monthlyStatsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Users',
                    data: [12, 19, 3, 5, 2, 3, 7, 15, 10, 8, 12, 9],
                    borderColor: '#4e73df',
                    backgroundColor: 'rgba(78, 115, 223, 0.05)',
                    tension: 0.4,
                    fill: true
                },
                {
                    label: 'Messages',
                    data: [8, 15, 7, 12, 5, 9, 14, 10, 6, 11, 13, 7],
                    borderColor: '#1cc88a',
                    backgroundColor: 'rgba(28, 200, 138, 0.05)',
                    tension: 0.4,
                    fill: true
                },
                {
                    label: 'Services',
                    data: [3, 7, 5, 8, 4, 6, 9, 5, 7, 10, 6, 8],
                    borderColor: '#36b9cc',
                    backgroundColor: 'rgba(54, 185, 204, 0.05)',
                    tension: 0.4,
                    fill: true
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
});
</script>
@endsection