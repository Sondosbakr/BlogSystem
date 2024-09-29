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
    padding: 0;
    background-color: #f5f5f5;
    color: #333;
}

/* Navigation Bar */
nav {
    /* background-color: #007bff; */
    background-color: #333;;
    padding: 15px;
    text-align: center;
}

nav a {
    color: white;
    font-size: 18px;
    margin-right: 20px;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav a:hover {
    color: #ffdd57;
}

/* Post Container */
.posts-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.post {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 300px;
    padding: 15px;
    transition: transform 0.3s ease;
}

.post:hover {
    transform: translateY(-10px);
}

/* Post Image */
.post img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

/* Post Title */
.post h3 {
    font-size: 22px;
    margin: 15px 0 10px;
    color: #333;
}

/* Post Description */
.post h4 {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
    line-height: 1.5;
}

/* Post Author */
.post p {
    font-size: 14px;
    color: #777;
    font-style: italic;
}




</style>
</head>
<body>
    <!-- <h1>Home Page</h1> -->
    <nav>
        <a href="{{route('create_post')}}">Create Post</a>
        <a href="{{route('my_post')}}">My Post</a>
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">SignUp</a>
        <a href="{{route('logout')}}">Logout</a>
    </nav>

    <!-- Post Container -->
    <div class="posts-container">
        @foreach($post as $post)
        <div class="post">
            <img src="/postimage/{{$post->image}}" alt="{{$post->title}}">
            <h3><b>{{$post->title}}</b></h3>
            <h4>{{$post->description}}</h4>
            <p>Post by <b>{{$post->usertype}}</b></p>
        </div>
        @endforeach
    </div>


</body>
</html>
