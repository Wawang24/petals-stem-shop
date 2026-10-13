<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Petals & Stem</title>
    <style>
        :root { --primary: #2c4a3e; --accent: #d4a373; --background: #fdfbf7; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: var(--background); color: #333; margin: 0; padding: 0; }
        header { background-color: var(--primary); color: white; padding: 1.5rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        header h1 { margin: 0; font-size: 1.8rem; }
        nav a { color: #fdfbf7; text-decoration: none; margin-left: 1.5rem; font-weight: 600; }
        nav a:hover { color: var(--accent); }
        main { max-width: 900px; margin: 3rem auto; padding: 0 1.5rem; }
        .card { background: #ffffff; border-radius: 8px; padding: 2rem; box-shadow: 0 4px 12px rgba(44, 74, 62, 0.08); margin-bottom: 2rem; border-left: 5px solid var(--accent); }
        .btn { background-color: var(--primary); color: white; padding: 0.6rem 1.2rem; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; font-weight: 600; }
        .btn:hover { background-color: #1e332a; }
        footer { text-align: center; padding: 2rem; color: #777; font-size: 0.9rem; border-top: 1px solid #e0e0e0; margin-top: 4rem; }
    </style>
</head>
<body>
    <header>
        <h1>🌿 Petals & Stem</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/products">Shop Catalog</a>
            <a href="/about">About Us</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>&copy; 2026 Petals & Stem Flower Shop. All rights reserved.</footer>
</body>
</html>