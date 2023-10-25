    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
        <title>Cover Undangan</title>
        <style>
            body,
            h1,
            h2 {
                font-family: "Raleway", sans-serif
            }

            body,
            html {
                height: 100%
            }

            p {
                line-height: 2
            }

            .bgimg {
                background-position: center;
                background-size: cover;
                background-image: url("images/img1.jpg")
            }
        </style>
        @livewireStyles
    </head>

    <body class="w3-display-container bgimg">
        <livewire:cover />
        @livewireScripts
    </body>

    </html>
