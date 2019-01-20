@extends('MortgagePrisoner::layout')


@section('content')

<div class="max-w-2xl mx-auto p-2 leading-normal whitespace-normal tracking-wide">

  <form action="{{route('enquiry')}}" method="POST" name="callback" class="lg:w-1/2 lg:mx-auto">
  @csrf
  <label for="callback[name]" class="block text-sm font-bold mb-1">Name</label>
  <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[name]" id="callback[name]" type="text" value="{{ old('callback[name]') }}" placeholder="John Smith" />

  <label for="callback[email]" class="block text-sm font-bold mb-1">Email</label>
  <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[email]" id="callback[email]" type="email" value="{{ old('callback[email]') }}" placeholder="hello@mortgageprisoner.co.uk" />

  <label for="callback[telmobile]" class="block text-sm font-bold mb-1">Telephone</label>
  <input class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[telmobile]" id="callback[telmobile]" type="text" value="{{ old('callback[telmobile]') }}" placeholder="01133203240" />

  <label for="callback[type]" class="block text-sm font-bold mb-1">Type</label>
  <select class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[type]" id="callback[type]">
    <option>Select Type</option>
    <option>Negative Equity</option>
    <option>Leasehold Terms</option>
    <option>Refurbishment Required</option>
    <option>Death of a Partner</option>
    <option>Interest only to Repayment</option>
    <option>Expat Mortgages</option>
    <option>Mortgage Criteria</option>
    <option>Age of Borrower</option>
    <option>Adverse Credit</option>
    <option>Lowered Income</option>
    <option>Indebtedness</option>
    <option>High Expenditure</option>
    <option>Maximum Loan</option>
    <option>Zero Hour Contracts</option>
    <option>Self Employment</option>
    <option>Other</option>
  </select>

  <label for="callback[notes]" class="block text-sm font-bold mb-1">Notes</label>
  <textarea class="mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline text-center" name="callback[notes]" id="callback[notes]">
    {{ old('callback[notes]') }}
  </textarea>


  <button class="text-white mx-auto bg-indigo hover:bg-indigo-dark text-xl font-bold py-4 px-10 rounded uppercase block w-full text-center">Call Me Back</button>
  </form>

</div>


@endsection
