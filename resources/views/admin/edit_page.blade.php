<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Light gray background */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #00796b; /* Teal color for the title */
            margin-bottom: 20px;
        }

        form {
            background-color: white; /* White background for form */
            max-width: 600px; /* Maximum width for the form */
            margin: auto; /* Center the form */
            padding: 20px; /* Padding inside the form */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            border-radius: 5px; /* Rounded corners */
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%; /* Full width for input fields */
            padding: 10px; /* Padding inside fields */
            margin: 10px 0; /* Margin above and below fields */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px; /* Rounded corners */
            box-sizing: border-box; /* Include padding in width calculation */
        }

        textarea {
            height: 100px; /* Fixed height for textarea */
            resize: none; /* Prevent resizing */
        }

        input[type="submit"] {
            background-color: #00796b; /* Teal background for submit button */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px; /* Padding inside the button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition */
            width: 100%; /* Full width */
        }

        input[type="submit"]:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        .image-preview {
            text-align: center; /* Center the image */
            margin-bottom: 10px; /* Space below image */
        }

        .image-preview img {
            max-width: 100%; /* Responsive image */
            width: 500px;
            height: 400px; /* Maintain aspect ratio */
            border: 1px solid #ccc; /* Border around image */
            border-radius: 4px; /* Rounded corners for image */
        }
    </style>
</head>
<body>
    <h1>Update Post</h1>
    <form action="{{route('update_post', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}" required>
        <textarea name="description" placeholder="Enter Description" required>{{$post->description}}</textarea>
        <div class="image-preview">
            <img src="/postimage/{{$post->image}}" alt="Current Image">
        </div>
        <input type="file" name="image">
        <input type="submit" value="Edit">
    </form>
</body>
</html>
