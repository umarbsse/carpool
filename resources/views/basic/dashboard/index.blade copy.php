<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpool Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            top: 0; left: 0;
            background: #343a40;
            color: white;
            padding-top: 30px;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }
        .sidebar a:hover { background: #495057; color: #fff; }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Carpool Admin</h4>
        <a href="#">Dashboard</a>
        <a href="#">My Trips</a>
        <a href="#">Ride Requests</a>
        <a href="#">My Earnings</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
    </div>

    <!-- Content -->
    <div class="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg bg-white rounded shadow-sm mb-4 p-3">
            <span class="navbar-brand">Dashboard</span>
            <div class="ms-auto">
                <a href="{{route('logout')}}" class="btn btn-dark btn-sm">Logout</a>
            </div>
        </nav>

        <!-- Stats Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Total Trips</h5>
                    <h2 class="text-primary">128</h2>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Active Requests</h5>
                    <h2 class="text-warning">12</h2>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Total Earnings</h5>
                    <h2 class="text-success">$842</h2>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Rating</h5>
                    <h2 class="text-info">4.8 ⭐</h2>
                </div>
            </div>
        </div>

        <!-- Trips & Ride Requests -->
        <div class="row">
            <!-- My Trips -->
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Recent Trips</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Seats</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12 Nov</td>
                                    <td>Lahore</td>
                                    <td>Islamabad</td>
                                    <td>3</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>13 Nov</td>
                                    <td>Rawalpindi</td>
                                    <td>Lahore</td>
                                    <td>2</td>
                                    <td><span class="badge bg-warning">Ongoing</span></td>
                                </tr>
                                <tr>
                                    <td>14 Nov</td>
                                    <td>Karachi</td>
                                    <td>Hyderabad</td>
                                    <td>4</td>
                                    <td><span class="badge bg-info">Scheduled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Ride Requests -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Ride Requests</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Ali Raza</strong> wants a ride to Islamabad</span>
                                <button class="btn btn-sm btn-outline-success">Accept</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Hamza Khan</strong> wants a ride to Lahore</span>
                                <button class="btn btn-sm btn-outline-success">Accept</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Shahzad</strong> wants a ride to Multan</span>
                                <button class="btn btn-sm btn-outline-success">Accept</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar Right -->
            <div class="col-md-4">
                <!-- Profile -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Driver Profile</div>
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3">
                        <h5>Umer Shahzad</h5>
                        <p class="text-muted">Carpool Driver</p>
                        <button class="btn btn-primary btn-sm w-100">Edit Profile</button>
                    </div>
                </div>

                <!-- Earnings -->
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">Monthly Earnings</div>
                    <div class="card-body">
                        <h3 class="text-success">$320</h3>
                        <p>This month</p>
                        <button class="btn btn-success btn-sm w-100">Withdraw</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center mt-4 mb-3 text-muted">
            Carpool Dashboard © 2025
        </footer>

    </div>

</body>
</html>
