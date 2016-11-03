<div id="statusBar">
    <div id="welcomeMsg">Welcome, <?php echo $_SESSION["username"]; ?></div>
    <div id="dummyDiv"></div>
    <form method="POST" id="logoutForm">
        <input type="submit" id="submitLogout" name="submitLogout" value="Log Out"><br/>
    </form>
</div>