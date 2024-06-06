@php
// Define the user agent detection function
function getUserAgent() {
    return $_SERVER['HTTP_USER_AGENT'] ?? '';
}
@endphp

<script>
    // Wrap the JavaScript code inside a closure to prevent conflicts
    (function () {
        'use strict';

        // User agent detection
        var userAgent = '{{ getUserAgent() }}';

        // Regular expressions for detecting mobile and tablet devices
        var mobileRegex = /android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i;
        var tabletRegex = /ipad|playbook|silk/i;

        // Function to detect if the user is on a mobile device
        function isMobile() {
            return mobileRegex.test(userAgent) || (tabletRegex.test(userAgent.substr(0, 4)));
        }

        // Function to detect if the user is on a tablet device
        function isTablet() {
            return isMobile() && !isPhone();
        }

        // Function to detect if the user is on a phone device
        function isPhone() {
            return mobileRegex.test(userAgent);
        }

        // Create an instance of the AOS object
        var AOS = function (options) {
            // AOS initialization logic
        };

        // Export the AOS object
        window.AOS = AOS;
    })();
</script>
