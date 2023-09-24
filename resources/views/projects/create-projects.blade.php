<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Projects - Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- for in label tag and name in input tag has to be the same with the variable name -->
    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="create-container">
            <h1>Post New Project</h1>
            <hr>
            <br>

            <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" placeholder="input the project name (max 100 characters)" name="project_name" required autofocus>
            </div>
            <br>
            <div class="form-group">
                <label for="project_details">Project Details</label>
                <textarea class="form-control" placeholder="input details of the project (max 1000 characters)" name="project_details" required></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="project_start_date">Project Start Date</label>
                <input type="date" class="form-control" placeholder="input date when you've started the project" name="project_start_date" required>
            </div>
            <br>
            <div class="form-group">
                <label for="project_exec_time">Project Execution Time (in days)</label>
                <input type="number" class="form-control" min="1" placeholder="input how many days it takes to finish the project" name="project_exec_time" required>
            </div>
            <br>
            <div class="form-group">
                <label for="project_finish_date">Project Finish Date</label>
                <input type="date" class="form-control" placeholder="input date when you've finished the project" name="project_finish_date" required>
            </div>
            <br>
            <div class="form-group">
                <label for="project_link">Project Link</label>
                <input type="text" class="form-control" placeholder="input the project link" name="project_link" required>
            </div>
            <br>
            <div class="form-group upload-file">
                <label for="project_image">Upload Project Image</label>
                <input type="file" name="project_image" class="form-control-file" required>
            </div>
            <br>
            <button type="submit" class="submit-btn">Post</button>
        </div>
    </form>
</body>
</html>

<!-- the style.css reference link can't work, thus I'll just put style in the same file with the HTML code below -->
<style>
    body {
        background-color:purple;
    }

    .alert {
        margin-bottom: 12px;
        padding: 12px;
        border-radius: 4px;
    }

    .alert-danger {
        background-color:purple;
        color:red;
        border-color:purple;
    }

    .create-container {
        max-width: 800px;
        min-height: 130vh;
        margin: 0 auto;
        padding: 0 3%;
        border: 1px solid white;
        background-color:palevioletred;
    }

    .create-container h1 {
        text-decoration: none;
        font-weight: bolder;
        font-size: 30px;
    }

    .form-group {
        margin-bottom: 20px;
        font-size: 20px;
    }

    .form-control {
        width: 100%;
        max-width: 500px;
        padding: 12px 16px;
        border: 1px solid pink;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .upload-file input[type="file"] {
        display: block;
        margin-top: 5px;
        font-size: 15px;
    }

    button {
        /* background-color:black; */
        border-radius: 4px;
        /* padding: 15px 32px; */
        padding: 8px 16px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        text-align: center;
        display: inline-block;
        position: relative;
        font-size: 20px;
        border: 1px solid whitesmoke;
        padding: 3px;
        width: 150px;
        height: 35px;
        background-color:black;
    }

    .submit-btn {
        color:greenyellow;
    }

    .submit-btn:hover {
        color:aqua;
    }
</style>
