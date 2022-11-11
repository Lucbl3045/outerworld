<ul id="header_PersonalInfo">
  <li><button onclick="showd()" id="personal_info_button">
      <img src="./image/unlogged_img.jpg" alt="profile_picture" id="header_img">
      <span class="navbar_arrow"></span>
    </button>
  </li>
  <li>
    <div id="personal_info">
      <div style="align-self:center ;">
        <h5>User_Name</h5>
        <?php echo($_SESSION['user']); ?>
      </div>

      <button>account info</button>
      <button>logout</button>

    </div>
  </li>
</ul>