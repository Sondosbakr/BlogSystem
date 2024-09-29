<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Styling */
        form {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Input Field Styling */
        input[type="email"],
        input[type="text"],
        input[type="submit"] {
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        /* Focus Effect for Input Fields */
        input[type="email"]:focus,
        input[type="text"]:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            background-color: #00796b; /* Teal background for submit button */
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
    <form action="{{ route('loginPost') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="text" name="password" placeholder="Enter Your Password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
