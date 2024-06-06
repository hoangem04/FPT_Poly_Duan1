<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Registration Form</title>
    <script src="script.js" defer></script>

</head>
<style>


.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

</style>
<script>
        document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registration-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); 
        const name = document.getElementById('name').value;
        const username = document.getElementById('username').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        alert('Tạo thẻ thành viên thành công cảm ơn bạn đã tham gia!');
    });
});

</script>
<body>
    <div class="form-container">
       <form action="index.php?act=thevip" id="registration-form">
        <br>
        <br>
        
            <label for="name">Tên Khách Hàng:</label>
            <input type="text" id="name" name="name" required>

            <label for="username">Tên Tài Khoản:</label>
            <input type="text" id="username" name="username" required>

            <label for="phone">Số Điện Thoại:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Tạo</button>
        </form>
    </div>
</body>

</html>

