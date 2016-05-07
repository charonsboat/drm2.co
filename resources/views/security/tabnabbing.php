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
        }
        h1
        {
            font-size: 7rem;
        }
    </style>
</head>
<body>
    <h1>;)</h1>

    <script>
        if ('#attack' === window.location.hash)
        {
            alert('This could have been an attack!');
        }
        else
        {
            window.opener.location.assign(window.location.href + '#attack');
        }
    </script>
</body>
</html>
