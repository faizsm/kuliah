<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <table width='30%' border='0' align='center'>
        <form id="loginForm" method="POST" action="login.php">
            <tr>
                <th colspan="3">FORM LOGIN</th>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type='text' name='user' size='30'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type='password' name='pass' size='30'></td>
            </tr>
            <tr>
                <td>Validasi</td>
                <td>:</td>
                <td>
                    <div class="g-recaptcha" data-sitekey="6LcCrAYqAAAAAGXTa-M37O5NxOsEgxgGYmWnlfUN"></div>
                </td>
            </tr>
            <tr>
                <th colspan="3"><input type='submit' name='fLogin' value='OK'></th>
            </tr>
        </form>
    </table>
 <!-- Tambahkan skrip reCAPTCHA -->
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Tambahkan skrip untuk memeriksa reCAPTCHA sebelum submit form -->
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        var recaptchaResponse = grecaptcha.getResponse();
        if (recaptchaResponse.length === 0) {
            event.preventDefault();
            alert('Please verify that you are not a robot.');
            // Optional: redirect to form_login.php if needed
            window.location.href = 'form_login.php';
        }
    });
</script>

</body>
</html>
