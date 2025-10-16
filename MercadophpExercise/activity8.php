<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 8: String Manipulation</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-edit"></i> String Manipulation</h1>
            <p class="subtitle">PHP functions for string analysis and transformation.</p>
        </header>

        <div class="activity-content">
            <form action="" method="GET">
                <label for="sentence">Enter a sentence:</label><br>
                <input 
                    type="text" 
                    id="sentence" 
                    name="sentence" 
                    placeholder="Type your sentence here..." 
                    value="<?php echo isset($_GET['sentence']) ? htmlspecialchars($_GET['sentence']) : ''; ?>" 
                    style="width: 100%; max-width: 400px; margin: 10px 0;"
                >
                <br>
                <input type="submit" value="Analyze">
            </form>

            <?php
            if (isset($_GET["sentence"]) && $_GET["sentence"] !== "") {
                $sentence = $_GET["sentence"];
                $charL = strlen($sentence);
                $wordL = str_word_count($sentence);
                $uppercase = strtoupper($sentence);
                $lowercase = strtolower($sentence);
            } else {
                $sentence = "";
                $charL = $wordL = $uppercase = $lowercase = "—";
                echo "<p>Please enter a sentence to analyze.</p>";
            }
            ?>

            <div class="output-card">
                <h3><i class="fas fa-text-width"></i> String Analysis</h3>
                <div class="output-item">
                    <strong>Original:</strong>
                    <span class="output-value"><?php echo htmlspecialchars($sentence); ?></span>
                </div>
                <div class="output-item">
                    <strong>Characters:</strong>
                    <span class="output-value"><?php echo $charL; ?></span>
                </div>
                <div class="output-item">
                    <strong>Words:</strong>
                    <span class="output-value"><?php echo $wordL; ?></span>
                </div>
                <div class="output-item">
                    <strong>Uppercase:</strong>
                    <span class="output-value"><?php echo $uppercase; ?></span>
                </div>
                <div class="output-item">
                    <strong>Lowercase:</strong>
                    <span class="output-value"><?php echo $lowercase; ?></span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>
</body>
</html>
            