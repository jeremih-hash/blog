@props(['category'])
<div class="top-20 min-w-[30rem] origin-left transition duration-200 will-change-[shadow] translate-y-0">
    <div class="relative z-0 rounded-lg border bg-white py-6 px-6 shadow-xl">
        <div class="max-h-[65vh] list-none overflow-y-auto transition-all duration-300 translate-y-0 opacity-100">
            <div class="mb-4">
                <h3 class="text-xl font-bold mb-2">Featured {{ $category->name }}</h3>
                <p class="text-sm text-gray-600">Choose from our premium selection of {{ strtolower($category->name) }}</p>
            </div>
            
            @php
                // Get posts directly from the category relationship to avoid ambiguous column issues
                $posts = $category->posts()
                    ->where('status', 'published')
                    ->orderBy('published_at', 'desc')
                    ->take(6)
                    ->get();
            @endphp
            
            <div class="grid grid-cols-2 gap-4 mb-4">
                @forelse($posts as $post)
                    <a href="{{ url('/'.$post->slug) }}"
                       class="flex items-center gap-2 py-2 text-sm font-medium transition-all duration-300 cursor-pointer hover:text-primary-600"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8.25a.75.75 0 01.75.75v3.75H9a.75.75 0 010 1.5H5.75V18a.75.75 0 01-1.5 0v-3.75H1a.75.75 0 010-1.5h3.25V9a.75.75 0 01.75-.75zM11.75 7a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v3h3a.75.75 0 01.75.75v3a.75.75 0 01-.75.75h-3v3a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75v-3h-3a.75.75 0 01-.75-.75v-3a.75.75 0 01.75-.75h3V7z" />
                        </svg>
                        {{ $post->title }}
                    </a>
                @empty
                    <div class="col-span-2 py-2 text-sm text-gray-500">
                        No posts found
                    </div>
                @endforelse
            </div>
            
            <div class="flex justify-end mt-4">
                <a href="{{ url('/categories/'.$category->slug) }}" 
                   class="inline-block px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium transition-all duration-300">
                   View All {{ $category->name }}
                </a>
            </div>
        </div>
    </div>
</div>
