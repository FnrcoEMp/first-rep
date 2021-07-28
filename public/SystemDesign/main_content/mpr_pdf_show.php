<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <title> </title>
    <style>
        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

        /** Define the footer rules **/
        /*  footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 60px;
            padding: 0 20px;
            !*border-top: 1px solid #000;*!
        }*/

        footer img {
            width: 100%
        }


        body {

            font-family: 'Cairo', sans-serif;
            font-size: 13px;
            word-break: break-word;
            line-height: 16px !important;
            margin-top: 60px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;

        }

        table {
            border: 1px solid #000;
            vertical-align: middle;
            width: 100%;
            line-height: 16px !important;
            border-collapse: collapse;
        }

        tr {
            border: 1px solid #000;
            vertical-align: middle;
            line-height: 10px !important;
        }

        table.topdet {
            border: transparent;
            vertical-align: middle;
            width: 100%;
            text-align: left;
            line-height: 16px !important;
            border-collapse: collapse;
        }

        table.topdet tr {
            border: transparent;
            font-weight: bold;
        }

        table.topdet td {
            border: transparent;
            font-weight: bold;
        }


        /* td p {line-height: 16px !important;}*/

        .text {
            float: left;
            display: inline-block;
            width: 40%;
        }

        /*
                .text p strong { font-weight: normal; line-height: 20px; }
        */

        .logo {
            float: right;
            display: inline-block;
            width: 60%;
            text-align: left;
        }

        .red {
            color: #ae1f23
        }

        @page {
            margin: 20px;
            size: A4 landscape;

        }

        p {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #333
        }

        /*a {padding: 0 !important;margin: 0 !important;line-height: 0px !important; color: #9999ff; background: #000 !important;}*/

        /** Define now the real margins of every page in the PDF **/

        .qqq td {
            width: 50% !important;
            height: 25px;
        }

        /*.half {width: 50% !important;}*/
        .logo {
            position: relative;
        }

        .logo img {
            position: absolute;
            right: 10px;
            top: 0px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            background-image:url("{{url('system/elment.png')}}") ; text-indent: 25px; margin: 0px;line-height: 0px;background-repeat: no-repeat; font-size: 11px !important;margin: 0px;background-position: left; vertical-align: top;
        }

        main {
            position: relative;
        }

        .job_requ {
            width: 30%;
            float: right;
        }

        h4 {
            background:url("{{url('system/lable.png')}}");
            display: inline-block;
            font-size: 18px;
            padding: 10px; margin: 0; margin-top: 10px;
        }
    </style>
</head>


<header>

    <div class="logo">
        <h3 style="font-size: 24px;font-weight: bold;text-decoration: underline;">Manpower Request</h3>
        <img src="{{url('system/logo-wide2.png')}}" style="width: 80px;">
    </div>
</header>



<main>
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 10px 5px;
            overflow: hidden;
            word-break: break-word;
            border-color: black; text-overflow: ellipsis;
            white-space: nowrap;
        }

        .tg th {
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 10px 5px;
            overflow: hidden;
            word-break: normal;
            border-color: black; text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <table class="tg topdet">
        <tr>
            <th class="tg-cly1" style="border-top: 2px solid #2196F3;border-left: 2px solid #2196F3;">
                @if ($mpr->client_type == 1)
                Client

            </th>
            <th class="tg-0lax" style="border-top: 2px solid #2196F3;border-right: 2px solid #2196F3;text-align: left;">
                : {{ $mpr->client->name??'' }}</th>
            @else
            Department

            </th>
            <th class="tg-0lax" style="border-top: 2px solid #2196F3;border-right: 2px solid #2196F3;text-align: left;">
                : {{ $mpr->department->title??'' }}</th>

            @endif
            <th class="tg-gvcd" rowspan="3"></th>
            <th class="tg-73oq" style="border-top: 2px solid #2196F3;border-left: 2px solid #2196F3;">Position</th>
            <th class="tg-0lax" style="border-top: 2px solid #2196F3;border-right: 2px solid #2196F3;text-align: left;color: #8d0d04; text-overflow: ellipsis;
  white-space: nowrap;">:
                {{ $mpr->position->title??'' }} </th>
            <th class="tg-ycr8" rowspan="3"></th>
            <th class="tg-0lax" style="border-top: 2px solid #2196F3;border-left: 2px solid #2196F3;">Date of Request
            </th>
            <th class="tg-0lax" style="border-top: 2px solid #2196F3;border-right: 2px solid #2196F3;text-align: left;">
                : {{ $mpr->created_at->format('d/m/Y') }}</th>
        </tr>
        <tr>
            <td class="tg-cly1" style="border-left: 2px solid #2196F3;">MPR No</td>
            <td class="tg-0lax" style="border-right: 2px solid #2196F3; text-align: left;">: {{ $mpr->mprNo??'' }}</td>
            <td class="tg-73oq" style="border-left: 2px solid #2196F3;">Gender</td>
            <td class="tg-0lax" style="border-right: 2px solid #2196F3; text-align: left;">:
                @if ( $mpr->gender == 1 )
                Male
                @elseif( $mpr->gender == 2 )
                Female

                @else
                Male/Female
                @endif

            </td>
            <td class="tg-0lax" style="border-left: 2px solid #2196F3;">Requested by</td>
            <td class="tg-0lax" style="border-right: 2px solid #2196F3; text-align: left;">:{{ $mpr->createdBy->name }}
            </td>
        </tr>
        <tr>
            <td class="tg-0lax" style="border-left: 2px solid #2196F3; border-bottom: 2px solid #2196F3">MPR Type</td>
            <td class="tg-0lax"
                style="border-bottom: 2px solid #2196F3;border-right: 2px solid #2196F3; text-align: left;">:
                @if ( $mpr->gender == 1 )
                Local
                @elseif($mpr->gender == 2)
                International
                @else
                Local/International
                @endif

            </td>
            <td class="tg-73oq" style="border-left: 2px solid #2196F3; border-bottom: 2px solid #2196F3">Quantity</td>
            <td class="tg-0lax"
                style="border-bottom: 2px solid #2196F3;border-right: 2px solid #2196F3; text-align: left;">:
                {{ $mpr->quantity??'' }}</td>
            <td class="tg-0lax" style="border-left: 2px solid #2196F3; border-bottom: 2px solid #2196F3">Contact email
            </td>
            <td class="tg-0lax"
                style="border-bottom: 2px solid #2196F3;border-right: 2px solid #2196F3; text-align: left;">:
                {{ $mpr->email??'' }}</td>
        </tr>
    </table>
    <h4>Key Responsibilities/Duties</h4>
    <?php
    $arr=[];
    $responsibilities =   $mpr->position->responsibilities;
    $arr = explode(PHP_EOL, $responsibilities);
    ?>

    <ul>
        @foreach ($arr as $item)
        <li> {{  substr($item,0,128) }}</li>
        @endforeach

    </ul>

    <div style="position: absolute;right: 0; bottom: 50px;width: 30%;">
        <h4 style="margin: 0px;">Job Requirements</h4>
        <div style="border: 2px solid #2196F3;padding: 10px; ">
            <p>Age Preferred: {{ $mpr->ageFrom??''  }} – {{ $mpr->ageTo??''  }} Years</p>
            {{-- <p>Nationality: {{  $mpr->ageFrom   }}</p> --}}
            {{-- <p>Education : {{ $mpr->ageFrom  }} Years Graduate </p> --}}
            <p>Computer Skills :
                @if ( $mpr->computer == 1 )
                Excellent
                @elseif($mpr->computer == 2)
                Good
                @else
                Fair
                @endif
            </p>
            <p>Experience: {{ $mpr->expFrom??'' - $mpr->expTo??''  }} Years</p>

            <p>Salary Range: SAR-{{ $mpr->salaryFrom??''  }} – {{ $mpr->salaryTo??''  }}</p>
        </div>

    </div>



</main>
</body>

</html>