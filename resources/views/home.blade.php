@extends('MortgagePrisoner::layout')


@section('content')

<div class="max-w-4xl mx-auto p-2">
  <div class="lg:flex">
  <div class="lg:flex-1">
      <h2 class="w-full p-2 text-green">Independent advice for Mortgage Prisoners</h2>
    <ul class="fa-ul">
      <li class="py-5"><i class="fa-li far fa-check-circle text-green"></i>  Advice and guides to help improve your finances</li>
      <li class="py-5"><i class="fa-li far fa-check-circle text-green"></i> Tools and calculators to help keep track and plan ahead</li>
      <li class="py-5"><i class="fa-li far fa-check-circle text-green"></i> Support over the phone and online</li>
    </ul>
  </div>
  <div class="lg:flex-1">
    <p class="p-2">MortgagePrisoner.co.uk was established 2019 by several mortgage firms to provide advice to Mortgage Prisoners and Campaign for better policy. </p>

      <p class="p-2">Our aim is to provide solutions and introduce Mortgage Prisoners to authorised and qualified mortgage advisers who can help consumers in a prison break.</p>

    <p class="p-2">We provide indipendent guidance and privately funded by mortgage advisers who want to help.</p>
    <br/>
    <div class="p-2">
<a href="{{ route('home') }}" class="mx-auto text-center w-1/3 block bg-green py-2 px-4 rounded no-underline border border-green-dark text-white">Start Here</a>
  </div>
  </div>
  </div>
</div>


<div class="bg-green text-white p-2 lg:flex">
  <div class="lg:flex-1 m-2 lg:mx-5 p-2">
    <h2>Popular tools & calculators</h2><a href="{{route('home')}}" class="text-white no-underline">View All...</a>
  </div>
  <a href="#" class="lg:flex-1 border border-white border-solid rounded m-2 lg:mx-5 p-2 no-underline text-white">
    <p class="mb-2 block text-white font-bold">Am I a Mortgage Prisoner?</p>
    <p>Find out what type of mortgage prisoner you are.</p>
  </a>
  <a href="#" class="lg:flex-1 border border-white border-solid rounded m-2 lg:mx-5 p-2 no-underline text-white">
    <p class="mb-2 block text-white font-bold">Mortgage Overpayment Calculator</p>
    <p>Find out how much to overpay to exit negative equity.</p>
  </a>
  <a href="#" class="lg:flex-1 border border-white border-solid rounded m-2 lg:mx-5 p-2 no-underline text-white">
    <p class="mb-2 block text-white font-bold">20 Solutions for Mortgage Prisoners</p>
    <p>20 Ways to break free from mortgage prison.</p>
  </a>
</div>

<div class="max-w-4xl mx-auto p-2">
  <h2 class="w-full p-2 text-green">Advice for Mortgage Prisoners</h2>
<p class="p-2">Hello. Yes, we know  mortgages are complex, confusing and actually quiet boring. No one really wants a mortgage , they only want to buy a home for themselves or their family.</p>

<p class="p-2">A mortgage is unquestionably the biggest financial commitment you will ever make. Imagine therefore if that commitment suddenly turns sour and starts to feel like a weight around your neck?</p>

<p class="p-2">Sound familiar ? We thought so.</p>

<p class="p-2">The phrase “ mortgage prisoner “ has started to gain traction in the mainstream media over recent months and you only have to tune in , watch or download to hear stories of individuals or families who have suddenly found themselves pariahs in the world of finance. This becomes even more frustrating when you think they were once courted by the banks and feted to borrow the money in the first place.</p>

<p class="p-2">But we don’t think you are prisoners of your mortgage. That contract will hardly have been amended since you signed it. But what will have changed in that time are your own personal circumstances – it is these that are likely to be causing you the trouble .</p>

<ul>
  <li>Perhaps you have changed employment , gone self employed or started your own business ?</li>
  <li>Maybe you are got married or divorced ( or both !)?</li>
  <li>You may now have young children or large school fee payments when before you were young, free and single?</li>
  <li>Have you got into difficulty with your mortgage or other forms of credit and missed one or more payments ?</li>
  <li>You were young when you started the mortgage but maybe you are now nearer your pension than the playground ?</li>
  <li>You have an Interest Only mortgage ? A low base rate tracker ? Maybe your lender has pulled out of lending</li> altogether?</li>
</ul>

<p class="p-2">Anyone of these could mean you might find getting a mortgage more difficult than others. But don’t worry, help is at hand . We have identified 15 ways in which you may be able to lower your current mortgage payment, extend your mortgage term, gain access to much needed cash or simply tidy up what , to you at least, may be a complex situation.</p>
</div>

<div class="bg-green text-white p-2">
<form action="{{route('home')}}" method="POST" name="callback" class="lg:w-1/2 lg:mx-auto">
@csrf
<label for="callback[name]" class="block text-sm text-white font-bold mb-1">Name</label>
<input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[name]" id="callback[name]" type="text" value="" placeholder="John Smith" />

<label for="callback[email]" class="block text-sm text-white font-bold mb-1">Email</label>
<input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[email]" id="callback[email]" type="email" value="" placeholder="hello@mortgageprisoner.co.uk" />

<label for="callback[telmobile]" class="block text-sm text-white font-bold mb-1">Telephone</label>
<input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[telmobile]" id="callback[telmobile]" type="text" value="" placeholder="01133203240" />
<input type="hidden" name="callback[type]" value="Unknown">
<button class="mx-auto bg-green hover:bg-green-dark text-white text-xl font-bold py-4 px-10 rounded uppercase block w-full text-center">Call Me Back</button>
</form>

</div>

<div class="max-w-4xl mx-auto p-2">
  <div class="lg:flex">
    <div class="lg:flex-1">
      <h2 class="w-full p-2 text-green">Am I a mortgage prisoner? </h2>
      <p class="p-2">Quite possibly. While we have endeavoured to come up with as many helpful answers to what may be your own individual question there will be some of you who will, unfortunately, not have a clear and present solution to your circumstances</p>

      <p class="p-2">If that is the case it may be that we there is no immediate help we can offer you. If that is the case we will counsel you instead and advise what you SHOULD  be doing in order to put yourself in a position so that at some point in the future one of our solutions may become your solution and we can help move you forward in life by fixing your mortgage woes.</p>

      <p class="p-2">So lets see shall we?</p>
    </div>
    <div class="lg:flex-1">
        <h2 class="w-full p-2 text-green">What type of Mortgage Prisoner am I?</h2>
        <p class="p-2">There are many types of Mortgage Prisoner Categories - some your options may be limited by Mortgage Criteria such as Age or Property Type, others by Negative Equity, others by Credit Historys and others by many other factors.</p>
        <p class="p-2">Complete our Q&A to find out what type of Mortgage Prisoner you are and find bespoke solutions</p>
        <br/>
<a href="{{ route('home') }}" class="mx-auto text-center w-1/3 block bg-green py-2 px-4 rounded no-underline border border-green-dark text-white">Start Here</a>
    </div>
  </div>
</div>
<div class="max-w-4xl mx-auto p-2">
  <h2 class="w-full p-2 text-green">How do you become a mortgage prisoner?</h2>
  <p class="p-2">A mortgage prisoner is a person who owns a home with a mortgage. They are stuck with the current mortgage unable to remortgage to anouther lender or product switch with the current.</p>
  <p class="p-2">This is especialy painful to the borrowers budget, stuck on the current lenders Standard Variable Rate (SVR) unable to switch to latest mortgage market rates.</p>
  <p class="p-2">You become a mortgage prisoner as circumstances changed compared to when you took our the mortgage.</p>
  <p class="p-2">This could be for many reasons:
<ul class="flex">
  <div class="flex-1 p-2">
  <li><span class="font-semibold text-green">Negative Equity</span><br/>A borrowers loan amount is higher than the value of the home, or greater than 95% of the value of the home.</li>
  <li><span class="font-semibold text-green">Lowered Income</span><br/>A borrowers income has decreased over the term of the mortgage. Failing affordability on new mortgage applications.</li>
  <li><span class="font-semibold text-green">Indebtedness</span><br/>A borrower has acumulated debt (credit cards, loans, car lease). Failing affordability on new mortgage applications.</li>
  <li><span class="font-semibold text-green">High Expendature</span><br/>A borrowers monthly expendature has increased. MCOB 11.6 regulation requires responsible lending. Commited Expendatures like additional children or child support or alimony. Even School Fees though discrtionery effect affordability.</li>
  <li><span class="font-semibold text-green">Interest Only to Repayment</span><br/>A borrower initialy took out a Interest Only Mortgage, the avaliability of which has been significantly reduced. Affordability on Repayment Mortgage may not be affordable.</li>
  <li><span class="font-semibold text-green">Mortgage Criteria</span><br/>Mortgage Lenders Criteria may limit borrowing options. As exampl, since purchase a borrower may find there home next to a retail store. Few lenders allow these types of properties.</li>
    <li><span class="font-semibold text-green">Age</span><br/>A borrower may have reached the maximum age many mortgage lenders will concider providing a mortgage.</li>
</div>
<div class="flex-1 p-2">
  <li><span class="font-semibold text-green">Bad Credit</span><br/>A borrower may have defaults, ccj's or bankrupcy resulting in a decline after a credit check.</li>
  <li><span class="font-semibold text-green">Leasehold Flat Conditions</span><br/>A borrower may have limited term on the lease of the property. The Ground Rent may be too high. Resulting in a decline from many mainstream lenders.</li>
  <li><span class="font-semibold text-green">Refurbishment Required</span><br/>A borrower may find that a lender views a property as unmortggeable, due to the condition of the property. Perhaps in need of works for Damp, Roofing or modinisation. Lenders often decline if they see a property in an unmortgeable condition.</li>
  <li><span class="font-semibold text-green">Self Employed</span><br/>Many Mortgage Lenders have a difficulty in assessing affordability of self employed persons. With a "computer says no" mentality. Self-Employed persons find it hard to refinance.</li>
  <li><span class="font-semibold text-green">Death of a Partner</span><br/>Mortgage Lenders under MCOB 11.6 regulation are often not be sympathetic, of these change of circumstances. Effecting affirdability of a mortgage after the death of an income earning partner.</li>
<li><span class="font-semibold text-green">Expat Mortgages</span><br/>Working Internationaly can make it difficult to provide income a lender will concider.</li>
<li><span class="font-semibold text-green">Zero Hour Contracts</span><br/>Due to the potential instability of income from Zero Hour Contracts mortgage lenders take a dim view on this on affordability.</li>
</div>
</ul>
</p>

<p class="text-center">The good news is, <span class="font-semibold text-green">we have solutions</span> to assist many types of mortgage prisoners.</p>
<a href="{{ route('home') }}" class="mx-auto text-center w-1/3 block bg-green py-2 px-4 rounded no-underline border border-green-dark text-white">Find Out How</a>

</div>





<div class="bg-green text-white pt-5 mt-5">
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
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="#" title="Contact Mortgage Prisoner Advice">Contact Us</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="#" title="Mortgage Prisoner Twitter">Twitter</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="#" title="Mortgage Prisoner Facebook">Facebook</a></li>
      </ul>
    </div>
    <div class="w-full lg:flex-1 p-3">
      contact details here
      <!--
      <ul class="list-reset">
        <li><a class="text-white no-underline" href="tel:01133203240" title="Call Us on 01133203240">01133203240</a></li>
        <li><a class="text-white no-underline" href="mailto:hello@bespokefinance.info" title="Email Bespoke Finance">hello@bespokefinance.info</a></li>
        <li><a class="text-white no-underline" target="_blank" rel="noopener" href="https://goo.gl/maps/TRQvAqgVFRF2" title="Write to Bespoke Finance">31 Church Lane, Pudsey, LS28 7LD</a></li>
      </ul>
    -->
    </div>
  </div>
  <div class="text-center py-5">
    <p class="font-semibold">YOUR PROPERTY MAY BE REPOSSESSED IF YOU DO NOT KEEP UP REPAYMENTS ON A MORTGAGE OR ANY OTHER DEBT SECURED ON IT.</p>
    <p class="mt-2">MortgagePrisoner.co.uk introduces clients, speficialy Mortgage Prisoners, to Mortgage Advisers whom are Authorised and Regulated by the Financial Conduct Authority (FCA).</p>
    <p class="mt-2">© Copyright 2019. All rights reserved.</p>
  </div>
</div>







@endsection
