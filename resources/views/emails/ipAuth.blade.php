
<html>
  <head></head>
  <body>
    <div style="width:100%; height:100%; margin:0; padding:0">
      <h1>
        Authorize a new IP address to log in to your wallet.
      </h1><br/>
      <p style="text-align:left">
        Hi there, <br/><br/>

        It seems that you are trying to log in to your wallet with a new IP address. You can authorize it with the link below:<br/><br/>
        
        <a clicktracking="off" href="https://ipauth.nanowallet.io/{{ $authorizedIpModel->rand_id }}">https://ipauth.nanowallet.io/{{ $authorizedIpModel->rand_id }}</a>
        <br/><br/>
        Make sure you recognize the IP address trying to log in.
        <br/><br/>
        If you need anything you can contact us at support@nanowallet.io.<br/><br/>
        Sincerely,<br/>
        The NanoWallet.io Team.
      </p>
    </div>
  </body>
</html>