document.getElementById('logoutButton').addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default link behavior

    if (confirm('Are you sure you want to logout?')) {
        // If the user confirms, proceed with the logout action
        window.location.href = this.getAttribute('href');
    }
});