<?php

$teamMembers = [
    [
        'name' => 'Chris Piston',
        'role' => 'Leader',
        'image' => 'chris.jfif',
        'description' => 'Hi, I m Chris Piston. I m currently studying computer-related courses, although I m still exploring what truly makes me happy,I enjoy learning new things and am open to discovering new passions and interests Im on a journey to find what resonates with me most in life.',
    ],
    [
        'name' => 'Denver Galeon',
        'role' => 'Co-leader',
        'image' => 'denver.jfif',
        'description' => 'Hi, Im Denver Galeon 20years Old From Poblacion Muntinlupa City,
         my motto is tay curious, keep learning, and always be open to new possibilities',
    ],
    [
        'name' => 'Lorenz Guevarra',
        'role' => 'Member',
        'image' => 'lorenz.jfif',
        'description' => 'Hi, Im Lorenz Guevarra 20years Old From Poblacion Muntinlupa City,
         my motto is nothing is impossible if you really want to achieve something.',
    ],
    [
        'name' => 'Rolando Peniones',
        'role' => 'Member',
        'image' => 'rolando.jfif',
        'description' => 'Hi, Im Rolando Peniones  20 years Old From Alabang Muntinlupa City,
         my motto is Embrace the unknown and trust the process.',
    ],
    [
        'name' => 'Aliyah Celendron',
        'role' => 'Member',
        'image' => 'aliyah.jfif',
        'description' => 'Hi, Im Aliyah Celendron, 20 years Old From Poblacion Muntinlupa City,
         My motto is "Live with purpose.',
    ],
];


$socialLinks = [
    'facebook' => 'https://facebook.com',
    'twitter' => 'https://twitter.com',
    'instagram' => 'https://instagram.com',
    'linkedin' => 'https://linkedin.com',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #23aeff;
            color: #000000;
            text-align: center;
            padding: 20px;
            background-image: url('background.jfif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .team-container {
            max-width: 800px;
            margin: 0 auto;
            flex: 1;
        }

        .team-member {
            background: #e2e4e4;
            border: 5px solid #9c60d4;
            margin: 10px;
            padding: 20px;
            display: inline-block;
            width: calc(33% - 40px);
            box-sizing: border-box;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member:hover {
            background: #d0d4d4;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
            transform: scale(1.05);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        h1 {
            margin-bottom: 20px;
        }

        #myHeader {
            background-color: rgb(138, 69, 248);
            color: black;
            padding: 40px;
            text-align: center;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: left;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        footer {
            background-color: #1f1f1f;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #444;
            margin-top: 20px;
        }

        footer h2 {
            margin-top: 0;
            font-size: 24px;
            font-weight: bold;
        }

        footer p {
            margin: 5px 0;
            font-size: 16px;
        }

        .footer-links {
            margin: 20px 0;
        }

        .footer-links a {
            color: #ffffff;
            font-size: 18px;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #00bfff;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="team-container">
        <h1 id="myHeader">We are Group 9</h1>
        <?php foreach ($teamMembers as $member): ?>
            <div class="team-member" onclick="showDetails('<?php echo $member['name']; ?>')">
                <img src="<?php echo $member['image']; ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                <h2><?php echo htmlspecialchars($member['name']); ?></h2>
                <p><?php echo htmlspecialchars($member['role']); ?></p>
            </div>
        <?php endforeach; ?>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 id="modalName"></h2>
                <p id="modalRole"></p>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>

    <script>
        function showDetails(name) {
            var modal = document.getElementById('myModal');
            var modalName = document.getElementById('modalName');
            var modalRole = document.getElementById('modalRole');
            var modalDescription = document.getElementById('modalDescription');

            var members = <?php echo json_encode($teamMembers); ?>;
            var member = members.find(function(member) {
                return member.name === name;
            });

            if (member) {
                modalName.textContent = member.name;
                modalRole.textContent = member.role;
                modalDescription.textContent = member.description;
                modal.style.display = "block";
            }
        }

        document.querySelector('.close').onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }
    </script>

    <footer>
        <h2>Contact Us</h2>
        <div class="social-icons">
            <?php foreach ($socialLinks as $platform => $url): ?>
                <a href="<?php echo $url; ?>" target="_blank" title="<?php echo ucfirst($platform); ?>">
                    <i class="fab fa-<?php echo $platform; ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
        <h3>ANG ANGAS NI PATRICK COLLADO ❤️</h3>
        <p>PAMANTASAN NG LUNGSOD NG MUNTINLUPA</p>
        <p>&copy; 2024 Group 9 . Exercise No.2</p>
    </footer>
</body>
</html>
