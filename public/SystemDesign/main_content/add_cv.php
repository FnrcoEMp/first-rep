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
                        Add New Cv

                    </h2>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            Dashboard </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            Screening CV

                        </a>
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            Add New Cv

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

                        <form class="form">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tagging Support</label>
                                    <div class=" col-lg-4 col-md-9 col-sm-12">
                                        <select class="form-control select2" id="kt_select2_11" multiple name="param">
                                            <option label="Label"></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>Generate Serial*</label>
                                        <input type="text" disabled class="form-control" placeholder="Serial"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Generate Serial*</label>
                                        <input type="text" disabled class="form-control" placeholder="Serial"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <br>
                                            <button class="btn btn-dark btn-theme-colored btn-flat mr-5 load"
                                                    id="generateBtn" style="margin-top: 4px;"
                                                    data-loading-text="<i class='fas fa-spinner fa-spin '></i> Sending">
                                                <span class="ladda-label">Generate</span></button>
                                            <button class="btn btn-danger mr-5"
                                                    id="CancelGenerateBtn" style="margin-top: 4px;" disabled="true">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>MPR. No*</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Upload Cv*</label>
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile"/>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" placeholder="Name"/>

                                    </div>
                                    <div class="col-lg-3">
                                        <label>Date of Birth *</label>
                                        <div class="input-group input-group-solid date"
                                             id="kt_datetimepicker_3" data-target-input="nearest">
                                            <input type="text"
                                                   class="form-control form-control-solid datetimepicker-input"
                                                   placeholder="Select date"
                                                   data-target="#kt_datetimepicker_3"/>
                                            <div class="input-group-append"
                                                 data-target="#kt_datetimepicker_3"
                                                 data-toggle="datetimepicker">
				<span class="input-group-text">
					<i class="ki ki-calendar"></i>
				</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>Marital Status*</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="3">Single/Married</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nationality *</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="2">United Arab Emirates</option>
                                            <option value="3">Afghanistan</option>
                                            <option value="4">Antigua and Barbuda</option>
                                            <option value="5">Anguilla</option>
                                            <option value="6">Albania</option>
                                            <option value="7">Armenia</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Degree*</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="High school or equivalent">High school or equivalent</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Bachelors degree">Bachelors degree</option>
                                            <option value="Higher diploma">Higher diploma</option>
                                            <option value="Masters degree">Masters degree</option>
                                            <option value="Doctorate">Doctorate</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Specialization*</label>
                                        <input type="text" class="form-control" placeholder="Specialization"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Evaluation CV By *</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="Dr.Pyne">Dr.Pyne</option>
                                            <option value="Bahaa">Bahaa</option>
                                            <option value="Paolo Barra">Paolo Barra</option>
                                            <option value="Gamal">Gamal</option>
                                            <option value="Aya">Aya</option>
                                            <option value="Waleed">Waleed</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Year of Passing *</label>
                                        <div class="input-group input-group-solid date"
                                             id="kt_datetimepicker_4" data-target-input="nearest">
                                            <input type="text"
                                                   class="form-control form-control-solid datetimepicker-input"
                                                   placeholder="Select date"
                                                   data-target="#kt_datetimepicker_4"/>
                                            <div class="input-group-append"
                                                 data-target="#kt_datetimepicker_4"
                                                 data-toggle="datetimepicker">
				<span class="input-group-text">
					<i class="ki ki-calendar"></i>
				</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Years of Exp*</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="0">0 Year</option>
                                            <option value="1">1 Year</option>
                                            <option value="2">2 Year</option>
                                            <option value="3">3 Year</option>
                                            <option value="4">4 Year</option>
                                            <option value="5">5 Year</option>
                                            <option value="6">6 Year</option>
                                            <option value="7">7 Year</option>
                                            <option value="8">8 Year</option>
                                            <option value="9">9 Year</option>
                                            <option value="10">10 Year</option>
                                            <option value="11">11 Year</option>
                                            <option value="12">12 Year</option>
                                            <option value="13">13 Year</option>
                                            <option value="14">14 Year</option>
                                            <option value="15">15 Year</option>
                                            <option value="16">16 Year</option>
                                            <option value="17">17 Year</option>
                                            <option value="18">18 Year</option>
                                            <option value="19">19 Year</option>
                                            <option value="20">20 Year</option>
                                            <option value="21">21 Year</option>
                                            <option value="22">22 Year</option>
                                            <option value="23">23 Year</option>
                                            <option value="24">24 Year</option>
                                            <option value="25">25 Year</option>
                                            <option value="26">26 Year</option>
                                            <option value="27">27 Year</option>
                                            <option value="28">28 Year</option>
                                            <option value="29">29 Year</option>
                                            <option value="30">30 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <!--  <div class="col-lg-4">
                                        <label>Current Employer*</label>
                                        <input type="text" class="form-control" placeholder="Current Employer"/>
                                    </div>-->
                                    <div class="col-lg-4">
                                        <label>E-mail*</label>
                                        <input type="email" class="form-control" placeholder="E-mail"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Mobile No.*</label>
                                        <input type="email" class="form-control" placeholder="Mobile No."/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Interviewed via</label>
                                        <select class="form-control select2" name="param">
                                            <option value="" selected="">Select All</option>
                                            <option value="Phone">Phone</option>
                                            <option selected="" value="Face 2 Face">Face 2 Face</option>
                                            <option value="Online">Online</option>
                                            <option value="Video Conference">Video Conference</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>current Position</label>
                                        <input type="text" class="form-control" placeholder="current Position"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Company</label>
                                        <input type="text" class="form-control" placeholder="Company"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Package</label>
                                        <input type="text" class="form-control" placeholder="Package"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Current Location</label>
                                        <input type="text" class="form-control" placeholder="Current Location"/>
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-6">
                                        <label>Comments</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Recommendations</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>


                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->

    </div>
    <!--end::Container-->
</div>

