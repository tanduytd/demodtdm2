
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ĐónCon</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang Chủ</a></li>
        <?php
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['tendanhmuc']?> </a></li>
        <?php
        }
        ?>
        <li><a href="index.php?quanly=danhmucbaiviet">Tin Tức</a></li>
        
      
        
      </ul>
      
      
       <ul class="nav navbar-nav navbar-right">
      
      
      </ul>
     
    </div>
  </div>
</nav>