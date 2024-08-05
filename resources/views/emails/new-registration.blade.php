<!DOCTYPE html>
<html>

    <head>
        <title>Admission Application {{ $student->first_name }}</title>
    </head>

    <body>
        <h1>Congratulations, {{ $student->first_name }} {{ $student->last_name }}!</h1>
        <p>Dear {{ $student->parentDetails[0]['name'] }},</p>
        <p>We are pleased to inform you that your application for admission has been successfully processed.</p>
        <p>Please keep the print out of the attachment and the required documents.</p>
        <p>Thank You</p>
    </body>

</html>
