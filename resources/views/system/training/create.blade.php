@extends('system.layouts.index')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <style>
        /** {*/
        /*margin: 0;*/
        /*padding: 0*/
        /*}*/

        /*html {*/
        /*height: 100%*/
        /*}*/

        /*#grad1 {*/
        /*background-color: : #9C27B0;*/
        /*background-image: linear-gradient(120deg, #FF4081, #81D4FA)*/
        /*}*/

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E
        }

        /*#msform input,*/
        /*#msform textarea {*/
        /*    padding: 0px 8px 4px 8px;*/
        /*    border: none;*/
        /*    border-bottom: 1px solid #ccc;*/
        /*    border-radius: 0px;*/
        /*    margin-bottom: 25px;*/
        /*    margin-top: 2px;*/
        /*    width: 100%;*/
        /*    box-sizing: border-box;*/
        /*    font-family: montserrat;*/
        /*    color: #2C3E50;*/
        /*    font-size: 16px;*/
        /*    letter-spacing: 1px*/
        /*}*/

        /*#msform input:focus,*/
        /*#msform textarea:focus {*/
        /*    -moz-box-shadow: none !important;*/
        /*    -webkit-box-shadow: none !important;*/
        /*    box-shadow: none !important;*/
        /*    border: none;*/
        /*    font-weight: bold;*/
        /*    border-bottom: 2px solid skyblue;*/
        /*    outline-width: 0*/
        /*}*/

        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>

    <!-- MultiStep Form -->
<div  id="grad1">

                <h2><strong>Sign Up Your User Account</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Overview</strong></li>
                                <li id="personal"><strong>Course Outline</strong></li>
                                <li id="payment"><strong>Trainer</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->


                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Overview</h2>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Title *</label>
                                                <input name="title_en"  type="text" class="form-control"
                                                       placeholder="Title " id="title_en">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Iso *</label>
                                                <input name="iso"  type="text" class="form-control"
                                                       placeholder="Training Iso " id="iso">
                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-lg-2 text-center">
                                                <label>Training Image*</label>
                                                <div class="image-input image-input-outline" id="kt_image_5">
                                                    <div class="image-input-wrapper"
                                                         style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                    </div>

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                           data-action="change" data-toggle="tooltip" title=""
                                                           data-original-title="Personal Image">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="image"
                                                               accept=".png, .jpg, .jpeg" multiple id="image"/>
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                          data-action="cancel" data-toggle="tooltip"
                                                          title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Course Description Ar *</label>

                                                <textarea name="description_ar"  class="form-control summernote description_ar  " id="kt_summernote_1"
                                                          placeholder="Description Ar" id="description_ar"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Course Objectives En*</label>
                                                <textarea name="objective_en"  class="form-control summernote objective_en" id="kt_summernote_1"
                                                          placeholder="Course Objectives En" id="objective_en"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Benefits of Implementing *</label>
                                                <textarea name="benefits_implement"  class="form-control summernote benefits_implement" id="kt_summernote_1"
                                                          placeholder="Benefits of Implementing " id="benefits_implement"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Who should attend En *</label>
                                                <textarea name="attend_en"  class="form-control summernote attend_en" id="kt_summernote_1"
                                                          placeholder="Who should attend En"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Organization Benefits En*</label>
                                                <textarea name="benefits_en"  class="form-control summernote benefits_en" id="kt_summernote_1"
                                                          placeholder="Organization Benefits En" id="benefits_en"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label> Other than meeting customer and organization requirements, QMS will also help to: *</label>
                                                <textarea name="meeting_en"  class="form-control summernote meeting_en" id="kt_summernote_1"
                                                          placeholder="Other than meeting customer and organization requirements, QMS will also help to:" id="meeting_en"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>


                                    </div>
                                    <input type="button" name="next" id="first"  class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Course Outline</h2>

                                        <div id="kt_repeater_1">
                                            <div id="kt_repeater_1" class="form-group row mt-8">
                                                <div data-repeater-list="" class="col-lg-12">

                                        <div data-repeater-item
                                             class="form-group row align-items-left">
                                            <div class="col-lg-10 p-0">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" item-name="work"
                                                           placeholder="Title"  value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 p-0">
                                                <div class="form-group">
                                                    <label>Description *:</label>
                                                    <textarea  name="description" item-name="work" class="form-control summernote" id="kt_summernote_1"
                                                               placeholder="Description" id="descrption"
                                                               rows="2"></textarea>
                                                </div>
                                            </div>



                                            <div class="col-md-2">
                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-block font-weight-bolder btn-light-danger">
                                                    <i class="fa fa-trash
"></i>Delete
                                                </a>
                                            </div>


                                            <div class="separator separator-dashed mt-8 mb-5" style="width: 100%;"></div>

                                        </div>

                                        <div class="form-group row align-items-center">

                                            <div class="col-lg-3 float-right"
                                                 style="float: none !important;margin: 0 auto;">
                                                <a href="javascript:;" data-repeater-create=""
                                                   class="btn btn-block font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i> Add a new Branch
                                                </a>
                                            </div>
                                        </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />

                                </fieldset>



                                <fieldset>
                                    <div class="form-card">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label> Trainer*</label>
                                                <select name="trainer_id" class="form-control"
                                                        id="trainer_id">
                                                    @foreach($teams as $team)
                                                    <option value="{{$team->id}}">{{$team->name_en}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Level En*</label>
                                                <input name="level_en"  type="text" class="form-control"
                                                          placeholder="Level " id="level_en">
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Lessons *</label>
                                                <input name="lesson_en"  type="text" class="form-control"
                                                       placeholder="Lesson " id="lesson_en">
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Enrolled *</label>
                                                <input name="enrolled_en"  type="text" class="form-control"
                                                       placeholder="Enrolled " id="enrolled_en">
                                            </div>





                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Access *</label>
                                                <input name="access_en"  type="text" class="form-control"
                                                       placeholder="Access " id="accesss_en">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Language *</label>
                                                <input name="language_en"  type="text" class="form-control"
                                                       placeholder="Language " id="language_en">
                                            </div>





                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Material Includes *</label>
                                                <textarea name="material_en"  class="form-control summernote material_en" id="kt_summernote_1"
                                                          placeholder="Material Includes"
                                                          rows="2"></textarea>
                                            </div>


                                        </div>





                                    </div>


                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input  type='submit' name="make_payment" class="action-button spinner-white spinner-right" id="btnSubmit" value="Confirm" />

                                </fieldset>


                                <fieldset>
                                    <div class="form-card">

                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                             gfdgfdg
                                            </div>
                                        </div>


                                    </div>
                                </fieldset>



                        </form>
                    </div>

                    </div>
                </div>



</div>
@endsection
@push('js')

    <!-- First Click-->
    <script>
        $(document).ready(function() {

            $("#first").click(function(){
                if(!$('#title_en').val() || !$('#iso').val() ||
                     !$('.description_ar  ').val()  ||
                    !$('.objective_en').val() ||
                    !$('.benefits_implement').val() ||
                    !$('.attend_en').val()||
                    !$('.benefits_en').val()||
                    !$('.meeting_en').val()||
                    !$('#image').val()
                ){
                    toastr.error('You Must Complete Data Plz');
                }else{

                    $(document).ready(function(){

                        var current_fs, next_fs, previous_fs; //fieldsets
                        var opacity;

                        $("#first ,.next").click(function(){

                            current_fs = $(this).parent();
                            next_fs = $(this).parent().next();

                            //Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                            //show the next fieldset
                            next_fs.show();
                            //     hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                },
                                duration: 600
                            });
                        });

                        $(".previous").click(function(){

                            current_fs = $(this).parent();
                            previous_fs = $(this).parent().prev();

                            //Remove class active
                            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                            //show the previous fieldset
                            previous_fs.show();

                            //hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    previous_fs.css({'opacity': opacity});
                                },
                                duration: 600
                            });
                        });

                        $('.radio-group .radio').click(function(){
                            $(this).parent().find('.radio').removeClass('selected');
                            $(this).addClass('selected');
                        });

                        $(".submit").click(function(){

                            return false;
                        })

                    });

                }
            });
        });

    </script>



    <!-- Second Click -->
    <script>
        $(document).ready(function() {

            $("#second").click(function(){
                if(!$('#title_en').val()){
                    alert('out data');
                }else{

                    $(document).ready(function(){

                        var current_fs, next_fs, previous_fs; //fieldsets
                        var opacity;

                        $("#first ,.next").click(function(){

                            current_fs = $(this).parent();
                            next_fs = $(this).parent().next();

                            //Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                            //show the next fieldset
                            next_fs.show();
                            //     hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                },
                                duration: 600
                            });
                        });

                        $(".previous").click(function(){

                            current_fs = $(this).parent();
                            previous_fs = $(this).parent().prev();

                            //Remove class active
                            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                            //show the previous fieldset
                            previous_fs.show();

                            //hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    previous_fs.css({'opacity': opacity});
                                },
                                duration: 600
                            });
                        });

                        $('.radio-group .radio').click(function(){
                            $(this).parent().find('.radio').removeClass('selected');
                            $(this).addClass('selected');
                        });

                        $(".submit").click(function(){

                            return false;
                        })

                    });

                }
            });
        });

    </script>



    <script>
        $(document).ready(function () {
            $("#msform").submit(function (m) {


                $.ajax({
                    type: "POST",
                    url: '{{route('trainings.store')}}',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#btnSubmit').addClass('spinner');
                    },
                    complete: function () {
                        $('#btnSubmit').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            toastr.success('Saved.');
                            window.location="{{route('trainings.index')}}";

                        }
                    },
                    error:function (reject){
                        //  console.log(reject);

                        if(reject.status == 422){
                            var reponse = $.parseJSON(reject.responseText);
                            jQuery.each(reponse.errors, function (key, value) {

                                toastr.error(value);
                            });
                        }
                    }
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>


@endpush
