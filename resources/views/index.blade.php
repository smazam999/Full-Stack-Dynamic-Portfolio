<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM Golam Azam protfolio</title>
    @stack('style')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background:  rgba(16, 52, 82, 0.74);
            color: rgb(255, 255, 255);
            padding: 20px;
            text-align: center;
        }
        

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .header h1 {
            font-size: 2em;
        }

        .nav {
            margin-top: 10px;
        }

        .nav a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            margin: 0 10px;
        }

        .about,
        .projects,
        .contact {
            background: rgba(80, 128, 192, 0.562);
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.05);
        }

        .about h2,
        .projects h2,
        .contact h2 {
            margin-bottom: 15px;
            color: rgb(255, 255, 255);
        }

        .project-card {
            background: #85a7c29a;
            padding: 15px;
            border: 1px solid rgba(67, 96, 160, 0.692);
            border-radius: 8px;
        }

        .contact form {
            display: flex;
            flex-direction: column;
        }

        .contact textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 1em;
        }

        .space {
            display: flex;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .contact button {
            padding: 10px;
            background: rgba(26, 89, 126, 0.712);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight:bold;
        }

        .footer {
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            background: rgba(16, 52, 82, 0.74);
            color: white;
        }

        .b1 {
            padding: 10px;
            background: rgba(29, 98, 155, 0.616);
            color: rgb(255, 255, 255);
            font-weight:bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .b2{
            padding: 10px;
            background: rgba(29, 98, 155, 0.616);
            color: rgb(255, 255, 255);
            font-weight:bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .img2 {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border-radius: 50%;
            height: 150px;
            width: 150px
        }

        .ct1 {
            max-width: 1200px;
            margin: left;
            padding: 20px;
            background: whitesmoke;
            color: #333;
        }

        .about-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            /* Optional spacing between text and image */
        }

        .ct1 {
            flex: 1;
            padding: 20px;
            background: whitesmoke;
            color: #333;
        }

        .img2 {
            width: 300px;
            /* Adjust size as needed */
            height: auto;
            border-radius: 8px;
            /* Optional: makes the image corners rounded */
        }


        @media (max-width: 600px) {
            .header h1 {
                font-size: 1.5em;
            }

            .nav a {
                display: block;
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    @yield('main-content')
    <script src="{{ asset('asset/script.js') }}"></script>
</body>

</html>
