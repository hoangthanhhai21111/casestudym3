<nav class="navbar">
    <div class="nav-left"><img class="logo" src="images/logo.png" alt="">
        <ul class="navlogo">
            <li><img src="images/notification.png"></li>
            <li><img src="images/inbox.png"></li>
            <li><img src="images/video.png"></li>
        </ul>
    </div>
    <div class="nav-right">
        <div class="search-box">
            <img src="images/search.png" alt="">
            <input type="text" placeholder="Search">
        </div>
        <div class="profile-image online" onclick="UserSettingToggle()">
            <img src="images/profile-pic.png" alt="">
        </div>

    </div>
    <div class="user-settings">
        <div class="profile-darkButton">
        <div class="user-profile">
            <img src="images/profile-pic.png" alt="">
            <div>
                <p>{{ auth()->user()->name ?? 'user name'}}</p>
                <a href="#">See your profile</a>
            </div>
        </div>
        <div id="dark-button" onclick="darkModeON()">
            <span></span>
        </div>
        </div>
        <hr>
        <div class="user-profile">
            <img src="images/feedback.png" alt="">
            <div>
                <p> Give Feedback</p>
                <a href="#">Help us to improve</a>
            </div>
        </div>
        <hr>
        <div class="settings-links">
            <img src="images/setting.png" alt="" class="settings-icon">
            <a href="#">Settings & Privary <img src="images/arrow.png" alt=""></a>
        </div>

        <div class="settings-links">
            <img src="images/help.png" alt="" class="settings-icon">
            <a href="#">Help & Support <img src="images/arrow.png" alt=""></a>
        </div>

        <div class="settings-links">
            <img src="images/Display.png" alt="" class="settings-icon">
            <a href="#">Display & Accessibility <img src="images/arrow.png" alt=""></a>
        </div>

        <div class="settings-links">
            <img src="images/logout.png" alt="" class="settings-icon">
            <a href="{{route('logout')}}">Logout <img src="images/arrow.png" alt=""></a>
        </div>

    </div>
</nav>
