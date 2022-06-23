window.LazyLoadStripe = function(key, stripeCb) {
  if (window.Stripe && stripeCb) {
    stripeCb(Stripe(key));
  } else {
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.src = 'https://js.stripe.com/v3/';

    s.onload = function() { 
      try {
        if (!window.Stripe) {
          window.Stripe = Stripe;
        }

        if (stripeCb) {
          stripeCb(Stripe(key));
        }
      } catch(e) {
        console.log(e)
      }
    }

    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  }
}
