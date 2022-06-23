const UTM_SOURCE = 'utm_source';
const HIDE_PRIVY_NOV_2020 = 'hide_privy_nov_2020';

// Get cookie and url param functions (minified)
function getURLParameter(e){return decodeURIComponent((new RegExp("[?|&]"+e+"=([^&;]+?)(&|#|;|$)").exec(location.search)||[,""])[1].replace(/\+/g,"%20"))||null}
function getCookie(e){for(var n=e+"=",t=decodeURIComponent(document.cookie).split(";"),o=0;o<t.length;o++){for(var r=t[o];" "==r.charAt(0);)r=r.substring(1);if(0==r.indexOf(n))return r.substring(n.length,r.length)}return""}

function deleteCookie(name) {
  document.cookie = `${name}=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;`;
}

const allowByQueryParam = () => getURLParameter(UTM_SOURCE) && !getCookie(HIDE_PRIVY_NOV_2020);

const isExitIntentPage = () => /(cart|checkout)/.test(window.location.pathname);

const allowByCookie = () => isExitIntentPage() && getCookie(UTM_SOURCE);

// Conditionally load privy
if (allowByQueryParam() || allowByCookie()) {
  var d = new Date();
  d.setTime(d.getTime() + (24*60*60*1000)); // Expire in 1 day
  var expires = "expires="+ d.toUTCString();
  document.cookie = `${HIDE_PRIVY_NOV_2020}=true;${expires};path=/`;

  if (isExitIntentPage()) { // Remove cookie to show exit intent popup only once
    deleteCookie(UTM_SOURCE);
  }

  // BEGIN -- Privy Snippet
  var _d_site = _d_site || 'BB924CED6226F3A9A3091210';
  (function(p, r, i, v, y) {
    p[i] = p[i] || function() { (p[i].q = p[i].q || []).push(arguments) };
    v = r.createElement('script'); v.async = 1; v.src = 'https://widget.privy.com/assets/widget.js';
    y = r.getElementsByTagName('script')[0]; y.parentNode.insertBefore(v, y);
  })(window, document, 'Privy');
  // END -- Privy Snippet
}
