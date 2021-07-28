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
                        All Positions
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
                        <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            All Positions
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->

            <div class="d-flex align-items-center">


                <!--begin::Button-->
                <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="modal"
                   data-target="#exampleModal">
                    Add New Position
                </a>
                <!--end::Button-->


            </div>

        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Dashboard-->

            <!--begin::Row-->
            <div class="row">

                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom">

                        <div class="card-header flex-wrap">
                            <div class="card-title text-center" style="width: 100%;display: inline-block;">
                                <h3 class="card-label" style="line-height: 70px;">
                                    All Positions
                                </h3>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!--begin: Datatable-->
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Position Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Technical Recruiter</td>


                                        <td><a class="btn btn-success font-weight-bold"
                                               href="#">Edit</a></td>
                                        <td>
                                            <form method="post" action="{{ route('users.destroy' , $user->id) }}">

                                                <button onclick="return confirm('Are you sure?')"
                                                        class="btn btn-danger mr-2" type="submit"><i
                                                            class="fa fa-trash p-0"></i></button>
                                            </form>
                                        </td>
                                    </tr>


                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->

            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Position</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Position Title</label>
                        <input type="text" class="form-control" placeholder="current Position"/>
                    </div>
                    </div>
                <div class="form-group row mb-0">
                    <div class="col-lg-12">
                        <label>Department Responsibilities</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Add Position</button>
            </div>
        </div>
    </div>
</div>


