<?php include 'includes/header.php'; ?>
<div id="projects" class="counterbg">
  <div class="container">
    <h2 style="text-align: center;">my Projects.</h2>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="centernumber">
          <div class="textalign">
            <h1 class="counter" data-count="16">0</h1>
            <h2>done</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="centernumber">
          <div class="textalign">
            <h1 class="counter" data-count="3">0</h1>
            <h2>in progress</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="centernumber">
          <div class="textalign">
            <h1>∞</h1>
            <h2>future projects</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'includes/db.php'; ?>
<div id="project" class="container">
  <?php
  include 'includes/arrays.php';
  $num = 1;
  foreach ($variable as $key) {
    $string = $key['name'];
    $string = preg_replace('/\s+/', '', $string);
    if ($num % 2 != 0) {
      ?>    <div class="row rowmargin hideme">
            <div class="col-lg-6 col-md-6">
              <div class="pictureplace">
                <div class="<?php echo $key['pic']?> projectpicture">

                </div>
                <style media="screen">
                  <?php echo '.' . $key['pic'] ?>{
                    background-image: <?php echo 'url(galery/' . $key['pic']  . '.png);' ?>
                  }
                </style>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="projectdescription">
                <div>
                  <h3><?php echo $key['name']; ?></h3>
                  <p class="aboutproject"><?php echo $key['desc'] ?></p>
                  <p class="toolsused"><span class="tools">Tools:</span> <?php echo $key['tools'] ?></p>
                  <a href="<?php echo $key['link']; ?>" class="custombutton inline"> Visit > </a>
                  <div class="like inline">
                    <?php $sql = "SELECT * FROM likes WHERE name = '$string'";
                    $res =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($res);
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $sqlcheck = "SELECT * FROM likes WHERE name = '$string' AND ip = '$ip'";
                      $result =  mysqli_query($conn, $sqlcheck);
                    $result = mysqli_num_rows($result);
                    if ($result >= 1) {
                      ?>
                      <style media="screen">
                        <?php echo '.' . $string; ?>{
                          background-image: url(galery/like.png);
                        }
                      </style>
                      <?php
                    }
                    ?>
                    <p>Drop a like!</p>
                    <div class="heart <?php echo $string?>">
                    </div>
                    <p class="amountlikes <?php echo $string . 'amount' ?>">(<?php echo $rows ?>)</p>
                    <!--<p class="comment">And leave a comment!</p>
                    <div class="commentimg <?php //echo $string . "commenting"  ?>"></div>
                    <p class="amountlikes">(0)</p>-->
                    <script type="text/javascript">
                    $(document).ready(function() {
                      $('.<?php echo $string ?>').click(function(){
                        var <?php echo $string . 'name' ?> = '<?php echo $string ?>';
                        $.ajax({
                            type: 'POST',
                            url: 'includes/like.php',
                            data : {
                              name : <?php echo $string . 'name' ?>
                            },
                            success: function(data){
                              if (data == 'false') {
                                console.log('exists');
                                alert('You already liked it!');
                              }else {
                                $('.<?php echo $string . 'amount' ?>').html('(' + data + ')');
                                $('.<?php echo $string ?>').css({
                                  'background-image' : 'url(galery/like.png)'
                                });
                                console.log('veikia');
                              }

                            }
                        });
                      })
                    });


                    </script>

                  </div>
                </div>

              </div>
            </div>
          </div>
      <!--    <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="commentsection">
                <div class="commentform">
                  <div class="">
                    <form class="" action="index.html" method="post">
                      <input type="text" name="" value="" placeholder="Name" required>
                      <textarea placeholder="Your comment" name="name" rows="4" cols="80" required></textarea>
                      <input class="custombutton" type="submit" name="" value="Post!" >
                    </form>

                  </div>


                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="commentsgot">
                <div class="names">
                  <p>Comment from <span class="from">From</span> <span class="date">Date: </span></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="names">
                  <p>Comment from <span class="from">From</span> <span class="date">Date: </span></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

            </div>


          </div> -->
          <?php
          $num++;
        }else {
          ?>
          <div class="row rowmargin  hideme">
            <div class="col-lg-6 col-md-6 tothis">
              <div class="projectdescription">
                <div>
                  <h3 style="text-align: right;"><?php echo $key['name']; ?></h3>
                  <p class="aboutproject"><?php echo $key['desc'] ?></p>
                  <p class="toolsused"><span class="tools">Tools:</span> <?php echo $key['tools'] ?></p>
                  <a href="<?php echo $key['link']; ?>" class="custombutton"> Visit > </a>
                  <div class="like">
                    <?php $sql = "SELECT * FROM likes WHERE name = '$string'";
                    $res =  mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($res);
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $sqlcheck = "SELECT * FROM likes WHERE name = '$string' AND ip = '$ip'";
                      $result =  mysqli_query($conn, $sqlcheck);
                    $result = mysqli_num_rows($result);
                    if ($result >= 1) {
                      ?>
                      <style media="screen">
                        <?php echo '.' . $string; ?>{
                          background-image: url(galery/like.png);
                        }
                      </style>
                      <?php
                    }
                    ?>
                    <p>Drop a like!</p>
                    <div class="heart <?php echo $string?>">
                    </div>
                    <p class="amountlikes <?php echo $string . 'amount' ?>">(<?php echo $rows ?>)</p>
                    <!--<p class="comment">And leave a comment!</p>
                    <div class="commentimg <?php //echo $string . "commenting"  ?>"></div>
                    <p class="amountlikes">(0)</p>-->
                    <script type="text/javascript">
                    $(document).ready(function() {
                      $('.<?php echo $string ?>').click(function(){
                        var <?php echo $string . 'name' ?> = '<?php echo $string ?>';
                        $.ajax({
                            type: 'POST',
                            url: 'includes/like.php',
                            data : {
                              name : <?php echo $string . 'name' ?>
                            },
                            success: function(data){
                              if (data == 'false') {
                                console.log('exists');
                                alert('You already liked it!');
                              }else {
                                $('.<?php echo $string . 'amount' ?>').html('(' + data + ')');
                                $('.<?php echo $string ?>').css({
                                  'background-image' : 'url(galery/like.png)'
                                });
                                console.log('works');
                              }

                            }
                        });
                      })
                    });


                    </script>

                  </div>
                </div>

              </div>
            </div>
                <div class="col-lg-6 col-md-6 swap">
                  <div class="pictureplace">
                    <div class="<?php echo $key['pic']?> projectpicture">

                    </div>
                    <style media="screen">
                      <?php echo '.' . $key['pic'] ?>{
                        background-image: <?php echo 'url(galery/' . $key['pic']  . '.png);' ?>
                      }
                    </style>
                  </div>

                </div>
              </div>
          <?php
          $num++;
        }
         ?><?php
    }
    ?>


</div>
<?php include 'includes/footer.php'; ?>
