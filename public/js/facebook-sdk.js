window.fbAsyncInit = function() {
 FB.init({
   appId      : '1530924983872352',
   xfbml      : true,
   version    : 'v2.5'
 });
};

(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// $.getScript('//connect.facebook.net/en_UK/all.js', function() {
//    FB.init({
//       appId: '1530924983872352'
//    });
// });
