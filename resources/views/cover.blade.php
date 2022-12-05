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
</head>

<body class="w3-display-container bgimg">
    <div class="w3-display-middle w3-text-white w3-center">
        <h1 class="w3-jumbo">Ilham & Bunga</h1>
        </br>
        <h2 class="w3-center"><b>03.03.2023</b></h2>
        </br>
        <a href="/main">
            {{-- <button class="btn" onclick="openmain()"> pakai js --}}
            <button class="w3-button w3-round w3-blue w3-opacity w3-hover-opacity-off" style="padding:8px 60px">
                Buka Undangan
            </button>
        </a>
        <p class="w3-center w3-text-grey" id="coverword"></p>
    </div>

    <!-- Script -->
    {{-- <script src="js/cover.js"></script> --}}
</body>

</html>
