<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Dashboard - AD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#8a4813ff',
              secondary: '#944403ff',
              accent: '#8b4d05ff',
            },
          }
        }
      }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .parallax { background-image: linear-gradient(to bottom right, #fff7ed, #fffbeb); }
        .animate-on-scroll { opacity: 0; transform: translateY(16px); transition: all .6s cubic-bezier(.2,.8,.2,1); }
        .animate-on-scroll.animate-in { opacity: 1; transform: translateY(0); }
    </style>
    @php
        // Ensure variables exist to avoid view errors if controller changes
        $totalFeedback = $totalFeedback ?? 0;
        $totalMessages = $totalMessages ?? 0;
        $todaysFeedback = $todaysFeedback ?? 0;
        $todaysMessages = $todaysMessages ?? 0;
        $weeksFeedback = $weeksFeedback ?? 0;
        $weeksMessages = $weeksMessages ?? 0;
        $monthsFeedback = $monthsFeedback ?? 0;
        $monthsMessages = $monthsMessages ?? 0;
        $averageRating = $averageRating ?? 0;
        $recentActivity = $recentActivity ?? collect([]);
        $ratingStats = $ratingStats ?? collect([]);
        $topContributors = $topContributors ?? collect([]);
    @endphp
</head>
<body class="parallax min-h-screen">
    <header class="sticky top-0 z-40 bg-white/70 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
            <div class="flex items-center gap-3 mr-2">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center font-bold text-primary">AD</div>
                <span class="text-lg font-semibold text-gray-800">Statistics Dashboard</span>
            </div>
            <div class="ml-auto flex items-center gap-4 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="px-3 py-1.5 rounded-lg ring-1 ring-gray-300 hover:bg-gray-50">Dashboard</a>
                <span class="text-gray-700">Hi, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-3 py-1.5 rounded-lg ring-1 ring-gray-300 hover:bg-gray-50">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Website Statistics & Analytics</h1>
            <p class="text-gray-600">Monitor performance, client engagement, and business metrics</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white/80 backdrop-blur ring-1 ring-primary/10 rounded-xl shadow p-6 animate-on-scroll">
                <p class="text-sm text-gray-500">Total Feedback</p>
                <p class="text-3xl font-bold text-primary">{{ number_format($totalFeedback) }}</p>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-secondary/10 rounded-xl shadow p-6 animate-on-scroll">
                <p class="text-sm text-gray-500">Total Messages</p>
                <p class="text-3xl font-bold text-secondary">{{ number_format($totalMessages) }}</p>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-accent/10 rounded-xl shadow p-6 animate-on-scroll">
                <p class="text-sm text-gray-500">Average Rating</p>
                <p class="text-3xl font-bold text-accent">{{ number_format($averageRating, 1) }}/5</p>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl shadow p-6 animate-on-scroll">
                <p class="text-sm text-gray-500">This Month</p>
                <p class="text-3xl font-bold text-gray-800">{{ number_format($monthsFeedback + $monthsMessages) }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl shadow p-6 animate-on-scroll">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity (Last 7 Days)</h3>
                @if($recentActivity->count() > 0)
                    <div class="h-64"><canvas id="recentActivityChart"></canvas></div>
                @else
                    <div class="h-64 flex items-center justify-center text-gray-500">No recent activity data</div>
                @endif
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl shadow p-6 animate-on-scroll">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Feedback Rating Distribution</h3>
                @if($ratingStats->count() > 0)
                    <div class="h-64"><canvas id="ratingChart"></canvas></div>
                @else
                    <div class="h-64 flex items-center justify-center text-gray-500">No rating data</div>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white/80 backdrop-blur ring-1 ring-primary/20 rounded-xl shadow p-6 animate-on-scroll">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Today</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between"><span>Feedback</span><span class="font-semibold text-primary">{{ $todaysFeedback }}</span></div>
                    <div class="flex justify-between"><span>Messages</span><span class="font-semibold text-secondary">{{ $todaysMessages }}</span></div>
                </div>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-secondary/20 rounded-xl shadow p-6 animate-on-scroll">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">This Week</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between"><span>Feedback</span><span class="font-semibold text-primary">{{ $weeksFeedback }}</span></div>
                    <div class="flex justify-between"><span>Messages</span><span class="font-semibold text-secondary">{{ $weeksMessages }}</span></div>
                </div>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-accent/20 rounded-xl shadow p-6 animate-on-scroll">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">This Month</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between"><span>Feedback</span><span class="font-semibold text-primary">{{ $monthsFeedback }}</span></div>
                    <div class="flex justify-between"><span>Messages</span><span class="font-semibold text-secondary">{{ $monthsMessages }}</span></div>
                </div>
            </div>
        </div>

        <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl shadow p-6 animate-on-scroll">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Top Feedback Contributors</h3>
            @if($topContributors->count())
                <div class="space-y-3">
                    @foreach($topContributors as $index => $contributor)
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-primary to-secondary text-white flex items-center justify-center text-sm font-bold">{{ $index + 1 }}</div>
                                <div>
                                    <p class="font-medium text-gray-900">{{ $contributor->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $contributor->feedback_count }} feedback{{ $contributor->feedback_count > 1 ? 's' : '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-gray-500">No feedback contributors yet</div>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hasRecentActivity = @json($recentActivity->count() > 0);
            const hasRatingStats = @json($ratingStats->count() > 0);

            if (hasRecentActivity) {
                const el = document.getElementById('recentActivityChart');
                if (el) {
                    const ctx = el.getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: @json($recentActivity->pluck('date')),
                            datasets: [{
                                label: 'Feedback',
                                data: @json($recentActivity->pluck('feedback')),
                                borderColor: '#8a4813',
                                backgroundColor: 'rgba(138, 72, 19, 0.1)',
                                tension: 0.4,
                                fill: true
                            }, {
                                label: 'Messages',
                                data: @json($recentActivity->pluck('messages')),
                                borderColor: '#944403',
                                backgroundColor: 'rgba(148, 68, 3, 0.1)',
                                tension: 0.4,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { position: 'top' } },
                            scales: { y: { beginAtZero: true, ticks: { stepSize: 1 } } }
                        }
                    });
                }
            }

            if (hasRatingStats) {
                const el = document.getElementById('ratingChart');
                if (el) {
                    const ctx = el.getContext('2d');
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: @json($ratingStats->pluck('rating')->map(function($rating) { return (string) $rating; })),
                            datasets: [{
                                data: @json($ratingStats->pluck('count')),
                                backgroundColor: ['#ef4444','#f97316','#eab308','#22c55e','#3b82f6'],
                                borderWidth: 2,
                                borderColor: '#ffffff'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: { position: 'bottom' },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const total = @json($ratingStats->sum('count'));
                                            const percentage = total > 0 ? ((context.parsed / total) * 100).toFixed(1) : 0;
                                            return `${context.label} Stars: ${context.parsed} (${percentage}%)`;
                                        }
                                    }
                                }
                            }
                        }
                    });
                }
            }

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>



