<div id="side-nav">
    <div class="side-nav-top">
        <input id="side-menu-icon" onclick="toggleSideMenu()" type="image" src="/civehub/images/menu-button-wide.svg"/>
    </div>
    <div id="side-nav-links">
            <?php 
                $role = "admin";

                if($role == "admin"){
                    require "admin/admin_nav.php";
                }
            ?>
    </div>
</div>