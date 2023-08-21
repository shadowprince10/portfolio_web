<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | Navigation Bar</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <header>
        <a href = "#" class = "logo">Portfolio</a>

        <nav class = "navbar">
            <ul>
                <li><a href = "{{ route('home') }}">Home</a></li>
                <li><a href = "{{ route('about') }}">About Me</a></li>
                <li><a href = "{{ route('projects') }}">Projects</a></li>
                <li><a href = "{{ route('experiences') }}">Work Experiences</a></li>
                <li><a href = "{{ route('certifications') }}">Certifications</a></li>
                <li><a href = "{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
