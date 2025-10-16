<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Activity 4: Temperature Converter</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-thermometer-half"></i> Temperature Converter</h1>
            <p class="subtitle">Converting Celsius to Fahrenheit using PHP.</p>
        </header>

        <div class="activity-content">
            <?php
            // Initialize to avoid undefined notices
            $celsius = null;
            $fahrenheit = null;
            $message = "";

            if (isset($_GET["celsius"]) && $_GET["celsius"] !== "") {
                // Convert to number
                $celsius = floatval($_GET["celsius"]);
                // Compute Fahrenheit
                $fahrenheit = ($celsius * 9/5) + 32;
                $message = "<p>Result: <strong>" . htmlspecialchars($celsius) . "°C</strong> = <strong>" . htmlspecialchars($fahrenheit) . "°F</strong></p>";
            } else {
                $message = "<p>Please enter a Celsius value and submit.</p>";
            }
            ?>

            <form action="" method="GET">
                celsius:
                <input
                    type="number"
                    name="celsius"
                    step="any"
                    value="<?php echo $celsius !== null ? htmlspecialchars($celsius) : ''; ?>"
                />
                <br>
                <input type="submit" value="Calculate">
            </form>

            <?php echo $message; ?>

            <div class="output-card">
                <h3><i class="fas fa-exchange-alt"></i> Conversion Result</h3>
                <div class="output-item">
                    <strong>Input:</strong>
                    <span class="output-value">
                        <?php echo $celsius !== null ? htmlspecialchars($celsius) . " °C" : "—"; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Output:</strong>
                    <span class="output-value">
                        <?php echo $fahrenheit !== null ? htmlspecialchars($fahrenheit) . " °F" : "—"; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>
</body>
</html>
