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

    .table thead th, table.dataTable tbody td {
        text-align: center; vertical-align: middle;
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
                        Company Approval

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
                            Company Approval

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
                                            CV Filters
                                        </div>
                                    </div>
                                    <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                                        <div class="card-body">
                                            <div class="row fliter_serch">
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Serial NO.</label>
                                                        <input type="number" class="form-control" placeholder="Serial NO.">
                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Exp.</label>
                                                        <input type="text" class="form-control" placeholder="Exp.">
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Position</label>
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
                                                        <label>Name.</label>
                                                        <input type="text" class="form-control" placeholder="Candidate Name">
                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" placeholder=Phone">
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


                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Approve / Reject</label>
                                                        <select class="form-control select2" name="param">
                                                            <option value="" selected="">Select All</option>
                                                            <option value="Approve">Approve</option>
                                                            <option value="Reject">Reject</option>
                                                            <option value="Waiting">Waiting</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-xs-12 text-right"></div>

                                                <div class="col-md-4 col-xs-12 text-right">
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
                                        <table class="table table-bordered" id="kt_datatable2">
                                            <thead>
                                            <tr>
                                                <th rowspan="2">#</th>
                                                <th rowspan="2">MPR No</th>
                                                <th rowspan="2">Serial NO.</th>
                                                <th rowspan="2">Created At</th>
                                                <th rowspan="2">Name</th>
                                                <th rowspan="2">Nationality</th>
                                                <th rowspan="2">Mobile</th>
                                                <th rowspan="2">Email</th>
                                                <th rowspan="2">Education</th>
                                                <th colspan="4" class="text-center">Currently</th>
                                                <th rowspan="2">Total Experience</th>
                                                <th rowspan="2">Age</th>
                                                <th rowspan="2">Interviewed via</th>
                                                <th rowspan="2">CV</th>
                                                <th rowspan="2">Comments</th>
                                                <th rowspan="2">Recommendations</th>
                                                <th rowspan="2">Approve / Reject</th>
                                                 <th rowspan="2">Send to Shortlisted CV</th>

                                            </tr>
                                            <tr>
                                                <th>current Position</th>
                                                <th>Company</th>
                                                <th>Package</th>
                                                <th>Location</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
                                                </td>

                                            </tr>  <tr>
                                                <td>15</td>
                                                <td>0250</td>
                                                <td>FN-SA-01</td>
                                                <td>2020-03-22 05:45:07</td>
                                                <td>AMR Mohamed</td>
                                                <td><img src="https://www.countryflags.io/EG/shiny/32.png" title="Egypt"></td>
                                                <td>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=00966538304354&amp;text=Hi, We’re FNRCO Company. Thank you for your Registration with us." title="00966538304354"><i class="icon-xl fab fa-whatsapp text-success"><i> </i></i></a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="mailto:AMR@FNRCO.COM.SA" title="AMR@FNRCO.COM.SA">
                                                        <i class="icon-xl far fa-envelope text-info"></i>
                                                    </a>
                                                </td>
                                                <td>B.S Business Adminstration </td>
                                                <td>Maneger of Safety and Security </td>
                                                <td>King Khalid International Airport </td>
                                                <td>54000</td>
                                                <td>Riyadh</td>
                                                <td>11</td>
                                                <td>27</td>
                                                <td>Phone</td>
                                                <td>
                                                    <a target="_blank" href="#"><i class="icon-xl far fa-file-pdf text-warning" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="The candidate is studying while he is working as a Safety and Security Manager at King Khalid Airport (Bachelor of Business Administration), which is not totally related to the position.">
                                                        Comments
                                                    </button>
                                                </td>
                                                <td>    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-trigger="focus" data-html="true" title="I recommend not to cosider him on hold till we interview the superior candidates ">
                                                        Recommendations
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Not Yet</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Approve</a>
                                                            <a class="dropdown-item" href="#">Reject</a>
                                                        </div>
                                                    </div></td>

                                                <td>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)">
                                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>

                                                    </a>
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





