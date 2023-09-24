<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Projects - Show</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="{{ route('projects.index') }}" class="back-btn">Back</a>
    <br>

    <div class="centered-page">
        <div class="card">
            <div class="proj-title">
                <h1>{{ $project -> project_name }}</h1>
                <hr>
            </div>
            <div class="proj-img">
                <img src="{{ asset($project -> project_image) }}">
            </div>
            <br>
            <div class="proj-details">
                <h4>Project Execution Time: {{ $project -> project_start_date }} - {{ $project -> project_finish_date }}</h4>
                <p>Project Link: <a href="{{ $project -> project_link }}">click here to open</a></p>
                <p>{{ $project -> project_details }}</p>
            </div>
        </div>
    </div>
</body>
</html>

<!-- the style.css reference link can't work, thus I'll just put style in the same file with the HTML code below -->
<style>
    body {
        background-color:purple;
    }
    /* back button */
    .back-btn {
        padding: 8px 16px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        text-align: center;
        display: inline-block;
        position: relative;
        font-size: 20px;
        border: 1px solid white;
        border-radius: 4px;
        width: 100px;
        height: 25px;
        display: inline-block;
        padding: 3px;
        text-decoration: none;
        background-color:darkslateblue;
        color:yellow;
    }

    .centered-page {
        display: flex;
        position: relative;
        justify-content: center;
        align-items: center;
        text-align: center;
        width: 100%;
        min-height: 100vh;
        background-color:purple;
    }

    .centered-page .card {
        text-align: center;
        font-weight: bolder;
        color:thistle;
        background-color:indigo;
        overflow: hidden;
    }

    .centered-page .proj-title {
        width: 1200px;
        height: 300px;
        text-align: center;
    }

    .centered-page .proj-title h1 {
        font-weight: bolder;
        font-size: 35px;
    }

    .centered-page .proj-img {
        width: 1200px;
        height: 500px;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    /*
    .centered-page .project-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    */

    .centered-page .proj-details {
        width: 1200px;
        height: 300px;
    }

    .centered-page .proj-details h4 {
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
    }

    .centered-page .proj-details p {
        font-size: 20px;
        font-weight: lighter;
        margin: 20px 0 40px;
        text-align: center;
    }

    .centered-page .proj-details p a {
        color:aqua;
    }
</style>
