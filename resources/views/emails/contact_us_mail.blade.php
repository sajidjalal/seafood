<!DOCTYPE html>
<html>

<head>
    <title>{{ $user_mail_data['subject'] }}</title>
</head>

<body>

    <h1>
        Dear Admin,
    </h1>
    <br>

    <p class="para">
        following are the details of person who wants to connect with you,
    </p>

    <p class="para">
        Name:  {{ $user_mail_data['user_mail_data']['name'] }}<br>
        Email: {{ $user_mail_data['email_to'] }}<br>
        Mobile Number: {{ $user_mail_data['user_mail_data']['mobile_number'] }}<br>
        Subject: {{ $user_mail_data['user_mail_data']['subject'] }}<br>
        Message: {{ $user_mail_data['user_mail_data']['message'] }}<br>
    </p>
    <p>Thank you</p>
</body>

</html>
