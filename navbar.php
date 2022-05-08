<link rel="stylesheet" href="/civehub/css/navbar.css">
 <div class="navside" id="navbar">
     
<nav class="nav">
   <div class="btn">
       <i id="menu_toggle"><img src="/civehub/image/baseline_menu_black_18dp.png" ></i>
       </div>

      <div class="navlist">
           <a href="/civehub/index.php" class="navlink active">
           <i class=" nav_icon" ><img src="/civehub/image/baseline_home_black_48dp.png" ></i>
              <span class="navname">Home</span>
           </a>
           <?php 
              if ($_SESSION['role']=='Admin') {
                ?>
                  <a href="/civehub/views/partials/new/popform.php" class="navlink">
             <i class=" nav_icon" ><img src="/civehub/image/baseline_group_black_18dp.png" ></i>
                <span class="navname">Users</span>
              </a>
                <?php
              }
           ?>
           

             <div class="navlink collapse">
            <i class=" nav_icon"><img src="/civehub/image/baseline_category_black_18dp.png" ></i>
               <span class="navname">Category</span>
               <i class="collapselink"><img src="/civehub/image/baseline_keyboard_arrow_down_white_18dp.png" ></i>
               <ul class="collapsemenu">
                  <a href="/civehub/views/partials/category.php" class="collapsesublink">
                  <span class="navname">View</span>
                  </a>
                  <?php
                      if ($_SESSION['role']=='Admin') {
                        ?>
                         <a href="/civehub/add_cat.php" class="collapsesublink">
                          <span class="navname">Add </span>
                          </a>
                        <?php
                      }
                   ?>
                  
                  
               </ul>
            </div>
            

           



      </div>
      <div class="bottom"> 
     <a href="/civehub/logout.php" class="navlink" onclick="destroy_session()">
            <i class="nav_icon"><img src="/civehub/image/baseline_logout_black_48dp.png" ></i>
               <span class="navname">Logout</span>
            </a> 
            </div>
</nav>

       

</div>
<script>


     const showMenu= (menu_toggleId,navbarId,bodyId)=>{
      const toggle= document.getElementById(menu_toggleId),
      navbar= document.getElementById(navbarId),
      bodypd= document.getElementById(bodyId)

      if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
              navbar.classList.toggle('expander')
              bodypd.classList.toggle('body-pd')
          })
      }

     }
     showMenu('menu_toggle','navbar','body-pd')

     const colorlink= document.querySelectorAll('.navlink')
     function linkcolor(){
         colorlink. forEach(l=> l.classList.remove('active'))
         this.colorlink.add('active')
     }
     colorlink.forEach(l=> l.addEventListener('click', linkcolor));

     // collapse
     const linkcollapse = document.getElementsByClassName('collapselink')
     var i
      
     for(i=0;i<linkcollapse.length;i++){
        linkcollapse[i].addEventListener('click',function(){
           const collapsemenu = this.nextElementSibling
           collapsemenu.classList.toggle('showCollapse')
        })
        }

</script>