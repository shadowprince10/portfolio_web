<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Projects - Index</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    @include('partials.navbar')

    <div class = "header">
        <div class="title">
            <h1>My Projects</h1>
            <hr>
        </div>
        <br>
        <div class="button">
            <a href = "{{ route('projects.create') }}" class = "create-btn">Post Project</a>
        </div>
    </div>

    @if($projects -> isEmpty())
        <p>There's no project yet. More projects will be added soon.</p>
    @else
        <div class = "project-container">
            @foreach($projects as $project)
                <div class = "card">
                    <img src = "{{ asset($project -> project_image) }}">
                    <div class = "content-box">
                        <h2>{{ $project -> name }}</h2>
                        <br>
                        <h3>start date: {{ $project -> project_start_date }}</h3>
                        <br>
                        <h3>finish date: {{ $project -> project_finish_date }}</h3>
                        <br>
                        <h3>execution time: {{ $project -> project_exec_time }} days</h3>
                        <br>
                        <p>link: <a href="{{ $project -> project_link }}">click here to open</a></p>
                        <br>
                        <br>
                        <p>{{ $project -> project_details }}</p>
                        <br>
                        <br>
                        <div class = "button">
                            <a href = "{{ route('projects.show', $project) }}" class = "show-btn">View</a>
                        </div>
                        <br>
                        <div class="button">
                            <a href = "{{ route('projects.edit', $project) }}" class = "update-btn">Update</a>
                        </div>
                        <br>
                        <!-- I have to use form for delete button, otherwise it won't delete the data -->
                        <form action="{{ route('projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>
