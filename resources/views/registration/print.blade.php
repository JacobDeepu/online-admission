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

            td,
            th {
                border: 0px solid #dddddd;
                text-align: left;
                padding: 2px;
            }

            .page {
                width: 98%;
                min-height: 29.7cm;
                padding: 5px;
                margin: 5px auto;
                border: 1px #D3D3D3 solid;
                border-radius: 5px;
                background: white;
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

            .photo {
                float: right;
            }
        </style>
    </head>

    <body>
        <div>
            <img src="{{ public_path('images/header.png') }}" alt="Chavara Darsan" width="100%" height="auto" />
            <table>
                <tbody>
                    <tr>
                        <td>First Name</td>
                        <td><strong>:</strong></td>
                        <td>{{ $registration->student->first_name }}</td>
                        <td rowspan="6"><img class="photo" src="{{ $photo }}" width="120" height="120" /></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><strong>:</strong></td>
                        <td>{{ $registration->student->last_name }}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><strong>:</strong></td>
                        <td>{{ $registration->student->gender }}</td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><strong>:</strong></td>
                        <td>{{ $registration->student->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><strong>:</strong></td>
                        <td>{{ $registration->student->age }}</td>
                    </tr>
                    <tr>
                        <td>Aadhar No.</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->uid }}</td>
                    </tr>
                    <tr>
                        <td>Religion</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->religion }}</td>
                    </tr>
                    <tr>
                        <td>Caste</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->caste }}</td>
                    </tr>
                    <tr>
                        <td>Social Category</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->social_category }}</td>
                    </tr>
                    <tr>
                        <td>Place of Birth</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->place_of_birth }}</td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->nationality }}</td>
                    </tr>
                    <tr>
                        <td>Mother Tongue</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->mother_tongue }}</td>
                    </tr>
                    <tr>
                        <td>Primary Number</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->primary_number }}</td>
                    </tr>
                    <tr>
                        <td>Secondary Number</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->secondary_number }}</td>
                    </tr>
                    <tr>
                        <td>House Name</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->house_name }}</td>
                    </tr>
                    <tr>
                        <td>Street</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->street }}</td>
                    </tr>
                    <tr>
                        <td>Post Office</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->post_office }}</td>
                    </tr>
                    <tr>
                        <td>Pin Code</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->pin_code }}</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->city }}</td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->district }}</td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->contact->state }}</td>
                    </tr>
                    <tr>
                        <td>Father's Name</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['name'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Occupation</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['occupation'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Annual Income</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['annual_income'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Office address</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['office_address'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Office Number</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['office_number'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Mobile</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['mobile_number'] }}</td>
                    </tr>
                    <tr>
                        <td>Father's Email</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[0]['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Name</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['name'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Occupation</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['occupation'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Annual Income</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['annual_income'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Office address</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['office_address'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Office Number</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['office_number'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Mobile</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['mobile_number'] }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Email</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->student->parent_details[1]['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Class Applying to</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->class }}</td>
                    </tr>
                    <tr>
                        <td>Academic Year</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->academic_year }}</td>
                    </tr>
                    <tr>
                        <td>Previous Institution</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->previous_institution }}</td>
                    </tr>
                    <tr>
                        <td>Siblings</td>
                        <td><strong>:</strong></td>
                        <td colspan="2">{{ $registration->siblings }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

</html>
