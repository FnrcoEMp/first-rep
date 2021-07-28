<style>
    a.sociall img {
        width: 25px;
    }

    .checkbox-inline.company_Card label {
        display: inline-block;
        text-align: center;
    }

    .checkbox-inline .checkbox span {
        margin: auto;
    }

    .btn .badge {
        position: absolute;
        top: -1px;
        right: 0;
        color: #6993FF;
        border: 1px solid;
        padding: 7px 5px;
        line-height: 0;
        border-radius: 50%;
    }
</style>

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
                        Shortlisted Score
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
                            Shortlisted Score
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

                        <div class="card-body">

                            <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                                            Shortlisted Score Filters
                                        </div>
                                    </div>
                                    <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                                        <div class="card-body">
                                            <div class="row fliter_serch">
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>MPR No</label>
                                                        <input type="text" class="form-control" placeholder="MPR No">
                                                    </div>

                                                </div>
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Date Of Request From</label>
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
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Date Of Request To</label>
                                                        <div class="input-group input-group-solid date"
                                                             id="kt_datetimepicker_113" data-target-input="nearest">
                                                            <input type="text"
                                                                   class="form-control form-control-solid datetimepicker-input"
                                                                   placeholder="Select date"
                                                                   data-target="#kt_datetimepicker_113"/>
                                                            <div class="input-group-append"
                                                                 data-target="#kt_datetimepicker_113"
                                                                 data-toggle="datetimepicker">
				<span class="input-group-text">
					<i class="ki ki-calendar"></i>
				</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Request By</label>
                                                        <select class="form-control select2" name="param">
                                                            <option value="" selected="">Select All</option>
                                                            <option value="">Shawky Mohamed</option>
                                                            <option value="">Amr Mohamed</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Position Applied</label>
                                                        <select class="form-control select2" name="param">
                                                            <option value="" selected="">Select All</option>
                                                            <option value="4">Technical Recruiter</option>
                                                            <option value="3">Executive Secretary</option>
                                                            <option value="5">Coordinator</option>
                                                            <option value="6">Document Controller</option>
                                                            <option value="7">DATA ENTRY OPERATOR</option>
                                                            <option value="8">RECRUITER-MEDICAL</option>

                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control select2" name="param">
                                                            <option value="" selected="">Select All</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>

                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Nationality</label>
                                                        <select class="form-control select2" name="param">
                                                            <option value="" selected="">Select All</option>
                                                            <option value="1" data-select2-id="58">Saudi Arabia</option>
                                                            <option value="2" data-select2-id="59">United Arab
                                                                Emirates
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Age From</label>
                                                        <input type="text" class="form-control" placeholder="Age From">

                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Age To</label>
                                                        <input type="text" class="form-control" placeholder="Age To">

                                                    </div>
                                                </div>


                                                <div class="col-md-2 col-xs-12">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <button type="button" class="btn btn-block btn-dark">Search
                                                        </button>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="separator separator-dashed mt-8 mb-5"></div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered"
                                               id="kt_datatable2">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>MPR No</th>
                                                <th>Date Of Request</th>
                                                <th>Request By</th>
                                                <th>Position</th>
                                                <th>Gender</th>
                                                <th>Nationality</th>
                                                <th>Age</th>
                                                <th class=" dt-center">CV Qty</th>
                                                <th>Show</th>
                                                <th>Edit</th>
                                                <th>Cancel</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td class=" dt-center">0250</td>
                                                <td class=" dt-center">2020-09-22 05:02:23</td>
                                                <td class=" dt-center">Sayd Basha</td>
                                                <td class=" dt-center">coordinator</td>
                                                <td class=" dt-center">Male</td>
                                                <td class=" dt-center"><img
                                                            src="https://www.countryflags.io/eg/shiny/32.png"
                                                            title="Egypt"></td>
                                                <td class=" dt-center">26 - 30</td>
                                                <td class=" dt-center"><a href="?page=shortlisted_score_mpr" target="_blank">3</a></td>
                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                                        <i class="fas fa-eye"></i></a>

                                                </td>
                                                <td class=" dt-center">

                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-warning btn-sm mr-2">
                                                        <i class="fas fa-marker"></i></a>


                                                </td>


                                                <td class=" dt-center">
                                                    <a href="#" target="_blank" class="btn btn-icon btn-outline-danger btn-sm mr-2">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>


                                        </table>


                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>


                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->


    </div>
    <!--end::Container-->
    <!-- Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</div>





