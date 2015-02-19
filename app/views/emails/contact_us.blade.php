<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">

        <style>
            span {
                font-size: 0.75em;
            }
        </style>
    </head>
    <body>
           <h2>Help Request from:<span>{{ $name }}</span></h2>
           <h2>Users email: <span>{{ $email_address }}</span></h2>
           <h2>Message Conent:<span>{{ ' ' . $content }}</span></h2>
    </body>
</html>

