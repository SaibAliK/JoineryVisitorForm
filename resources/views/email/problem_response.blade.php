<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <meta name="format-detection" content="telephone=no" />
    <style>
        body {
            margin: 0;
            padding: 0;
            min-width: 100%;
            width: 100% !important;
            height: 100% !important;
        }

        body,
        table,
        td,
        div,
        p,
        a {
            -webkit-font-smoothing: antialiased;
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            line-height: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse !important;
            border-spacing: 0;
        }

        img {
            border: 0;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        @media all and (min-width: 560px) {
            .container {
                border-radius: 8px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                -khtml-border-radius: 8px;
            }
        }

        a,
        a:hover {
            color: #FFFFFF;
        }

        .footer a,
        .footer a:hover {
            color: #828999;
        }
    </style>
    <title>Flagged Response | Munster Joinery</title>
</head>

<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
        background-color: #2D3445;
        color: #FFFFFF;" bgcolor="#2D3445" text="#FFFFFF">
    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background">
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;" bgcolor="#2D3445">
                <table border="0" cellpadding="0" cellspacing="0" align="center" width="500" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
                max-width: 500px;" class="wrapper">
                    <tr>
                        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 20px;
                        padding-bottom: 20px;">

                            <a target="_blank" style="text-decoration: none;" href=""><img border="0" vspace="0" hspace="0" src="{{asset('MJ_new.png')}}" width="150" height="50" alt="Munster Joinery" style="
                            color: #FFFFFF;
                        font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;  padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
                        padding-top: 5px;
                        color: #FFFFFF;
                        font-family: sans-serif;" class="header">
                            Flagged response submitted by <u>{{ $data['arrival']->driver_name }}</u>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 24px;" class="line">
                            <hr color="#565F73" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px;
                        color: #FFFFFF;
                        font-family: sans-serif; font-style: italic;" class="paragraph">
                            Dear HR,
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 5px;
                        color: #FFFFFF;
                        font-family: sans-serif; justify-content: center;" class="paragraph">
                            <u>{{ $data['arrival']->driver_name }}</u> just submitted a Flagged response, here is the full response.

                            <div style="padding-bottom: 5px;">Visitor Name: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->driver_name }}</strong></div>
                            <div style="padding-bottom: 5px;">Mobile: <strong style="color: #bbb;font-size: 18px;">{{$data['arrival']->driver_mobile}} </strong></div>
                            <div style="padding-bottom: 5px;">Date: <strong style="color: #bbb;font-size: 18px;">{{$data['arrival']->created_at}}</strong></div>
                            <div style="padding-bottom: 5px;">Freight Company: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->freight_company }}</strong></div>
                            <div style="padding-bottom: 5px;">Taste And Smell: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->taste_and_smell ?? "" }}</strong></div>
                            <div style="padding-bottom: 5px;">Close Contact: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->close_contact ?? "" }}</strong></div>
                            <div style="padding-bottom: 5px;">Agree to notify MJ: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->diagnosed_with_Covid ?? "" }}</strong></div>
                            @if(!empty($data['arrival']->countries))
                                <div style="padding-bottom: 5px;">Countries: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->countries ?? "" }}</strong></div>
                            @endif
                            <div style="padding-bottom: 5px;">Supplier name - Description: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->description_of_freight ?? "" }}</strong></div>
                            <div style="padding-bottom: 5px;">Travel Alone: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->travel_alone ?? "" }}</strong></div>
                            @if($data['arrival']->travel_alone =="no")
                                <div style="padding-bottom: 5px;">Passenger Name: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->passenger_name ?? "" }}</strong></div>
                                 <div style="padding-bottom: 5px;">Passenger Contact: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->passenger_contact ?? "" }}</strong></div>
                            @endif
                            <div style="padding-bottom: 5px;">Department: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->department->name ?? "" }}</strong></div>
                            <div style="padding-bottom: 5px;">Zone: <strong style="color: #bbb;font-size: 18px;">{{ $data['arrival']->department->zone->name ?? "" }}</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 15px; font-weight: 400; line-height: 160%;
                        padding-top: 15px;
                        color: #FFFFFF;
                        font-family: sans-serif;" class="paragraph">
                            Thanks,<br />
                            Munster Joinery
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 30px;" class="line">
                            <hr color="#565F73" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>