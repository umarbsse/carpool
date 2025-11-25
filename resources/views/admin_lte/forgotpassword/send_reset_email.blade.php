<!-- Subject: Reset your password -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Password Reset</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:0; background:#f4f6f8; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">

  <!-- Outer container -->
  <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f4f6f8; padding:20px 0;">
    <tr>
      <td align="center">

        <!-- Card -->
        <table role="presentation" cellpadding="0" cellspacing="0" width="600" style="background:#ffffff; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.06); overflow:hidden;">
          
          <!-- Header -->
          <tr>
            <td style="background:#007bff; padding:24px; text-align:center; color:#ffffff;">
              <h1 style="margin:0; font-size:20px; font-weight:600;">{{$appname}}</h1>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:30px;">
              <p style="margin:0 0 12px 0; font-size:16px; color:#333;">Hi {{$username}},</p>

              <p style="margin:0 0 18px 0; color:#555; line-height:1.5;">
                We received a request to reset your password. Click the button below to choose a new password. This link will expire in {{$password_expire_time}}.
              </p>

              <!-- Button -->
              <table role="presentation" cellpadding="0" cellspacing="0" style="margin:20px 0;">
                <tr>
                  <td align="center">
                    <a href="{{$reset_url}}"
                       style="background:#007bff; color:#ffffff; text-decoration:none; padding:12px 22px; border-radius:6px; display:inline-block; font-weight:600;">
                      Reset Password
                    </a>
                  </td>
                </tr>
              </table>

              <p style="margin:0 0 18px 0; color:#777; font-size:14px;">
                If the button doesn't work, copy and paste the following link into your browser:
                <br>
                <a href="{{$reset_url}}" style="color:#007bff; word-break:break-all;">{{$reset_url}}</a>
              </p>

              <hr style="border:none; border-top:1px solid #eee; margin:22px 0;">

              <p style="margin:0; color:#666; font-size:13px;">
                If you didn't request a password reset, you can safely ignore this email — your password will not change.
              </p>

              <p style="margin:18px 0 0 0; color:#666; font-size:13px;">
                Thanks,<br>
                The {{$appname}} Team
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#fafafa; padding:16px 24px; text-align:center; font-size:12px; color:#999;">
              <div>Need help? <a href="mailto:{{$supprtmail}}" style="color:#007bff; text-decoration:none;">{{$supprtmail}}</a></div>
              <div style="margin-top:6px;">&copy; {{$year}} {{$appname}}. All rights reserved.</div>
            </td>
          </tr>

        </table>
        <!-- End Card -->

      </td>
    </tr>
  </table>

</body>
</html>
