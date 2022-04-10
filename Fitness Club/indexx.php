<!DOCTYPE html>
<html lang="en">
<head>
    <title>BMI Calculator</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <input type="range" min="20" max="200" value="20" id="weight" oninput="calculate()">
            <span id="weight-val">20 kg</span>
        </div>
        <div class="row">
            <input type="range" min="100" max="250" value="100" id="height" oninput="calculate()">
            <span id="height-val">100 cm</span>
        </div>

        <p id="result">20.0</p>
        <p id="category">Normal weight</p>
    </div>

    <!--Script-->
    <script src="script.js"></script>
</body>
</html>