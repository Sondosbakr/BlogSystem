<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General Styles */
body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f5f5f5; /* Light gray background */
    color: #333;
}

/* Post Container */
.post-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Individual Post Styling */
.post {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 250px;
    text-align: center;
    transition: transform 0.3s ease;
}

.post:hover {
    transform: translateY(-10px);
}

/* Post Image */
.post img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 5px;
}

/* Post Title */
.post h4 {
    font-size: 20px;
    margin: 15px 0 10px;
    color: #333;
}

/* Post Description */
.post p {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

/* Action Links */
.post a {
    display: inline-block;
    margin: 10px 5px;
    padding: 10px 20px;
    /* background-color: #007bff; */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

/* Delete Button Styling */
.post .delete {
    background-color: red; /* Red for Delete */
    color: white;
}

.post .delete:hover {
    background-color: darkred; /* Darker Red on Hover */
}

/* Update Button Styling */
.post .update {
    background-color: #00796b; /* Teal for Update */
    color: white;
}

.post .update:hover {
    background-color: #004d40; /* Darker Teal on Hover */
}



    </style>
</head>
<body>
<div class="post-container">
        @foreach($data as $data)
        <div class="post">
            <img src="/postimage/{{$data->image}}" alt="{{$data->title}}">
            <h4>{{$data->title}}</h4>
            <p>{{$data->description}}</p>
            <a class="delete" href="{{route('my_post_delete', $data->id)}}">Delete</a>
            <a class="update" href="{{route('post_page', $data->id)}}">Update</a>
        </div>
        @endforeach
    </div>
</body>
</html>
