<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Total Posts -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold">Total Posts</h3>
        <p class="text-3xl font-bold">{{ $totalPosts }}</p>
    </div>

    <!-- Total Users -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold">Total Users</h3>
        <p class="text-3xl font-bold">{{ $totalUsers }}</p>
    </div>

    <!-- Recent Posts -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold">Recent Posts</h3>
        <ul class="space-y-2">
            @foreach($recentPosts as $post)
                <li>{{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</li>
            @endforeach
        </ul>
    </div>
</div>
