<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Server Status</title>

    <!-- Laravel-style Roboto font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />

    <!-- SEO & Bot Protection -->
    <meta name="robots" content="noindex, nofollow, noarchive" />
    <meta name="googlebot" content="noindex, nofollow, noarchive" />

    <style>
        :root {
            --bg: #f8fafc;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --success: #16a34a;
            --card: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
            padding: 2.5rem 3rem;
            max-width: 420px;
            width: 100%;
            text-align: center;
        }

        .card h1 {
            font-size: 1.75rem;
            color: var(--success);
            margin-bottom: 0.5rem;
        }

        .card p {
            font-size: 1rem;
            color: var(--muted);
        }

        #timestamp {
            margin-top: 1.25rem;
            font-size: 0.9rem;
            color: var(--muted);
        }
    </style>
</head>
<body>
<div class="card">
    <h1>🟢 Server is Running</h1>
    <p>Everything is operational and responding.</p>
    <div id="timestamp">Last checked: --</div>
</div>

<script>
    // Anti-bot: simple JS gate most crawlers won’t run
    (function () {
        const requiredCheck = "enabled";
        if (navigator.cookieEnabled !== true) {
            document.body.innerHTML = "<h2 style='text-align:center; font-family: Roboto, sans-serif;'>Access blocked for security.</h2>";
            return;
        }

        const now = new Date();
        const ts = document.getElementById("timestamp");
        ts.textContent = `Last checked: ${now.toLocaleString()}`;

        // Update timestamp every 10 seconds (optional)
        setInterval(() => {
            const updated = new Date();
            ts.textContent = `Last checked: ${updated.toLocaleString()}`;
        }, 10000);
    })();
</script>
</body>
</html>
