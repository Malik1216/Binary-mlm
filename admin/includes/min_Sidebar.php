 <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>My Account</h5>
            <p><a href="profile">My Profile</a></p>
            <p><a onclick="logout()" >Logout</a></p>
          </div>
</aside>
<script>
    function logout()
    {
        $.ajax({
            url : "includes/destory_session.php"
        });
        window.location.href="../login";
    }
</script>