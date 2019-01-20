@extends('MortgagePrisoner::layout')


@section('content')


<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide">
  <p class="pb-2">Our mortgage overpayment calculator will give you the tools to calculate how much to overpay your mortgage. Useful especialy for borrowers in Negative Equity or where Loan-to-Value (LTV) is too high for current affordability on a remortgage.</p>
  <p class="pb-2">In addition to reducing loan amount, to an amount giving you more flexability to remortgage. Overpayments can save you money by reducing the amount of interest charged. Perhaps even more once remortgage on to better terms.</p>
  <p class="pb-2">Before making overpayments, talk to your adviser or lender to understand if any early repayment charges apply. Borrowers in Negative Equity or restricted on affordability, may be able to negotiate where restrictions apply. Ask your mortgage adviser about your Lenders Treating Customers Fairly (TCF) requirements.</p>
  <p class="pb-2">The illustrative purposes of this calculator should not be underestimated, talking to one of our advisers (or your indipendent mortgage adivser). In formulating a plan is vital to its success in formulating and thereafter obtaining your goal.</p>
</div>


<div class="max-w-4xl mx-auto p-2 text-center">
<iframe style="min-height:681px;width:100%;" frameborder="0" id="frame" name="iframe" src="//overpaymentcalculator.halifax.co.uk/?brand=mortgageprisoner"></iframe>
<p class="text-sm">* <a href="https://www.halifax.co.uk/helpcentre/legal-information/website-terms-and-conditions/" class="text-indigo no-underline">Mortgage Overpayment Calculator</a> from Halifax, a division of Bank of Scotland plc.</p>
</div>


<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide lg:flex">
  <div class="lg:flex-1 px-2">
    <h2 class="w-full p-2 text-indigo">Overpayment Calculator Assumptions</h2>
    <p class="pb-2">The overpayment calculator makes certain assumptions, such as:</p>
    <ul class="list-reset">
        <li><i class="far fa-dot-circle text-indigo"></i> Based on a repayment mortgage</li>
        <li><i class="far fa-dot-circle text-indigo"></i> Any regular monthly overpayments remain the same over the term of the mortgage</li>
        <li><i class="far fa-dot-circle text-indigo"></i> All years are of equal length</li>
        <li><i class="far fa-dot-circle text-indigo"></i> Interest is calculated daily and added monthly</li>
        <li><i class="far fa-dot-circle text-indigo"></i> The mortgage balance shown on the graph and table are the same, and are the amount left on the mortgage at the end of that particular year</li>
        <li><i class="far fa-dot-circle text-indigo"></i> Multiple sub accounts must be calculated individually</li>
        <li><i class="far fa-dot-circle text-indigo"></i> Estimate of total interest saved is rounded to the nearest pound</li>
        <li><i class="far fa-dot-circle text-indigo"></i> There is no change in interest rate which would recalculate your monthly payment</li>
        <li><i class="far fa-dot-circle text-indigo"></i> There will not be any changes to your mortgage which would result in a recalculation of your monthly payment e.g. changes to your mortgage product, term, type or change of owners.</li>
    </ul>
  </div>

  <div class="lg:flex-1 px-2">
    <h2 class="w-full p-2 text-indigo">Negative Equity Overpayment</h2>
    <p class="pb-2">Negative Equity is where your mortgage loan amount is greater than the value of the home the mortgage is secured on. This can lock you into the current mortgage terms, perhaps on a higher mortgage rate.</p>
    <p class="pb-2">Unable to product switch with your current lender or remortgage to a new mortgage lender - to obtain a better mortgage rate and lower interest mortgage payments.</p>
    <p class="pb-2">Overpaying your mortgage is one way to escape negative equity. Reducing your oustanding mortgage loan below the value of the home. At a very minimum you will want to be at 95% Loan to Value.</p>
    <p class="pb-2">How much to overpay is dependent on your personal budget, a higher amount will reduce the time until your free from negative equity. Our advisers can assist you in formulating a a plan and guide your budget.</p>
  </div>
</div>

<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide lg:flex">
  <div class="lg:flex-1 px-2">
    <form action="{{route('enquiry')}}" method="POST" name="callback" class="bg-indigo p-2 rounded">
    @csrf
    <label for="callback[name]" class="block text-sm text-white font-bold mb-1">Name</label>
    <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[name]" id="callback[name]" type="text" value="" placeholder="John Smith" />

    <label for="callback[email]" class="block text-sm text-white font-bold mb-1">Email</label>
    <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[email]" id="callback[email]" type="email" value="" placeholder="hello@mortgageprisoner.co.uk" />

    <label for="callback[telmobile]" class="block text-sm text-white font-bold mb-1">Telephone</label>
    <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[telmobile]" id="callback[telmobile]" type="text" value="" placeholder="01133203240" />
    <input type="hidden" name="callback[type]" value="Unknown">
    <button class="mx-auto bg-indigo hover:bg-indigo-dark text-white text-xl font-bold py-4 px-10 rounded uppercase block w-full text-center">Call Me Back</button>
    </form>
  </div>

  <div class="lg:flex-1 px-2 ">
    <h2 class="w-full p-2 text-indigo">Mortgage Affordability Overpayment</h2>
    <p class="pb-2">Mortgage Affordability is formulated on your income and expendature, this will determine how much you are able to borrow.</p>
    <p class="pb-2">Borrowers are often declined remortgages if they are unable to demonstrate affordability based on the lenders own calculations.</p>
    <p class="pb-2">If you are declined a remortgage loan based on affordability, three options open up such as Increaseing Income, Decreaseing Expendature or Lowering Mortgage Amount. Given all options are desireable - lowering mortgage loan amount can both open up remortgage options and decrease expendature.</p>
    <p class="pb-2">Our advisers can assist you reviewing your budget to assess all three options and formulate a long-term plan. In addition your adviser may identify a product switch with current lender, which may be desireable if providing better terms.</p>

  </div>
</div>

@endsection
