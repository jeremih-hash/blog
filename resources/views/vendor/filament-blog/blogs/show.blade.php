<x-blog-layout>
    <section class="pb-16">
        <div class="container mx-auto">
            <div class="mb-10 flex gap-x-2 text-sm font-semibold">
                <a href="{{ route('home') }}" class="opacity-60">Home</a>
                <span class="opacity-30">/</span>
                <a title="{{ $post->slug }}" href="{{ route('post.show', $post->slug) }}" class="hover:text-primary-600 max-w-2xl truncate font-medium transition-all duration-300">
                    {{ $post->title }}
                </a>
            </div>
            <div class="mx-auto mb-20 space-y-10">
                <div class="grid gap-x-20 sm:grid-cols-[minmax(min-content,10%)_1fr_minmax(min-content,10%)]">
                    <div class="py-5">
                        <div class="sticky top-24 flex flex-col items-center gap-y-5 divide-y-2">
                            <div class="pt-5">
                                {!! $shareButton?->html_code !!}
                            </div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <div>
                            <div class="flex flex-col justify-end">
                                <div class="mb-6 w-full overflow-hidden rounded bg-slate-200">
                                    <img class="w-full h-auto aspect-video object-cover" loading="lazy" decoding="async" src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}">
                                </div>
                                <div class="mb-6">
                                    <h1 class="mb-6 text-4xl font-semibold">
                                        {{ $post->title }}
                                    </h1>
                                    <p>{{ $post->sub_title }}</p>
                                    <div class="mt-2">
                                        @foreach ($post->categories as $category)
                                        <a href="{{ url('/category/'.$category->slug) }}">
                                            <span class="bg-primary-200 text-primary-800 mr-2 inline-flex rounded-full px-2 py-1 text-xs font-semibold">{{ $category->name }}
                                            </span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-5 flex items-center justify-between gap-x-3 py-5">
                                    <div>
                                        <div class="flex items-center gap-4">
                                            <img class="h-14 w-14 overflow-hidden rounded-full border-4 border-white bg-zinc-300 object-cover text-[0] ring-1 ring-slate-300" loading="lazy" decoding="async" src="{{ $post->user->avatar }}" alt="{{ $post->user->name() }}">
                                            <div>
                                                <span title="{{ $post->user->name() }}" class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold">{{ $post->user->name() }}</span>
                                                <span class="block whitespace-nowrap text-sm font-medium font-semibold text-zinc-600">
                                                    {{ $post->formattedPublishedDate() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <article class="m-auto leading-6 prose prose-slate max-w-none post-content">
                                        
                                        {!! $post->body !!}
                                    </article>

                                    <style>
                                        /* Regular links */
                                        .post-content a {
                                            color: #3b82f6 !important; /* Blue color for links */
                                            text-decoration: underline !important;
                                            cursor: pointer !important;
                                        }
                                        .post-content a:hover {
                                            color: #2563eb !important; /* Darker blue on hover */
                                        }
                                        
                                        /* Button links from Tiptap editor - using data-attributes */
                                        .post-content a[data-type="button"],
                                        .post-content a[data-button],
                                        .post-content a.button,
                                        .post-content a[class*="button"] {
                                            display: inline-block !important;
                                            padding: 0.5rem 1rem !important;
                                            background-color: #f59e0b !important; /* Amber from your theme */
                                            color: white !important;
                                            border-radius: 0.375rem !important;
                                            text-decoration: none !important;
                                            font-weight: 500 !important;
                                            transition: all 0.2s !important;
                                        }
                                        
                                        .post-content a[data-type="button"]:hover,
                                        .post-content a[data-button]:hover,
                                        .post-content a.button:hover,
                                        .post-content a[class*="button"]:hover {
                                            background-color: #d97706 !important;
                                        }
                                        
                                        /* Primary button */
                                        .post-content a[data-button="primary"],
                                        .post-content a.button-primary,
                                        .post-content a[data-theme="primary"] {
                                            background-color: #f59e0b !important; /* Amber from your theme */
                                            color: white !important;
                                        }
                                        
                                        .post-content a[data-button="primary"]:hover,
                                        .post-content a.button-primary:hover,
                                        .post-content a[data-theme="primary"]:hover {
                                            background-color: #d97706 !important;
                                        }
                                        
                                        /* Secondary button */
                                        .post-content a[data-button="secondary"],
                                        .post-content a.button-secondary,
                                        .post-content a[data-theme="secondary"] {
                                            background-color: #6b7280 !important;
                                            color: white !important;
                                        }
                                        
                                        .post-content a[data-button="secondary"]:hover,
                                        .post-content a.button-secondary:hover,
                                        .post-content a[data-theme="secondary"]:hover {
                                            background-color: #4b5563 !important;
                                        }
                                        
                                        /* Tertiary button */
                                        .post-content a[data-button="tertiary"],
                                        .post-content a.button-tertiary,
                                        .post-content a[data-theme="tertiary"] {
                                            background-color: #e5e7eb !important;
                                            color: #374151 !important;
                                        }
                                        
                                        .post-content a[data-button="tertiary"]:hover,
                                        .post-content a.button-tertiary:hover,
                                        .post-content a[data-theme="tertiary"]:hover {
                                            background-color: #d1d5db !important;
                                        }
                                        
                                        /* Accent button */
                                        .post-content a[data-button="accent"],
                                        .post-content a.button-accent,
                                        .post-content a[data-theme="accent"] {
                                            background-color: #ec4899 !important;
                                            color: white !important;
                                        }
                                        
                                        .post-content a[data-button="accent"]:hover,
                                        .post-content a.button-accent:hover,
                                        .post-content a[data-theme="accent"]:hover {
                                            background-color: #db2777 !important;
                                        }
                                    </style>

                                    @if($post->tags->count())
                                    <div class="pt-10">
                                        <span class="mb-3 block font-semibold">Tags</span>
                                        <div class="space-x-2 space-y-1">
                                            @foreach ($post->tags as $tag)
                                            <a href="{{ url('/tag/'.$tag->slug) }}" class="rounded-full border border-slate-300 px-3 py-1 text-sm font-medium font-medium text-black text-slate-600 hover:bg-slate-100">
                                                {{ $tag->name }}
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- Popular Posts Section -->
                        <div class="sticky top-24 space-y-6">
                            <!-- Mozzart Banner -->
                            <div x-data="{ 
                                country: 'KE',
                                links: {
                                    'AL': {
                                        registration: 'https://record.mozzartaffiliates.com/_3cPVmCfi3K4B0WjZNehKqWNd7ZgqdRLk/1/'
                                    },
                                    'HR': {
                                        registration: 'https://record.mozzartaffiliates.com/_3cPVmCfi3K7Qu3xmF3mH2WNd7ZgqdRLk/1/'
                                    },
                                    'DE': {
                                        homepage: 'https://record.mozzartaffiliates.com/_3cPVmCfi3K7kvWkMXluei2Nd7ZgqdRLk/1/'
                                    },
                                    'AT': {
                                        registration: 'https://record.mozzartaffiliates.com/_3cPVmCfi3K7iXFlEjLmlfWNd7ZgqdRLk/1/'
                                    },
                                    'MK': {
                                        registration: 'https://record.mozzartaffiliates.com/_3cPVmCfi3K7gXusHI1eWymNd7ZgqdRLk/1/'
                                    },
                                    'KE': 'https://record.mozzartaffiliates.com/_3cPVmCfi3K62u08qNo8obWNd7ZgqdRLk/1/',
                                    'NG': 'https://record.mozzartaffiliates.com/_3cPVmCfi3K5utv7iXV6HvmNd7ZgqdRLk/1/'
                                },
                                isLoaded: false,
                                init() {
                                    fetch('https://ipapi.co/json/')
                                        .then(response => response.json())
                                        .then(data => {
                                            if (this.links[data.country_code]) {
                                                this.country = data.country_code;
                                            }
                                        })
                                        .catch(() => {
                                            this.country = 'KE';
                                        })
                                        .finally(() => {
                                            this.isLoaded = true;
                                        });
                                }
                            }"
                            x-show="isLoaded"
                            class="w-[160px] h-[600px] rounded-lg overflow-hidden"
                            style="background-image: linear-gradient(to bottom, rgb(43, 37, 109), rgb(0, 0, 0));">
                                <a :href="
                                    country === 'AL' ? links[country].registration :
                                    country === 'HR' ? links[country].registration :
                                    country === 'DE' ? links[country].homepage :
                                    country === 'AT' ? links[country].registration :
                                    country === 'MK' ? links[country].registration :
                                    links[country]
                                "
                                target="_blank" 
                                rel="noopener noreferrer sponsored" 
                                class="flex flex-col items-center h-full text-center">
                                    <!-- Top Section with Logo -->
                                    <div class="w-full p-4 pb-2 text-center">
                                        <img alt="mozzart" 
                                             loading="lazy" 
                                             width="50" 
                                             height="50"
                                             decoding="async" 
                                             class="object-contain w-[50px] h-[50px] mx-auto mb-3"
                                             src="{{ asset('images/mozzartbet.png') }}">
                                    </div>

                                    <!-- Main Content Section -->
                                    <div class="flex-1 w-full px-3 py-2 text-center">
                                        <p class="font-bold text-white text-base mb-2" x-text="
                                            country === 'NG' ? 'Register with MozzartBet Nigeria' :
                                            country === 'AL' ? 'Register with MozzartBet Albania' :
                                            country === 'HR' ? 'Register with MozzartBet Croatia' :
                                            country === 'DE' ? 'Register with MozzartBet Germany' :
                                            country === 'AT' ? 'Register with MozzartBet Austria' :
                                            country === 'MK' ? 'Register with MozzartBet Macedonia' :
                                            'Register with MozzartBet Kenya'
                                        "></p>
                                        
                                        <p class="text-white text-sm mb-3">Start Betting Today!</p>
                                        
                                        <p class="text-white/80 text-xs leading-relaxed mb-4">Create your account easily and enjoy a variety of sports betting options with competitive odds.</p>

                                        <div class="text-[#ffb400] font-bold text-sm mb-2" x-text="
                                            country === 'NG' ? '₦500,000 Welcome' :
                                            country === 'AL' ? 'Welcome Bonus' :
                                            country === 'HR' ? 'Welcome Bonus' :
                                            country === 'DE' ? 'Welcome Bonus' :
                                            country === 'AT' ? 'Welcome Bonus' :
                                            country === 'MK' ? 'Welcome Bonus' :
                                            'KES 2,500 Welcome'
                                        "></div>
                                        <div class="text-[#ffb400] font-bold text-sm">
                                            Bonus
                                        </div>
                                    </div>

                                    <!-- Bottom Section -->
                                    <div class="w-full px-4 pb-4">
                                        <div class="bg-[#ffb400] text-sm font-bold rounded-lg py-2 hover:bg-white transition-colors duration-300"
                                             style="color: rgb(43, 37, 109);">
                                            Register Now
                                        </div>
                                        
                                        <p class="text-[10px] text-center mt-2 text-white/60">
                                            T&Cs Apply • 18+ Only
                                        </p>
                                    </div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Include Jackpots Section -->
            <div class="relative mb-20 w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">
                <x-jackpots-section />
            </div>

            <div>
                <div>
                    <div class="relative mb-6 flex items-center gap-x-8">
                        <h3 class="whitespace-nowrap text-xl font-semibold">
                            <span class="text-primary font-bold">#</span> Related Posts
                        </h3>
                        <div class="flex w-full items-center">
                            <span class="h-0.5 w-full rounded-full bg-slate-200"></span>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-x-12 gap-y-10">
                        @forelse($post->relatedPosts() as $relatedPost)
                        <div class="group">
                            <a href="{{ route('post.show', $relatedPost->slug) }}" class="block overflow-hidden rounded-lg border border-slate-200 transition-all duration-300 hover:shadow-lg">
                                <div class="aspect-video overflow-hidden">
                                    <img src="{{ $relatedPost->featurePhoto }}" 
                                         alt="{{ $relatedPost->photo_alt_text }}"
                                         class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                         loading="lazy" decoding="async">
                                </div>
                                <div class="p-4">
                                    <div class="mb-2 flex flex-wrap gap-2">
                                        @foreach($relatedPost->categories as $category)
                                        <a href="{{ url('/categories/'.$category->slug) }}" 
                                           class="text-xs font-medium text-primary-600 hover:text-primary-800">
                                            #{{ $category->name }}
                                        </a>
                                        @endforeach
                                    </div>
                                    <h5 class="mb-2 text-lg font-semibold group-hover:text-primary-600">
                                        {{ $relatedPost->title }}
                                    </h5>
                                    <p class="text-sm text-slate-600 line-clamp-2">
                                        {{ $relatedPost->sub_title }}
                                    </p>
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-xs text-slate-500">
                                            {{ $relatedPost->formattedPublishedDate() }}
                                        </span>
                                        <span class="text-xs font-medium text-primary-600">Read More →</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div class="col-span-3">
                            <p class="text-center text-xl font-semibold text-gray-300">No related posts found.</p>
                        </div>
                        @endforelse
                    </div>
                    <div class="flex justify-center pt-20">
                        <a href="{{ url('/all') }}" class="flex items-center justify-center md:gap-x-5 rounded-full bg-slate-100 px-20 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
                            <span>Show all blogs</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!! $shareButton?->script_code !!}
</x-blog-layout>
