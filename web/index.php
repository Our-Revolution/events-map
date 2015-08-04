<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name='google-site-verification' content='-jE-f4Gbpim9_feo74iK5zP_-tegU7xvV89-yqFy7ZI' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="On July 29th, Bernie is asking Americans from across the country to come together for a series of conversations about how we can organize an unprecedented grassroots movement that takes on the greed of Wall Street and the billionaire class.">
    <meta name="keywords" content="Bernie Sanders, FeelTheBern, Events, Bernie, #bernie2016, #feelthebern">
    <meta property="og:image" content="http://d2bq2yf31lju3q.cloudfront.net/img/July29_FBMapImage_600px.png" />
    <meta property="og:url" content="http://map.berniesanders.com" />
    <meta property="og:title" content="July 29 Nationwide Organizing Meeting - Find Meetings Near You | Bernie Sanders 2016 Events"/>
    <meta property="og:description" content="On July 29th, Bernie is asking Americans from across the country to come together for a series of conversations about how we can organize an unprecedented grassroots movement that takes on the greed of Wall Street and the billionaire class."/>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,800">
    <link href='//api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
    <link href='/css/map.css?version=1.11' rel='stylesheet' />
    <link href='/css/custom.css?v=1.11' rel="stylesheet" type="text/css" />
    <link href='/css/work-map.css?v=1.11' rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/favicon.ico">

    <title>Bernie Sanders 2016 Campaign Work Map</title>
  </head>
  <body>




<?php require_once('inc/_header.php'); ?>
<div></div>
<section id='map-section' />
  <div id='map'></div>
  <div id='map-event-list'>
    <div id='map-instructions'>
      <span style="vertical-align: middle;font-weight: 600;"></span>  <img src="/img/logo.png" style="
    height: 20px;

    vertical-align: middle;
"> <span style="

vertical-align"> Let's get to work!</span>
    </div>
      <form id='zip-and-distance' action="#">
        <div id="error-box"></div>
        <div id='zipcode-container'>
          <input type='text' name='zipcode' id='input-text-zipcode' value='' placeholder='Enter zipcode to find events' maxlength='5'/>
          <input type='submit' id='hidden-submit' style='visibility: hidden; position: absolute; right:0;top:0; z-index: -1;'/>
        </div>
        <div id='distance-container'>
          <ul id='distance-list'>
              <li>
                        <input type='radio' id='mile-5' name='distance' value='5' /> <label for='mile-5'>5mi</label></li><li>
                        <input type='radio' id='mile-10' name='distance' value='10' checked='checked' /> <label for='mile-10'>10mi</label></li><li>
                        <input type='radio' id='mile-20' name='distance' value='20' /> <label for='mile-20'>20mi</label></li><li>
                        <input type='radio' id='mile-50' name='distance' value='50' /> <label for='mile-50'>50mi</label></li><li>
                        <input type='radio' id='mile-100' name='distance' value='100' /> <label for='mile-100'>100mi</label></li><li>
                        <input type='radio' id='mile-250' name='distance' value='250' /> <label for='mile-250'>250mi</label></li>          </ul>

        </div>
      </form>
      <div id='event-results-area'>
        <h2 id='event-results-count'><span id='event-counter'></span> <span>within</span> <span id='event-distance'></span> <span>of</span>
          <div id="event-city"></div>
        </h2>
        <div id='event-list-area'>
          <ul id='event-list'>
          </ul>
      </div>
  </div>
</section>
<footer>
  <sub>&copy; <a href='http://www.reddit.com/r/SandersForPresident'>SandersForPresident</a>. This site is not affiliated with the <a href='http://www.berniesanders.com'>Bernie Sanders</a> Campaign. <a href='mailto:rapi@bernie2016events.org'>Contact Us</a>.</sub>

</footer>

  <script src='//d2bq2yf31lju3q.cloudfront.net/js/d3.gz' type='text/javascript'></script>
  <script id='zipcodes-datadump' type='text/plain'></script>
  <script src="//d2bq2yf31lju3q.cloudfront.net/js/jquery.gz"></script>
  <script src='//d2bq2yf31lju3q.cloudfront.net/js/mapbox.gz'></script>
  <script type='text/javascript' src="/js/bern-map-async.js"></script>
  <script>
    $.ajax({
      // url: '//d2bq2yf31lju3q.cloudfront.net/js/bern-july-29-data.gz',
      url: 'd/work.csv',
      // dataType: 'script',
      dataType: 'text',
      cache: true, // otherwise will get fresh copy every page load
      success: function(data) {
        window.WORKDATA = data;
        window.dataCallback();
      }, error: function(a,b,c) {
        console.log(b,c);
      }
    });
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64649524-1', 'auto');
  ga('send', 'pageview');
  </script>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1465128650469416',
        xfbml      : true,
        version    : 'v2.3'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>
