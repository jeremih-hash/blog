<!-- Popup Modal Component with Hero Image Style and Rotating App Content -->
<div id="welcomePopup" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black bg-opacity-80"></div>
    
    <!-- Modal Content -->
    <div class="relative w-[450px] h-[700px] overflow-hidden rounded-xl shadow-2xl">
        <!-- Close Button -->
        <button id="closePopupBtn" class="absolute top-3 right-3 z-20 text-white hover:text-amber-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        
        <!-- Background with gradient and pattern -->
        <div class="absolute inset-0 bg-[#0F172A] overflow-hidden">
            <!-- Gradient overlay -->
            <div id="modalContent" class="absolute inset-0 bg-gradient-to-br from-amber-700/30 to-transparent"></div>
            
            <!-- Animated pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-blue-500/40 rounded-full blur-xl"></div>
                <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-amber-500/30 rounded-full blur-xl"></div>
                <div class="absolute bottom-0 left-1/3 w-40 h-40 bg-blue-400/20 rounded-full blur-xl"></div>
            </div>
        </div>
        
        <!-- Content Container -->
        <div class="relative z-10 p-6 text-white h-full flex flex-col">
            <!-- Logo/Brand -->
            <div class="flex justify-between items-center mb-6">
                <div id="appName" class="text-2xl font-bold text-amber-400">App Name</div>
                <div id="appDomain" class="text-sm text-white/70">topfootball.com</div>
            </div>
            
            <!-- Main Heading -->
            <h3 class="text-3xl font-bold mb-2">
                <span id="appTitle" class="bg-clip-text text-transparent bg-gradient-to-r from-amber-400 via-yellow-500 to-amber-400">
                    App Title
                </span>
            </h3>
            
            <p id="appDescription" class="text-xl font-medium mb-6">App description will appear here</p>
            
            <!-- Illustration/Image -->
            <div class="relative h-48 mb-6 flex justify-center flex-grow">
                <!-- App icon/illustration -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <svg id="appIcon" xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <!-- Icon will be inserted by JavaScript -->
                    </svg>
                </div>
                
                <!-- Animated elements -->
                <div class="absolute top-1/2 left-1/4 w-2 h-2 bg-amber-400 rounded-full animate-ping"></div>
                <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-blue-400 rounded-full animate-ping" style="animation-delay: 0.5s"></div>
                <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-amber-400 rounded-full animate-ping" style="animation-delay: 1s"></div>
            </div>
            
            <!-- App Download Button -->
            <a id="appDownloadButton" href="#" 
               class="block w-full text-center py-4 px-4 text-white rounded-lg font-medium transition-all duration-300">
                Download Our App Now
            </a>
            
            <!-- Promotion details -->
            <div class="mt-4 text-center text-xs text-white/70 flex-shrink-0">
                <p id="appPromo">Promotion details will appear here</p>
                
                <!-- App store badges -->
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="flex-shrink-0">
                        <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Google Play" class="h-14 w-auto" style="margin-top: -1px;" />
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="flex-shrink-0">
                        <img src="https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" alt="App Store" class="h-12 w-auto" />
                    </a>
                </div>
                
                <!-- Terms -->
                <p id="termsText" class="mt-2 text-xs text-white/50">T&C Apply. Gambling can be addictive. Please play responsibly.</p>
            </div>
            
            <!-- Bottom Close Button (Second X) -->
            <div class="mt-4 flex justify-center">
                <button id="bottomCloseBtn" class="rounded-full bg-white/10 backdrop-blur-sm p-2 hover:bg-white/20 focus:outline-none transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
