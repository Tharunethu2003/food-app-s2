<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class AdminAnalytics extends Component
{
    public $totalPosts;
    public $totalUsers;
    public $recentPosts;

    public function mount()
    {
        $this->totalPosts = Post::count();
        $this->totalUsers = User::count();
        $this->recentPosts = Post::latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.admin-analytics');
    }
}
