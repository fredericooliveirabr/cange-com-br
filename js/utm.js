document.addEventListener('DOMContentLoaded', function () {
    // UTM parameters to track
    const utmParams = ['utm_source', 'utm_medium', 'utm_term', 'utm_content', 'utm_campaign'];
    let currentUtms = {};

    // Check if there are UTMs in the URL
    const urlParams = new URLSearchParams(window.location.search);

    utmParams.forEach(param => {
        if (urlParams.has(param)) {
            const val = urlParams.get(param);
            if (val !== null && val !== undefined) {
                currentUtms[param] = val;
                // Save to sessionStorage to persist across page loads within the site
                sessionStorage.setItem(param, val);
            }
        } else if (sessionStorage.getItem(param)) {
            // Load from sessionStorage if not in current URL
            currentUtms[param] = sessionStorage.getItem(param);
        }
    });

    // Proceed if we have captured at least one UTM parameter
    const keys = Object.keys(currentUtms);
    if (keys.length > 0) {
        // Build the query string
        const utmQueryString = keys
            .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(currentUtms[key]))
            .join('&');

        // Find all links to the onboarding app
        const onboardingLinks = document.querySelectorAll('a[href*="app.cange.me/onboarding"]');

        onboardingLinks.forEach(link => {
            let href = link.getAttribute('href');

            if (!href.includes('utm_source=')) {
                // Check if URL from app.cange.me already has arguments
                if (href.indexOf('?') !== -1) {
                    // Contains a query string. Append the UTMs.
                    link.setAttribute('href', href + '&' + utmQueryString);
                } else {
                    // No query string, use '?'
                    link.setAttribute('href', href + '?' + utmQueryString);
                }
            }
        });
    }
});
