<?php
  session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header('location: ../login_system/login/login.html.php');
    exit();
  }
?>


<!-- Nav bar section starts here -->
<header>
    <nav>
      <div class="all-nav-items">
        <ul class="nav-links">
          <li class="home-link link1"><a href="../index/index.php"><b>RehanWallpapers</b></a></li>
          <!-- <li class="link link2"><a href="#">Contact</a></li>
          <li class="link link3"><a href="#">About</a></li> -->
          <form class="search-bar" action="../search-data/search-data.php" method="GET">
            <input type="search" name="query" placeholder="Search.." class="search-box">
            <abbr title="search">
              <button type="submit" name="search" class="search-btn">Search</button>
            </abbr>
          </form>
          <form action="../login_system/logout/logout.php" class="l" method="POST">
           <abbr title='<?php echo $_SESSION['username']?>'>
              <img src="../img/userimage.jpg" alt="UserImage" class="userimage i">
            </abbr>
              <button type="submit" class="logout-btn i">Logout</button>
          </form>
        </ul>
      </div>
    </nav>
</header>
<!-- navbar section ends here -->

<style>
  /* navbar section */
  .logout-btn{
    background: white;
    color: #F87272;
    border: 1px solid #F87272;
    border-radius: 9px;

    cursor: pointer;

    font-family: 'Noto Sans', sans-serif;
      
    margin-left: 4px;
    height: 3em;
    width: 5em;
  }
  .l{
    display: flex;
    flex-direction: row;
  }
  .i{
    margin:0 30px
  }
  header{
    margin-bottom: 49px
  }
  * {
  margin: 0;
  padding: 0
}

li {
  list-style: none
}

a {
  text-decoration: none;
}

body {
  font-family: 'Ubuntu', sans-serif;
  display: flex;
  flex-direction: column;
}

/* start of wallpaper section */
main {
  font-family: 'Ubuntu', sans-serif;
  margin-top: 49px;
  margin-left: 119px
}

.home-link{
    margin-right: 192px
    color:#F87272
}
header{
    background-color: #CECECE;
    font-size: 1.4em;
    font-family: 'Noto Sans', sans-serif;
  }
ul{
    display: flex;
    justify-content:space-between;

    font-family: 'Noto Sans', sans-serif;

    padding: 1vh 2vw
  }
  .userimage{
    height: 5vh;
    border-radius: 50%
  }

  .link:hover{
    text-decoration: underline;
  }
  .search-btn{
    margin-left: 4px;
    height: 2em;
    width: 5em;
    font-family: 'Noto Sans', sans-serif;
    cursor: pointer;

    padding: 0.5vh;

    background: #F87272;
    color: white;
    border: none;
    border-radius: 9px
  }
  .search-box{
    font-family: 'Noto Sans', sans-serif;
    height: 3vh;
    border: none;
    /* border-radius: 9px */
  }
  nav a{
    color: #464646
  }
  /* end of nav bar section */

  /* mobile design */
  @media only screen and (max-width: 731px) {

  }
</style>
