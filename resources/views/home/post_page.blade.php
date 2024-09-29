<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        .div_deg {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        /* Title Styling */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form Input Styling */
        input[type="text"],
        textarea,
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Focus States for Input Fields */
        input[type="text"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        /* Image Styling */
        .img_deg {
            width: 150px;
            height: 150px;
            border-radius: 5px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            background-color: #00796b;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #004d40;
        }

    </style>
</head>
<body>
    <div class="div_deg">
        <h1>Update Post</h1>
        <div>
            <form action="{{route('update_post_data',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" name="title" value="{{$data->title}}" placeholder="Enter Title">
                </div>
                <div>
                    <textarea name="description" placeholder="Enter Description">{{$data->description}}</textarea>
                </div>
                <div>
                    <img class="img_deg" src="/postimage/{{$data->image}}" alt="Post Image">
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
