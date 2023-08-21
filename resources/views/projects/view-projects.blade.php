<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | Projects</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <div class = "header">
        <h1>My Projects</h1>
    </div>

    @if($projects -> isEmpty())
        <p>There's no project yet. More projects will be added soon.</p>
    @else
        <div class = "project-container">
            @foreach($projects as $project)
                <div class = "card">
                    <img src = "{{ asset($project -> file) }}" class = "project-img">
                    <div class = "content-box">
                        <h2>{{ $project -> name }}</h2>
                        <h3>start date:{{ $project -> project_start_date }}</h3>
                        <h3>finish date:{{ $project -> project_finish_date }}</h3>
                        <h3>execution time:{{ $project -> project_exec_time }}</h3>
                        <p>{{ $project -> project_details }}</p>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>
