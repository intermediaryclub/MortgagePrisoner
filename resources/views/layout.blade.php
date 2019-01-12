<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="referrer" content="unsafe-url">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#3490dc"/>

<!-- Meta -->
{!! SEO::generate() !!}

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">

</head>

<body>

  <div class="flex flex-wrap bg-green lg:py-5">
    <div class="w-full lg:flex-1">
      <a href="{{ route('home') }}" class="p-2 text-white no-underline" title="Mortgage Prisoner">Mortgage Prisoner</a>
      <span class="hidden lg:inline-block">
        <a href="{{ route('home') }}" class="p-2 text-green-lighter no-underline text-sm" title="Link1">Link1</a>
      </span>
    </div>
    <div class="w-full lg:flex-1 text-right hidden lg:block">
      <!--
      <a href="tel:01133203240" class="p-2 text-white no-underline" title="Call Us">01133 203 240</a>
    -->
      <a href="{{ route('home') }}" class="bg-white hover:bg-grey-lightest py-2 px-4 mx-4 rounded no-underline border border-green-dark text-green-dark">Free Enquiry</a>
    </div>
  </div>

  <div class="bg-green text-white text-center lg:py-8">
    <h1>{{ SEO::getTitle("false") }}</h1>
  </div>






@yield('content')


</body>

</html>
