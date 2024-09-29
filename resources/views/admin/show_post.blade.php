<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Header Styles */
        .header {
            background-color: #00796b; /* Teal color */
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Main Container Styles */
        .container {
            display: flex; /* Flexbox layout */
            height: 100vh; /* Full height */
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #004d40; /* Darker teal */
            color: white;
            padding: 20px;
            overflow-y: auto; /* Scroll if content overflows */
        }

        .sidebar h2 {
            margin: 0;
            padding: 10px 0;
            border-bottom: 1px solid #00695c; /* Lighter teal */
        }

        .sidebar a {
            color: white;
            text-decoration: none; /* Remove underline */
            display: block; /* Block for full width */
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #00695c; /* Slightly lighter teal */
        }

        /* Main Content Styles */
        .content {
            flex: 1; /* Fill remaining space */
            padding: 20px;
            overflow-y: auto; /* Scroll if content overflows */
        }

        .content h1 {
            text-align: center;
            color: #00796b; /* Teal color */
            margin-bottom: 20px;
        }

        /* Table Styles */
        .table_deg {
            border-collapse: collapse; /* Merges borders for a cleaner look */
            width: 100%; /* Full width of the container */
            background-color: white; /* White background for the table */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        th, td {
            border: 1px solid #ccc; /* Light gray border */
            padding: 12px; /* Padding for cells */
            text-align: center; /* Center text in cells */
        }

        th {
            background-color: #00796b; /* Teal background for header */
            color: white; /* White text for header */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Light gray for even rows */
        }

        a {
            color: #00796b; /* Teal color for links */
            text-decoration: none; /* Remove underline */
        }

        a:hover {
            text-decoration: none; /* Ensure no underline on hover */
            color: #004d40; /* Darker teal on hover */
        }

        /* Styling for Delete and Reject links */
        .delete, .reject {
            color: red; /* Red color for delete and reject links */
        }

        .delete:hover, .reject:hover {
            color: darkred; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <h2>Navigation</h2>
            <a href="#">Dashboard</a>
            <a href="">All Posts</a>
            <a href="{{route('logout')}}">Logout</a>
            <a href="{{route('add_post')}}">Add Post</a>
            </div>
        <div class="content">
            <h1>All Posts</h1>
            <table class="table_deg">
                <tr>
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Post by</th>
                    <th>Post Status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Status Accept</th>
                    <th>Status Reject</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->post_status}}</td>
                    <td>{{$post->usertype}}</td>
                    <td>
                        <img src="postimage/{{$post->image}}" width="150px" height="100px" alt="Post Image">
                    </td>
                    <td><a class="delete" href="{{route('delete_post', $post->id)}}">Delete</a></td>
                    <td><a href="{{route('edit_page', $post->id)}}">Edit</a></td>
                    <td><a href="{{route('accept_post', $post->id)}}">Accept</a></td>
                    <td><a class="reject" href="{{route('reject_post', $post->id)}}">Reject</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
