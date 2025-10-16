<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 12: Travel Cost Estimator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-car"></i> Travel Cost Estimator</h1>
            <p class="subtitle">Estimate total fuel cost for your trip using PHP calculations.</p>
        </header>

        <div class="activity-content">
            <form action="" method="GET">
                <label>Distance (km):</label><br>
                <input type="number" name="distance" step="0.01" 
                       value="<?php echo isset($_GET['distance']) ? htmlspecialchars($_GET['distance']) : ''; ?>">
                <br><br>

                <label>Fuel Consumption (km per liter):</label><br>
                <input type="number" name="fuel_consumption" step="0.01"
                       value="<?php echo isset($_GET['fuel_consumption']) ? htmlspecialchars($_GET['fuel_consumption']) : ''; ?>">
                <br><br>

                <label>Fuel Price (₱ per liter):</label><br>
                <input type="number" name="fuel_price" step="0.01"
                       value="<?php echo isset($_GET['fuel_price']) ? htmlspecialchars($_GET['fuel_price']) : ''; ?>">
                <br><br>

                <input type="submit" value="Estimate Cost">
            </form>

            <?php
            $distance = $fuel_consumption = $fuel_price = $fuel_needed = $travel_cost = null;
            $errors = [];

            if (isset($_GET['distance']) || isset($_GET['fuel_consumption']) || isset($_GET['fuel_price'])) {
                if ($_GET['distance'] === '' || $_GET['fuel_consumption'] === '' || $_GET['fuel_price'] === '') {
                    $errors[] = "Please fill in all fields.";
                } else {
                    $distance = floatval($_GET['distance']);
                    $fuel_consumption = floatval($_GET['fuel_consumption']);
                    $fuel_price = floatval($_GET['fuel_price']);

                    if ($distance <= 0) $errors[] = "Distance must be greater than zero.";
                    if ($fuel_consumption <= 0) $errors[] = "Fuel consumption must be greater than zero.";
                    if ($fuel_price <= 0) $errors[] = "Fuel price must be greater than zero.";

                    if (!$errors) {
                        $fuel_needed = $distance / $fuel_consumption;
                        $travel_cost = $fuel_needed * $fuel_price;
                    }
                }
            } else {
                echo "<p>Enter the trip details above to estimate travel cost.</p>";
            }
            ?>

            <?php if ($errors): ?>
                <div class="output-card" style="border-left:4px solid #e74c3c; padding-left:12px;">
                    <h3><i class="fas fa-exclamation-triangle"></i> Please fix the following</h3>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="output-card">
                <h3><i class="fas fa-gas-pump"></i> Trip Estimation</h3>
                <div class="output-item">
                    <strong>Distance:</strong>
                    <span class="output-value">
                        <?php echo $distance !== null ? number_format($distance, 2) . " km" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Fuel Consumption:</strong>
                    <span class="output-value">
                        <?php echo $fuel_consumption !== null ? number_format($fuel_consumption, 2) . " km/l" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Fuel Price:</strong>
                    <span class="output-value">
                        <?php echo $fuel_price !== null ? "₱" . number_format($fuel_price, 2) . " per liter" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Fuel Needed:</strong>
                    <span class="output-value">
                        <?php echo $fuel_needed !== null ? number_format($fuel_needed, 2) . " liters" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Estimated Cost:</strong>
                    <span class="output-value">
                        <?php echo $travel_cost !== null ? "₱" . number_format($travel_cost, 2) : "—"; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
        // Smooth animation + back button
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
                    setTimeout(() => window.location.href = this.href, 150);
                });
            }
        });
    </script>
</body>
</html>
