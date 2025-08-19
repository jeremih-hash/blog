<x-blog-layout>
    <!-- Include Popup Modal Component -->
    <x-popup-modal />
    <!-- Hero Section with Enhanced Schema.org markup - Two-part layout with illustration -->
    <section class="relative bg-[#0F172A] text-white py-16 md:py-24 overflow-hidden -mt-[4.5rem]" 
             itemscope itemtype="https://schema.org/WebSite">
        <!-- Simple, elegant background with subtle gradient -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-amber-500/5 to-transparent"></div>
            <!-- Slanted divider with layered effect -->
            <div class="absolute bottom-0 left-0 w-full">
                <!-- Shadow layer -->
                <div class="absolute bottom-0 left-0 w-full h-24 bg-black/20"
                     style="clip-path: polygon(0 15%, 100% 85%, 100% 100%, 0% 100%);"></div>
                <!-- Main layer -->
                <div class="absolute bottom-0 left-0 w-full h-24"
                     style="clip-path: polygon(0 20%, 100% 90%, 100% 100%, 0% 100%);
                            background: linear-gradient(95deg, #f1f5f9 0%, #e2e8f0 100%);"></div>
            </div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                <!-- Left Content Column -->
                <div class="w-full lg:w-1/2 text-left">
                    <!-- Enhanced accessibility label -->
                    <div class="inline-block px-3 py-1 mb-6 rounded-full bg-amber-500/20 backdrop-blur-sm border border-amber-500/30">
                        <span class="text-amber-400 text-sm font-medium">🏆 Top Football Predictions in Kenya</span>
                    </div>
                    
                    <!-- Enhanced Schema.org markup for WebSite -->
                    <meta itemprop="name" content="{{ config('app.name') }}" />
                    <meta itemprop="url" content="{{ url('/') }}" />
                    <meta itemprop="keywords" content="football betting tips, free betting tips, Kenya betting, Odibet, Laki Tatu Jackpot, daily predictions, jackpot access, winning strategies" />
                    <meta itemprop="copyrightYear" content="{{ date('Y') }}" />
                    <link itemprop="thumbnailUrl" href="{{ url('/images/logo.png') }}" />
                    
                    <!-- Main Heading with improved structured data and SEO-optimized text -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 leading-tight tracking-tight" 
                        itemprop="headline">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-amber-400 via-yellow-500 to-amber-400 animate-gradient">
                            Free Football Tips at No Cost
                        </span>
                    </h1>
                    
                    <!-- Enhanced Subheading with more SEO-rich content -->
                    <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-xl leading-relaxed" 
                       itemprop="description">
                        Over 10,000 successful punters rely on our daily insights. Access complimentary predictions and full jackpot coverage, including exclusive Laki Tatu analysis.
                    </p>
                    
                    <!-- Trust Badges - Horizontal layout -->
                    <div class="mb-8 flex flex-wrap items-center gap-6 text-sm text-gray-300">
                        <div class="flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>95%+ Win Rate</span>
                        </div>
                        <div class="flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            <span>10,000+ Happy Users</span>
                        </div>
                    </div>
                    
                    <!-- Enhanced CTA Buttons with improved accessibility and visual appeal -->
                    <div class="flex flex-wrap gap-4">
                        <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" 
                           class="group relative inline-flex items-center justify-center overflow-hidden rounded-full bg-gradient-to-br from-amber-500 to-yellow-600 p-0.5 font-bold text-white shadow-lg transition-all duration-300 hover:shadow-amber-500/50 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2"
                           aria-label="Begin winning with our betting tips"
                           itemprop="potentialAction" itemscope itemtype="https://schema.org/ReadAction">
                            <meta itemprop="name" content="Begin Winning" />
                            <link itemprop="target" href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" />
                            <span class="relative flex h-full w-full items-center justify-center rounded-full bg-gradient-to-br from-amber-500 to-yellow-600 px-8 py-4 transition-all duration-300 ease-out group-hover:bg-opacity-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4v16m8-8H4" />
                                    <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                                <span class="relative">Begin Winning</span>
                                <span class="absolute right-4 -translate-y-1/2 translate-x-0 opacity-0 transition-all duration-300 group-hover:translate-x-1 group-hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" 
                           class="group relative inline-flex items-center justify-center overflow-hidden rounded-full bg-white/10 p-0.5 font-bold text-white backdrop-blur-sm transition-all duration-300 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/50 focus:ring-offset-2"
                           aria-label="Explore our free betting tips"
                           itemprop="potentialAction" itemscope itemtype="https://schema.org/ReadAction">
                            <meta itemprop="name" content="Explore Tips" />
                            <link itemprop="target" href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" />
                            <span class="relative flex h-full w-full items-center justify-center rounded-full border border-white/20 px-8 py-4 transition-all duration-300 ease-out group-hover:border-white/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                    <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                </svg>
                                <span class="relative">Explore Tips</span>
                                <span class="absolute right-4 -translate-y-1/2 translate-x-0 opacity-0 transition-all duration-300 group-hover:translate-x-1 group-hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                
                <!-- Right Illustration Column -->
                <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
                    <div class="relative">
                        <!-- Decorative elements -->
                        <div class="absolute -top-6 -left-6 w-24 h-24 bg-green-500/20 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-blue-500/20 rounded-full blur-xl"></div>
                        
                        <!-- Main illustration container -->
                        <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-2 rounded-2xl shadow-2xl border border-white/10">
                            <!-- Football illustration -->
                            <div class="aspect-video rounded-xl overflow-hidden bg-gradient-to-b from-gray-800 to-gray-900 flex items-center justify-center relative">
                                <!-- Football field background -->
                                <div class="absolute inset-0 bg-green-800/80">
                                    <!-- Field markings -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-full h-full relative">
                                            <!-- Center circle -->
                                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 border-2 border-white/30 rounded-full"></div>
                                            <!-- Center line -->
                                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-white/30"></div>
                                            <!-- Penalty areas -->
                                            <div class="absolute top-1/2 left-0 transform -translate-y-1/2 w-1/5 h-2/5 border-r-2 border-white/30"></div>
                                            <div class="absolute top-1/2 right-0 transform -translate-y-1/2 w-1/5 h-2/5 border-l-2 border-white/30"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Match analysis overlay -->
                                <div class="absolute inset-0 flex flex-col">
                                    <!-- Match header -->
                                    <div class="bg-black/50 backdrop-blur-sm p-3 flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">A</div>
                                            <span class="text-white font-medium">Arsenal</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-white font-bold">2</span>
                                            <span class="text-gray-400">:</span>
                                            <span class="text-white font-bold">1</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <span class="text-white font-medium">Chelsea</span>
                                            <div class="w-8 h-8 rounded-full bg-blue-800 flex items-center justify-center text-white font-bold">C</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Betting odds visualization -->
                                    <div class="flex-1 flex items-center justify-center">
                                        <div class="bg-black/40 backdrop-blur-sm rounded-lg p-4 w-4/5">
                                            <div class="text-center mb-2">
                                                <span class="text-amber-400 font-medium">Win Probability</span>
                                            </div>
                                            <div class="flex h-6 mb-3 rounded-full overflow-hidden shadow-inner shadow-black/50">
                                                <div class="bg-gradient-to-r from-blue-700 to-blue-500 w-[55%] relative">
                                                    <div class="absolute inset-0 bg-white/10 bg-[length:10px_10px] bg-[linear-gradient(45deg,rgba(255,255,255,.15)_25%,transparent_25%,transparent_50%,rgba(255,255,255,.15)_50%,rgba(255,255,255,.15)_75%,transparent_75%,transparent)] animate-[progress_1s_linear_infinite]"></div>
                                                </div>
                                                <div class="bg-gradient-to-r from-gray-600 to-gray-500 w-[15%] relative">
                                                    <div class="absolute inset-0 bg-white/10 bg-[length:10px_10px] bg-[linear-gradient(45deg,rgba(255,255,255,.15)_25%,transparent_25%,transparent_50%,rgba(255,255,255,.15)_50%,rgba(255,255,255,.15)_75%,transparent_75%,transparent)] animate-[progress_1s_linear_infinite]"></div>
                                                </div>
                                                <div class="bg-gradient-to-r from-blue-900 to-blue-700 w-[30%] relative">
                                                    <div class="absolute inset-0 bg-white/10 bg-[length:10px_10px] bg-[linear-gradient(45deg,rgba(255,255,255,.15)_25%,transparent_25%,transparent_50%,rgba(255,255,255,.15)_50%,rgba(255,255,255,.15)_75%,transparent_75%,transparent)] animate-[progress_1s_linear_infinite]"></div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between text-xs text-white">
                                                <div>Arsenal <span class="text-amber-400 font-bold">55%</span></div>
                                                <div>Draw <span class="text-amber-400 font-bold">15%</span></div>
                                                <div>Chelsea <span class="text-amber-400 font-bold">30%</span></div>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                            
                            <!-- Betting analysis preview -->
                            <div class="mt-4 bg-gray-800/50 backdrop-blur-sm rounded-lg p-3 border border-white/5">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="text-amber-400 font-medium">Match Analysis</div>
                                    <div class="flex space-x-2">
                                        <span class="px-2 py-1 text-xs bg-amber-500/20 text-amber-400 rounded">LIVE</span>
                                        <span class="px-2 py-1 text-xs bg-gray-700 text-gray-300 rounded">STATS</span>
                                    </div>
                                </div>
                                
                                <!-- Analysis lines -->
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-white">Possession</span>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-blue-400">58%</span>
                                            <span class="text-gray-400">|</span>
                                            <span class="text-blue-600">42%</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-white">Shots on Target</span>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-blue-400">7</span>
                                            <span class="text-gray-400">|</span>
                                            <span class="text-blue-600">4</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-white">Corner Kicks</span>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-blue-400">5</span>
                                            <span class="text-gray-400">|</span>
                                            <span class="text-blue-600">3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Wins Ticker - New element for social proof -->
            <div class="mt-12 py-3 bg-white/5 backdrop-blur-sm rounded-full overflow-hidden">
                <div class="flex animate-marquee whitespace-nowrap">
                    <span class="mx-4 text-amber-400">🏆 Premier League Predictions</span>
                    <span class="mx-4 text-amber-400">🏆 Football Accumulator Tips</span>
                    <span class="mx-4 text-amber-400">🏆 Today's Match Analysis</span>
                    <span class="mx-4 text-amber-400">🏆 Champions League Insights</span>
                    <span class="mx-4 text-amber-400">🏆 Weekend Football Forecasts</span>
                </div>
            </div>
        </div>
        
        <!-- Enhanced gradient overlay -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent"></div>
        
        <!-- Enhanced Schema.org JSON-LD with more detailed structured data -->
        <script type="application/ld+json">
        @php
        echo json_encode([
            "@context" => "https://schema.org",
            "@type" => "WebSite",
            "name" => config('app.name'),
            "url" => url('/'),
            "potentialAction" => [
                "@type" => "SearchAction",
                "target" => url('/search') . "?q={search_term_string}",
                "query-input" => "required name=search_term_string"
            ],
            "description" => "Kenya's premier destination for football prediction insights. Access complimentary football betting guidance, forecasts, and strategies to enhance your success rate with daily updates and Laki Tatu Jackpot coverage.",
            "keywords" => ["football betting tips", "free betting tips", "Kenya betting", "Odibet", "Laki Tatu Jackpot", "daily predictions", "jackpot access", "winning strategies"],
            "publisher" => [
                "@type" => "Organization",
                "name" => config('app.name'),
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url('/logo.png')
                ],
                "sameAs" => [
                    "https://twitter.com/yourbettingsite",
                    "https://facebook.com/yourbettingsite",
                    "https://instagram.com/yourbettingsite"
                ]
            ],
            "offers" => [
                "@type" => "Offer",
                "description" => "Complimentary football prediction insights and analysis",
                "availability" => "https://schema.org/InStock"
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.9",
                "reviewCount" => "1024",
                "bestRating" => "5",
                "worstRating" => "1"
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        @endphp
        </script>
    </section>

    <!-- Football Prediction Introduction Section -->
    <section class="py-16 bg-white" id="football-prediction">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section header with football icon -->
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-gradient-to-r from-amber-500 to-yellow-600 p-3 rounded-full shadow-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Football Prediction</h2>
                </div>
                
                <!-- Introduction text with enhanced typography -->
                <div class="prose prose-lg max-w-none">
                    <p class="lead text-xl text-gray-700 mb-6 bg-amber-50/50 p-6 rounded-xl border border-amber-100">Football is the most popular sport globally, with the highest number of fans today. Football fans support local leagues and international competitions. Today football fans are not only looking forward to enjoying watching a football match but are looking forward to making money from their favorite sporting activity. Making money and profits from football can be done by predicting the outcome of a soccer match.</p>
                    
                    <div class="bg-gradient-to-r from-amber-50 to-white p-6 rounded-xl border-l-4 border-amber-500 mb-6">
                        <p class="text-gray-700">Bookies offer punters and football fans betting odds against which their place their stake. With a stake of as low as <span class="font-semibold text-amber-600">KES. 100</span>, you stand a chance to make up to <span class="font-semibold text-amber-600">200% profits</span> on your stake. To maximize your profits, you must understand all the factors affecting football matches. The factors may include the current form of the team, the team's level of motivation, key players playing or with injuries, and many others.</p>
                    </div>
                    
                    <p class="text-gray-700 mb-6 italic bg-amber-50/30 p-4 rounded-lg">Today you do not have to worry about getting right, for we have got you covered with our sure football predictions for today, tomorrow, and the weekend.</p>
                    
                    <div class="bg-gradient-to-r from-amber-500 to-yellow-600 p-6 rounded-xl shadow-lg">
                        <p class="text-white font-bold text-xl mb-0">We offer you the most accurate free football prediction, Jackpot Predictions, and VIP multi-bet tips daily.</p>
                    </div>
                </div>
                
                <!-- Visual separator -->
                <div class="flex items-center justify-center my-12">
                    <div class="h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-transparent w-1/2"></div>
                    <div class="mx-4">
                        <div class="bg-amber-500/10 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div class="h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-transparent w-1/2"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Free Football Prediction Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12">
                <!-- Left content -->
                <div class="md:w-1/2">
                    <div class="bg-white rounded-xl shadow-lg p-8 h-full">
                        <div class="inline-block bg-amber-100 text-amber-800 px-4 py-1 rounded-full text-sm font-medium mb-6">FREE PACKAGE</div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900">Free Football Prediction</h3>
                        
                        <p class="text-gray-700 mb-6">If you look forward to well-researched, analyzed, and sure-free football, you are in the right place today. Top Football Prediction is the home of free football predictions, offering punters daily sure-to-win-only soccer tips from leagues worldwide.</p>
                        
                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Our free package includes all major markets:</h4>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>1X2</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Under/Over 2.5</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>DNB (Draw No Bet)</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>BTS/GG (Both Teams to Score / Goal Goal)</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>...and many more</span>
                            </li>
                        </ul>
                        
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-green-700">
                                    Our free soccer tips have a success rate of over <span class="font-bold">80%</span> daily, helping bettors make consistent profits.
                                </p>
                            </div>
                        </div>
                        
                        <p class="text-gray-700 mb-6">All predictions are available early every morning. Check today's free football predictions and tips above.</p>
                        
                        <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-amber-600 hover:bg-amber-700">
                            View Today's Free Tips
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Right content -->
                <div class="md:w-1/2">
                    <div class="bg-gray-900 text-white rounded-xl shadow-lg p-8 h-full relative overflow-hidden">
                        <!-- VIP badge -->
                        <div class="absolute -top-6 -right-6">
                            <div class="bg-amber-500 text-white text-xs font-bold px-4 py-1 rounded-full transform rotate-12 shadow-lg">
                                PREMIUM
                            </div>
                        </div>
                        
                        <div class="inline-block bg-amber-500/20 text-amber-400 px-4 py-1 rounded-full text-sm font-medium mb-6">VIP PACKAGE</div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-6">VIP Sure Tips</h3>
                        
                        <p class="text-gray-300 mb-6">While free tips are single matches with odds of 1 to 3, our VIP package offers:</p>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>1 sure ticket</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>3 sure bets per day</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Odds ranging from 3.0 to 5.0</span>
                            </li>
                        </ul>
                        
                        <div class="bg-amber-500/10 border border-amber-500/20 rounded-lg p-4 mb-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-amber-300">
                                    The VIP ticket is guaranteed to profit, often yielding up to <span class="font-bold">200%</span> returns on your stake.
                                </p>
                            </div>
                        </div>
                        
                        <h4 class="text-lg font-semibold mb-4 text-gray-200">Our VIP tips cover global leagues:</h4>
                        
                        <div class="grid grid-cols-2 gap-2 mb-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">English Premier League</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">La Liga</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Champions League</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Europa League</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Bundesliga</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Ligue 1</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Serie A</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-amber-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Many others</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-4 mb-6">
                            <div class="flex items-center">
                                <span class="text-amber-400 mr-2">💡</span>
                                <span class="text-sm">Expert analysis</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-amber-400 mr-2">🔍</span>
                                <span class="text-sm">Insider knowledge</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-amber-400 mr-2">📈</span>
                                <span class="text-sm">Higher accuracy bets</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-amber-400 mr-2">🎯</span>
                                <span class="text-sm">Better returns</span>
                            </div>
                        </div>
                        
                        <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-gray-900 bg-amber-500 hover:bg-amber-400">
                            Get VIP Tips Now
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jackpot Predictions Section -->
    <section class="py-16 bg-gradient-to-b from-white to-amber-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <!-- Section header -->
                <div class="text-center mb-12">
                    <div class="inline-block bg-amber-100 text-amber-800 px-4 py-1 rounded-full text-sm font-medium mb-4 border border-amber-200">JACKPOT PREDICTIONS</div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Jackpot Predictions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Looking for sure jackpot predictions based purely on stats? Look no further.</p>
                </div>
                
                <!-- Jackpot cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Daily Jackpot -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-105">
                        <div class="bg-gradient-to-r from-amber-500 to-yellow-600 h-2"></div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                                <span class="text-amber-600 text-xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Daily Jackpot</h3>
                            <p class="text-gray-600 mb-4">Our daily jackpot predictions give you the best chance to win smaller but more frequent jackpots.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Updated every morning</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Smaller stake requirements</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Perfect for daily players</span>
                                </li>
                            </ul>
                            <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-3 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 text-white rounded-lg font-medium transition-colors duration-300 hover:from-amber-600 hover:to-yellow-700">
                                View Daily Jackpot
                            </a>
                        </div>
                    </div>
                    
                    <!-- Midweek Jackpot -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-105">
                        <div class="bg-gradient-to-r from-amber-500 to-yellow-600 h-2"></div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                                <span class="text-amber-600 text-xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Midweek Jackpot</h3>
                            <p class="text-gray-600 mb-4">Our midweek jackpot predictions focus on European leagues and cup competitions.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Champions League focus</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Medium-sized jackpots</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Updated every Tuesday</span>
                                </li>
                            </ul>
                            <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-3 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 text-white rounded-lg font-medium transition-colors duration-300 hover:from-amber-600 hover:to-yellow-700">
                                View Midweek Jackpot
                            </a>
                        </div>
                    </div>
                    
                    <!-- Mega Jackpot -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-amber-100 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-105">
                        <div class="bg-gradient-to-r from-amber-500 to-yellow-600 h-2"></div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                                <span class="text-amber-600 text-xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Mega Jackpot (Weekend)</h3>
                            <p class="text-gray-600 mb-4">Our weekend mega jackpot predictions offer the biggest potential returns.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Highest potential payouts</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Major league coverage</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-600">Updated every Friday</span>
                                </li>
                            </ul>
                            <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-3 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 text-white rounded-lg font-medium transition-colors duration-300 hover:from-amber-600 hover:to-yellow-700">
                                View Mega Jackpot
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-gray-600 mb-6">All tips are based on thorough analysis and statistical trends.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-8 py-4 border-2 border-amber-500 rounded-full shadow-lg text-base font-medium text-amber-600 bg-white hover:bg-amber-50 transition-colors duration-300">
                        View All Jackpot Predictions
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sure Football Prediction Section -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <!-- Section header -->
                <div class="text-center mb-12">
                    <div class="inline-block bg-amber-500/20 text-amber-400 px-4 py-1 rounded-full text-sm font-medium mb-4 border border-amber-500/30">GUARANTEED RESULTS</div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Sure Football Prediction</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">We know punters hate losing bets. That's why we're here—to make you a bet winner.</p>
                </div>
                
                <!-- Content with image -->
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <!-- Left content -->
                    <div class="md:w-1/2">
                        <div class="prose prose-lg max-w-none">
                            <p class="mb-6 text-gray-300">Our predictions are crafted by professional tipsters who:</p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-medium text-white">Analyze football outcomes with data and tools</span>
                                        <p class="text-gray-300 text-sm mt-1">Our team uses advanced statistical models and algorithms to predict match outcomes.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-medium text-white">Use stats, H2H (head-to-head), past results</span>
                                        <p class="text-gray-300 text-sm mt-1">We analyze historical data between teams to identify patterns and trends.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-medium text-white">Consider all relevant match factors</span>
                                        <p class="text-gray-300 text-sm mt-1">We factor in team form, injuries, weather conditions, and other critical variables.</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="bg-gray-800 p-6 rounded-xl shadow-md mt-8 border-l-4 border-amber-500">
                                <p class="text-xl font-bold text-white mb-2">With Sure Tips, Victory is Assured.</p>
                                <p class="text-gray-300">Our tips aim to be the most accurate possible, increasing your chances of winning and maximizing profit.</p>
                            </div>
                            
                            <div class="mt-8">
                                <p class="text-gray-300 mb-6">Sure Tips and daily football predictions are also available on the Top Football Prediction Android App.</p>
                                <div class="flex flex-wrap gap-4">
                                    <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-6 py-3 border border-amber-500/20 rounded-md shadow-lg text-base font-medium text-amber-400 bg-amber-500/20 hover:bg-amber-500/30">
                                        Download Our App
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-6 py-3 border border-gray-700 rounded-md shadow-lg text-base font-medium text-gray-300 bg-gray-800 hover:bg-gray-700">
                                        Check Today's Tips
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right image -->
                    <div class="md:w-1/2">
                        <div class="relative">
                            <!-- Main image -->
                            <div class="rounded-xl overflow-hidden shadow-xl">
                                <div class="aspect-w-4 aspect-h-3 bg-gray-800">
                                    <!-- Replace with actual image -->
                                    <div class="w-full h-full bg-gradient-to-br from-amber-500/20 to-yellow-600/20 flex items-center justify-center p-8">
                                        <div class="bg-gray-800/80 backdrop-blur-sm rounded-xl p-6 w-full border border-amber-500/20">
                                            <div class="flex justify-between items-center mb-4">
                                                <div class="text-white font-bold">Today's Sure Bet</div>
                                                <div class="bg-amber-500/20 text-amber-400 text-xs px-2 py-1 rounded">95% CONFIDENCE</div>
                                            </div>
                                            
                                            <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-4 mb-4 border border-amber-500/10">
                                                <div class="flex justify-between items-center">
                                                    <div class="text-white">Arsenal</div>
                                                    <div class="text-amber-400 font-bold">2 - 0</div>
                                                    <div class="text-white">Chelsea</div>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-3 border border-amber-500/10">
                                                    <div class="text-xs text-gray-400 mb-1">Prediction</div>
                                                    <div class="text-amber-400 font-bold">Home Win</div>
                                                </div>
                                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-3 border border-amber-500/10">
                                                    <div class="text-xs text-gray-400 mb-1">Odds</div>
                                                    <div class="text-amber-400 font-bold">1.75</div>
                                                </div>
                                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-3 border border-amber-500/10">
                                                    <div class="text-xs text-gray-400 mb-1">Market</div>
                                                    <div class="text-amber-400 font-bold">1X2</div>
                                                </div>
                                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-3 border border-amber-500/10">
                                                    <div class="text-xs text-gray-400 mb-1">League</div>
                                                    <div class="text-amber-400 font-bold">Premier League</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Decorative elements -->
                            <div class="absolute -top-4 -right-4 w-24 h-24 bg-amber-500 rounded-full opacity-20 blur-xl"></div>
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-amber-500 rounded-full opacity-20 blur-xl"></div>
                            
                            <!-- Stats badge -->
                            <div class="absolute -bottom-5 right-10 bg-gray-800 rounded-lg shadow-lg p-3 flex items-center border border-amber-500/20">
                                <div class="bg-amber-500/20 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-400">Success Rate</div>
                                    <div class="text-lg font-bold text-amber-400">89%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section for SEO -->
    <section class="py-16 bg-white" id="football-betting-faq">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section header -->
                <div class="text-center mb-12">
                    <div class="inline-block bg-[#101827]/5 text-[#101827] px-4 py-1 rounded-full text-sm font-medium mb-4 border border-[#f2b91a]/30">FREQUENTLY ASKED QUESTIONS</div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Football Betting FAQs</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Get answers to the most common questions about football betting in Kenya</p>
                </div>
                
                <!-- FAQ Items with Schema.org markup -->
                <div class="space-y-6" itemscope itemtype="https://schema.org/FAQPage">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="flex justify-between items-center w-full px-6 py-5 text-left" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900" itemprop="name">How accurate are your football predictions?</h3>
                            <svg class="w-5 h-5 text-[#f2b91a] transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p class="text-gray-700">Our football predictions have a success rate of over 80%. We achieve this through detailed analysis of team statistics, player performance, historical data, and current form. Our expert tipsters carefully evaluate all factors that might influence match outcomes to provide the most accurate predictions possible for the Kenyan betting market.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="flex justify-between items-center w-full px-6 py-5 text-left" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900" itemprop="name">What is the Odibet Laki Tatu Jackpot?</h3>
                            <svg class="w-5 h-5 text-[#f2b91a] transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p class="text-gray-700">The Odibet Laki Tatu Jackpot is one of Kenya's most popular football betting jackpots. It typically requires predicting the outcomes of 13 selected matches. The jackpot prize is usually Ksh 3 million (hence "Laki Tatu," meaning 300 in Swahili). Our platform provides detailed analysis and predictions for all Odibet Laki Tatu Jackpot matches to increase your chances of winning.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="flex justify-between items-center w-full px-6 py-5 text-left" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900" itemprop="name">Are your free tips really free?</h3>
                            <svg class="w-5 h-5 text-[#f2b91a] transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p class="text-gray-700">Yes, our free football predictions are 100% free with no hidden charges. We provide these as a service to the Kenyan betting community and to showcase our expertise. While our VIP tips offer more comprehensive analysis and higher potential returns, our free tips are still carefully researched and have a strong success rate.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="flex justify-between items-center w-full px-6 py-5 text-left" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900" itemprop="name">How much can I win with your football predictions?</h3>
                            <svg class="w-5 h-5 text-[#f2b91a] transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p class="text-gray-700">Potential winnings depend on your stake amount, the odds of the selections, and whether you're betting on single matches or accumulators. Our VIP members regularly report winning between Ksh 5,000 to Ksh 50,000 from modest stakes. Jackpot predictions can lead to much higher returns, with the Odibet Laki Tatu Jackpot offering Ksh 3 million for correctly predicting all matches.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="flex justify-between items-center w-full px-6 py-5 text-left" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900" itemprop="name">Which betting sites do you recommend in Kenya?</h3>
                            <svg class="w-5 h-5 text-[#f2b91a] transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p class="text-gray-700">We recommend licensed betting sites that offer competitive odds, reliable payouts, and good user experience for Kenyan bettors. These include Odibet, Betika, SportPesa, 22Bet, and 1xBet. Each has its strengths, such as Odibet's popular jackpots, Betika's user-friendly interface, and SportPesa's comprehensive coverage of local leagues. Always bet responsibly and only with licensed operators.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ JavaScript -->
                <script>
                    function toggleFAQ(element) {
                        const answer = element.nextElementSibling;
                        const icon = element.querySelector('svg');
                        
                        if (answer.classList.contains('hidden')) {
                            answer.classList.remove('hidden');
                            icon.classList.add('rotate-180');
                        } else {
                            answer.classList.add('hidden');
                            icon.classList.remove('rotate-180');
                        }
                    }
                </script>
            </div>
        </div>
    </section>

    <!-- Bookmaker-specific Jackpot Section -->
    <section class="py-16 bg-gray-900" id="bookmaker-jackpots">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <div class="inline-block bg-amber-500/20 text-amber-400 px-4 py-1 rounded-full text-sm font-medium mb-4 border border-amber-500/30">KENYA'S POPULAR JACKPOTS</div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Top Football Prediction Jackpots</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">Access expert predictions for all major Kenyan bookmakers' jackpots. Our analysis covers the most popular betting platforms in Kenya.</p>
                </div>
                
                <!-- Jackpot Navigation Tabs -->
                <div class="flex justify-center mb-10">
                    <div class="inline-flex rounded-md shadow-lg bg-gray-800 p-1 border border-gray-700" role="group">
                        <button type="button" class="px-5 py-2.5 text-sm font-medium bg-amber-500 text-white rounded-l-lg focus:z-10 focus:ring-2 focus:ring-amber-500 focus:outline-none" onclick="showTab('jackpots')">
                            Jackpots
                        </button>
                        <button type="button" class="px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-r-lg focus:z-10 focus:ring-2 focus:ring-amber-500 focus:outline-none" onclick="showTab('leagues')">
                            Popular Leagues
                        </button>
                    </div>
                </div>
                
                <!-- Jackpot Tab Content -->
                <div id="jackpots-tab" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Sportpesa Mega Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">S</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Sportpesa Mega Jackpot</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Our expert analysis for Kenya's most popular mega jackpot with potential winnings of Ksh 300M+.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Sportpesa Midweek Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">S</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Sportpesa Midweek Jackpot</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Midweek jackpot predictions with detailed analysis for all matches. Win up to Ksh 10M.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Mozzart Super Daily Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">M</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Mozzart Super Daily</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Daily jackpot predictions for Mozzart with high accuracy rate. Fresh predictions every morning.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Mozzart Super Grand Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">M</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Mozzart Super Grand</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Weekend grand jackpot predictions with comprehensive match analysis. Win big with our expert tips.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Betika Midweek Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">B</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Betika Midweek Jackpot</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Midweek jackpot predictions for Betika with detailed analysis. Updated every Tuesday & Wednesday.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Sportybet Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">S</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Sportybet Jackpot</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Expert predictions for Sportybet jackpots with high win rate. Comprehensive analysis of all matches.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Odibet Laki Tatu Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">O</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Odibet Laki Tatu</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Daily jackpot predictions for Odibet including the popular Laki Tatu Jackpot. Updated every morning.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Betpawa TZ Jackpot Card -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-amber-500/20 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-amber-400 font-bold">B</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Betpawa TZ Jackpot</h3>
                                </div>
                                <p class="text-gray-300 mb-4 text-sm">Expert predictions for Betpawa Tanzania jackpot with detailed analysis. Popular among East African bettors.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-600 hover:to-yellow-700 text-white rounded-lg font-medium transition-all duration-300 text-sm">
                                    Get Predictions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Popular Leagues Tab Content (Hidden by Default) -->
                <div id="leagues-tab" class="tab-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Premier League -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-red-600 font-bold">P</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">Premier League</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Expert predictions for all Premier League matches with detailed stats and analysis.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- La Liga -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-yellow-600 font-bold">L</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">La Liga</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Spanish La Liga predictions with comprehensive match analysis and betting tips.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Serie A -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-blue-600 font-bold">S</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">Serie A</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Italian Serie A match predictions with detailed team analysis and form guides.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Bundesliga -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 font-bold">B</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">Bundesliga</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">German Bundesliga betting tips with statistical analysis and expert predictions.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- UEFA Champions League -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-purple-600 font-bold">U</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">UEFA Champions League</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Elite European football predictions with expert analysis for Champions League matches.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- FA Cup -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-red-600 font-bold">F</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">FA Cup</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Detailed predictions for England's oldest football tournament with upset alerts and value bets.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- UEFA Europa League -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-purple-600 font-bold">U</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">UEFA Europa League</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Europa League betting tips with in-depth analysis for Europe's second-tier club competition.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- African Nations Championship -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-blue-600 font-bold">A</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">African Nations Championship</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Expert predictions for African football with local insights and specialized knowledge of African teams.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Friendlies -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-orange-600 font-bold">F</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">Friendlies</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">International friendly match predictions with insights on team strategies and player rotations.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                        
                        <!-- UEFA Nations League -->
                        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 transition-all duration-300 hover:shadow-amber-500/20 hover:transform hover:scale-[1.02]">
                            <div class="h-24 bg-gradient-to-r from-amber-500 to-yellow-600 flex items-center justify-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-purple-600 font-bold">U</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white">UEFA Nations League</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4 text-sm">Nations League betting tips with analysis of European national teams and their competitive matches.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="block text-center py-2 px-4 bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 rounded-lg font-medium transition-all duration-300 text-sm">
                                    View Predictions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div class="text-center mt-12">
                    <div class="max-w-3xl mx-auto bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                        <h3 class="text-xl font-bold text-white mb-4">Kenya's #1 Football Betting Tips Platform</h3>
                        <p class="text-gray-300 mb-4">
                            Top Football Prediction offers Free Football Betting Tips and Daily Football Predictions for Kenyan bettors. 
                            Download our Sure Tips Android app for complete jackpot access and free betting tips, updated daily before noon.
                        </p>
                        <p class="text-gray-300 mb-6">
                            For best results, be selective with your bets rather than wagering on all tips. 
                            Multi-bets with carefully chosen games have higher winning potential. 
                            Our expert predictions are designed to help you achieve long-term profits with consistent results.
                        </p>
                        <a href="https://play.google.com/store/apps/details?id=com.topfootballapp.mobile" class="inline-flex items-center justify-center px-8 py-4 border border-amber-500/20 rounded-full shadow-lg text-base font-medium text-amber-400 bg-amber-500/20 hover:bg-amber-500/30 transition-all duration-300">
                            Download Our Free Betting Tips App
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tab Switching JavaScript -->
        <script>
            function showTab(tabName) {
                // Hide all tabs
                document.querySelectorAll('.tab-content').forEach(tab => {
                    tab.classList.add('hidden');
                });
                
                // Show the selected tab
                document.getElementById(tabName + '-tab').classList.remove('hidden');
                
                // Update active button styles
                document.querySelectorAll('[role="group"] button').forEach(button => {
                    button.classList.remove('bg-amber-500', 'text-white');
                    button.classList.add('text-gray-700', 'hover:text-gray-900', 'hover:bg-gray-100');
                });
                
                // Set active button style
                const activeButton = document.querySelector(`[onclick="showTab('${tabName}')"]`);
                activeButton.classList.remove('text-gray-700', 'hover:text-gray-900', 'hover:bg-gray-100');
                activeButton.classList.add('bg-amber-500', 'text-white');
            }
        </script>
    </section>

    <!-- Features Section -->
</x-blog-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Close menu when clicking on a link
            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                });
            });
        }
    });
</script>

<!-- Popup Modal JavaScript -->
<script src="{{ asset('build/assets/popup-modal-DzSO8Dsm.js') }}"></script>

<!-- Popup Modal CSS -->
<link rel="stylesheet" href="{{ asset('build/assets/popup-modal-ASvdgryh.css') }}">