@extends('MortgagePrisoner::layout')


@section('content')

<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide">
  <p class="pb-2">Unfortunately their are many types of mortgage prisoners, as such their are many different types of solutions. What type of mortgage prisoner you may be, could be categorised below. Otherwise, please contact us for further solutions.</p>
  <p class="pb-2">The obvious type is of Mortgage Prisoner we tend to think of is borrowers in Negative Equity. Though others exist such as being locked into your current mortgage due to adverse credit, restricting further options.</p>
  <p class="pb-2">Below we outline a few of the types of mortgage prisoners to help assist you in obtaining a free guide.</p>
  <h2 class="w-full p-2 text-indigo">Free Guide's</h2>
  <p class="pb-2">Select a category of mortgage prisoner below to obtain a Free Guide to help guide you in obtaining a mortgage:</p>
</div>

<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide flex flex-wrap">
  <a href="{{ route('enquiry2', 'Negative Equity')}}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Negative Equity</p>
  <p class="text-black">Your loan amount is higher than the value of your home.</p></a>
  <a href="{{ route('enquiry2', 'Leasehold Terms')}}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Leasehold Terms</p>
  <p class="text-black">Your mortgage options are limited due to your Leasehold Terms such as Ground Rent Amount or remaining Leasehold Term.</p></a>
  <a href="{{ route('enquiry2', 'Refurbishment Required') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Refurbishment Required</p>
  <p class="text-black">Your mortgage options are limited due to the property being “unmortgageable” in its current condition.</p></a>
  <a href="{{ route('enquiry2', 'Death of a Partner') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Death of a Partner</p>
  <p class="text-black">Your mortgage options are limited due to death of a partner, effecting affordability.</p></a>
  <a href="{{ route('enquiry2', 'Interest only to Repayment') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Interest only to Repayment</p>
  <p class="text-black">Your mortgage is on Interest Only, which is now unavailable to you. Having to change to repayment mortgage.</p></a>
  <a href="{{ route('enquiry2', 'Expat Mortgages') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Expat Mortgages</p>
  <p class="text-black">Your mortgage options are limited due to living abroad in the near past or currently.</p></a>
  <a href="{{ route('enquiry2', 'Mortgage Criteria') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Mortgage Criteria</p>
  <p class="text-black">Your mortgage application has been declined due to mortgage lender criteria.</p></a>
  <a href="{{ route('enquiry2', 'Age of Borrower') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Criteria – Age of Borrower</p>
  <p class="text-black">Your mortgage options are restricted due to your age and the required term of your mortgage.</p></a>
  <a href="{{ route('enquiry2', 'Adverse Credit') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Criteria – Adverse Credit</p>
  <p class="text-black">Your mortgage options are restricted due to your credit history. Defaults, CCJ or Bankruptcy.</p></a>
  <a href="{{ route('enquiry2', 'Lowered Income') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – Lowered Income</p>
  <p class="text-black">Your income has decreased since application, giving restricted affordability.</p></a>
  <a href="{{ route('enquiry2', 'Indebtedness') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – Indebtedness</p>
  <p class="text-black">Your debt has increased – loans, credit cards or car leases, giving restricted affordability.</p></a>
  <a href="{{ route('enquiry2', 'High Expenditure') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – High Expenditure</p>
  <p class="text-black">Your Expenditure has increased since application, giving restricted affordability. </p></a>
  <a href="{{ route('enquiry2', 'Maximum Loan') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – Maximum Loan</p>
  <p class="text-black">Your loan amount is restricted by your affordability.</p></a>
  <a href="{{ route('enquiry2', 'Zero Hour Contracts') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – Zero Hour Contracts</p>
  <p class="text-black">Your mortgage options are limited due to lenders assessment of Zero Hour Contracts.</p></a>
  <a href="{{ route('enquiry2', 'Self Employment') }}" class="no-underline w-1/4 m-2 p-2 border border-indigo"><p class="text-indigo font-bold">Affordability – Self Employment</p>
  <p class="text-black">Your mortgage options are limited due to lenders assessment of Self Employment. Such as 1 years accounts.</p></a>
</div>



<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide">
  <p class="pb-2">Our Free Guide's are for illustrative purposes, contact our mortgage advisers for personalised advice. </p>
</div>

<div class="bg-indigo text-white p-2">
  <form action="{{route('enquiry')}}" method="POST" name="callback" class="lg:w-1/2 lg:mx-auto">
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



@endsection
