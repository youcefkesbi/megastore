<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <style>
        :root {
            --bg: #f7f8fa;
            --surface: #ffffff;
            --line: #e8eaef;
            --text: #1f2937;
            --muted: #6b7280;
            --sidebar: #111827;
            --sidebar-soft: #1f2937;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, "Segoe UI", Roboto, Arial, sans-serif;
        }

        .admin-shell {
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: var(--sidebar);
            color: #fff;
            padding: 1.25rem 1rem;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-title {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #9ca3af;
            margin-bottom: 1rem;
        }

        .sidebar a,
        .sidebar button {
            width: 100%;
            text-align: left;
            color: #f9fafb;
            text-decoration: none;
            display: block;
            padding: 0.6rem 0.75rem;
            margin-bottom: 0.35rem;
            border-radius: 0.5rem;
            border: 0;
            background: transparent;
            font-size: 0.95rem;
        }

        .sidebar a:hover,
        .sidebar button:hover {
            background: var(--sidebar-soft);
            color: #fff;
        }

        .content {
            flex: 1;
            min-width: 0;
        }

        .content-wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 1.5rem;
        }

        .content-wrap h1,
        .content-wrap h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #111827;
        }

        .card,
        .table,
        .alert,
        .form-control,
        .form-select {
            border-color: var(--line);
        }

        .card {
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .table {
            background: var(--surface);
            border-radius: 0.75rem;
            overflow: hidden;
        }

        .table thead th {
            font-weight: 600;
            color: #374151;
            background: #fafafa;
            border-bottom: 1px solid var(--line);
        }

        .form-control,
        .form-select {
            border-radius: 0.6rem;
        }

        .btn {
            border-radius: 0.6rem;
        }

        @media (max-width: 991px) {
            .admin-shell {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: static;
            }
        }
    </style>
</head>
<body>
    <div class="admin-shell">
        @include('components.sidebar')
        <div class="content">
            @include('components.navbar')
            <div class="content-wrap">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>