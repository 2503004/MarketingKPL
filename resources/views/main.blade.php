<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Newsletter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('sendemailroute') }}" method="POST">
            @csrf
            <h1>Send Newsletter</h1>
            <div class="form-group">
                <label for="emails">Enter Email Addresses (comma-separated for multiple):</label>
                <textarea type="text" name="emails" class="form-control " placeholder="Enter emails here" required></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Send Newsletter</button>
        </form>
    </div>
</body>
</html>
