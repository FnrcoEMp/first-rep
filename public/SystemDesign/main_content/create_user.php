
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12  subheader-transparent " id="kt_subheader">
            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">

                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">
                            Add New user
                        </h2>
                        <!--end::Title-->

                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="@#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="{{ route('users.index') }}"
                               class="text-white text-hover-white opacity-75 hover-opacity-100">
                                Users </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                                Add New user
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Dashboard-->
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom">



                            <form method="post" action="#" class="form">

                                <div class="card-body">
                                    <h3 class="card-label text-center border-bottom pb-2">
                                        Add New user
                                    </h3>

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Name :</label>
                                            <input value="{{ old('name') }}" name="name" type="text"
                                                   class="form-control"
                                                   placeholder="Name" required/>
                                            @error('name')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label>User E-mail :</label>
                                            <input value="" name="email" type="email"
                                                   class="form-control"
                                                   placeholder="User E-mail" required/>
                                            @error('email')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Password :</label>
                                            <input value="" name="password" type="password"
                                                   class="form-control"
                                                   placeholder="Password" required/>
                                            @error('password')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Confirm Password :</label>
                                            <input value="" name="password_confirmation" type="password"
                                                   class="form-control"
                                                   placeholder="Confirm Password" required autocomplete="new-password"/>
                                                @error('password')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6 col-xs-6">
                                            <label>Select Roles</label>
                                            <select class="form-control select2" name="role" required>
                                                <option value="" selected="">Select All</option>
                                                @foreach($data['roles'] as $role)
                                                <option value="{{ $role->name }}">{{ app()->getLocale() == 'ar' ? $role->name_ar : $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role_id')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit"
                                                    class="btn btn-primary mr-2">submit</button>
                                            <a href="{{ route('users.index') }}"
                                               class="btn btn-secondary">cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--end::Card-->
                    </div>

                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>


    </div>
    <!--end::Content-->
