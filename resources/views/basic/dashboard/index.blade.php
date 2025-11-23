<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enhanced Carpool Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background: #f4f6f9; transition: background 0.3s; }
        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            top: 0; left: 0;
            background: #343a40;
            color: white;
            padding-top: 30px;
            transition: width 0.3s;
        }
        .sidebar a { color: #ddd; text-decoration: none; padding: 12px 20px; display: block; }
        .sidebar a:hover { background: #495057; color: #fff; }
        .content { margin-left: 250px; padding: 20px; transition: margin-left 0.3s; }
        .card { border-radius: 12px; transition: background 0.3s, color 0.3s; }
        .dark-mode { background: #212529; color: #f8f9fa; }
        .dark-mode .card { background: #343a40; color: #f8f9fa; }
        .dark-mode .sidebar { background: #212529; }
        #map { height: 200px; border-radius: 12px; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="text-center mb-4">Carpool Admin</h4>
        <a href="#">Dashboard</a>
        <a href="#">My Trips</a>
        <a href="#">Ride Requests</a>
        <a href="#">My Earnings</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
    </div>

    <!-- Content -->
    <div class="content" id="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg bg-white rounded shadow-sm mb-4 p-3 d-flex justify-content-between">
            <span class="navbar-brand h4">Dashboard</span>
            <div class="d-flex align-items-center">
                <button class="btn btn-sm btn-secondary me-2" id="toggleDark">🌙</button>
                <!-- User Dropdown -->
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle d-flex align-items-center" href="#" role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://via.placeholder.com/30" class="rounded-circle me-2"> Umer
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <li><a class="dropdown-item" href="#">Notifications <span class="badge bg-primary ms-1">3</span></a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Stats Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Total Trips</h5>
                    <h2 class="text-primary" id="totalTrips">128</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Active Requests</h5>
                    <h2 class="text-warning" id="activeRequests">12</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Total Earnings</h5>
                    <h2 class="text-success" id="totalEarnings">$842</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 text-center shadow-sm">
                    <h5>Rating</h5>
                    <h2 class="text-info" id="rating">4.8 ⭐</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left Column -->
            <div class="col-md-8">

                <!-- Recent Trips Table -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Recent Trips</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="tripsTable">
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
                        <ul class="list-group" id="rideRequests">
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Ali Raza</strong> wants a ride to Islamabad</span>
                                <div>
                                    <button class="btn btn-sm btn-outline-success me-1">Accept</button>
                                    <button class="btn btn-sm btn-outline-danger">Reject</button>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Hamza Khan</strong> wants a ride to Lahore</span>
                                <div>
                                    <button class="btn btn-sm btn-outline-success me-1">Accept</button>
                                    <button class="btn btn-sm btn-outline-danger">Reject</button>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Shahzad</strong> wants a ride to Multan</span>
                                <div>
                                    <button class="btn btn-sm btn-outline-success me-1">Accept</button>
                                    <button class="btn btn-sm btn-outline-danger">Reject</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="col-md-4">

                <!-- Profile Card -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Driver Profile</div>
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3">
                        <h5>Umer Shahzad</h5>
                        <p class="text-muted">Carpool Driver</p>
                        <button class="btn btn-primary btn-sm w-100">Edit Profile</button>
                    </div>
                </div>

                <!-- Monthly Earnings -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white">Monthly Earnings</div>
                    <div class="card-body">
                        <canvas id="earningsChart" height="150"></canvas>
                    </div>
                </div>

                <!-- Map Placeholder -->
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">Map</div>
                    <div class="card-body p-0">
                        <div id="map"></div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="text-center mt-4 mb-3 text-muted">Carpool Dashboard © 2025</footer>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Dark Mode Toggle
    const toggleDark = document.getElementById('toggleDark');
    toggleDark.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });

    // Earnings Chart
    const ctx = document.getElementById('earningsChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Earnings ($)',
                data: [120, 150, 90, 320],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } } }
    });

    // Leaflet Map
    const map = L.map('map').setView([31.5204, 74.3587], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 18, attribution: '© OpenStreetMap' }).addTo(map);
    L.marker([31.5204, 74.3587]).addTo(map).bindPopup('Lahore').openPopup();
    L.marker([33.6844, 73.0479]).addTo(map).bindPopup('Islamabad');
    L.marker([24.8607, 67.0011]).addTo(map).bindPopup('Karachi');
</script>
</body>
</html>
