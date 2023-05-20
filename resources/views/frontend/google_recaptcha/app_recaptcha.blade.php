  <html>

  <head>
    <style type="text/css">
    *{
	margin:0;
	padding:0;
	}
        html, body {
          overflow: hidden;
        }
        </style>
        
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  </head>
  <form action='?' method='POST'>
      <div style='height: 600px; width:1000px;' class='g-recaptcha' data-sitekey="{{ env('CAPTCHA_KEY') }}"
          data-callback='captchaCallback' data-expired-callback='expiredCaptchaCallback' data-size='normal'></div>
  </form>
  <script>
      function captchaCallback(response) {
         // console.log(response);
          if ( Captcha != 'undefined') {
              Captcha.postMessage(response);
          }
      }
      function expiredCaptchaCallback(response) {
         // console.log(response);
         // if ( Captcha != 'undefined') {
              Captcha.postMessage("");
          
      }
  </script>
  </body>

  </html>
