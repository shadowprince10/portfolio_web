<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Certifications - Index</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    @include('partials.navbar')

    <div class="header">
        <div class="title">
            <h1>My Certifications</h1>
            <hr>
        </div>
        <br>
        <div class="button">
            <a href="{{ route('certifications.create') }}" class="create-btn">Post Certification</a>
        </div>
    </div>

    @if($certifications -> isEmpty())
        <p>There's no certification yet. More certifications will be added soon.</p>
    @else
        <div class="certif-container">
            @foreach($certifications as $certification)
                <div class="card">
                    <img src="{{ asset($certification -> certif_image) }}">
                    <div class="content-box">
                        <h2>{{ $certification -> certif_name }}</h2>
                        <br>
                        <h3>{{ $certification -> certif_organization }}</h3>
                        <br>
                        <br>
                        <p>{{ $certification -> certif_category }}</p>
                        <br>
                        <br>

                        @if(!empty($certification -> certif_desc))
                            <p>{{ $certification -> certif_desc }}</p>
                        @endif
                        <br>
                        <br>
                        <div class = "button">
                            <a href = "{{ route('certifications.show', $certification) }}" class = "show-btn">View</a>
                        </div>
                        <br>
                        <div class="button">
                            <a href = "{{ route('certifications.edit', $certification) }}" class = "update-btn">Update</a>
                        </div>
                        <br>
                        <!-- I have to use form for delete button, otherwise it won't delete the data -->
                        <form action="{{ route('certifications.destroy', $certification) }}" method="POST">
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
