<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register User</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h1>Register Form</h1>

<form id="registerForm">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<h2>Users List</h2>
<ul id="usersList"></ul>

<script>
$(document).ready(function() {
    // ثبت کاربر
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: '/api/register',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response.message);
                loadUsers(); // بعد از ثبت، کاربران را دوباره بارگذاری کن
            },
            error: function(xhr) {
                console.log(xhr.responseJSON);
                alert('Error: ' + (xhr.responseJSON?.message || 'Unknown error'));
            }
        });
    });

    // بارگذاری کاربران
    function loadUsers() {
        $.get('/api/users', function(data) {
            $('#usersList').empty();
            data.forEach(function(user) {
                $('#usersList').append('<li>' + user.name + ' (' + user.email + ')</li>');
            });
        });
    }

    loadUsers(); // بارگذاری اولیه کاربران
});
</script>

</body>
</html>-->
