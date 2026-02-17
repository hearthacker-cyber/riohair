<!-- includes/scripts.php -->
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.05)';
        }
    });
    // Google Translate Init
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,it,fr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

    // Load Google Translate Script
    (function() {
        var gtScript = document.createElement('script');
        gtScript.type = 'text/javascript';
        gtScript.async = true;
        gtScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gtScript, s);
    })();

    // Custom Language Switcher
    function changeLanguage(langCode) {
        var select = document.querySelector('.goog-te-combo');
        if (select) {
            select.value = langCode;
            select.dispatchEvent(new Event('change'));
            updateLanguageUI(langCode);
        } else {
            setCookie('googtrans', '/en/' + langCode, 1);
            location.reload();
        }
    }

    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + ';path=/';
    }
    
    function updateLanguageUI(langCode) {
        const langMap = {
            'en': 'English',
            'it': 'Italian',
            'fr': 'French'
        };
        const flagMap = {
            'en': 'us',
            'it': 'it',
            'fr': 'fr'
        };
        
        const currentLangSpan = document.getElementById('currentLang');
        if(currentLangSpan) {
             currentLangSpan.textContent = langMap[langCode] || 'English';
        }
        
        // Update dropdown active state if needed
    }

    // Parse cookie to set initial UI state
    document.addEventListener('DOMContentLoaded', function() {
       const cookies = document.cookie.split(';');
       let currentLang = 'en';
       for(let cookie of cookies) {
           if(cookie.trim().startsWith('googtrans=')) {
               const val = cookie.trim().split('=')[1];
               // val format is /en/it
               const parts = val.split('/');
               if(parts.length === 3) {
                   currentLang = parts[2];
               }
               break;
           }
       }
       updateLanguageUI(currentLang);
    });
</script>

<div id="google_translate_element" style="display:none;"></div>