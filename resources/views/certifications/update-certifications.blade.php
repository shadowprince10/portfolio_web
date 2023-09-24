<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Certifications - Update</title>
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

    <form method="POST" action="{{ route('certifications.update', $certification) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="update-container">
            <h1>Update Certification</h1>
            <hr>
            <br>

            <!-- for in label tag and name in input tag has to be the same with the variable name -->
            <div class="form-group">
                <label for="certif_name">Certification Name</label>
                <input type="text" placeholder="please enter the certification name (max 200 characters)" value="{{ old('certif_name', $certification -> certif_name) }}" name="certif_name" class="form-control" required autofocus>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_organization">Certification Organization</label>
                <input type="text" placeholder="please enter the organization name that gives the certification (max 200 characters)" value="{{ old('certif_name', $certification -> certif_organization) }}" name="certif_organization" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_category">Certification Category</label>
                <input type="text" placeholder="please enter the category of the certification (max 100 characters)" value="{{ old('certif_category', $certification -> certif_category) }}" name="certif_category" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_desc">Certification Description</label>
                <textarea placeholder="please enter the description of the certification (max 200 characters)" name="certif_desc" class="form-control">{{ old('certif_desc', $certification -> certif_desc) }}</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_date">Certification Date</label>
                <input type="text" placeholder="please enter the date when the certification's given (in YYYY-MM format)" value="{{ old('certif_date', $certification -> certif_date) }}" name="certif_date" class="form-control" required>
            </div>
            <br>
            <div class="form-group upload-file">
                <label for="certif_image">Upload Certification Image</label>
                <input type="file" name="certif_image" value="{{ old('certif_image', $certification -> certif_image) }}" class="form-control-file" required>
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
