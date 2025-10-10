<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 7: BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-weight"></i> BMI Calculator</h1>
            <p class="subtitle">Body Mass Index calculation using weight and height in PHP.</p>
        </header>
        
        <div class="activity-content">
            <?php
            $weight = 60;
            $height = 1.65;
            $bmi = $weight / ($height * $height);
            ?>
            <div class="output-card">
                <h3><i class="fas fa-chart-line"></i> BMI Results</h3>
                <div class="output-item">
                    <strong>Weight:</strong>
                    <span class="output-value"><?php echo $weight; ?> kg</span>
                </div>
                <div class="output-item">
                    <strong>Height:</strong>
                    <span class="output-value"><?php echo $height; ?> m</span>
                </div>
                <div class="output-item">
                    <strong>Your BMI:</strong>
                    <span class="output-value"><?php echo round($bmi, 2); ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
        // Shared JS (same as above)
    </script>
</body>
</html>
