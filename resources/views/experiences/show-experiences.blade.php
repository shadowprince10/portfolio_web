<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Work Experiences - Show</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="{{ route('experiences.index') }}" class="back-btn">Back</a>
    <br>

    <div class="centered-page">
        <div class="card">
            <div class="exp-title">
                <h1>{{ $experience -> job_pos }} - {{ $experience -> workplace }}</h1>
                <hr>
            </div>
            <br>
            <div class="exp-img">
                <img src="{{ asset($experience -> job_image) }}">
            </div>
            <br>
            <div class="exp-details">
                <h4>Work Date: {{ $experience -> job_start_date }}</h4>

                @if(!empty($experience -> job_finish_date))
                    <h4> - {{ $experience -> job_finish_date }}</h4>
                @endif

                <p>{{ $experience -> job_desc }}</p>
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
        justify-content: center;
        align-items: center;
        text-align: center;
        font-weight: bolder;
        color:thistle;
        background-color:indigo;
        overflow: hidden;
    }

    .centered-page .exp-title {
        width: 1200px;
        height: 300px;
        text-align: center;
    }

    .centered-page .exp-title h1 {
        font-weight: bolder;
        font-size: 35px;
    }

    .centered-page .exp-img {
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

    .centered-page .exp-details {
        width: 1200px;
        height: 300px;
        text-align: center;
    }

    .centered-page .exp-details h4 {
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
    }

    .centered-page .exp-details p {
        font-size: 20px;
        font-weight: lighter;
        margin: 20px 0 40px;
        text-align: center;
    }
</style>
