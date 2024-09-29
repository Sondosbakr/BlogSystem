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
    background: linear-gradient(135deg, #e0eafc, #cfdef3); /* Gradient Background */
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container Styling */
.div_deg {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Form Styling */
form {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    border: 1px solid #ddd; /* Subtle border around the form */
}

/* Title Styling */
.title_deg {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #2c3e50;
    text-transform: uppercase;
    text-align: center;
}

/* Input Fields Styling */
.field_deg {
    margin-bottom: 20px;
}

input[type="text"],
textarea,
input[type="file"],
input[type="submit"] {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus Effect on Input Fields */
input[type="text"]:focus,
textarea:focus,
input[type="file"]:focus {
    border-color: #00796b; /* Calmer teal color */
    box-shadow: 0 0 5px rgba(0, 121, 107, 0.3); /* Teal glow */
}

/* Textarea Styling */
textarea {
    resize: none;
    height: 120px;
}

/* Submit Button Styling */
input[type="submit"] {
    background-color: #00796b; /* Teal color for button */
    color: white;
    border: none;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #004d40; /* Darker teal on hover */
}


    </style>
</head>
<body>
    <div class="div_deg">
    <h3 class="title_deg">Add Post</h3>
    <form action="{{route('user_post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="field_deg">
        <input type="text" name="title" placeholder="Enter Title">
        </div>

        <div class="field_deg">
            <textarea name="description" placeholder="Enter Your Description"></textarea>
        </div>

        <div class="field_deg">
            <input type="file" name="image">
        </div>
        <div class="field_deg">
            <input type="submit" value="Add Post">
        </div>
    </form>
    </div>
</body>
</html>
