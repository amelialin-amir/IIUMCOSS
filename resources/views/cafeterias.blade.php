<!DOCTYPE html>
<html>
<head>
    <title>Cafeteria List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #008b8b;
            color: white;
            padding: 15px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 35px;
            font-weight: bold;
            font-size: 18px;
        }

        .navbar strong {
            font-size: 20px;
        }

        .container {
            width: 85%;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
        }

        h1 {
            color: #006666;
            font-size: 42px;
            margin-bottom: 30px;
        }

        .search-box {
            margin-bottom: 25px;
        }

        input {
            padding: 12px;
            width: 320px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 12px 20px;
            background-color: #008b8b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #008b8b;
            color: white;
            font-size: 18px;
        }

        th, td {
            padding: 14px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .status-open {
            color: green;
            font-weight: bold;
        }

        .status-closed {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="navbar">
    <div><strong>IIUM | Food Outlets</strong></div>
    <div>
        <a href="/">Home</a>
        <a href="/cafeterias">Cafeterias</a>
        <a href="/schedules">Schedules</a>
    </div>
</div>

<div class="container">
    <h1>Cafeteria List</h1>

    <form method="GET" action="/cafeterias" class="search-box">
        <input type="text" name="search" placeholder="Search cafeteria, location or status" value="{{ $search ?? '' }}">
        <button type="submit">Search</button>
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Status</th>
        </tr>

        @forelse($cafeterias as $cafeteria)
            <tr>
                <td>{{ $cafeteria->cafeteria_name }}</td>
                <td>{{ $cafeteria->location }}</td>
                <td>
                    @if(strtolower($cafeteria->status) == 'open')
                        <span class="status-open">{{ $cafeteria->status }}</span>
                    @else
                        <span class="status-closed">{{ $cafeteria->status }}</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No cafeteria information available.</td>
            </tr>
        @endforelse
    </table>
</div>

</body>
</html>