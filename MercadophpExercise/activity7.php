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
            <form action="" method="GET">
                <label>Weight (kg):</label>
                <input type="number" name="weight" step="0.1" 
                    value="<?php echo isset($_GET['weight']) ? htmlspecialchars($_GET['weight']) : ''; ?>">
                <br><br>

                <label>Height (m):</label>
                <input type="number" name="height" step="0.01" 
                    value="<?php echo isset($_GET['height']) ? htmlspecialchars($_GET['height']) : ''; ?>">
                <br><br>

                <input type="submit" value="Calculate">
            </form>

            <?php
            $weight = $height = $bmi = $category = null;

            if (isset($_GET['weight'], $_GET['height']) && $_GET['weight'] !== '' && $_GET['height'] !== '') {
                $weight = floatval($_GET['weight']);
                $height = floatval($_GET['height']);

                if ($height > 0) {
                    $bmi = $weight / ($height * $height);

                    // Determine category based on WHO classification
                    if ($bmi < 18.5) {
                        $category = "Underweight";
                    } elseif ($bmi < 25) {
                        $category = "Normal weight";
                    } elseif ($bmi < 30) {
                        $category = "Overweight";
                    } else {
                        $category = "Obese";
                    }
                } else {
                    $category = "Invalid height input.";
                }
            } else {
                echo "<p>Please enter your weight and height to calculate your BMI.</p>";
            }
            ?>

            <div class="output-card">
                <h3><i class="fas fa-chart-line"></i> BMI Results</h3>
                <div class="output-item">
                    <strong>Weight:</strong>
                    <span class="output-value">
                        <?php echo $weight !== null ? htmlspecialchars($weight) . " kg" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Height:</strong>
                    <span class="output-value">
                        <?php echo $height !== null ? htmlspecialchars($height) . " m" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Your BMI:</strong>
                    <span class="output-value">
                        <?php echo $bmi !== null ? round($bmi, 2) : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Category:</strong>
                    <span class="output-value">
                        <?php echo $category ? htmlspecialchars($category) : "—"; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
        // Simple entrance animation
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.querySelector('.activity-content');
            if (content) {
                content.style.opacity = '0';
                content.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    content.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    content.style.opacity = '1';
                    content.style.transform = 'translateY(0)';
                }, 200);
            }

            const backBtn = document.querySelector('.back-btn');
            if (backBtn) {
                backBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.style.transform = 'translateX(-50%) scale(0.95)';
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 150);
                });
            }
        });
    </script>
</body>
</html>
