<?php session_start(); ?>
<nav>
    <ul id="admin-side-links">
        <a href="#">
            <li class="nav">
                <input class="side-nav-icons" type="image" src="/civehub/images/house-door-fill.svg"/>
                <center>
                    <span class="nav-text">Home</span>
                </center>
            </li>
        </a>

        <li class="nav" onclick="users()">
            <input class="side-nav-icons" type="image" src="/civehub/images/people-fill.svg"/>
            <center>
                <span class="nav-text">Users</span>
            </center>
        </li>
        <ul class="nav-options nav-option">
            <center>
                <?php 
                
                    if($_SESSION['role'] == 'Admin')
                    {
                        ?>
                            <a href="#"><li class="nav-options">Add</li></a>
                        <?php
                    }
                ?>
            
            <a href="#"><li class="nav-options">View</li></a>
            </center>
        </ul>
        
        <li class="nav" onclick="categories()">
            <input class="side-nav-icons" type="image" src="/civehub/images/pie-chart-fill.svg"/>
            <center>
                <span class="nav-text">Categories</span>
            </center>
        </li>
        <ul class="nav-options nav-option">
            <center>
                <?php 
                
                    if($_SESSION['role'] == 'Admin')
                    {
                        ?>
                            <a href="#"><li class="nav-options">Add</li></a>
                        <?php
                    }
                ?>
            
            <a href="/civeHub/views/partials/category.php"><li class="nav-options">View</li></a>
            </center>
        </ul>

        <li class="nav" onclick="rooms()">
            <input class="side-nav-icons" type="image" src="/civehub/images/building.svg"/>
            <center>
                <span class="nav-text">Rooms</span>
            </center>
        </li>
        <ul class="nav-options nav-option">
            <center>
            <a href="#"><li class="nav-options">Add</li></a>
            <a href="#"><li class="nav-options">View</li></a>
            </center>
        </ul>
    </ul>
</nav>