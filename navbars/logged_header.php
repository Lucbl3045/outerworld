<ul id="header_PersonalInfo">
  <li><button onclick="showd()" id="personal_info_button">
      <img src="./image/unlogged_img.jpg" alt="profile_picture" id="header_img">
      <span class="navbar_arrow"></span>
    </button>
  </li>
  <li>
    <div id="personal_info">
      <div class="img">
        <img src="<?php echo "./image/" . $_SESSION['userimage'] . "jpg" ?>" alt="userPhoto">
      </div>
      <div style="align-self:center ;">
        <h5>User_Name</h5>
        <h5><?php echo ($_SESSION['user']); ?></h5>
      </div>

      <button onclick="">account info</button>
      <a href="./php/logout.php">logout</a>

    </div>
  </li>
</ul>