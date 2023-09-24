<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Work Experiences - Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @include('partials.navbar')

    <div class="header">
        <div class="title">
            <h1>My Work Experiences</h1>
            <hr>
        </div>
        <br>
        <div class="button">
            <a href="{{ route('experiences.create') }}" class="create-btn">Post Work Experience</a>
        </div>
    </div>

    @if($experiences->isEmpty())
        <p>There is no work experience yet. More work experiences will be added soon.</p>
    @else
        <div class="exp-container">
            @foreach($experiences as $experience)
                <div class="card">
                    <img src="{{ asset($experience -> job_image) }}">
                    <div class="content-box">
                        <h2>{{ $experience -> job_pos }}</h2>
                        <br>
                        <h3>{{ $experience -> workplace }}</h3>
                        <br>
                        <p>{{ $experience -> job_type }}</p>
                        <br>
                        <p>Start Date: {{ $experience -> job_start_date }}</p>
                        <br>
                        @if(!empty($experience -> job_finish_date))
                            <p>Finish Date: {{ $experience -> job_finish_date }}</p>
                        @endif
                        <br>
                        <br>
                        <p>{{ $experience -> job_desc }}</p>
                        <br>
                        <br>
                        <div class = "button">
                            <a href = "{{ route('experiences.show', $experience) }}" class = "show-btn">View</a>
                        </div>
                        <br>
                        <div class="button">
                            <a href = "{{ route('experiences.edit', $experience) }}" class = "update-btn">Update</a>
                        </div>
                        <br>
                        <!-- I have to use form for delete button, otherwise it won't delete the data -->
                        <form action="{{ route('experiences.destroy', $experience) }}" method="POST">
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
