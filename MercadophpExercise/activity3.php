<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3: Area and Perimeter</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-square"></i> Area and Perimeter of a Rectangle</h1>
            <p class="subtitle">Calculating geometric properties with PHP.</p>
        </header>
        
        <div class="activity-content">
            <?php
            
            $length = 10;
            $width = 4;
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            ?>
            <div class="output-card">
                <h3><i class="fas fa-ruler"></i> Rectangle Dimensions</h3>
                <div class="output-item">
                    <strong>Length & Width:</strong>
                    <span class="output-value">length: <?php echo $length; ?>, width: <?php echo $width; ?></span>
                </div>
                <div class="output-item">
                    <strong>Area:</strong>
                    <span class="output-value"><?php echo $area; ?> square units</span>
                </div>
                <div class="output-item">
                    <strong>Perimeter:</strong>
                    <span class="output-value"><?php echo $perimeter; ?> units</span>
                </div>
            </div>
        </div>
    </div>
    
    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
        
    </script>
</body>
</html>
