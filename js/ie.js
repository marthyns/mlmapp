/* ---------------------------------------------------------------------- */
/*	Browser Compatibility Check
 /* ---------------------------------------------------------------------- */

function ieExecuteAfterLoading(retryCount, maxRetryCount, callback) {
    var timer = setTimeout(function () {
        clearTimeout(timer);
        if ((jQuery && jQuery.browser) || (retryCount >= maxRetryCount)) {
            try {
                callback.call(this);
            } catch (e) {
                console.log(e);
            }
        } else {
            ieExecuteAfterLoading(++retryCount, maxRetryCount);
        }
    }, 1000);
}

ieExecuteAfterLoading(0, 5, function checkBrowserCompatibility() {
    if (jQuery && jQuery.browser) {
        var browserVersion = parseInt(jQuery.browser.version, 10);
        if (jQuery.browser.msie) {
            var bResult = document.implementation.hasFeature("org.w3c.svg", "1.0");
            if (browserVersion <= 7 && !bResult) {
                window.location.href = 'update-browser.html';
            }
        }
    }
});

