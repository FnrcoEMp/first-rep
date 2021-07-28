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
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Heading-->
                <div class="d-flex flex-column">

                    <!--begin::Breadcrumb-->

                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            All Agencies
                        </h5>
                        <!--end::Page Title-->

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-muted">
                                    External Office
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-muted">
                                    All Agencies
                                </a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->

            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">


                <!--begin::Button-->
                <a href="?page=add_agency" class="btn btn-danger font-weight-bold py-3 px-6">
                    <i class="la la-plus"></i>
                    Add Agency
                </a>
                <!--end::Button-->


            </div>
            <!--end::Toolbar-->

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
                                            Agencies Filters
                                        </div>
                                    </div>
                                    <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Maid Name </label>
                                                        <input class="form-control" type="text" value="" name="job_title" id="name"
                                                               placeholder="Maid Name" aria-describedby="jobTitle-error"
                                                               aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Passport number</label>
                                                        <input class="form-control" type="text" value="" name="job_title" id="passportNumber"
                                                               placeholder="Passport number" aria-describedby="jobTitle-error"
                                                               aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Travel Date</label>
                                                        <input type="text" class="form-control travel_date" id="kt_datepicker_1" name="travel_date"
                                                               placeholder="Select date"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Interview</label>
                                                        <select class="form-control" name="sm_platform" id="is_interviewed"
                                                                aria-describedby="task_type-error"
                                                                aria-invalid="false">
                                                            <option value="" selected="">Select</option>
                                                            <option value="1">Complete</option>
                                                            <option value="2">no interview</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Arrival Status</label>
                                                        <select class="form-control" name="sm_platform" id="file_status"
                                                                aria-describedby="task_type-error"
                                                                aria-invalid="false">
                                                            <option value="" selected="">Select</option>
                                                            <option value="1">Arrived</option>
                                                            <option value="2">Not Arrived</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Agencies</label>
                                                        <select class="form-control js-select2" name="task_progress" id="agency_id"
                                                                aria-describedby="task_type-error"
                                                                aria-invalid="false">
                                                            <option selected value="">Select</option>

                                                            <option
                                                                    value="6">Ashraf Agency</option>
                                                            <option
                                                                    value="5">alweradny Agency</option>
                                                            <option
                                                                    value="4">Abu Saeed agency</option>
                                                            <option
                                                                    value="3">Hikmat agency</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Warranty Status</label>
                                                        <select class="form-control" name="task_type" id="warranty_period"
                                                                aria-describedby="task_type-error"
                                                                aria-invalid="false">
                                                            <option value="" selected="">Select</option>
                                                            <option value="1">Valid</option>
                                                            <option value="2">Not valid</option>

                                                        </select>
                                                    </div>
                                                </div>

<div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <button type="button" id="btnSubmit"
                                                                class="btn btn-success btn-block font-weight-bold py-3 px-6"
                                                                data-ktwizard-type="action-submit">
                                                            Search
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
                                        <table class="table table-bordered table-vertical-center text-center" >
                                            <thead>
                                            <tr>
                                                <th class=" dt-center">No.</th>
                                                <th class=" dt-center">Maid Name</th>
                                                <th class=" dt-center">Passport number</th>
                                                <th class=" dt-center">Agencies</th>
                                                <th class=" dt-center">Interview</th>
                                                <th class=" dt-center">Travel Date</th>
                                                <th class=" dt-center">Arrival Status</th>
                                                <th class=" dt-center">Warranty Period</th>
                                                <th class=" dt-center">Warranty Status</th>
                                                <th class=" dt-center">Control</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr id="t-12">
                                                <td class=" dt-center">12</td>

                                                <td class=" dt-center">اليزابيث</td>
                                                <td class=" dt-center">12345</td>
                                                <td class=" dt-center">Ashraf Agency</td>

                                                <td class=" dt-center">Complete</td>
                                                <td class=" dt-center">2020-04-26</td>
                                                <td class=" dt-center">

                                                    <a href="#"
                                                       class="btn btn-success a-btn-slide-text">
                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                        <span><strong>Arrived </strong></span>
                                                    </a>




                                                </td>
                                                <td class=" dt-center">(2020-07-25) </br> 90 Day

                                                </td>

                                                <td class=" dt-center"><span
                                                            class="label  label-light-danger label-inline label-bold">Not valid</span>
                                                </td>
                                                <td class=" dt-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Control
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                            </a>

                                                            <a class="dropdown-item"
                                                               href="#">Edit</a>


                                                            <a class="dropdown-item" href="#" data-id="12">Delete</a>


                                                        </div>
                                                    </div>
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





