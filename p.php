<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/favicon.ico">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"3c82c909e8",applicationID:"95255785"};window.NREUM||(NREUM={}),__nr_require=function(n,e,t){function r(t){if(!e[t]){var i=e[t]={exports:{}};n[t][0].call(i.exports,function(e){var i=n[t][1][e];return r(i||e)},i,i.exports)}return e[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(n,e,t){function r(){}function i(n,e,t){return function(){return o(n,[u.now()].concat(f(arguments)),e?null:this,t),e?void 0:this}}var o=n("handle"),a=n(4),f=n(5),c=n("ee").get("tracer"),u=n("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(n,e){s[e]=i(d+e,!0,"api")}),s.addPageAction=i(d+"addPageAction",!0),s.setCurrentRouteName=i(d+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(n,e){var t={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),n,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return e.apply(this,arguments)}catch(n){throw c.emit("fn-err",[arguments,this,n],t),n}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(n,e){m[e]=i(l+e)}),newrelic.noticeError=function(n,e){"string"==typeof n&&(n=new Error(n)),o("err",[n,u.now(),!1,e])}},{}],2:[function(n,e,t){function r(n,e){var t=n.getEntries();t.forEach(function(n){"first-paint"===n.name?a("timing",["fp",Math.floor(n.startTime)]):"first-contentful-paint"===n.name&&a("timing",["fcp",Math.floor(n.startTime)])})}function i(n){if(n instanceof c&&!s){var e,t=Math.round(n.timeStamp);e=t>1e12?Date.now()-t:f.now()-t,s=!0,a("timing",["fi",t,{type:n.type,fid:e}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var o,a=n("handle"),f=n("loader"),c=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){o=new PerformanceObserver(r);try{o.observe({entryTypes:["paint"]})}catch(u){}}if("addEventListener"in document){var s=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(n){document.addEventListener(n,i,!1)})}}},{}],3:[function(n,e,t){function r(n,e){if(!i)return!1;if(n!==i)return!1;if(!e)return!0;if(!o)return!1;for(var t=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],4:[function(n,e,t){function r(n,e){var t=[],r="",o=0;for(r in n)i.call(n,r)&&(t[o]=e(r,n[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],5:[function(n,e,t){function r(n,e,t){e||(e=0),"undefined"==typeof t&&(t=n?n.length:0);for(var r=-1,i=t-e||0,o=Array(i<0?0:i);++r<i;)o[r]=n[e+r];return o}e.exports=r},{}],6:[function(n,e,t){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(n,e,t){function r(){}function i(n){function e(n){return n&&n instanceof r?n:n?c(n,f,o):o()}function t(t,r,i,o){if(!d.aborted||o){n&&n(t,r,i);for(var a=e(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(n,e){h[n]=v(n).concat(e)}function m(n,e){var t=h[n];if(t)for(var r=0;r<t.length;r++)t[r]===e&&t.splice(r,1)}function v(n){return h[n]||[]}function g(n){return p[n]=p[n]||i(t)}function w(n,e){u(n,function(n,t){e=e||"feature",y[t]=e,e in s||(s[e]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:e,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var f="nr@context",c=n("gos"),u=n(4),s={},p={},d=e.exports=i();d.backlog=s},{}],gos:[function(n,e,t){function r(n,e,t){if(i.call(n,e))return n[e];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return n[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(n,e,t){function r(n,e,t,r){i.buffer([n],r),i.emit(n,e,t)}var i=n("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(n,e,t){function r(n){var e=typeof n;return!n||"object"!==e&&"function"!==e?-1:n===window?0:a(n,o,function(){return i++})}var i=1,o="nr@id",a=n("gos");e.exports=r},{}],loader:[function(n,e,t){function r(){if(!x++){var n=E.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(n&&n.licenseKey&&n.applicationID&&e))return s.abort();u(y,function(e,t){n[e]||(n[e]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=l.createElement("script");t.src="https://"+n.agent,e.parentNode.insertBefore(t,e)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=n("handle"),u=n(4),s=n("ee"),p=n(3),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1158.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=e.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};n(1),n(2),l[m]?(l[m]("DOMContentLoaded",o,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",i),d[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=n(6)},{}],"wrap-function":[function(n,e,t){function r(n){return!(n&&n instanceof Function&&n.apply&&!n[a])}var i=n("ee"),o=n(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;e.exports=function(n,e){function t(n,e,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){d([u,"",[r,a,i],f])}s(e+"start",[r,a,i],f);try{return c=n.apply(a,r)}catch(p){throw s(e+"err",[r,a,p],f),p}finally{s(e+"end",[r,a,c],f)}}return r(n)?n:(e||(e=""),nrWrapper[a]=n,p(n,nrWrapper),nrWrapper)}function u(n,e,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<e.length;c++)f=e[c],a=n[f],r(a)||(n[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||e){var o=c;c=!0;try{n.emit(t,r,i,e)}catch(a){d([a,t,r,i])}c=o}}function p(n,e){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(n);return t.forEach(function(t){Object.defineProperty(e,t,{get:function(){return n[t]},set:function(e){return n[t]=e,e}})}),e}catch(r){d([r])}for(var i in n)f.call(n,i)&&(e[i]=n[i]);return e}function d(e){try{n.emit("internal-error",e)}catch(t){}}return n||(n=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:site_name" content="iDreamCareer">
    <meta property="fb:app_id" content="1476803392610342">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="uTEEP3BBJUxf3iY5zJpIrjeZfIc06XbeBAz7mVDO">

    
    <title>Career Counselling in India, Career Counsellor, Guidance in India | iDreamCareer</title>
<meta name="description" content="Career Counselling in India: iDreamCareer is one of India's leading Career Couselling Experts that provides very detailed Career Guidance tips and Career Counselling Services to the students so that they can make the right choices in their career.">
<meta name="keywords" content="career guidance, career counselling, career counsellor, career guide, career counselling services">
<meta property="og:title" content="Career Counselling in India, Career Counsellor, Guidance in India" />
<meta property="og:description" content="Career Counselling in India: iDreamCareer is one of India's leading Career Couselling Experts that provides very detailed Career Guidance tips and Career Counselling Services to the students so that they can make the right choices in their career." />

<meta name="twitter:title" content="Career Counselling in India, Career Counsellor, Guidance in India" />
<meta name="twitter:description" content="Career Counselling in India: iDreamCareer is one of India's leading Career Couselling Experts that provides very detailed Career Guidance tips and Career Counselling Services to the students so that they can make the right choices in their career." />

    <!-- Styles -->
    <link href="https://d1o3vljpmm2h0a.cloudfront.net/css/app.a4ecf71ba891f86509de.css" rel="stylesheet">
    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', "UA-39855970-1", 'auto');

            ga('set', 'dimension3', 'logged out');
    
    ga('send', 'pageview');
</script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '1470786239651261'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=1470786239651261&ev=PageView
    &noscript=1"/>
    </noscript>
<!-- End Facebook Pixel Code -->
    <script type="text/javascript">
    (function(e,r){function n(e,r){e[r]=function(){e.push([r].concat(Array.prototype.slice.call(arguments,0)))}}function o(){var e=r.location.hostname.match(/[a-z0-9][a-z0-9\-]+\.[a-z\.]{2,6}$/i),n=e?e[0]:null,o="; domain=."+n+"; path=/; expires=" + new Date(new Date().setFullYear(new Date().getFullYear() + 1)).toUTCString();r.cookie=r.referrer&&-1===r.referrer.indexOf(n)?"jaco_referer="+r.referrer+o:"jaco_referer="+t+o}var a="JacoRecorder",t="none";!function(e,r,t,i){if(!t.__VERSION){e[a]=t;for(var c=["init","identify","startRecording","stopRecording","removeUserTracking","setUserInfo","trackEvent"],s=0;s<c.length;s++)n(t,c[s]);o(),t.__VERSION=2.1,t.__INIT_TIME=1*new Date;var f=r.createElement("script");f.async=!0,f.setAttribute("crossorigin","anonymous"),f.src=i;var d=r.getElementsByTagName("head")[0];d.appendChild(f)}}(e,r,e[a]||[],"https://recorder-assets.getjaco.com/recorder_v2.js")}).call(window,window,document);
    window.JacoRecorder.init("e2f5a195-0ff6-4d9e-a9d4-9659932fd019");
</script>

    <script>
        window.App = {"csrfToken":"uTEEP3BBJUxf3iY5zJpIrjeZfIc06XbeBAz7mVDO","recaptchaKey":"6Lf1ty0UAAAAAH2-XWjRvNY9pKW-x6rMHTCw6q9I","broadcastingKey":"5af4d2605c31018d5e8c"};
    </script>
</head>
<body class="" data-spy="scroll" data-target="#ssHeroTabs" data-offset="150">
    <div id="app">
        <!-- Navbar -->
        <!-- iDC Navbar -->
<nav id="mainStaticNavbar" class="idc_navbar navbar navbar-default primary-nav idc-section-alt">
    <div class="container container-base-width">
        <div class="main_logo navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primaryNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="https://idreamcareer.com" class="navbar-brand">
                <img class="img-responsive idc_logo" src="https://idreamcareer.com/images/idc_logo.png">
                <span class="idc_logo_text">iDreamCareer</span>
            </a>
            <!-- <span class="idc_logo_link"><a ng-href="home">iDreamCareer.com</a></span> -->
        </div>
        <div class="nav_items">
            <div class="collapse navbar-collapse" id="primaryNavbar">
                <ul class="nav_ul nav navbar-nav">
                    <li class="nav_li dropdown_menu">
                        <div class="dropdown programs-menu">
                            <button class="btn btn-default dropdown-toggle primary-links" type="button" id="programsMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="">Programs</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="programsMenu">
                                <li><a href="https://idreamcareer.com/career-planning-program/class-9-and-10">For Class 9-10</a></li>
                                <li><a href="https://idreamcareer.com/career-planning-program/class-11-and-12">For Class 11-12</a></li>
                                <li><a href="https://idreamcareer.com/career-planning-program/college-students">For College Level</a></li>
                                <li><a href="https://idreamcareer.com/career-counselling-for-private-schools-india">For Schools/Colleges</a></li>
                                <li><a href="https://idreamcareer.com/career-counselling-for-government-schools-india">For Govt./Non-Profit Sector</a></li>
                                <li><a href="https://idreamcareer.com/certification_in_career_counselling">For Career Counselors</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav_li">
                        <a class="primary-links" href="https://idreamcareer.com/credentials">Success Stories</a>
                    </li>
                    <li class="nav_li dropdown_menu">
                        <div class="dropdown career-menu">
                            <button class="btn btn-default dropdown-toggle primary-links" type="button" id="othersMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="">About Us</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="othersMenu">
                                <li><a href="https://idreamcareer.com/about">About</a></li>
                                <li><a href="https://idreamcareer.com/contact">Contact</a></li>
                                <li><a href="https://idreamcareer.com/blog">Blog</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav_li">
                        <a class="primary-links" href="https://idreamcareer.com/blog">Blog</a>
                    </li> -->
                    <li class="nav_li visible-xs"  href="">
                        <a href="https://idreamcareer.com/login" onclick="ga('send', 'event', {eventCategory: 'button', eventAction: 'click', eventLabel: 'login', transport: 'beacon'})">Login</a>
                    </li>
                </ul>
            </div>
            <ul class="nav_ul nav navbar-nav navbar-right">
                                <li class="nav_li hidden-xs hidden-sm ">
                    <a href="https://idreamcareer.com/login" onclick="ga('send', 'event', {eventCategory: 'button', eventAction: 'click', eventLabel: 'login', transport: 'beacon'})">Login</a>
                </li>
                <li class="nav_li ">
                    <a href="https://idreamcareer.com/register" onclick="ga('send', 'event', {eventCategory: 'button', eventAction: 'click', eventLabel: 'register', transport: 'beacon'})">Register</a>
                </li>
                                                <li class="nav_li hidden-sm">
                    <a class="contact_tag" href="tel:9555990000" onclick="ga('send', 'event', {eventCategory: 'button', eventAction: 'click', eventLabel: 'contact', transport: 'beacon'})"><i class="ion-ios-telephone"></i><span>9555990000</span></a>
                </li>
            </ul> <!-- nav_ul ends -->
        </div> <!-- nav_items ends -->
    </div> <!-- container ends -->
</nav> <!-- idc_navbar ends -->

        <!-- Page Content -->
        <section id="mainSection" class="home_bg hero-sec-alt">
    <div class="container container-base-width">
        <div class="row hero-sec-mul-col flex">
            <div class="mul-child as-center  col-xs-12 col-sm-5">
                <div class="hero_txt text-left">
                    <div class="hero_heading">We help students find a career that maximizes their potential</div>
                    <a href="https://idreamcareer.com/register?Lead_Source=IDC+HOME+page" class="btn btn-primary hp_cta">Get Started</a>
                </div><!-- hero_txt ends -->
            </div>
            <div class="mul-child as-center hero-features col-xs-12 col-sm-7 mobile-mt-none">
                <div class="hero-panel-mobile-holder">
                    <div class="mobile-panel-inner bg-mobile-frame">
                        <iframe
                        src="https://idreamcareer.com/video"
                        class="iframe-mobile-video"
                        scrolling="no"
                        allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                        allowfullscreen
                        frameborder="0"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- #mainSection ends -->

<section class="idc_section mobile-pt-md">
    <div class="container">
        <div class="row">
            <h3 class="sec_heading">Our Success Stories</h3>
            <div class="col-xs-12">
                <div class="carousel_container carousel_style_1 video_carousel col-xs-12">
                    <div id="heroTestimonialCarousel">
                        <div class="main_carousel carousel_cell text-left">
                            <div class="video">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PFVHUJP25Cg?showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="content">
                                <strong>Our work with Private Schools</strong>
                            </p>
                        </div>
                        <div class="main_carousel carousel_cell text-left">
                            <div class="video">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9msO4wzgMGI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="content">
                                <strong>Our work with Govt schools</strong>
                            </p>
                        </div>
                        <div class="main_carousel carousel_cell text-left">
                            <div class="video">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vecrm1VHwwk?showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="content">
                                <strong>Our work with career counselors</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec_cta">
            <a href="credentials" class="btn btn-secondary">More Success Stories</a>
        </div>
    </div>
</section> 
<!-- idc_section ends -->

<section id="blueGradientSec" class="idc_section gray_bg">
    <div class="container-fluid">
        <div class="col-xs-12">
            <div class="content_holder organization-logos-container">
                <div class="txt">
                    <h4>We work with the following organizations</h4>
                    
                    <div class="row mb--30 flex-row mt--30">
                        <div class="col-sm-2">
                            <p class="title-left"> Private
                                <br> Partners</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="organization-logos-new row">
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/Scindia-logo.png" class="equal-style-logo md" alt="scindia">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/the-shri-ram-school.png" class="equal-style-logo xlg" alt="the-shri-ram-school">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/maharaja-sawai-man-singh-school.png" class="equal-style-logo" alt="maharaja-sawai man-singh-school">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/kunskapsskolan.png" class="equal-style-logo" alt="kunskapsskolan">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/shiv-nadar-foundation.png" class="equal-style-logo lg" alt="shiv-nadar-foundation">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/sunbeam.png" class="equal-style-logo" alt="sunbeam">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/orchid-international-school.png" class="equal-style-logo" alt="orchid-international-school">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/indian-school-muscat.png" class="equal-style-logo">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/navy-education-society.png" class="equal-style-logo" alt="navy-education-society">
                                    </div>
                                    
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/air-force-school.png" class="equal-style-logo" alt="air-force-school">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 padding-none">
                                        <img src="https://idreamcareer.com/images/partners-new-image/pvt-school-logo/army-public-school.png" class="equal-style-logo  mob-md" alt="army-public-school">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb--30 flex-row">
                            <div class="col-sm-2">
                                <p class="title-left"> Government
                                    <br> Partners</p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="organization-logos-new row">
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/delhi-government.png" class="equal-style-logo" alt="delhi-government">
                                        </div>
                                        <div class="col-sm-3 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/andhra-pradesh-govt.png" class="equal-style-logo md" alt="andhra-pradesh-govt">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/rajasthan-govt.png" class="equal-style-logo" alt="rajasthan-govt">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/bihar-govt.png" class="equal-style-logo" alt="bihar-govt">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/jharkhand-govt.png" class="equal-style-logo" alt="jharkhand-govt">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/karnataka-govt.png" class="equal-style-logo k-top-space" alt="karnataka-govt">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/govt-logo/haryana-govt.png" class="equal-style-logo  mob-md" alt="haryana-govt">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 center-block mb--30">
                                <div class="row flex-row">
                                    <div class="col-sm-5">
                                        <p class="title-left"> United Nation <br/> Organisations</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="organization-logos-new row">
                                            <div class="col-sm-6 col-xs-6 padding-none">
                                                <img src="https://idreamcareer.com/images/partners-new-image/united-nation-logo/unicef.png" class="equal-style-logo" alt="unicef">
                                            </div>
                                            <div class="col-sm-6 col-xs-6 padding-none">
                                                <img src="https://idreamcareer.com/images/partners-new-image/united-nation-logo/undp.png" class="equal-style-logo" alt="undp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-sm-2">
                                    <p class="title-left"> Non-profit & <br>CSR Partners</p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="organization-logos-new row">
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/central-square-foundation.png" class="equal-style-logo" alt="central-square-foundation">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/raman-kant-munjal-foundation.png" class="equal-style-logo" alt="raman-kant-munjal-foundation">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/hero-fincorp.png" class="equal-style-logo" alt="hero-fincorp">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/magic-bus.png" class="equal-style-logo" alt="magic-bus">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/fair-lovely-foundation.png" class="equal-style-logo" alt="fair-lovely-foundation">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/miracle-foundation.png" class="equal-style-logo" alt="miracle-foundation">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/bharti-foundation.png" class="equal-style-logo  mob-md" alt="bharti-foundation-logo">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/Dsgrouplogo.png" class="equal-style-logo  mob-md" alt="Dsgrouplogo">
                                        </div>
                                        <div class="col-sm-2 col-xs-6 padding-none">
                                            <img src="https://idreamcareer.com/images/partners-new-image/csr_non-profit/apnalaya.png" class="equal-style-logo  mob-md" alt="apnalaya">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="idc_section homepage_blue_sec paddingtop-xlg no-paddingbottom">
        <div class="container container-base-width">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="sec_heading">How can iDC help you?</h3>
                </div>
                <div class="col-xs-12 idc-help-holder">
                    <div class="idc-help-box col-xs-12 col-sm-4 line-blue">
                        <div class="inner">
                            <img src="images/icons/class-9.svg" alt="" class="box-icon">
                            <h4 class="box-title">For Class (9<sup>th</sup> &amp; 10<sup>th</sup>)</h4>
                            <div class="box-text">We help you choose the right subjects/stream in class 11<sup>th</sup> basis your inherent potential/aptitude.</div>
                            <a href="https://idreamcareer.com/career-planning-program/class-9-and-10" class="box-cta">Know More</a>
                        </div>
                    </div>
                    <div class="idc-help-box col-xs-12 col-sm-4 line-teal">
                        <div class="inner">
                            <img src="images/icons/class-11-alt.svg" alt="" class="box-icon">
                            <h4 class="box-title">For Class (11<sup>th</sup> &amp; 12<sup>th</sup>)</h4>
                            <div class="box-text">We help you select the right course &amp; college &amp; keep you updated on college admission &amp; entrance exams notifications along with scholarships available for you.</div>
                            <a href="https://idreamcareer.com/career-planning-program/class-11-and-12" class="box-cta">Know More</a>
                        </div>
                    </div>
                    <div class="idc-help-box col-xs-12 col-sm-4 line-red">
                        <div class="inner">
                            <img src="images/icons/graduate-alt.svg" alt="" class="box-icon">
                            <h4 class="box-title">For College Students</h4>
                            <div class="box-text">We help you decide on changing your career path or deciding the right course at PG level or kind of job you should take up.</div>
                            <a href="https://idreamcareer.com/career-planning-program/college-students" class="box-cta">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 idc-help-holder">
                    <div class="idc-help-box col-xs-12 col-sm-4 line-green">
                        <div class="inner">
                            <img src="images/icons/schools-alt.svg" alt="" class="box-icon">
                            <h4 class="box-title">For Schools / Colleges</h4>
                            <div class="box-text">We help schools/colleges in delivering a robust career guidance program for their students which is delivered by the most experienced career counselors.</div>
                            <a href="https://idreamcareer.com/career-counselling-for-private-schools-india" class="box-cta">Know More</a>
                        </div>
                    </div>
                    <div class="idc-help-box col-xs-12 col-sm-4 line-purple">
                        <div class="inner">
                            <img src="images/icons/govt-sector-alt.svg" alt="" class="box-icon">
                            <h4 class="box-title">For Govt./non-profit</h4>
                            <div class="box-text">We help state/central government &amp; non-profit in education sector to launch &amp; execute career guidance program for low-income family students studying in government schools.</div>
                            <a href="https://idreamcareer.com/career-counselling-for-government-schools-india" class="box-cta">Know More</a>
                        </div>
                    </div>
                    <div class="idc-help-box col-xs-12 col-sm-4 line-orange">
                        <div class="inner">
                            <img src="images/icons/counselor-alt.svg" alt="" class="box-icon">
                            <h4 class="box-title">For Career Counselors</h4>
                            <div class="box-text">We empower counselors to deliver effective career counseling using our assessment report and information on careers/colleges/scholarships that are developed in our online platform.</div>
                            <a href="https://idreamcareer.com/certification_in_career_counselling" class="box-cta">Know More</a>
                        </div>
                    </div>
                </div>
            </div> <!-- row ends -->
        </div> <!-- container ends -->
        <!-- <hr class="idc_sec_separator"> -->
    </section> <!-- idc_section ends -->
    
    <section class="first-assessment-sec">
        <div class="container">
            <div class="row no-paddingright">
                <div class="section_idc_planning">
                    <div class="row">
                        <div class="col-xs-12 col-md-7 pull-right">
                            <img src="images/homepage/planning/2.png" alt="Delhi Govt." class="img-responsive">
                        </div>
                        <div class="col-xs-12 col-md-5 text-justify text-left-mobile">
                            <div class="idc-planning-content padding-assessment-sec">
                                <h4 class="p-heading">Psychometric Career Assessment Tool</h4>
                                <p>Assess student's aptitude, personality & interest (16 factors), result in an 18-page career report giving top career recommendations</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="blueGradientSec" class="idc_section blue_gradient_bg report-sec">
        <div class="container">
            <div class="row no-paddingright">
                <div class="col-sm-6 col-md-8 txt">
                    <h3>iDC Career assessment &amp; Report</h3>
                    <p>Our career assessment tool has been taken by over 9.5 lakh students and is the most credible tool available in India. It is available in English, Hindi, Marathi and most of the regional languages of India.</p>
                    <a href="https://idreamcareer.com/iDC_Sample_Report_English.pdf" target="_blank" class="btn btn-primary invert margintop-lg"><i class="ion-android-download marginright-sm"></i> Download Sample Report</a>
                </div>
                <div class="col-sm-6 col-md-4 graphic">
                    <img class="artwork" src="images/report-graphic.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="idc_section intro_video_sec blue_gradient_bg">
        <a class="intro_video_link" href="javascript:void(0)" data-toggle="modal" data-target="#introVideoModal">
            <div class="container">
                <div class="col-xs-12 no-paddingright">
                    <div class="content_holder col-sm-5 col-sm-offset-7 no-paddingright">
                        <div class="txt">
                            <i class="icon ion-ios-play"></i>
                            <h4>What is iDreamCareer?</h4>
                            <p>See this short video and get to know how IDC will help you get the right career path</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </section>
        </div>

    <!-- Footer -->
    <footer id="idcFooter" class="idc_footer">
  <div class="footer_main_links">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="left_sec col-sm-6">
            <img class="footer_logo" src="https://idreamcareer.com/images/idc_logo.png">
            <p>iDreamCareer.com (iDC) is one of India's largest unbiased career counselling venture working with 2.5 million students every year. iDC currently works with over 6700+ schools across India & the Middle East. It works with 12 state government (Delhi, Andhra Pradesh, Haryana, Rajasthan, Karnataka & more), various International Agencies (UNDP, UNICEF, Central Square Foundation & more), private schools (Shiv Nadar Foundation, The Shri Ram School, Navy Schools, Sunbeam Group, Maharaja Sawai Man Singh, Indian School Muscat, Kunskapsskolan, Orchid International group & more) & non-profit/CSR organizations (Hero Group, Magic Bus, Miracle Foundation, McKinsey’s Generation & more) in helping them establish effective career guidance solution for students.</p>
            <p>It has a team of 690 certified career counselors located across 90 Districts in India and the Middle East.</p>
            <p>iDC has been backed by marquee investors including US-based Impact VC Gray Matters Capital, Times of India Group, Mohit Satyanand (Chairman, Jaipur Literature Festival), Neeraj Gambhir (President, Axis Bank) and many more.</p>
            <ul class="link_bar_inline">
            </ul>
          </div>
          <div class="right_sec col-sm-6">
              <div class="mt--5 caption-logo">
              <img src="https://idreamcareer.com/images/ncda.png" width="130" class="ncda-logo" alt="">
            <small>Recognised by NCDA, USA as its organisational member for 2019-20</small>
          </div> 
          <div class="clearfix"></div>
            <div class="link_block margintop-md mt--15-imp">
              <h4>Main Links</h4>
              <ul class="link_bar_inline">
                <li><a href="">Home</a></li>
                <li><a href="https://idreamcareer.com/about">About</a></li>
                <li><a href="https://idreamcareer.com/credentials">Success Stories</a></li>
                <li><a href="https://idreamcareer.com/contact">Contact</a></li>
                <li><a href="https://idreamcareer.com/blog">Blog</a></li>
                <br>
                <li><a href="https://idreamcareer.com/certification_in_career_counselling">Certification Program for Career Counselors</a></li>
              </ul>
            </div>
            <div class="link_block">
              <h4>Career Planning Program</h4>
              <ul class="link_bar_inline">
                <li><a href="https://idreamcareer.com/career-planning-program/class-9-and-10">For Class 9-10</a></li>
                <li><a href="https://idreamcareer.com/career-planning-program/class-11-and-12">For Class 11-12</a></li>
                <li><a href="https://idreamcareer.com/career-planning-program/college-students">For College Level</a></li>
                <li><a href="https://idreamcareer.com/career-counselling-for-private-schools-india">For Schools/Colleges</a></li>
                <li><a href="https://idreamcareer.com/career-counselling-for-government-schools-india">For Govt./Non-Profit Sector</a></li>
              </ul>
            </div>
            <div class="link_block no-marginbottom">
              <h4>Other Links</h4>
              <ul class="link_bar_inline">
                <li><a href="https://idreamcareer.com/terms-and-conditions">Terms &amp; Conditions</a></li>
                <li><a href="https://idreamcareer.com/privacy-policy">Privacy Policy</a></li>
                <li><a href="https://idreamcareer.com/refund-policy">Refund Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_seo_links">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12 col-sm-3">
            <div class="link_block">
              <ul class="link_bar_block">
                <li><a href="https://idreamcareer.com/blog/what-after-10th">What after 10<sup>th</sup>?</a></li>
                <li><a href="https://idreamcareer.com/what-after-12th">What After 12th</a></li>
                <li><a href="https://idreamcareer.com/blog/milestones-towards-a-happy-satisfied-career">Happy & Satisfied Career</a></li>
                <li><a href="https://idreamcareer.com/blog/effectiveness-of-career-assessment-tests">Career Assessments</a></li>
                <li><a href="https://idreamcareer.com/blog/career-planning-tips-for-students">Career Planning Tips</a></li>
                <li><a href="https://idreamcareer.com/blog/role-of-parents-in-career-planning">Role of Parents in Careers</a></li>
                <li><a href="https://idreamcareer.com/college-and-career-guidance">College and Career Guidance</a></li>
                <li><a href="https://idreamcareer.com/blog/steps-to-study-abroad">Studying Abroad Tips</a></li>
                <li><a href="https://idreamcareer.com/psychometric-career-test">Psychometric Career Test</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="link_block">
             
              <ul class="link_bar_block">
                <li><a href="https://idreamcareer.com/explore-careers/agriculture-food/botany">Career in Botany</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/allied-medical-sciences/nutrition-and-dietetics">Career in Nutrition</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/animation-graphics/multimedia">Career in Multimedia</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/architecture/architect">Career in Architecture</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/business-management/retailing">Career in Retail</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/design/fashion-designing">Career in Fashion Design</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/education-teaching/school-teacher">Career in School Teaching</a></li>
                <li><a href="https://idreamcareer.com/career-counselling-in-delhi">Career Counselling in Delhi</a></li>
                <li><a href="https://idreamcareer.com/career-workshop-schools">Career Workshop for Schools</a></li>
                <li><a href="https://idreamcareer.com/parents-workshops-india">Parent Workshops in Schools</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="link_block">
             
              <ul class="link_bar_block">
                <li><a href="https://idreamcareer.com/explore-careers/engineering/computer-engineering">Career in Computer Engineering</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/finance-acct-banking/insurance">Career in Insurance</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/govt-defence/air-force">Career in Air Force</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/hospitality-tourism/hospitality-management">Career in Hospitality</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/information-technology/software-engineer">Career in Software Engineering</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/journalism/journalism">Career in Journalism</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/legal-studies/cyber-law">Career in Cyber Law</a></li>
                <li><a href="https://idreamcareer.com/career-counselling-test">Career Counselling Test</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="link_block">
             
              <ul class="link_bar_block">
                <li><a href="https://idreamcareer.com/explore-careers/mass-communication/advertising">Career in Advertising</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/mass-communication/film-making">Career in Film Making</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/medical-sciences/obstetrics-gynaecology">Career in Gynaecology</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/medical-sciences/microbiology-2">Career in Microbiology</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/performing-arts/dance">Career in Dance</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/performing-arts/music">Career in Music</a></li>
                <li><a href="https://idreamcareer.com/explore-careers/sales-marketing/e-marketinginternet-marketing-digital-marketing">Career in Digital Marketing</a></li>
                <li><a href="https://idreamcareer.com/online-career-counselling">Online Career Counselling</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_social_links">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12 col-sm-5 col-md-4">
            <a class="ttm_link" onclick="ga('send', 'event', {eventCategory: 'button', eventAction: 'click', eventLabel: 'contact', transport: 'beacon'})" href="tel:9555990000">
              <div class="talk_to_mentor sec_table">
                <div class="call_icon sec_table_cell">
                  <span class="sec_table paddingright-sm">
                    <i class="ion-ios-telephone"></i>
                  </span>
                </div>
                <div class="call_number sec_table_cell">
                  <h5>Talk to a Student Advisor</h5>
                  <h4>9555990000</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 lg-center">
              <a href="https://play.google.com/store/apps/details?id=com.idreamcareer.app" target="_blank">
                <img src="https://idreamcareer.com/images/google-play.png" class="img-responsive" width="160" alt="">
              </a>
          </div>
          <div class="col-xs-12 col-sm-7 col-md-4">
            <div class="social_links">
              <h5>We are Social, Follow us on</h5>
              <div class="social_icons">
                <a href="https://www.facebook.com/Idreamcareer/" target="_blank" rel="nofollow">
                  <i class="ion-social-facebook facebook"></i>
                </a>
                <a href="https://twitter.com/idreamcareer" target="_blank" rel="nofollow">
                  <i class="ion-social-twitter twitter"></i>
                </a>
                <a href="https://www.youtube.com/user/idreamcareer" target="_blank" rel="nofollow">
                  <i class="ion-social-youtube youtube"></i>
                </a>
                <a href="https://plus.google.com/+idreamcareercounselling" target="_blank" rel="nofollow">
                  <i class="ion-social-googleplus gplus"></i>
                </a>
                <a href="https://www.instagram.com/idreamcareer/" target="_blank" rel="nofollow">
                  <i class="ion-social-instagram instagram"></i>
                </a>
                <a href="https://www.quora.com/profile/IDreamCareer-1" target="_blank" rel="nofollow">
                  <i class="fa fa-quora quora"></i>
                </a>
                <a class="visible-xs-inline-block" href="whatsapp://send?text=Checkout iDreamCareer at">
                  <i class="ion-social-whatsapp whatsapp"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <div class="detailed-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="content-block">
                        <h2 class="sub-heading">What is Career Counselling?</h2>
                        <p>In the present times, students face many challenges whether it is keeping up with their syllabus, decent grades, world knowledge, self-interests and much more. They certainly reach a point in their life where they are expected to choose a specific stream for a successful career ahead. But is that simple?</p>
                        <p>Career planning is a complex process that will change according to situations and one will continually have to make career and life decisions. Making a fruitful career choice is a challenge for most students as they are confused by the subject choices, peer pressure and family opinions. This is where professional career counselling comes to the rescue. It is a scientific method of guiding an individual through his/her career choices. </p>
                        <p>The career development of a student is influenced by numerous factors present in their lives such as interests, strengths, personality, values, lifestyle, and background. Career counselling not only opens the door to best career choices but also highlights the major qualities of your personality. The aim of career guidance institutes is to define a suitable career path for a student where career counselors play a key role. Career counsellors are qualified and trained experts that make students realize their interests, work and career trends so that they can take a well-informed career planning decision. The route to the right career starts with the support of a career guidance counselor and the practices they follow. Career counselling is unbiased and highlights the major points to consider while making a career direction through a collaborative partnership with the students.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">Why One Needs Career Counselling?</h2>
                        <h4>To Find the Best Career Choice</h4>
                        <p>There are many instances in the life of students where they are at the crossroads, trying to choose between a perfect career and their interests. Many students fear their parents or blindly trust their choices and end up selecting the wrong field of study without inspecting their inner qualities. </p>
                        <p>Redefining the power of knowledge, guidance and counselling in education sector allow students to make better career decisions. Every student has a unique set of capabilities as well as different exploration needs regarding a career choice. Keeping this aspect in mind, experts conduct career counseling for students where they listen to student views patiently. They help them define career goals and provide a concrete roadmap to reach them. Career counseling for students incorporates trusted approaches to understand their abilities, strengths, knowledge, and interests. Many students fall victim to peer pressure and limited knowledge of career trends and decide on a wrong stream. A Career guidance counselor helps the students understand their real career goals. They can also be helpful at the stage of entering the working environment or when wanting to shift to a new career.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">To Discover All the Opportunities in the Market</h2>
                        <p>One of the most vulnerable situations for a student comes when they pass high school. For some students, choosing a career path is a piece of cake while others struggle to extract the relevant information for their career. This is where career guidance and counselling platforms come into action. Career counsellors associated with such platforms are proficient in delivering essential advice to the students in need. They keep themselves updated with what’s latest in the market through research and are the right people to know about the job opportunities and current market scenario. For instance, you might still be unaware of the job areas like ethical hacking, bartending, and astrophysics. However, a career guidance institute with thorough research and proper direction allows you to make an informed and safe decision. Besides, career counselors help the students with diverge mindset to lead a specific and robust career choice. You must visit a career guidance institute to discover the effective alternatives present in the market. </p>
                        <p>A career guide has relevant experience in understanding the psychology of the students, the scope of different streams and the ability to assess the real potential of the students. But it is important to avail career counselling services only from a reputed institute.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">Who Needs Career Counselling and When?</h2>
                        <p>It is important to understand that career development is not a growth process in the vacuum. Career counselling does not only help one make the decisions they need to make today but it gives you the relevant knowledge and skills to make future career and life decisions.</p>
                        <p>Career counselling services should be best availed during the age of 13-18 (8th to 12th class). This time period accounts for some of the most vulnerable years for the students as they experience many physical and emotional changes. Especially, <a href="https://idreamcareer.com/what-after-12th">what to do after 12th</a> standard, students require career counselling to choose the right colleges and courses for better study and job opportunities.</p>
                        <p>The second stage of career guidance comes after the completion of graduation. Students might be confused about their future course of study or jobs as a fresher. Some may even be thinking of switching to another stream altogether. Nowadays, career guides are also helping people who are interested in changing career after their post graduation and leave their mark in a completely different field.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">Things to Know before Going for Career Counselling</h2>
                        <p>There may be many doubts about career counselling services, their legitimacy and their effect on career choices. However, it is important to know what happens at counselling and what does not:</p>
                        <ol class="content-list">
                            <li><strong>Career Counselling</strong> helps in figuring out the personality of the candidate. It also helps to understand what they want from their education, career and life.</li>
                            <li><strong>Career guides</strong> are there to talk about the thoughts of candidates, their feelings, the concerns about their career, their educational choices, etc. and organize all these thoughts to reach to a favourable decision. </li>
                            <li>Career counsellors help candidates to locate resources and sources of career information.</li>
                            <li>Narrowing and evaluating different career choices becomes easy with the help of a career guide.</li>
                            <li>These guides assist individuals in understanding the factors that may influence their career development, interests, abilities, and values.</li>
                            <li>Counsellors help you to develop the steps in career planning.</li>
                            <li>However, career counsellors do not directly vouch for particular careers, courses, and colleges. Their views are unbiased and based on candidates’ abilities.</li>
                            <li>Career counselling is not a service that helps people get a job or admission in college. They may help in starting writing a resume but do not write one.</li>
                            <li>Taking counselling for planning career is not a short-term process that gives instant results.</li>
                        </ol>   
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">What is iDreamCareer?</h2>
                        <p>iDreamCareer (iDC) is the largest and one of the most reputed career counselling service providers in India. It has the largest number of students served for counselling services and currently working with 7 lac students in the academic year 2017-18. At iDC, we assist students to choose the best career by helping them in identifying their abilities.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="sub-heading">How iDC Provides the Best Career Counselling in India?</h2>
                        <p>iDreamCareer have the <a href="https://idreamcareer.com/career-counselling-in-delhi">best career counsellors in Delhi</a>, India who use scientific methods, <a href="https://idreamcareer.com/career-counselling-test">aptitude tests</a> along with numerous other tools and career tests like <a href="https://idreamcareer.com/psychometric-career-test">psychometric tests</a> to assist students of 9th -12th standard and college students to provide a better career guidance. Its proprietary career assessment tools have been taken by 6,00,000 + students till date, the largest number for any career assessment tests developed in India.</p>
                        <p>It is vigilant about taking students’ personal interests into consideration and sharing the apt career choices. Expect well-researched, unbiased and up-to-minute updated content on 450+ careers, 400+ entrance exams and 360+ scholarships/competitions.  There are numerous career counsellors in India, but there are hardly any career counsellors and career counselling centres with such a deep and systematic methodology as iDreamCareer.</p>
                        <p>We are not a limited platform that only focuses on asking about the desired career choices of a student.  Instead, iDreamCareer.com goes beyond that and encourages a student to always be self-aware and aware of the market trends. We offer expert-level tools that help students analyze their personality, understand their career matches, and embrace the most optimal career option for themselves with continuous support from career counsellors along the way.</p>
                        <p>As a career guidance and counselling platform, iDreamCareer.com understands how important is a career can be for a student. Thus, we are here to strategize a solid career plan for you. iDreamCareer aims to be a strong pillar for the young generation of India by accelerating their careers in the right direction.  strive to provide the best advice and support to the students regarding mastering their goals and bringing career satisfaction.</p>
                        <p>Career counselling in India is not so difficult anymore because of the presence of iDreamCareer. It is also India’s first and only multilingual career counselling platform with career content available in English & Hindi language, with Marathi & Telugu content already in process. One just needs to connect to our career experts and we will ensure continuous assistance till you make good progress in your career path. iDreamCareer also provides <a href="https://idreamcareer.com/career-counselling-in-bangalore">Career Counselling in Bangalore</a> and <a href="https://idreamcareer.com/career-counselling-in-mumbai">Career Counselling in Mumbai</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reviews-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h2 class="sub-heading">Reviews about iDreamCareer</h2>
                    <div class="reviews-carousel" id="reviewsCarousel">
                        <div class="carousel-cell">
                            <div class="review-text">I am DU a graduate student in commerce. I was really confused about my career after graduating and opt for CA. But after finding it not much compatible to me, I decided to take career counselling, which helped me a lot to know about myself and my interests to make career on such. It was a great experience and I hope it would help me further in future.</div>
                            <div class="reviewer-name">Ankur Sharma</div>
                        </div>
                        <div class="carousel-cell">
                            <div class="review-text">Before coming here i was lost and had no idea about what to do in my life. I was planning to do engineering but I was diagnosed with dyslexia and discalculia and was told that i would not be able to do engineering. having no clue what to do next in life. I came here and they helped me with everything. I got answers to all my questions and now i have a clear goal in life. The session was very convincing and I am more focused than ever.</div>
                            <div class="reviewer-name">Sagar Pandita</div>
                        </div>
                        <div class="carousel-cell">
                            <div class="review-text">My son contacted idreamcareer to get counselling for opting stream in class 11 and to get an idea of what career to choose and got an excellent result as idreamcareer gave him various options to choose after class 12 and made him clear to choose his stream and he was peacfully satisfied.</div>
                            <div class="reviewer-name">Vaibhav</div>
                        </div>
                        <div class="carousel-cell">
                            <div class="review-text">I'm Prateek Kapoor and I just completed my 12th in commerce without maths stream from Laxman Public School. In the last few months of my 12th I was really confused about my future and I had all the thoughts that students of my class have. I knew I wanted to do something in business but wasn‘t really clear about different aspect and ways and then after a bit of research I meme to know about iDreamcareer and then I enrolled here and I must say that I don't really regret that as it helped me a lot. I came to know about different colleges and courses that I could go for and filled up forms of the best institutes so this place not only helped me in finding the best colleges but also the best courses for me and now all my confusion and doubts are clear now and I have a clear vision about my future path. I would really like to thank the staff for being so helpful at all the points.</div>
                            <div class="reviewer-name">Prateek Kapoor</div>
                        </div>
                        <div class="carousel-cell">
                            <div class="review-text">I am from Green Fields school. I am a class 1oth student .The counselling session was extremely beneficial. Got to know about a wide variety of fields. They guided me to select a career according to my aptitude and interest.</div>
                            <div class="reviewer-name">Vartika Razathani</div>
                        </div>
                        <div class="carousel-cell">
                            <div class="review-text">As other kids passing 12th, my son was in a lot of confusion as to which programme he should pursue for his undergraduate studies. As a mother it was extremely important for me that he chooses a profession of his choice. Not only that he should know all the pros and cons of his choices. I thank Idream in not only sorting our confusions but also helping him choose the right career path for him. The entire staff is extremely helpful. Thank you Toolika for giving your personal attention and advise to him.</div>
                            <div class="reviewer-name">Anu Khanna</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h2 class="sub-heading">Career Counselling Related FAQs</h2>
                    <ol class="faq-list">
                        <li>
                            <div class="faq-block">
                                <div class="question">How does iDreamCareer assist in career guidance in class 9th and 10th?</div>
                                <div class="answer">At iDreamCareer, we follow 5 steps of career planning during which you can learn the current trends and career options. We help you map your potential and align it with career choices available. We also help you select the right subjects for pursuing a fruitful career.</div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-block">
                                <div class="question">Which stream should I choose after 10th?</div>
                                <div class="answer">iDreamCareer helps in <a href="https://idreamcareer.com/blog/what-after-10th">career counselling after 10th</a> class and earlier. We will use our methods and career procedures to give a thorough assisting in choosing streams after 10th based on student’s aptitude and personality. </div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-block">
                                <div class="question">How does iDreamCareer assist in Career counselling in class 11th and 12th?</div>
                                <div class="answer">We understand the need of an individual and the importance of <a href="https://idreamcareer.com/blog/engineering-dilemma-mba-or-mtech">career guidance after engineering</a> while moving out of school and entering a college. iDC will help you understand the college subjects and help you shortlist colleges. Career guidance at iDC will also provide you guidance on application and admission procedures.</div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-block">
                                <div class="question">What are my career options after graduating from science or commerce or arts?</div>
                                <div class="answer">There is a wide range of careers after each of these streams. A science graduate can use career counselling to understand if they want to go for academics, research, pharmaceutical companies, chemist jobs, scientists, management jobs, armed forces, forestry, etc. A commerce graduate can go for accounting, Economics, CA, management, academics, and etc. jobs. Career for arts students includes public affairs, historians, geography related careers, public servants, etc.</div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>    
  <div class="footer_copyright">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <p>Copyright - Medhavi Professional Services Pvt Ltd.</p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Modals -->
<div class="modal fade" id="getStartedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

    <div class="modal-header">
      <h3 class="modal-title text-center">Please provide the following details:</h3>
    </div>

    <div class="modal-body">
      <div class="idc_form">
        <div class="form_box">
          <form id="getStartedForm" name="cpp_cat_form" class="main_form" action="" method="get">
            
            <input type="hidden" name="source" value="IDC Website">
            <input id="js-user-category" type="hidden" name="user_category" value="Class 9-10">
            <input id="js-redirect-url" type="hidden" name="redirect_url" value="">
            
            <div class="form-inline idc_form_inline">
              
              <div class="form-group">
                <input type="text" id="cppFName" class="idc_inputtext" name="first_name" placeholder="First Name" required>
              </div> <!-- form-group ends -->

              <div class="form-group">
                <input type="text" id="cppLName" class="idc_inputtext" name="last_name" placeholder="Last Name" required>
              </div> <!-- form-group ends -->

            </div>

            <div class="form-group">
              <input type="email" id="cppEmail" class="idc_inputtext" name="email" placeholder="Email" required>
            </div> <!-- form-group ends -->

            <div class="form-group">
              <input type="number" id="cppPhone" class="idc_inputtext" name="mobile" placeholder="Mobile Number" required>
            </div> <!-- form-group ends -->
            
            <div class="form-group margintop-lg">
              <h5 class="text-center">You / Your child is in...</h5>
              <div class="cpp_program_radio_group col-xs-12 no-padding">
                <div class="btn-group radio_btn_group js-idc-class">
                  <button type="button" class="btn radio_btn_vertical col-xs-4 category_selected js-idc-for-9-10">Class 9-10</button>
                  <button type="button" class="btn radio_btn_vertical col-xs-4 js-idc-for-11-12">Class 11-12</button>
                  <button type="button" class="btn radio_btn_vertical col-xs-4 js-idc-for-colleges">College</button>
                </div>
              </div> <!-- cpp_program_radio_group ends -->
            </div> <!-- form-group ends -->

            <div class="form-group">
              <button type="submit" class="btn btn-form-cta margintop-lg">Submit</button>
            </div> <!-- form-group ends -->

          </form> <!-- signin_form ends -->

        </div> <!-- form_box ends -->
      </div>
    </div>
    </div>
  </div>
</div><div class="modal fade static-modal" id="assessmentsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

    <div class="modal-header sec_table">
      <img class="feature-img img-responsive sec_table_cell" src="https://idreamcareer.com/images/dashboard/icons/assessment.svg" />
      <h3 class="modal-title sec_table_cell">Psychometric Career Assessments</h3>
    </div>

    <div class="modal-body padding-md">
      <ul class="no-margin">
        <li>Aptitude, Interest &amp; Personality Test</li>
        <li>17 page personalised Career Report</li>
        <li>Top career recommendation based on scientific results</li>
      </ul>
    </div>
    </div>
  </div>
</div><div class="modal fade static-modal" id="counsellingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

    <div class="modal-header sec_table">
      <img class="feature-img img-responsive sec_table_cell" src="https://idreamcareer.com/images/dashboard/icons/counselor.svg" />
      <h3 class="modal-title sec_table_cell">Career Counseling Center</h3>
    </div>

    <div class="modal-body padding-md">
      <ul class="no-margin">
        <li>Get mapped to a personalised career planner</li>
        <li>Chat support with a career planner</li>
      </ul>
    </div>
    </div>
  </div>
</div><div class="modal fade static-modal" id="encyclopediaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

    <div class="modal-header sec_table">
      <img class="feature-img img-responsive sec_table_cell" src="https://idreamcareer.com/images/dashboard/icons/explore-careers.svg" />
      <h3 class="modal-title sec_table_cell">Career Encyclopedia</h3>
    </div>

    <div class="modal-body padding-md">
      <ul class="no-margin">
        <li>Access detail information on 240 professional careers</li>
        <li>Access detail information on 221 vocational careers</li>
      </ul>
    </div>
    </div>
  </div>
</div><div class="modal fade static-modal" id="examDirectoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

    <div class="modal-header sec_table">
      <img class="feature-img img-responsive sec_table_cell" src="https://idreamcareer.com/images/dashboard/icons/exam-alert.svg" />
      <h3 class="modal-title sec_table_cell">Entrance Exam Directory</h3>
    </div>

    <div class="modal-body padding-md">
      <ul class="no-margin">
        <li>Access detail information on 955+ entrance exams in India</li>
      </ul>
    </div>
    </div>
  </div>
</div><div id="introVideoModal" class="modal video_modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-ios-close-empty"></i></span></button>
        <h4 class="modal-title">What is iDreamCareer?</h4>
        <h5 class="modal-subtitle">How iDC can help you get the right career path</h5>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/rbuxp5x8rsM?&autohide=2&modestbranding=0&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><div class="modal fade" id="getPricingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content no-paddingbottom">
      <button class="btn btn-empty close modal_nav" aria-label="Close" data-dismiss="modal" type="button"><i class="ion-ios-close-empty"></i></button>

      <div class="modal-header">
        <h3 class="modal-title text-center">Fill out the following details:</h3>
      </div>

      <div class="modal-body">
        <div class="idc_form">
          <div class="form_box">

            <form id="buyPackageForm" name="buy_package_form" class="main_form js-pricing-form" method="POST" action="">
              
              <div class="form-inline idc_form_inline">
                <div class="form-group">
                  <input type="text" id="cppFName" class="idc_inputtext" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                  <input type="text" id="cppLName" class="idc_inputtext" name="last_name" placeholder="Last Name" required>
                </div>
              </div>

              <div class="form-group">
                <input type="email" id="cppEmail" class="idc_inputtext" name="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <input type="number" id="cppPhone" class="idc_inputtext" name="phone_no" placeholder="Phone" required>
              </div>

              <div class="form-group">
                <div class="radio text-left">
                  Gender: 
                  <label>
                    <input type="radio" id="signupGenderMale" name="gender" value="m" checked>
                    Male
                  </label> <!-- <label> ends -->
                  <label>
                    <input type="radio" id="signupGenderFemale" name="gender" value="f">
                    Female
                  </label> <!-- <label> ends -->
                </div> <!-- radio ends -->
              </div> <!-- form-group ends -->

              <div class="form-group marginbottom-lg">
                <div class="radio text-left">
                  Package: <br>
                  <label>
                    <input type="radio" id="packageInform" name="package_id" value="2" checked>
                    iDC Inform Package: Rs. 4999.00/-
                  </label> <!-- <label> ends -->
                  <label>
                    <input type="radio" id="packageExplore" name="package_id" value="3">
                    iDC Explore Package: Rs. 7999.00/-
                  </label> <!-- <label> ends -->
                  <label>
                    <input type="radio" id="packageAspire" name="package_id" value="4">
                    iDC Aspire Package: Rs. 14999.00/-
                  </label> <!-- <label> ends -->
                </div> <!-- radio ends -->
              </div> <!-- form-group ends -->

              <div class="form-group">
                <button type="submit" name="submit" value="Buy Now" class="btn btn_pricing btn-form-cta margintop-lg">Buy Now</button>
              </div> <!-- form-group ends -->

            </form> <!-- signin_form ends -->
          </div> <!-- form_box ends -->
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Scripts -->
    
            <script type="text/javascript">
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
    {widgetcode:"ec03fee81793040a70f416218e2847029cc1427d206b0387ae2515d64ce0f4de5d5fe629768af6d9a03793700d9418c2", values:{},ready:function(){}};
    var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
    s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
    
    <!-- <script src=" "></script> -->
<!-- <script src=" "></script> -->
<script src="https://d1o3vljpmm2h0a.cloudfront.net/js/app.8d790e6e755dc5c0ab29.js"></script>

<script type="text/javascript">
    _linkedin_data_partner_id = "202714"; 
</script>
<script type="text/javascript">
    (function () {
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })();
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=202714&fmt=gif"/>
</noscript>


<script type="text/javascript">

    var eventsUrl = "https:\/\/idreamcareer.com\/events";
    var eventTrackers = $(".es-click-event-tracker");

    eventTrackers.click(function() {
        
        var event = $(this);
        var eventName = event.data("event");
        var eventPayload = event.data("payload");

        if (eventName) {

            var data = {
                "event": eventName,
                "payload": eventPayload
            }

            if (navigator.sendBeacon) {
                navigator.sendBeacon(eventsUrl, JSON.stringify(data));
            } else {
                axios.post(eventsUrl, data)
                    .then((res) => console.log(res))
                    .catch((err) => console.log(err));
            }
        }
    })
    
</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"3c82c909e8","applicationID":"95255785","transactionName":"YgMEYBMCW0NTBU0LWVtJJ1cVClpeHRZYBVNGSA5bDAY=","queueTime":0,"applicationTime":152,"atts":"TkQHFlsYSE0=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>