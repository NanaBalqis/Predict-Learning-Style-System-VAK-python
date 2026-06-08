<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learning Style Result</title>

<style>
html, body {
    height: 100%;
    margin: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background:
        linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)),
        url("../assets/bg.png") no-repeat center center fixed;
    background-size: cover;

    min-height: 100vh;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 40px 0;
    box-sizing: border-box;
}

.container {
    width: 900px;
    max-width: 92%;
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 20px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.25);
}

h2 {
    font-size: 34px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 10px;
    letter-spacing: 0.5px;
}

.content {
    display: flex;
    gap: 30px;
    align-items: center;
}

/* LEFT TEXT */
.text-section {
    flex: 1.4;
    text-align: left;
}

.text-section h3 {
    color: #3498db;
    margin-bottom: 10px;
}

.text-section p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.text-section ul {
    padding-left: 18px;
    margin-top: 10px;
}

.text-section li {
    font-size: 14px;
    margin-bottom: 6px;
}

/* RIGHT IMAGE */
.image-section {
    flex: 1;
    text-align: center;
}

.image-section img {
    width: 250px;
    border-radius: 12px;
}

/* BUTTON */
.button {
    display: block;
    margin: 30px auto 0;
    width: fit-content;
    padding: 12px 30px;
    background: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 16px;
}

.button:hover {
    background: #2980b9;
}
</style>
</head>

<body>

<div class="container">

<h2>Your Learning Style Result</h2>

<?php
if (!empty($_GET['style'])) {

    $style = htmlspecialchars($_GET['style']);

    $data = [
        "Visual" => [
            "desc" => "Visual learners understand information best through images, diagrams, charts, and visual representations.",
            "points" => [
                "Strong visual memory",
                "Enjoy charts, diagrams, and mind maps",
                "Prefer reading with images",
                "Good at interpreting graphs"
            ],
            "tips" => [
                "Use diagrams and flowcharts",
                "Highlight notes with colors",
                "Watch videos or animations",
                "Create mind maps"
            ],
            "img" => "../assets/V.png"
        ],

        "Auditory" => [
            "desc" => "Auditory learners learn best through listening, discussions, and verbal explanations.",
            "points" => [
                "Strong listening skills",
                "Enjoy discussions and debates",
                "Good memory for spoken words",
                "Often talk through problems"
            ],
            "tips" => [
                "Join group discussions",
                "Listen to recorded lectures",
                "Read notes aloud",
                "Use music or rhythm to memorize"
            ],
            "img" => "../assets/A.png"
        ],

        "Kinesthetic" => [
            "desc" => "Kinesthetic learners prefer hands-on experiences and physical activities while learning.",
            "points" => [
                "Learn by doing",
                "Enjoy experiments and role-play",
                "Active and energetic",
                "Good muscle memory"
            ],
            "tips" => [
                "Practice with real examples",
                "Use simulations or experiments",
                "Take frequent breaks",
                "Learn through movement"
            ],
            "img" => "../assets/K.png"
        ]
    ];

    $d = $data[$style];
?>

<div class="content">

    <!-- LEFT -->
    <div class="text-section">
        <h3><?= $style ?> Learner</h3>
        <p><?= $d["desc"] ?></p>

        <h4>Key Characteristics</h4>
        <ul>
            <?php foreach ($d["points"] as $p) echo "<li>$p</li>"; ?>
        </ul>

        <h4>Effective Learning Strategies</h4>
        <ul>
            <?php foreach ($d["tips"] as $t) echo "<li>$t</li>"; ?>
        </ul>
    </div>

    <!-- RIGHT -->
    <div class="image-section">
        <img src="<?= $d["img"] ?>" alt="<?= $style ?> Learner">
    </div>

</div>

<a class="button" href="index.php">Try Again</a>

<?php
} else {
    echo "<p>No result available.</p>";
}
?>

</div>

</body>
</html>
