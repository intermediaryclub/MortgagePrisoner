<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<!--
Hey!
If you read source code, maybe you can write code too. jobs@bespokefinance.info
KR, Adam Hosker
-->

<!-- Meta -->
{!! SEO::generate() !!}

<!--manual-->
<meta name="referrer" content="unsafe-url">
<meta name="robots" content="index, follow">
<meta name="geo.region" content="GB-LDS" />
<meta name="geo.placename" content="Leeds" />
<meta name="geo.position" content="53.79593;-1.66414" />
<meta name="ICBM" content="53.79593, -1.66414" />
<meta property="fb:admins" content="22408537" />
<meta property="og:see_also" content="https://twitter.com/bespokefinance" />
<meta property="og:see_also" content="https://www.facebook.com/BespokeFinance/" />
<meta property="og:see_also" content="https://plus.google.com/+BespokefinanceOrg/" />
<meta property="og:see_also" content="https://www.linkedin.com/company/bespoke-finance-limited" />
<meta property="og:see_also" content="https://www.youtube.com/channel/UC7qio3eiy9vA_Z6hahKLSGQ" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://bespokefinance.co/rss" />
<link rel="shortcut icon" href="https://bespokefinance.co/favicon.gif">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://bespokefinance.co/favicon.gif" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://bespokefinance.co/favicon.gif" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://bespokefinance.co/favicon.gif" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://bespokefinance.co/favicon.gif" />
<meta name="theme-color" content="#3490dc"/>


<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">



  <!-- Matomo -->
  <script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//userverify.bespokefinance.info/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->
</head>

<body>
<div class="flex flex-wrap bg-blue lg:py-5">
  <div class="w-full lg:flex-1">
    <a href="{{ route('home') }}" class="p-2 text-white no-underline" title="Bespoke Finance">Bespoke Finance</a>
    <span class="hidden lg:inline-block">
      <a href="{{ route('btlp') }}" class="p-2 text-blue-lighter no-underline text-sm" title="Buy to Let Finance">Buy to Let</a>
      <a href="{{ route('hmop') }}" class="p-2 text-blue-lighter no-underline text-sm" title="Houses in Multiple Occupation (HMO) Finance">HMO</a>
      <a href="{{ route('bridging') }}" class="p-2 text-blue-lighter no-underline text-sm" title="Bridging Finance">Bridging</a>
      <a href="{{ route('auction') }}" class="p-2 text-blue-lighter no-underline text-sm" title="Auction Finance">Auction</a>
      <a href="{{ route('insight') }}" class="p-2 text-blue-lighter no-underline text-sm" title="Buy to Let Research & Insight">Insight</a>
    </span>
  </div>
  <div class="w-full lg:flex-1 text-right hidden lg:block">
    <a href="tel:01133203240" class="p-2 text-white no-underline" title="Call Us">01133 203 240</a>
    <a href="{{ route('apply') }}" class="bg-white hover:bg-grey-lightest py-2 px-4 rounded no-underline border border-green-dark text-green-dark">Free Quote</a>
    <!--
    <a href="{{ route('apply') }}" class="bg-white hover:bg-grey-lightest py-2 px-4 rounded no-underline border border-black text-black">Track My Mortgage</a>
  -->
  </div>
</div>
<div class="bg-blue text-white text-center lg:py-8">
  <h1>{{ SEO::getTitle("false") }}</h1>
</div>

@if (Session::has('callback'))
<div class="bg-green-dark text-white text-center py-20">
  <h1 class="text-3xl font-semibold">Thank You,</h1>
  <p>Your callback request has been received. An adviser will call you shortly.</p>
</div>
@endif


@yield('content')


<div class="bg-blue text-white pt-5 mt-5">
  <div class="flex flex-wrap">
    <div class="w-full lg:flex-1 p-3">
      <ul class="list-reset">
        <li><a class="text-white no-underline" href="#">Terms and Conditions</a></li>
        <li><a class="text-white no-underline" href="#">Privacy Policy</a></li>
        <li><a class="text-white no-underline" href="#">Complaints</a></li>
        <li><a class="text-white no-underline" href="#">Cookie Policy</a></li>
      </ul>
    </div>
    <div class="hidden lg:inline-block lg:flex-1 p-3">
      <ul class="list-reset">
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="{{ route('contact') }}" title="Contact Bespoke Finance">Contact Us</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="https://twitter.com/bespokefinance" title="Bespoke Finance Twitter">Twitter</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="https://www.facebook.com/BespokeFinance/" title="Bespoke Finance Facebook">Facebook</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="https://www.reddit.com/r/uklandlords/" title="UK Landlords Reddit">Reddit</a></li>
      </ul>
    </div>
    <div class="w-full lg:flex-1 p-3">
      <ul class="list-reset">
        <li><a class="text-white no-underline" href="tel:01133203240" title="Call Us on 01133203240">01133203240</a></li>
        <li><a class="text-white no-underline" href="mailto:hello@bespokefinance.info" title="Email Bespoke Finance">hello@bespokefinance.info</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="https://goo.gl/maps/TRQvAqgVFRF2" title="Write to Bespoke Finance">31 Church Lane, Pudsey, LS28 7LD</a></li>
      </ul>
    </div>
  </div>
  <div class="text-center py-5">
    <p class="font-semibold">YOUR PROPERTY MAY BE REPOSSESSED IF YOU DO NOT KEEP UP REPAYMENTS ON A MORTGAGE OR ANY OTHER DEBT SECURED ON IT.</p>
    <p class="mt-2">{{ config('BespokeFinance.legalblerb') }}</p>
    <p class="mt-2">Bespoke Finance Direct Limited is authorised and regulated by the Financial Conduct Authority (No. <a href="https://register.fca.org.uk/ShPo_FirmDetailsPage?id=001b000001EjRF2AAN" target="_blank" rel="noopener" class="text-white no-underline">715805</a>) to transact regulated mortgages.</p>
    <p class="mt-2">The FCA does not regulate some investment mortgage contracts.</p>
    <p class="mt-2">Bespoke Finance Direct Limited is registered in England and Wales (No. <a href="https://beta.companieshouse.gov.uk/company/09623432/" target="_blank" rel="noopener" class="text-white no-underline">09623432</a>) at 31 Church Lane, Pudsey, LS28 7LD. </p>
    <p class="mt-2">© Copyright 2018. All rights reserved.</p>
  </div>
</div>

</body>

</html>
