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

            tbody {
                border: 1px solid #dddddd;
            }

            .photo {
                float: right;
            }
        </style>
    </head>

    <body>
        <img src="{{ public_path('images/header.png') }}" alt="Chavara Darsan" width="100%" height="auto" />
        <table>
            <tbody>
                <tr>
                    <td>First Name</td>
                    <td>{{ $registration->student->first_name }}</td>
                    <td rowspan="6"><img class="photo" src="{{ $photo }}" width="120" height="120" /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{ $registration->student->last_name }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $registration->student->gender }}</td>
                </tr>
                <tr>
                    <td>date of birth</td>
                    <td>{{ $registration->student->date_of_birth }}</td>
                </tr>
                <tr>
                    <td>age</td>
                    <td>{{ $registration->student->age }}</td>
                </tr>
                <tr>
                    <td>Aadhar No.</td>
                    <td colspan="2">{{ $registration->student->uid }}</td>
                </tr>
                <tr>
                    <td>religion</td>
                    <td colspan="2">{{ $registration->student->religion }}</td>
                </tr>
                <tr>
                    <td>caste</td>
                    <td colspan="2">{{ $registration->student->caste }}</td>
                </tr>
                <tr>
                    <td>social_category</td>
                    <td colspan="2">{{ $registration->student->social_category }}</td>
                </tr>
                <tr>
                    <td>place_of_birth</td>
                    <td colspan="2">{{ $registration->student->place_of_birth }}</td>
                </tr>
                <tr>
                    <td>nationality</td>
                    <td colspan="2">{{ $registration->student->nationality }}</td>
                </tr>
                <tr>
                    <td>mother tongue</td>
                    <td colspan="2">{{ $registration->student->mother_tongue }}</td>
                </tr>
                <tr>
                    <td>primary number</td>
                    <td colspan="2">{{ $registration->contact->primary_number }}</td>
                </tr>
                <tr>
                    <td>secondary number</td>
                    <td colspan="2">{{ $registration->contact->secondary_number }}</td>
                </tr>
                <tr>
                    <td>house name</td>
                    <td colspan="2">{{ $registration->contact->house_name }}</td>
                </tr>
                <tr>
                    <td>street</td>
                    <td colspan="2">{{ $registration->contact->street }}</td>
                </tr>
                <tr>
                    <td>post office</td>
                    <td colspan="2">{{ $registration->contact->post_office }}</td>
                </tr>
                <tr>
                    <td>pin code</td>
                    <td colspan="2">{{ $registration->contact->pin_code }}</td>
                </tr>
                <tr>
                    <td>city</td>
                    <td colspan="2">{{ $registration->contact->city }}</td>
                </tr>
                <tr>
                    <td>district</td>
                    <td colspan="2">{{ $registration->contact->district }}</td>
                </tr>
                <tr>
                    <td>state</td>
                    <td colspan="2">{{ $registration->contact->state }}</td>
                </tr>
                <tr>
                    <td>Father's Name</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['name'] }}</td>
                </tr>
                <tr>
                    <td>Father's Occupation</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['occupation'] }}</td>
                </tr>
                <tr>
                    <td>Father's Annual Income</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['annual_income'] }}</td>
                </tr>
                <tr>
                    <td>Father's Office address</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['office_address'] }}</td>
                </tr>
                <tr>
                    <td>Father's Office Number</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['office_number'] }}</td>
                </tr>
                <tr>
                    <td>Father's Mobile</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['mobile_number'] }}</td>
                </tr>
                <tr>
                    <td>Father's Email</td>
                    <td colspan="2">{{ $registration->student->parent_details[0]['email'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Name</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['name'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Occupation</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['occupation'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Annual Income</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['annual_income'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Office address</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['office_address'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Office Number</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['office_number'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Mobile</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['mobile_number'] }}</td>
                </tr>
                <tr>
                    <td>Mother's Email</td>
                    <td colspan="2">{{ $registration->student->parent_details[1]['email'] }}</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td colspan="2">{{ $registration->class }}</td>
                </tr>
                <tr>
                    <td>academic year</td>
                    <td colspan="2">{{ $registration->academic_year }}</td>
                </tr>
                <tr>
                    <td>previous institution</td>
                    <td colspan="2">{{ $registration->previous_institution }}</td>
                </tr>
                <tr>
                    <td>siblings</td>
                    <td colspan="2">{{ $registration->siblings }}</td>
                </tr>
            </tbody>
        </table>
    </body>

</html>
