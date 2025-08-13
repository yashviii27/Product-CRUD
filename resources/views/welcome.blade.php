
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta http-equiv="refresh" ;url={{ route('products.index') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('https://files.realpython.com/media/What-Are-CRUD-Operations_Watermarked.b243ab2b79cb.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-container {
            background: #EADBDD;
            padding: 40px 60px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1 {
            margin-bottom: 16px;
            color: brown;
            font-size: 2.5rem;
        }
        p {
            color: #4a5568;
            font-size: 1.2rem;
        }
        .index-btn {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 28px;
            background: #3182ce;
            color: #fff;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(49,130,206,0.15);
            transition: background 0.2s;
        }
        .index-btn:hover {
            background: #225ea8;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to the Laravel CRUD App!</h1>
        
        <a href="{{ route('products.index') }}" class="index-btn">
            Product Details</a>