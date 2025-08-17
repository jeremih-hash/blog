@props(['title' =>'Firefly Blog', 'logo' => null] )
<header @click.outside="showSearchModal = false" x-data="{ showSearchModal: false }" class="sticky top-0 z-[94035]">
    <div class="py-4 bg-white border-b">
        <div class="container mx-auto">
            <div class="flex justify-between gap-x-4">
                <div class="flex items-center gap-x-10">
                    <a href="{{config('filamentblog.route.home.url') ?? config('app.url')}}">
                        @if($logo)
                        <img src="{{ $logo }}" alt="{{ $title }}" class="max-h-[60px]" />
                        @else
                        <strong class="text-2xl  text-primary-600">
                            {{ $title ?: 'Firefly Blog' }}
                        </strong>
                        @endif
                    </a>
                    <div class="hidden gap-x-8 sm:flex items-center">
                        <a href="{{ route('filamentblog.post.index') }}" class="font-semibold text-md hover:text-primary-600">
                            Free Tips
                        </a>
                        <a href="#" class="font-semibold text-md hover:text-primary-600">
                            VIP
                        </a>
                        <a href="#" class="font-semibold text-md hover:text-primary-600">
                            VVIP
                        </a>
                        <div class="relative group">
                            <button class="flex items-center justify-center font-semibold text-md hover:text-primary-600 gap-x-2">
                                <span>🏆 Jackpots</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6" />
                                </svg>
                            </button>
                            <div class="absolute right-1 group-hover:pointer-events-auto top-[calc(100%-0.5rem)] origin-left opacity-0 pointer-events-none transition-all duration-300 will-change-transform lg:left-[50%] lg:right-auto lg:translate-x-[-50%] group-hover:opacity-100">
                                <div class="pt-4">
                                    <div class="bg-white rounded-xl shadow-xl border border-gray-100 p-6 min-w-[600px]">
                                        <!-- Section Title -->
                                        <div class="mb-6">
                                            <h3 class="text-lg font-semibold text-gray-800">Featured Posts in Jackpots</h3>
                                            <p class="text-sm text-gray-600">Choose from our premium selection of posts</p>
                                        </div>

                                        <!-- Posts Grid -->
                                        <div class="grid grid-cols-2 gap-4 mb-6">
                                            @foreach(\Firefly\FilamentBlog\Models\Category::where('name', 'LIKE', '%jackpot%')->first()->posts()->latest()->limit(6)->get() as $post)
                                                <a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" 
                                                   class="flex items-start gap-3 p-3 rounded-lg hover:bg-gray-50 transition-all duration-200">
                                                    <span class="text-amber-400 mt-1">🏆</span>
                                                    <div>
                                                        <h4 class="font-medium text-gray-900">{{ $post->title }}</h4>
                                                        <p class="text-sm text-gray-500 line-clamp-2">
                                                            {{ $post->excerpt ?? Str::limit(strip_tags($post->body), 100) }}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>

                                        <!-- Footer Actions -->
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <a href="{{ route('filamentblog.post.index') }}" 
                                               class="text-sm text-gray-600 hover:text-primary-600 font-medium">
                                                View All Jackpot Posts
                                            </a>
                                            
                                            <a href="{{ route('filamentblog.post.index') }}" 
                                               class="inline-flex items-center gap-2 px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors text-sm font-medium">
                                                Explore Jackpots
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center ml-auto">
                    <form action="{{ route('filamentblog.post.search') }}" method="GET">
                        <div class="relative">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 -translate-y-1/2 pointer-events-none left-5 top-1/2 text-slate-500" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="11.5" cy="11.5" r="9.5" />
                                        <path stroke-linecap="round" d="M18.5 18.5L22 22" />
                                    </g>
                                </svg>
                                <input placeholder="Search" type="text" name="query" value="{{ request()->get('query') }}" class="w-full px-6 py-2 pl-12 text-sm font-medium text-gray-800 placeholder-gray-400 border rounded-full outline-none bg-white/10 placeholder:text-slate-500 focus:ring-0" />
                            </div>
                            @error('query')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
