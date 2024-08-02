<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .image-section {
            flex: 1;
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-position: center;
        }
        .form-section {
            flex: 1;
            padding: 40px;
        }
        .form-section form {
            display: flex;
            flex-direction: column;
        }
        .form-section label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-section input {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-section button {
            padding: 10px;
            background-color: #f0ad4e;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-section button:hover {
            background-color: #ec971f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <form action="{{ url('api/register') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name"><br>

                <label for="email">Email:</label>
                <input type="email" name="email" ><br>

                <label for="password">Password:</label>
                <input type="password" name="password" ><br>

                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" ><br>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>