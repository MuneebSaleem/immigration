<!DOCTYPE html>
<html>
<head>
    <title>US Application</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">

<div style="margin: 0 auto; max-width: 600px; padding: 20px;">
    <h3>Dear {{ $mailData['data']['ssl_first_name'] }},</h3>
    <p>Thank you for your order. This email is a confirmation and summary of your order for a <b>"B-2 Tourist Visa Application
            Guide"</b> which can be downloaded instantly.</p>
    <a href="{{ env('APP_URL') }}/book/e-book.pdf" target="_blank" style="background-color: #28a745; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 4px;">Download your eBook</a>
    <br><br>
    <p>The charge for your eBook will appear on your credit card statement as: <a href="https://www.immigrationfee.com/" style="color: blue;"><b>IMMIGRATIONFEE.COM</b></a>  - <b>$9.95</b></p>

    <h4 style="color: #ff6b6b; font-size: 17px; margin: 0">DOWNLOAD INSTRUCTIONS:</h4>
    <p style="margin: 0">Click on the "Download" link to receive your Immigration Guide instantly. We recommend that you save the file on your
        computer for future reference.</p><br>

    <h4 style="color: #ff6b6b; font-size: 17px; margin: 0">PRINTING INSTRUCTIONS:</h4>
    <p style="margin: 0">In most cases you do not need to print the entire guide. After you have saved the file to your computer, open it in Adobe
        Reader, click on "File", then "Print" and type in the desired page range (e.g. 52-59).</p><br>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead style="background-color: #343447; color: white;">
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; ">Download</th>
            <th style="padding: 8px; border: 1px solid #ddd; ">Order Number</th>
            <th style="padding: 8px; border: 1px solid #ddd; ">Product Name</th>
            <th style="padding: 8px; border: 1px solid #ddd; ">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;"><button style="background-color: #28a745; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 3px;">Download</button></td>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;">{{ $mailData['data']['ssl_txn_id'] }}</td>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;">B-2 Tourist Visa Application Guide</td>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;">$9.95 USD</td>
        </tr>
        </tbody>
    </table>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead style="background-color: #343447; color: white;">
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd;">Billing Information</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Payment Method</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;"> {{ $mailData['data']['ssl_first_name'] }} {{ $mailData['data']['ssl_last_name'] }}</td>
            <td style="padding: 8px; border: 1px solid #ddd; background: grey;">Card Type: {{ $mailData['data']['ssl_card_type'] }} <br>
                Card number: {{ $mailData['data']['ssl_card_number'] }}<br>
                Expiration date: {{  implode('/', str_split($mailData['data']['ssl_exp_date'], 2)) }}</td>
        </tr>
        </tbody>
    </table>

    <p>Do not hesitate to contact us if you require any further assistance.</p>
    <p>You may visit our website <a href="https://www.onlineimmigration.org" style="color: blue;">https://www.onlineimmigration.org</a> if you have any questions related to your purchase.</p>

    <p style="margin: 0; color: black;">Regards,<br>Online Immigration<br>Web: <a href="https://www.onlineimmigration.org" style="color: blue;">https://www.onlineimmigration.org</a><br>Email: <a href="mailto:info@onlineimmigration.org" style="color: blue;">info@onlineimmigration.org</a>
    </p>

</div>

</body>
</html>
