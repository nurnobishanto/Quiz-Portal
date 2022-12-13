@extends('layouts.student_portal')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                My Profile
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-5 mt-5">
            <h3 class="text-5xl">
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
            </h3>
            <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">

                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">

                    <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                        @if($myInfo->image)
                            <img alt="{{$myInfo->name}}" class="rounded-full" src="{{ asset('storage/'.$myInfo->image) }}">
                        @else
                        <img alt="{{$myInfo->name}}" class="rounded-full" src="{{ asset('student_portal') }}/images/user.png">
                        @endif
                    </div>
                    <div class="ml-5">
                        <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{$myInfo->name}}</div>
                        <div class="text-slate-500">{{$myInfo->profession}}</div>
                    </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{$myInfo->email}} </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="phone" class="w-4 h-4 mr-2"></i> {{$myInfo->phone}} </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="pin" class="w-4 h-4 mr-2"></i>
                            @if($myInfo->post_office)
                                {{$myInfo->post_office->code.' - '.$myInfo->post_office->name.', '}}
                            @endif
                            @if($myInfo->upazila)
                                {{$myInfo->upazila->name.', '}}
                            @endif
                            @if($myInfo->district)
                                {{$myInfo->district->name}}
                            @endif
                          </div>
                    </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                    <div class="text-center rounded-md w-20 py-3">
                        <div class="font-medium text-primary text-xl">{{count($myInfo->results)}}</div>
                        <div class="text-slate-500">Attempts Quiz</div>
                    </div>


                </div>
            </div>
        </div>
        <!-- END: Profile Info -->
        <div class="tab-content mt-5">
            <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Update Profile Information -->
                    <div class="intro-y box col-span-12">
                        <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Update Profile Information
                            </h2>
                        </div>
                        <div id="new-authors" class="tiny-slider py-5">
                            <div class="px-5">
                                <form action="{{route('profile.info_update')}}" method="POST">
                                    @csrf
                                    <div class="">
                                        <label for="name" class="form-label">Enter Your Full Name</label>
                                        <input required id="name" type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{$myInfo->name}}">
                                    </div>
                                    <div class="mt-5">
                                        <label for="email" class="form-label">Enter Your Email</label>
                                        <input required id="email" type="email" disabled name="email" class="form-control" placeholder="example@gmail.com"  value="{{$myInfo->email}}">
                                    </div>
                                    <div class="mt-5">
                                        <label for="phone" class="form-label">Enter Your Phone</label>
                                        <input required id="phone" type="tel"  name="phone" class="form-control" placeholder="+880 1** *** ****"  value="{{$myInfo->phone}}">
                                    </div>
                                    <div class="mt-5">
                                        <label for="dob" class="form-label">Select your date of birth</label>
                                        <input required id="dob" name="dob" value="{{$myInfo->dob}}" type="text" class="datepicker form-control  block mx-auto" data-single-mode="true">
                                   </div>
                                    <div class="mt-5">
                                        <label for="school" class="form-label">
                                            Your School/College/Institute Name
                                        </label>
                                        <input required id="school" type="text" name="school" class="form-control" placeholder="Enter Current School Name"  value="{{$myInfo->school}}">
                                    </div>
                                    <div class="mt-5">
                                        <label for="profession" class="form-label">Select Your Profession</label>
                                        <select required id="profession" name="profession"  class="form-control">
                                            <option value="">Select Your Profession</option>
                                            <option value="STUDENT"<?php if($myInfo->profession == "STUDENT"){?>selected<?php } ?>>Student</option>
                                            <option value="TEACHER"<?php if($myInfo->profession == "TEACHER"){?>selected <?php } ?>>Teacher</option>
                                        </select>

                                    </div>

                                    <div class="mt-5">
                                        <label for="district" class="form-label">Select Your District</label>
                                        <select required id="district" name="district_id" class="form-control" aria-label="Default select example">
                                            <option value="">Select your District</option>
                                            @foreach($districts as $district)
                                            <option value="{{$district->id}}" @if($district->id==$myInfo->district_id) selected @endif>{{$district->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <label for="upazila" class="form-label">Select Your Upazila</label>
                                        <select required id="upazila" name="upazila_id" class="form-control" aria-label="Default select example">
                                            <option value="">Select your Upazila / Thana</option>
                                            @foreach($upazilas as $upazila)
                                                <option value="{{$upazila->id}}" @if($upazila->id==$myInfo->upazila_id) selected @endif>{{$upazila->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <label for="post_office" class="form-label">Select Your Post Office</label>
                                        <select required id="post_office" name="post_office_id"  class="form-control" aria-label="Default select example">
                                            <option value="">Select your Post Office</option>
                                            @foreach($post_offices as $po)
                                                <option value="{{$po->id}}" @if($po->id==$myInfo->post_office_id) selected @endif>{{$po->name.' '.$po->code}}</option>
                                            @endforeach
                                        </select>
                                        <p  class="text-info mt-1">If you are not found your Post Office</p>
                                        <a href="{{route('add_post_office')}}" class="btn btn-danger m-2" target="_blank">Store your Post Office</a>
                                    </div>
                                    <div class="mt-5">
                                        <label for="address" class="form-label">
                                           Enter Address
                                        </label>
                                        <textarea required id="address" minlength="10" name="address" class="form-control" placeholder="Enter Adsress">{{$myInfo->address}}</textarea>
                                    </div>

                                        <button class="btn btn-primary mt-5">Update Profile Information</button>

                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END: Update Profile Information -->
                    <!-- BEGIN: Update Profile image -->
                    <div class="intro-y box col-span-12">
                        <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Update Profile image
                            </h2>
                        </div>
                        <div id="new-authors" class="tiny-slider py-5">
                            <div class="px-5">
                                <form  action="{{route('profile.photo_update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" class="form-control" required name="image">
                                    <button type="submit" class="btn-primary btn mt-5">Change Profile Image</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END: Update Profile image -->
                    <!-- BEGIN: Update Password -->
                    <div class="intro-y box col-span-12">
                        <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Update Password
                            </h2>
                        </div>
                        <div id="new-authors" class="tiny-slider py-5">
                            <div class="px-5">
                                <form action="{{route('profile.password_update')}}" method="POST">
                                    @csrf
                                    @foreach ($errors->all() as $error)

                                        <p class="text-danger">{{ $error }}</p>

                                    @endforeach
                                    <div>
                                        <label for="password" class="form-label">New Password</label>
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Enter New Password">
                                    </div>
                                    <div class="mt-3">
                                        <label for="confirm-password" class="form-label">Confirm New Password</label>
                                        <input name="confirm_password" id="confirm-password" type="password" class="form-control" placeholder="Confirm New Password">
                                    </div>

                                    <button class="btn btn-primary mt-5">Change Password</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END: Update Password -->


                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#district').on('change', function () {
                var idDistrict = this.value;
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("upazila").innerHTML =
                        this.responseText;
                }
                xhttp.open("GET", "/district/"+idDistrict);
                xhttp.send();
            });

            $('#upazila').on('change', function () {
                var idUpazila = this.value;
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("post_office").innerHTML =
                        this.responseText;
                }
                xhttp.open("GET", "/upazila/"+idUpazila);
                xhttp.send();
            });
        });

    </script>
@endsection

