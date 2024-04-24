<?php
if (!isset($_COOKIE['access_token'])) {
    header('Location: /login');
    exit;
}

include('./views/components/header.php');
?>

<style>
    .profile-container {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    p {
        font-size: 18px;
        color: #333;
        margin-bottom: 20px;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 10px;
        font-size: 16px;
    }

    button:hover {
        background-color: #267bb8;
    }
</style>

<div class="profile-container">
    <p>Are you a swimmer or a coach?</p>
    <button onclick="window.location.href='swimmer_profile_create'">Swimmer</button>
    <button onclick="window.location.href='coach_profile_create'">Coach</button>
</div>


<?php include('./views/components/footer.php'); ?>
