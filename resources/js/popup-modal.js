// Popup Modal Functionality with Rotating App Content
document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const welcomePopup = document.getElementById('welcomePopup');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const bottomCloseBtn = document.getElementById('bottomCloseBtn');
    
    // App data for rotation
    const apps = [
        {
            id: 'double-chance',
            name: 'Double Chance Predictions',
            title: '',
            description: '',
            icon: '',
            color: 'yellow',
            playStoreUrl: 'https://play.google.com/store/apps/details?id=com.doublechancepredictions.mobile',
            appStoreUrl: 'https://apps.apple.com/app/id6743367576',  // Double Chance Predictions ID
            promo: 'Download now for daily winning betting tips',
            backgroundImage: '/images/doublechanceprediction.png',
            darkMode: true
        },
        {
            id: 'goal-mind',
            name: 'Goal Mind Soccer Predictions',
            title: '',
            description: '',
            icon: '',
            color: 'red',
            playStoreUrl: 'https://play.google.com/store/apps/details?id=com.goalmind.soccerpredictions',
            appStoreUrl: 'https://apps.apple.com/app/id6747434463',  // Goal Mind Soccer Predictions ID
            promo: 'Download now for daily winning betting tips',
            backgroundImage: '/images/goalmind.png',
            darkMode: true
        }, 
        {
            id: 'topfootball',
            name: 'Top Football Predictions',
            title: '',
            description: '',
            icon: '',
            color: 'amber',
            playStoreUrl: 'https://play.google.com/store/apps/details?id=com.topfootballapp.mobile',
            appStoreUrl: 'https://apps.apple.com/app/id6742139266',  // Top Football Predictions ID
            promo: 'Download now for daily winning betting tips',
            backgroundImage: '/images/topfootball.png',
            darkMode: true
        },
        {
            id: 'over-tips',
            name: 'Over 1.5+ Daily Betting Tips',
            title: '',
            description: '',
            icon: '',
            color: 'yellow',
            playStoreUrl: 'https://play.google.com/store/apps/details?id=com.over15dailybettingtips.app',
            appStoreUrl: 'https://apps.apple.com/app/id6747388466',  // Over 1.5+ Daily Betting Tips ID
            promo: 'Download now for daily winning betting tips',
            backgroundImage: '/images/over1.5app.png',
            darkMode: true
        },
        {
            id: 'odds-predictions',
            name: '2+ Odds Predictions',
            title: '',
            description: '',
            icon: '',
            color: 'yellow',
            playStoreUrl: 'https://play.google.com/store/apps/details?id=com.twoplusodds.predictions',
            appStoreUrl: 'https://apps.apple.com/app/id6747434122',  // 2+ Odds Predictions ID
            promo: 'Download now for daily winning betting tips',
            backgroundImage: '/images/2oddspredictions.png',
            darkMode: true
        }
    ];
    
    // Icons mapping (simplified version of heroicons)
    const icons = {
        'phone': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />',
        'chart-bar': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3v18h18M9 9v10M15 5v14M21 11v8" />',
        'globe': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />',
        'trophy': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />',
        'arrow-trend-up': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2 16.5h12l3-8 5 8M2 16.5l7-7 3 3 5-5" />',
        'currency-dollar': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />'
    };
    
    // For debugging - clear localStorage if needed
    // localStorage.removeItem('lastPopupTime');
    // localStorage.removeItem('lastAppIndex');
    
    // Check when the popup was last shown
    const lastPopupTime = localStorage.getItem('lastPopupTime');
    const currentTime = new Date().getTime();
    const twoHoursInMs = 2 * 60 * 60 * 1000; // 2 hours in milliseconds
    
    // Show popup if user hasn't seen it before or if it's been more than 2 hours
    const shouldShowPopup = !lastPopupTime || (currentTime - parseInt(lastPopupTime) > twoHoursInMs);
    console.log('Last popup time:', lastPopupTime ? new Date(parseInt(lastPopupTime)).toLocaleString() : 'never');
    console.log('Current time:', new Date(currentTime).toLocaleString());
    console.log('Should show popup:', shouldShowPopup);
    
    // Get a random app index
    let currentAppIndex = Math.floor(Math.random() * apps.length);
    
    // Save the current app index
    localStorage.setItem('lastAppIndex', currentAppIndex.toString());
    
    // Get the current app to display
    const currentApp = apps[currentAppIndex];
    console.log('Showing app:', currentApp.name);
    
    // Update modal content with current app
    function updateModalContent() {
        // Update text content
        document.getElementById('appName').textContent = currentApp.name;
        
        // Remove domain text
        const domainElement = document.getElementById('appDomain');
        if (domainElement) {
            domainElement.style.display = 'none';
        }
        
        // Handle title element
        const titleElement = document.getElementById('appTitle');
        if (titleElement) {
            if (currentApp.title) {
                titleElement.textContent = currentApp.title;
                titleElement.parentElement.style.display = 'block';
            } else {
                titleElement.textContent = '';
                titleElement.parentElement.style.display = 'none';
            }
        }
        
        // Handle description element
        const descriptionElement = document.getElementById('appDescription');
        if (descriptionElement) {
            if (currentApp.description) {
                descriptionElement.textContent = currentApp.description;
                descriptionElement.style.display = 'block';
            } else {
                descriptionElement.textContent = '';
                descriptionElement.style.display = 'none';
            }
        }
        
        document.getElementById('appPromo').textContent = currentApp.promo;
        
        // Handle dark mode
        const modalContentElement = document.getElementById('modalContent');
        const termsElement = document.getElementById('termsText');
        if (currentApp.darkMode) {
            modalContentElement.classList.add('bg-gray-900');
            modalContentElement.classList.remove('bg-gradient-to-br', 'from-amber-700/30', 'to-transparent');
            if (termsElement) {
                termsElement.textContent = 'T&C Apply. Gambling can be addictive. Please play responsibly.';
                termsElement.classList.remove('text-white/50');
                termsElement.classList.add('text-white/80');
            }
        } else {
            modalContentElement.classList.remove('bg-gray-900');
            modalContentElement.classList.add('bg-gradient-to-br', 'from-amber-700/30', 'to-transparent');
            if (termsElement) {
                termsElement.textContent = 'T&C Apply. Gambling can be addictive. Please play responsibly.';
                termsElement.classList.add('text-white/50');
                termsElement.classList.remove('text-white/80');
            }
        }
        
        // Update icon
        const iconElement = document.getElementById('appIcon');
        if (iconElement) {
            if (currentApp.icon && icons[currentApp.icon]) {
                iconElement.innerHTML = icons[currentApp.icon];
                iconElement.style.display = 'block';
            } else {
                iconElement.innerHTML = '';
                iconElement.style.display = 'none';
            }
        }
        
        // Track click function
        const trackClick = async (clickType) => {
            try {
                await fetch('/track-app-click', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        app_id: currentApp.id,
                        app_name: currentApp.name,
                        click_type: clickType
                    })
                });
            } catch (error) {
                console.error('Error tracking click:', error);
            }
        };

        // Update download button
        const downloadButton = document.getElementById('appDownloadButton');
        if (downloadButton) {
            downloadButton.href = currentApp.playStoreUrl;
            downloadButton.textContent = `Download ${currentApp.name} App`;
            downloadButton.addEventListener('click', () => trackClick('download'));
        }
        
        // Update app store badges with correct URLs
        const appStoreBadges = document.querySelectorAll('img[alt="Google Play"], img[alt="App Store"]');
        if (appStoreBadges.length >= 2) {
            // First badge is Google Play
            const playStoreLink = appStoreBadges[0].parentElement;
            playStoreLink.href = currentApp.playStoreUrl;
            playStoreLink.addEventListener('click', () => trackClick('playstore'));
            
            // Second badge is App Store
            const appStoreLink = appStoreBadges[1].parentElement;
            appStoreLink.href = currentApp.appStoreUrl;
            appStoreLink.addEventListener('click', () => trackClick('appstore'));
        }
        
        // Update modal content color theme and background image
        const modalContent = document.getElementById('modalContent');
        if (modalContent) {
            // Remove existing color classes
            modalContent.className = modalContent.className.replace(/from-\w+-700\/30/g, '');
            // Reset background image
            modalContent.style.backgroundImage = '';
            modalContent.style.backgroundSize = '';
            modalContent.style.backgroundPosition = '';
            modalContent.style.backgroundRepeat = '';
            modalContent.style.opacity = '1';
            
            // Add new color class or background image
            if (currentApp.backgroundImage) {
                // Use background image if available
                modalContent.style.backgroundImage = `url(${currentApp.backgroundImage})`;
                modalContent.style.backgroundSize = 'cover';
                modalContent.style.backgroundPosition = 'center';
                modalContent.style.backgroundRepeat = 'no-repeat';
                modalContent.style.opacity = '0.6';
            } else {
                // Otherwise use color gradient
                modalContent.classList.add(`from-${currentApp.color}-700/30`);
            }
        }
    }
    
    if (shouldShowPopup) {
        // Small delay before showing popup
        setTimeout(() => {
            // Update content before showing
            updateModalContent();
            
            // Show the modal
            welcomePopup.classList.remove('hidden');
            welcomePopup.classList.add('flex');
            
            // Add animation class
            const modalContent = welcomePopup.querySelector('div > div');
            modalContent.classList.add('animate-fadeIn');
        }, 1500); // 1.5 second delay
    }
    
    // Close popup function
    function closePopup() {
        welcomePopup.classList.add('hidden');
        welcomePopup.classList.remove('flex');
    }
    
    // Close button event
    if (closePopupBtn) {
        closePopupBtn.addEventListener('click', function() {
            // Set the timestamp when closing with the X button
            localStorage.setItem('lastPopupTime', new Date().getTime().toString());
            closePopup();
        });
    }
    
    // Bottom close button (second X)
    if (bottomCloseBtn) {
        bottomCloseBtn.addEventListener('click', function() {
            // Set localStorage with current timestamp
            localStorage.setItem('lastPopupTime', new Date().getTime().toString());
            closePopup();
        });
    }
    
    // Close when clicking outside the modal
    welcomePopup.addEventListener('click', function(e) {
        if (e.target === welcomePopup) {
            // Also set the timestamp when clicking outside
            localStorage.setItem('lastPopupTime', new Date().getTime().toString());
            closePopup();
        }
    });
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !welcomePopup.classList.contains('hidden')) {
            localStorage.setItem('lastPopupTime', new Date().getTime().toString());
            closePopup();
        }
    });
});
