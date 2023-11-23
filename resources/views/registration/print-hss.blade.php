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

            .office {
                width: 100%;
                border-top: 2px solid #000;
            }

            .office td {
                padding: 14px;
            }

            .page-break {
                page-break-after: always;
            }

            table td {
                text-align: left;
                padding: 6px;
            }

            .page {
                width: 100%;
                min-height: 29.7cm;
                padding: 4px;
                margin: 4px auto;
                border: 1px #000 solid;
                background: white;
            }
        </style>
    </head>

    <body class="page">
        <table>
            <tr>
                <td colspan="2"><img src="{{ public_path('images/header.png') }}" style="width:100%;" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2 style="text-align:center; font-size:18px;">REGISTRATION FORM FOR ADMISSION: 2024-25<br>CLASS XI</h2>
                </td>
            </tr>
        </table>
        <table>
            <tbody>
                <tr>
                    <td width="50%">Application No</td>
                    <td width="2%"><strong>:</strong></td>
                    <td><span style="color:#F30;">HS{{ $registration->id + 1000 }}</span></td>
                </tr>
                <tr>
                    <td width="50%">Stream for which admission is sought</td>
                    <td width="2%"><strong>:</strong></td>
                    <td width="48%">{{ $registration->class }}</td>
                </tr>
                <tr>
                    <td>Student Name<br>
                        (It should be as per the Birth Certificate)</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->first_name }} {{ $registration->student->last_name }}</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->gender }}</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><strong>:</strong></td>
                    <td>{{ $date_of_birth }}</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->religion }}</td>
                </tr>
                <tr>
                    <td>Caste</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->caste }}</td>
                </tr>
                <tr>
                    <td>Category(General/SC/ST/OBC/OTHERS)</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->social_category }}</td>
                </tr>
                <tr>
                    <td>Aadhaar Number</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->uid }}</td>
                </tr>
                <tr>
                    <td>Total distance from Home to Chavara Darsan</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->distance }}</td>
                </tr>
                <tr>
                    <td>Name of siblings studying in this school</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->siblings }}</td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->blood_group }}</td>
                </tr>
                <tr>
                    <td>School previously attended</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table border="1">
                            <tr>
                                <td>Institution</td>
                                <td>City/Country</td>
                                <td>Year(From-To)</td>
                                <td>Class</td>
                                <td>Syllabus/Board</td>
                            </tr>
                            <tr>
                                <td>{{ $registration->previousSchool->name }}</td>
                                <td>{{ $registration->previousSchool->city }}</td>
                                <td>{{ $registration->previousSchool->year }}</td>
                                <td>{{ $registration->previousSchool->class }}</td>
                                <td>{{ $registration->previousSchool->syllabus }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Reason for leaving the present school</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->previousSchool->reason }}</td>
                </tr>
                <tr>
                    <td>Break in the academic year(if any)</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->break }}</td>
                </tr>
                <tr>
                    <td>Is there evidence of any Learning Disability/ :
                        <br>Orthopedically Handicapped
                    </td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->disability }}</td>
                </tr>
                <tr>
                    <td>If yes, give details</td>
                    <td><strong>:</strong></td>
                    <td>{{ $registration->student->disability_details }}</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table border="1">
                            <tr>
                                <td></td>
                                <td>Father</td>
                                <td>Mother</td>
                                <td>Guardian</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $registration->student->parent_details[0]['name'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['name'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['name'] }}</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>{{ $registration->student->parent_details[0]['nationality'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['nationality'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['nationality'] }}</td>
                            </tr>
                            <tr>
                                <td>Edu.Qualification</td>
                                <td>{{ $registration->student->parent_details[0]['qualification'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['qualification'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['qualification'] }}</td>
                            </tr>
                            <tr>
                                <td>Occupation</td>
                                <td>{{ $registration->student->parent_details[0]['occupation'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['occupation'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['occupation'] }}</td>
                            </tr>
                            <tr>
                                <td>Annual Income</td>
                                <td>{{ $registration->student->parent_details[0]['annual_income'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['annual_income'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['annual_income'] }}</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>{{ $registration->student->parent_details[0]['mobile_number'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['mobile_number'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['mobile_number'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $registration->student->parent_details[0]['email'] }}</td>
                                <td>{{ $registration->student->parent_details[1]['email'] }}</td>
                                <td>{{ $registration->student->parent_details[2]['email'] }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table>
                            <tr>
                                <td width="50%"><strong>Present Address</strong></td>
                                <td width="50%"><strong>Permanent Address</strong></td>
                            </tr>
                            <tr>
                                <td>{{ $registration->contact->house_name }}, {{ $registration->contact->street }}</td>
                                <td>{{ $registration->contact->permanent_house_name }}, {{ $registration->contact->permanent_street }}</td>
                            </tr>
                            <tr>
                                <td>{{ $registration->contact->post_office }}, Pincode: {{ $registration->contact->pin_code }}</td>
                                <td>{{ $registration->contact->permanent_post_office }}, Pincode: {{ $registration->contact->permanent_pin_code }}</td>
                            </tr>
                            <tr>
                                <td>{{ $registration->contact->city }}, {{ $registration->contact->district }}, {{ $registration->contact->state }}</td>
                                <td>{{ $registration->contact->permanent_city }}, {{ $registration->contact->permanent_district }}, {{ $registration->contact->permanent_state }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tr>
                <td colspan="2">I <strong>{{ $registration->student->parent_details[0]['name'] }}</strong> solemnly declare that the above particulars about my child
                    <strong>{{ $registration->student->first_name }}
                        {{ $registration->student->last_name }}</strong> are true to the best of my knowledge. I
                    shall abide the rules and regulations of the school and agree that I shall remit the fees on time.
                </td>
            </tr>
            <tr>
                <td width="50%">Place:</td>
                <td></td>
            </tr>
            <tr>
                <td width="50%"">Date:</td>
                <td style="text-align: right;">Name and Signature<br>(Parent/Guardian)</td>
            </tr>
            <tr>
                <td colspan="2">NB:The following documents are required at the Time of Admission</td>
            </tr>
            <tr>
                <td colspan="2">
                    <ol>
                        <li>One copy of self attested Birth certificate(A4 size).</li>
                        <li>One copy of self attested Aadhaar Card(A4 size).</li>
                        <li>A passport size photograph.</li>
                        <li>One copy of self attested immunization card.</li>
                        <li>Previous exam marklist(for classes 2-8).</li>
                        <li>Original TC</li>
                    </ol>
                </td>
            </tr>
        </table>
        <table class="office">
            <tbody>
                <tr>
                    <td height="65" colspan="2">
                        <h2 style="text-align: center;">FOR OFFICE USE ONLY</h2>
                    </td>
                </tr>
                <tr>
                    <td>Admitted to Class :</td>
                    <td>Date of Admission :</td>
                </tr>
                <tr>
                    <td>Signature of the Principal</td>
                </tr>
            </tbody>
        </table>
        <div class="page-break"></div>
        <table class="receipt">
            <tr>
                <td colspan="6"><img src="{{ public_path('images/header.png') }}" width="100%" /></td>
            </tr>
            <tr>
                <td height="65" colspan="6">
                    <h2 style="text-align: center;">Fee Receipt</h2>
                </td>
            </tr>
            <tr>
                <td width="20%">Application No</td>
                <td width="2%">:</td>
                <td width="25%">HS{{ $registration->id + 1000 }}</td>
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
