<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title }}</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .border-bottom {
                border-bottom: 1px solid #000000;
            }

            .border-top {
                border-top: 1px solid #000000;
            }

            .receipt td {
                padding: 14px;
            }

            .box-table table td {
                border: 2px solid #000000;
                text-align: left;
                padding: 6px;
            }

            @media print {
                .page {
                    width: 98%;
                    min-height: 29.7cm;
                    padding: 5px;
                    margin: 5px auto;
                    border: 1px #D3D3D3 solid;
                    border-radius: 5px;
                    background: white;
                }

                body {
                    /* this affects the margin on the content before sending to printer */
                    margin: 0px;
                }
            }

            @page {
                size: auto;
                /* auto is the initial value */
                /* this affects the margin in the printer settings */
                margin: 5mm 5mm 5mm 5mm;
            }
        </style>
    </head>

    <body class="print">
        <table>
            <tr>
                <td colspan="2"><img src="{{ public_path('images/header.png') }}" style="width:100%;" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2 style="text-align:center; text-transform:uppercase; font-size:18px;">Application for admission to KG</h2>
                </td>
            </tr>
            <tr>
                <td width="84%">Application No : <span style="color:#F30;">KG{{ $registration->id + 1000 }} </span>
                </td>
                <td width="16%" rowspan="2" align="right"><img src="{{ $photo }}" width="100" height="150" /></td>
            </tr>
        </table>
        <div class="box-table">
            <table>
                <tr>
                    <td>1. Name of Pupil</td>
                    <td width="55%">{{ $registration->student->first_name }} {{ $registration->student->last_name }}</td>
                </tr>
                <tr>
                    <td>2. Date of Birth </td>
                    <td>{{ $registration->student->date_of_birth }}</td>
                </tr>
                <tr>
                    <td>3. Age (as on June 1st of academic year) </td>
                    <td>{{ $registration->student->age }}</td>
                </tr>
                <tr>
                    <td>4. Sex (Male / Female)</td>
                    <td>{{ $registration->student->gender }}</td>
                </tr>
                <tr>
                    <td>5. Nationality</td>
                    <td>{{ $registration->student->nationality }}</td>
                </tr>
                <tr>
                    <td>6. Religion / Caste</td>
                    <td>{{ $registration->student->religion }} / {{ $registration->student->caste }}</td>
                </tr>
                <tr>
                    <td>7. Mother Tongue</td>
                    <td>{{ $registration->student->mother_tongue }}</td>
                </tr>
                <tr>
                    <td>8. Name of Father</td>
                    <td>{{ $registration->student->parentDetails[0]['name'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        Occupation</td>
                    <td>{{ $registration->student->parentDetails[0]['occupation'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        Office Address</td>
                    <td>{{ $registration->student->parentDetails[0]['office_address'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        E-mail Id</td>
                    <td>{{ $registration->student->parentDetails[0]['email'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right;">
                        Mobile</td>
                    <td>{{ $registration->student->parentDetails[0]['mobile_number'] }}</td>
                </tr>
                <tr>
                    <td>9. Name of Mother</td>
                    <td>{{ $registration->student->parentDetails[1]['name'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        Occupation</td>
                    <td>{{ $registration->student->parentDetails[1]['occupation'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        Office Address</td>
                    <td>{{ $registration->student->parentDetails[1]['office_address'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border-bottom: 2px solid #fff;">
                        E-mail Id</td>
                    <td>{{ $registration->student->parentDetails[1]['email'] }}</td>
                </tr>
                <tr>
                    <td style="text-align:right;">Mobile</td>
                    <td>{{ $registration->student->parentDetails[1]['mobile_number'] }}</td>
                </tr>
                <tr>
                    <td>10. Home Address</td>
                    <td>{{ $registration->contact->house_name }}
                        </br>{{ $registration->contact->street }}
                        </br> {{ $registration->contact->post_office }} {{ $registration->contact->pin_code }}
                        </br> {{ $registration->contact->city }} {{ $registration->contact->district }} {{ $registration->contact->state }}
                    </td>
                </tr>
                <tr>
                    <td> 11. Siblings</td>
                    <td>{{ $registration->siblings }}</td>
                </tr>
                <tr>
                    <td>12. Schools Previously Attended</td>
                    <td>{{ $registration->previous_institution }}</td>
                </tr>
                <tr>
                    <td>13. Distance From Home to School</td>
                    <td>{{ $registration->distance }}</td>
                </tr>
            </table>
        </div>
        <div class="page-break"></div>
        <table class="receipt">
            <tr>
                <td colspan="6"><img src="{{ public_path('images/header.png') }}" style="width:100%;" /></td>
            </tr>
            <tr>
                <td height="65" colspan="6">
                    <h2 style="text-align:center">Fee Receipt</h2>
                </td>
            </tr>
            <tr>
                <td width="20%">Admission No</td>
                <td width="2%">:</td>
                <td width="25%">KG{{ $registration->id + 1000 }}</td>
                <td width="20%">Name</td>
                <td width="2%">:</td>
                <td width="25%">{{ $registration->student->first_name }} {{ $registration->student->last_name }}</td>
            </tr>
            <tr>
                <td width="20%">Receipt No</td>
                <td width="2%">:</td>
                <td width="25%">{{ $registration->transaction->id + 1000 }}</td>
                <td width="20%">Date</td>
                <td width="2%">:</td>
                <td width="25%">{{ $registration->transaction->merch_transaction_date }}</td>
            </tr>
            <tr>
                <td width="20%">Online Trans Id</td>
                <td width="2%">:</td>
                <td width="25%">{{ $registration->transaction->merch_transaction_id }}</td>
                <td width="20%">Bank Ref No</td>
                <td width="2%">:</td>
                <td width="25%">{{ $registration->transaction->bank_transaction_id }}</td>
            </tr>
            <tr>
                <td colspan="6">
                    <table>
                        <tr class="border-top border-bottom">
                            <td>Particulars</td>
                            <td>Fee Amount</td>
                            <td>Concession</td>
                            <td>Amount</td>
                        </tr>
                        <tr>
                            <td>Admission Fee</td>
                            <td>02</td>
                            <td> 0 </td>
                            <td>02</td>

                        </tr>
                        <tr class="border-top border-bottom">
                            <td><strong>Total Amount:</strong></td>
                            <td></td>
                            <td></td>
                            <td><strong>02</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>
