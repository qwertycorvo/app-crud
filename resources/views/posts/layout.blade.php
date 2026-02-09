<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Posts')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 900px; margin: 0 auto; padding: 20px; }
        header { background: #333; color: white; padding: 20px; margin-bottom: 20px; border-radius: 5px; }
        h1 { margin-bottom: 10px; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .btn { display: inline-block; padding: 10px 20px; background: #0066cc; color: white; border: none; border-radius: 3px; cursor: pointer; text-decoration: none; margin-right: 10px; }
        .btn:hover { background: #0052a3; }
        .btn-danger { background: #cc0000; }
        .btn-danger:hover { background: #990000; }
        .btn-secondary { background: #666; }
        .btn-secondary:hover { background: #444; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 3px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .post-item { background: white; padding: 20px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .post-title { font-size: 1.3em; margin-bottom: 10px; }
        .post-content { color: #666; margin-bottom: 15px; }
        .post-actions { display: flex; gap: 10px; }
        form { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 3px; font-family: Arial, sans-serif; }
        input[type="text"]:focus, textarea:focus { outline: none; border-color: #0066cc; }
        textarea { resize: vertical; min-height: 200px; }
        .errors { color: #cc0000; font-size: 0.9em; margin-top: 5px; }
        .back-link { display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
