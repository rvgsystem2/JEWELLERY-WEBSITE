<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <table style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);">
        <thead style="background-color: #f59e0b; color: white;">
            <tr>
                <th style="padding: 16px; text-align: left; font-size: 18px;">
                    📩 New Contact Message Received
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 24px;">
                    <p style="font-size: 16px; margin-bottom: 16px;">You have received a new message through your website contact form:</p>
                    <table style="width: 100%; font-size: 15px;">
                        <tr>
                            <td style="font-weight: bold; width: 120px;">Name:</td>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Phone:</td>
                            <td>{{ $contact->phone }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Subject:</td>
                            <td>{{ $contact->subject }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Message:</td>
                            <td style="white-space: pre-line;">{{ $contact->message }}</td>
                        </tr>
                    </table>
                    <p style="margin-top: 24px; font-size: 14px; color: #888;">
                     RVJewellers<br>
                    Vijay Cinema Rd, Japlin Ganj, Bahadurpur, Ballia, Uttar Pradesh 277001 <br>
                    <a href="tel:+918707656944">+91 87076 56944</a><br>
                    <a href="https://www.rvjewelry.com">www.rvjewelry.com</a><br>
                    <a href="mailto:info@rvjewelry.com">info@rvjewelry.com</a><br>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
