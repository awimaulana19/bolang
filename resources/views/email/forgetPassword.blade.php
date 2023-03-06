<div>
    Hello!
    <br>
    Please click the button below to reset your password.
</div>

<div>
    <a href="{{ route('reset.password.get', $token) }}" style="display: inline-block; background-color: #4CAF50; color: white; padding: 10px 10px; text-align: center; text-decoration: none; border-radius: 5px; margin-top: 10px; margin-bottom: 10px;">Reset Password</a>
</div>

<div>
    If you did not forgot password, no further action is required.
    <br><br>
    Regards,<br>
    Bolang
    <br>
</div>

<div>
    If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <br>
    <a href="{{ route('reset.password.get', $token) }}">{{ route('reset.password.get', $token) }}</a>
</div>
