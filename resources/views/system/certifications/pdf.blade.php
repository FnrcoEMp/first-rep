<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Certification {{$certificate->username_certificate}}</title>
    <style>


        /*   page {
               font-family: 'Lexend' !important;

               background-image: url("https://fnrcoservices.com/public/system/images/certification.jpg");
               background-size: cover;
               background-repeat: no-repeat;
               display: block;

               margin: 0 auto;
               box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
           }*/


        .spaninput {
            position: absolute;
            top: 280px;
            right: 140px;
            padding: 0;
            width: 600px;
            text-align: center;
            font-size: 60px;
            font-weight: bold;
            color: #384b77 !important;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
        }

        .spaninput2 {
            position: absolute;
            right: 90px;
            padding: 0;
            width: 700px;
            text-align: center;
            font-weight: bold;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
            top: 420px;
            color: #222 !important;
            font-size: 24px;
        }

        .spaninput3 {
            position: absolute;
            left: 100px;
            line-height: 20px;
            padding: 0;
            width: 550px;
            text-align: left;
            font-weight: lighter;
            font-family: 'Lexend', cursive;
            margin: 0;

            z-index: 200;
            border: none;
            bottom: 70px;
            color: #222 !important;
            font-size: 12px;
        }

        .spaninput4 {
            position: absolute;
            right: 135px;
            padding: 0;
            width: 550px;
            text-align: center;
            font-weight: lighter;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
            top: 600px;
            color: #222 !important;
            font-size: 23px;
        }

        .spaninput5 {
            position: absolute;
            left: 470px;
            line-height: 20px;
            padding: 0;
            width: 150px;
            text-align: center;
            font-weight: normal;
            font-family: 'Lexend', cursive;
            margin: 0;
            z-index: 200;
            border: none;
            bottom: 95px;
            color: #222 !important;
            font-size: 13px;
        }

        .spaninput6 {
            position: absolute;
            right: 90px;
            padding: 0;
            width: 700px;
            text-align: center;
            font-weight: normal;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
            top: 325px;
            color: #384b77 !important;
            font-size: 24px;
        }

        .spaninput7 {
            position: absolute;
            right: 90px;
            padding: 0;
            width: 700px;
            text-align: center;
            font-weight: normal;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
            top: 355px;
            color: #222 !important;
            font-size: 24px;
        }

        .spaninput8 {
            position: absolute;
            right: 90px;
            padding: 0;
            width: 700px;
            text-align: center;
            font-weight: normal;
            font-family: 'Lexend', cursive;
            margin: 0;
            line-height: 30px;
            z-index: 200;
            border: none;
            top: 385px;
            color: #222 !important;
            font-size: 24px;
        }


    </style>
    {{-- @if ( isset($certificate->company) )

     @else

         <style>


             /*   page {
                    font-family: 'Lexend' !important;

                    background-image: url("https://fnrcoservices.com/public/system/images/certification.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: block;

                    margin: 0 auto;
                    box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
                }*/


             .spaninput {
                 position: absolute;
                 top: 285px;
                 right: 140px;
                 padding: 0;
                 width: 600px;
                 text-align: center;
                 font-size: 60px;
                 font-weight: bold;
                 color: #384b77 !important;
                 font-family: 'Lexend', cursive;
                 margin: 0;
                 line-height: 30px;
                 z-index: 200;
                 border: none;
             }

             .spaninput2 {
                 position: absolute;
                 right: 90px;
                 padding: 0;
                 width: 700px;
                 text-align: center;
                 font-weight: bold;
                 font-family: 'Lexend', cursive;
                 margin: 0;
                 line-height: 30px;
                 z-index: 200;
                 border: none;
                 top: 380px;
                 color: #222 !important;
                 font-size: 24px;
             }

             .spaninput3 {
                 position: absolute;
                 left: 100px;
                 line-height: 20px;
                 padding: 0;
                 width: 550px;
                 text-align: left;
                 font-weight: lighter;
                 font-family: 'Lexend', cursive;
                 margin: 0;

                 z-index: 200;
                 border: none;
                 bottom: 70px;
                 color: #222 !important;
                 font-size: 12px;
             }

             .spaninput4 {
                 position: absolute;
                 right: 135px;
                 padding: 0;
                 width: 550px;
                 text-align: center;
                 font-weight: lighter;
                 font-family: 'Lexend', cursive;
                 margin: 0;
                 line-height: 30px;
                 z-index: 200;
                 border: none;
                 top: 580px;
                 color: #222 !important;
                 font-size: 23px;
             }

             .spaninput5 {
                 position: absolute;
                 left: 470px;
                 line-height: 20px;
                 padding: 0;
                 width: 150px;
                 text-align: center;
                 font-weight: normal;
                 font-family: 'Lexend', cursive;
                 margin: 0;
                 z-index: 200;
                 border: none;
                 bottom: 95px;
                 color: #222 !important;
                 font-size: 13px;
             }


         </style>

     @endif--}}

</head>

<body dir="ltr"
      style="padding: 0; margin: 0; background: #000; position: relative;background: url('https://fnrcoservices.com/public/system/images/empty2.jpg') no-repeat cover;">
{{--

@if ( isset($certificate->company) )


    @else
        <body dir="ltr"
              style="padding: 0; margin: 0; background: #000; position: relative;background: url('https://fnrcoservices.com/public/system/images/empty.jpg') no-repeat cover;">
        @endif
--}}


@if(strlen($certificate->username_certificate) >= 26)
    <div class="spaninput" style="font-size: 30px">
        {{$certificate->username_certificate}}
    </div>
@endif
@if(strlen($certificate->username_certificate) >= 21 && strlen($certificate->username_certificate) <= 25)
    <div class="spaninput" style="font-size: 40px">
        {{$certificate->username_certificate}}
    </div>
@endif

@if(strlen($certificate->username_certificate) >= 1 && strlen($certificate->username_certificate) <= 20)
    <div class="spaninput" style="font-size: 50px">
        {{$certificate->username_certificate}}
    </div>
@endif







{{--@if(strlen($certificate->username_certificate) >= 10 && strlen($certificate->username_certificate) <= 15)
    <div class="spaninput"  style="font-size: 40px">
        {{$certificate->username_certificate}}
    </div>
@endif
@if(strlen($certificate->username_certificate) >= 5 && strlen($certificate->username_certificate) <= 10)
    <div class="spaninput"  style="font-size: 40px">
        {{$certificate->username_certificate}}
    </div>
@endif--}}

<div class="spaninput6">{{isset($certificate->company) ?$certificate->company->name :''}}</div>


{{--
<div class="spaninput6">Aluminum products co. (ALUPCO), Jeddah -KSA</div>
--}}



@if ($certificate->status == 1)
    <div class="spaninput7">Has Successfully Completed the</div>
@else
    <div class="spaninput7">Has attended the</div>
@endif


@if (!is_null($certificate->title))
    @if($certificate->title==1)
        <div class="spaninput8">Awareness & internal auditor Training Course on</div>
    @elseif($certificate->title==2)
        <div class="spaninput8">Awareness Training Course on</div>
    @elseif($certificate->title==3)
        <div class="spaninput8">internal auditor Training Course on</div>
    @endif
@else
    <div class="spaninput8">Training Course on</div>
@endif
{{--

@if ($certificate['category']['title2'] !=Null && isset ($certificate->company))
 --}}
{{--   <div class="spaninput7">Has Successfully Completed the</div>--}}{{--


    <div class="spaninput8">
        '{{$certificate['category']['title2'] }}'
        Training Course on
    </div>
@else
    <div class="spaninput7">Has Successfully Completed the</div>

@endif
--}}





@if ($certificate['category']['title'] !=Null )
    <div class="spaninput2">
        {{$certificate['category']['title'] }}
        <br>
        {{$certificate['category']['name']}}

        @else
            <div class="spaninput2" style="font-size:33px;top: 400px; ">
                <br>
                {{$certificate['category']['name']}}
                @endif

            </div>



            <div class="spaninput4">

                <?php
                $date1=$certificate->start_date;
                $date2=$certificate->end_date;
                ?>
                @if($date1 !=null && $date2 !=null)
                    On
                    @if(\Carbon\Carbon::parse($date1)->format('y') == \Carbon\Carbon::parse($date2)->format('y'))
                        @if(\Carbon\Carbon::parse($date1)->format('m') == \Carbon\Carbon::parse($date2)->format('m'))

                            {{ 'From '. \Carbon\Carbon::parse($date1)->format('d') .' -'  .\Carbon\Carbon::parse($date2)->format('d M Y')}}

                        @else
                            {{'From '. \Carbon\Carbon::parse($date1)->format('d M ').' To ' .\Carbon\Carbon::parse($date2)->format('d M Y') }}

                        @endif
                    @else
                        {{ 'From '. \Carbon\Carbon::parse($date1)->format('d M Y').' To ' .\Carbon\Carbon::parse($date2)->format('d M Y') }}
                    @endif

                @else
                    On {{  \Carbon\Carbon::parse($date1)->format('M d Y') }}


                @endif


                {{--                {{ \Carbon\Carbon::parse($certificate->date)->toFormattedDateString()}}--}}


            </div>
            <div class="spaninput5">{{isset($certificate->coach) ?$certificate->coach->name :'-'}}</div>
            <div class="spaninput3">
                Issue Date :{{ \Carbon\Carbon::parse($certificate->created_at)->toFormattedDateString()}}
                <br/>
                Certificate No. : {{$certificate->serial}}
            </div>

</body>


</html>







