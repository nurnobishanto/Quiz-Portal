@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 ">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Withdraw Request and Transaction
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div>
                                @if(Session::has('success'))
                                    <div class="alert-outline-success"> {{ Session::get('success') }}</div>
                                    @php
                                        Session::forget('success');
                                    @endphp
                                @elseif(Session::has('error'))
                                    <div class="alert-outline-danger"> {{ Session::get('error') }}</div>
                                    @php
                                        Session::forget('error');
                                    @endphp
                                @elseif(Session::has('info'))
                                    <div class="alert-outline-secondary"> {{ Session::get('info') }}</div>
                                    @php
                                        Session::forget('info');
                                    @endphp
                                @elseif(Session::has('warning'))
                                    <div class="alert-outline-warning"> {{ Session::get('warning') }}</div>
                                    @php
                                        Session::forget('warning');
                                    @endphp


                                @endif
                            </div>
                          <form action="{{route('portal.withdraw_req')}}" method="post">
                              @csrf
                              <div class="input-form mt-5">
                                  <label for="amount" class="form-label">Amount <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Minimum Amount 50 Taka and Maximum Amount {{round($balance)}} Taka</span> </</label>
                                  <input min="50" max="{{$balance}}" id="amount" name="amount" type="number" class="form-control" placeholder="Enter Amount" required>
                              </div>
                              <div class="input-form mt-5">
                                  <label for="method" class="form-label">Select Payment Method</label>
                                  <select  id="method" name="method_id" class="form-select"  required>
                                      <option >Select Payment Method</option>
                                      @foreach($methods as $method)
                                          @if($method->account_number!="null")
                                              <option value="{{$method->id}}">{{$method->name}}</option>
                                          @endif
                                      @endforeach
                                  </select>
                              </div>

                              <div class="input-form mt-5">
                                  <label for="account_number" class="form-label">Your Account Number</label>
                                  <input id="account_number"  name="account_number" type="text" class="form-control" placeholder="Account Number" required>
                              </div>
                              <div class="input-form mt-5">
                                  <label for="note" class="form-label w-full flex flex-col sm:flex-row"> Note  </label>
                                  <textarea id="note" class="form-control" name="note" placeholder="Type your Note" minlength="5" required></textarea>
                              </div>
                              @if($balance>49)
                                  <input type="submit" value="Request" class="btn btn-primary mt-5">
                              @else
                                  <h2 class="text-danger">Low Balance , Min withdraw is 50 Taka</h2>
                              @endif




                          </form>
                        </div>
                    </div>
                    <!-- END: Deposit Transactions -->
                    <!-- BEGIN: Withdraw Transactions -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Withdraw Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach($withdraw_tr as $wtr)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">
                                                @if($wtr->method)
                                                    {{$wtr->method->name}}
                                                @else
                                                    {{$wtr->note}}
                                                @endif

                                            </div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{$wtr->created_at->diffForHumans()}}</div>
                                        </div>
                                        @if($wtr->status == 'approved')
                                            <div class="text-success">{{-$wtr->amount}}</div>
                                        @else
                                            <div class="text-warning">{{$wtr->amount}}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- END: Withdraw Transactions -->
                </div>
            </div>
        </div>
    </div>
@endsection
