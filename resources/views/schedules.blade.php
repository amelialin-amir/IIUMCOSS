<!DOCTYPE html>
<html>
<head>
    <title>Operating Schedules</title>

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
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .container {
            width: 85%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #006666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #008b8b;
            color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
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
    <h1>Operating Schedules</h1>

    <table>
        <tr>
            <th>Cafeteria</th>
            <th>Day</th>
            <th>Open Time</th>
            <th>Close Time</th>
        </tr>

        @forelse($schedules as $schedule)
            <tr>
                <td>{{ $schedule->cafeteria->cafeteria_name ?? 'N/A' }}</td>
                <td>{{ $schedule->day }}</td>
                <td>{{ $schedule->open_time }}</td>
                <td>{{ $schedule->close_time }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No schedule information available.</td>
            </tr>
        @endforelse
    </table>
</div>

</body>
</html>