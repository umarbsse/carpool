<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Carpool App - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { background-color: #f0f4f8; }
    .navbar { background: linear-gradient(90deg, #007bff, #0056d2); }
    .btn-primary { background-color: #0069d9; border-color: #0062cc; }
    .btn-outline-primary { color: #0062cc; border-color: #0062cc; }
    .card { border-radius: 12px; }
    .card-title { color: #0056b3; }
    footer { background: linear-gradient(90deg, #0056d2, #003c99); }
      /* Dark Mode */
    body.dark-mode { background-color: #0d1117; color: #e6edf3; }
    body.dark-mode .card { background-color: #161b22; color: #e6edf3; }
    body.dark-mode .navbar { background: linear-gradient(90deg, #0d6efd, #084298); }
    body.dark-mode footer { background: linear-gradient(90deg, #08398f, #052766); }

    /* Neon Theme */
    .neon { background-color: #000; color: #39ff14; }
    .neon .card { border: 1px solid #39ff14; box-shadow: 0 0 8px #39ff14; }

    /* Pastel Theme */
    .pastel { background-color: #f9f7f7; }
    .pastel .navbar { background: #a3d8f4; }
    .pastel .card { background: #fefefe; border-color: #f2d7d9; }

    /* Glassmorphism */
    .glass { backdrop-filter: blur(12px); background: rgba(255, 255, 255, 0.2) !important; }
    .glass .card { background: rgba(255, 255, 255, 0.25) !important; backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.3); }

    /* Color‑coded ride cards */
    .ride-lahore { border-left: 6px solid #007bff; }
    .ride-karachi { border-left: 6px solid #28a745; }
    .ride-rawalpindi { border-left: 6px solid #ffc107; }

    /* Hover Animations */
    .card:hover { transform: translateY(-6px); transition: 0.3s; box-shadow: 0 0 20px rgba(0,0,0,0.15); }
      /* Driver Badges */
    .badge-driver {
      font-size: 0.8rem;
      padding: 4px 8px;
      border-radius: 8px;
      font-weight: bold;
      display:inline-block;
    }
    .badge-gold { background: gold; color: #000; }
    .badge-silver { background: silver; color: #000; }
    .badge-bronze { background: #cd7f32; color: #fff; }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">CarpoolApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#rides">Find Rides</a></li>
          <li class="nav-item"><a class="nav-link" href="#offer">Offer Ride</a></li>
          <li class="nav-item"><a class="nav-link btn btn-warning text-white  px-3 ms-2" href="{{route('login')}}">Login</a></li>
          <li class="nav-item"><a class="nav-link btn btn-warning text-white  px-3 ms-2" href="{{route('signup')}}">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="py-5 text-center bg-white shadow-sm">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Find or Offer a Ride Easily</h1>
      <p class="lead">Connect with trusted drivers and riders. Save money, time, and the planet.</p>
      <a href="#rides" class="btn btn-primary btn-lg me-2">Find a Ride</a>
      <a href="#offer" class="btn btn-outline-primary btn-lg">Offer a Ride</a>
    </div>
  </section>

  <!-- Search Ride Box -->
  <section class="container my-5">
    <div class="card shadow p-4">
      <h4 class="mb-3">Search for a Ride</h4>
      <form>
        <div class="row g-3">
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="From" />
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="To" />
          </div>
          <div class="col-md-3">
            <input type="date" class="form-control" />
          </div>
          <div class="col-md-1 d-grid">
            <button class="btn btn-primary">Go</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- Featured Rides -->
  <section class="container my-5" id="rides">
    <h3 class="mb-4 fw-bold">Popular Rides</h3>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <span class="badge-driver badge-gold mb-2 d-block">🏆 Gold Driver</span>
            <h5 class="card-title">Lahore → Islamabad</h5>
            <p class="mb-1">Date: 25 Nov 2025</p>
            <p class="mb-3">Seats Available: 2</p>
            <a href="#" class="btn btn-primary btn-sm">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <span class="badge-driver badge-gold mb-2 d-block">🏆 Gold Driver</span>
            <h5 class="card-title">Karachi → Hyderabad</h5>
            <p class="mb-1">Date: 26 Nov 2025</p>
            <p class="mb-3">Seats Available: 3</p>
            <a href="#" class="btn btn-primary btn-sm">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <span class="badge-driver badge-gold mb-2 d-block">🏆 Gold Driver</span>
            <h5 class="card-title">Rawalpindi → Murree</h5>
            <p class="mb-1">Date: 28 Nov 2025</p>
            <p class="mb-3">Seats Available: 1</p>
            <a href="#" class="btn btn-primary btn-sm">View Details</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white mt-5 py-3 text-center">
    <p class="mb-0">© 2025 CarpoolApp. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Theme Switcher Button -->
  <div class="position-fixed bottom-0 end-0 m-4">
    <select id="themeSwitcher" class="form-select shadow">
      <option value="default">Default</option>
      <option value="dark-mode">Dark Mode</option>
      <option value="neon">Neon</option>
      <option value="pastel">Pastel</option>
      <option value="glass">Glassmorphism</option>
    </select>
  </div>

  <script>
    // Theme Switcher
    const switcher = document.getElementById('themeSwitcher');
    switcher.addEventListener('change', function() {
      document.body.className = this.value === 'default' ? '' : this.value;
    });

    // Dynamic Ride Card Coloring
    document.querySelectorAll('.card').forEach(card => {
      const title = card.querySelector('.card-title');
      if (!title) return;
      const route = title.textContent.toLowerCase();
      if (route.includes('lahore')) card.classList.add('ride-lahore');
      if (route.includes('karachi')) card.classList.add('ride-karachi');
      if (route.includes('rawalpindi')) card.classList.add('ride-rawalpindi');
    });

    // Smooth Page Transitions
    document.documentElement.style.scrollBehavior = 'smooth';
  </script>
  <!-- Floating Light/Dark Toggle Icon -->
  <button id="darkToggle" class="btn btn-dark position-fixed bottom-50 end-0 me-3 shadow rounded-circle p-3" style="z-index:1000;">
    🌙
  </button>

  <!-- Notification Popup -->
  <div id="notifyBox" class="position-fixed top-0 end-0 m-3 p-3 bg-warning text-dark fw-bold shadow rounded" style="display:none; z-index:2000;">
    🔔 New ride request received!
  </div>

  <!-- Map Section -->
  <section class="container my-5">
    <h3 class="fw-bold mb-3">Live Map</h3>
    <div id="map" style="height: 350px; border-radius:12px;" class="shadow"></div>
  </section>

  <script>
    // Floating Dark Mode Toggle
    const toggleBtn = document.getElementById('darkToggle');
    toggleBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      toggleBtn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
    });

    // Notification Popup
    function showNotification() {
      const box = document.getElementById('notifyBox');
      box.style.display = 'block';
      setTimeout(() => { box.style.display = 'none'; }, 3000);
    }

    // Trigger fake notification after 5s
    //setTimeout(showNotification, 5000);

    // Live Map (Leaflet)
    const script = document.createElement('script');
    script.src = "https://unpkg.com/leaflet@1.9.4/dist/leaflet.js";
    script.onload = () => {
      const map = L.map('map').setView([33.6844, 73.0479], 7);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
      L.marker([33.6844, 73.0479]).addTo(map).bindPopup('Sample Ride Location');
    };
    document.body.appendChild(script);
  </script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script>
    // Assign badges dynamically
    document.querySelectorAll('.card').forEach((card, index) => {
      const badge = card.querySelector('.badge-driver');
      if (!badge) return;
      if (index % 3 === 0) { badge.className = 'badge-driver badge-gold'; badge.textContent = '🏆 Gold Driver'; }
      else if (index % 3 === 1) { badge.className = 'badge-driver badge-silver'; badge.textContent = '🥈 Silver Driver'; }
      else { badge.className = 'badge-driver badge-bronze'; badge.textContent = '🥉 Bronze Driver'; }
    });
  </script>
</body>
</html>
