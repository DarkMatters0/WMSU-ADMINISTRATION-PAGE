<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chief of Staff, Office of the President</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        .office-container {
        max-width: 800px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px;
        text-align: center;
        padding-top: 80px; /* Added for navbar spacing */
        margin-top: 40px; /* Added for additional spacing */
    }
        .office-title {
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 16px;
        }
        .office-image {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 24px;
            border: 4px solid #eee;
        }
        .office-description {
            font-size: 1.15em;
            color: #444;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require_once '../__includes/navbar.php'; ?>
    <div class="office-container">
        <div class="office-title">Executive Assistant to the Office of the President</div>
        <img src="../images/executive-assistant.jpg" alt="Executive Assistant to the President" class="office-image">
        <div class="office-description">
            The Executive Assistant to the President provides high-level administrative support, managing schedules, correspondence, and confidential matters. 
            This office ensures the President’s time is optimized and that all engagements, meetings, and communications are handled efficiently and professionally.
        </div>
    </div>
</body>
</html>