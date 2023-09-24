<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Work Experiences - Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    <br>
                @endforeach
            </ul>
        </div>
    @endif

        <!-- for in label tag and name in input tag has to be the same with the variable name -->
        <form method="POST" action="{{ route('experiences.update', $experience) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="update-container">
                <h1>Update Work Experience</h1>
                <hr>
                <br>

                <div class="form-group">
                    <label for="job_pos">Job Position</label>
                    <input type="text" placeholder="please input the job position (max 100 characters)" name="job_pos" class="form-control" value="{{ old('job_pos', $experience -> job_pos) }}" required autofocus>
                </div>
                <br>
                <div class="form-group">
                    <label for="workplace">Workplace</label>
                    <input type="text" placeholder="please input the workplace name" name="workplace" class="form-control" value="{{ old('workplace', $experience -> workplace) }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="job_category">Job Category</label>
                    <input type="text" placeholder="please input the category of the job (max 20 characters)" name="job_category" class="form-control" value="{{ old('job_category', $experience -> job_category) }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="job_start_date">Job Start Date</label>
                    <input type="text" placeholder="please input the date when you've started the job (in YYYY-MM or YYYY-MM-dd format)" name="job_start_date" class="form-control" value="{{ old('job_start_date', $experience -> job_start_date) }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="job_finish_date">Job Finish Date</label>
                    <input type="text" placeholder="please input the date when you've finished the job (in YYYY or YYYY-MM or YYYY-MM-dd format)" name="job_finish_date" class="form-control" value="{{ old('job_finish_date', $experience -> job_finish_date) }}">
                </div>
                <br>
                <div class="form-group">
                    <label for="job_desc">Job Description</label>
                    <textarea placeholder="please input the description of the job (max 250 words)" name="job_desc" class="form-control" required>{{ old('job_desc', $experience -> job_desc) }}</textarea>
                </div>
                <br>
                <div class="form-group upload-file">
                    <label for="job_image">Upload Job Image</label>
                    <input type="file" name="job_image" class="form-control-file" value="{{ old('job_image', $experience -> job_image) }}" required>
                </div>
                <br>
                <button type="submit" class="edit-btn">Update</button>
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

    .update-container {
        max-width: 500px;
        min-height: 130vh;
        margin: 0 auto;
        padding: 0 3%;
        border: 1px solid white;
        background-color:orchid;
    }

    .update-container h1 {
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

    .edit-btn {
        color:greenyellow;
    }

    .edit-btn:hover {
        color:aqua;
    }
</style>
