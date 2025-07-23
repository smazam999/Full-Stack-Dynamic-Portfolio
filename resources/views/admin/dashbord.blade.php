<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard</title>
  <style>
    /* Reset & base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body, html {
      height: 100%;
      background-color: #f0f2f5;
    }

    .dashboard-container {
      display: flex;
      height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background-color: #24292e;
      color: white;
      display: flex;
      flex-direction: column;
      padding: 2rem 1rem;
    }

    .sidebar h2 {
      margin-bottom: 2rem;
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 1.5px;
      text-align: center;
      user-select: none;
    }

    .nav-links {
      list-style: none;
      flex-grow: 1;
    }

    .nav-links li {
      margin-bottom: 1.2rem;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 1.1rem;
      display: block;
      padding: 0.6rem 1rem;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .nav-links a:hover, 
    .nav-links a.active {
      background-color: #0366d6;
      color: white;
    }

    /* Main content */
    .main-content {
      flex-grow: 1;
      padding: 2.5rem 3rem;
      background: white;
      box-shadow: inset 0 0 8px rgb(0 0 0 / 0.05);
      overflow-y: auto;
    }

    .main-content h1 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #24292e;
    }

    /* Cards container */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.8rem;
      margin-top: 1.5rem;
    }

    /* Single card */
    .card {
      background-color: #f6f8fa;
      border-radius: 10px;
      padding: 1.5rem 2rem;
      box-shadow: 0 4px 12px rgb(0 0 0 / 0.05);
      transition: box-shadow 0.3s ease;
      user-select: none;
    }

    .card:hover {
      box-shadow: 0 6px 18px rgb(0 0 0 / 0.1);
    }

    .card h3 {
      font-size: 1.3rem;
      margin-bottom: 0.8rem;
      color: #0366d6;
    }

    .card p {
      font-size: 1rem;
      color: #586069;
      line-height: 1.4;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .dashboard-container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        flex-direction: row;
        padding: 1rem;
        overflow-x: auto;
      }
      .sidebar h2 {
        margin-bottom: 0;
        flex: 1 0 auto;
        text-align: left;
      }
      .nav-links {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        flex-grow: 0;
      }
      .nav-links li {
        margin-bottom: 0;
      }
      .main-content {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <aside class="sidebar">
      <h2>My Dashboard</h2>
      <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </aside>

    <main class="main-content">
      <h1>Welcome Back, Admin!</h1>
      
      <div class="cards">
        <div class="card">
          <h3>Total Users</h3>
          <p>1,245</p>
        </div>
        <div class="card">
          <h3>Active Projects</h3>
          <p>58 ongoing projects</p>
        </div>
        <div class="card">
          <h3>New Messages</h3>
          <p>12 unread messages</p>
        </div>
        <div class="card">
          <h3>Server Status</h3>
          <p>All systems operational</p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
