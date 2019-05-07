<footer id="contact">
  <div class="">


  <div class="container contactform" id="contact">
    <div class="row">
      <div class="col-lg-12">

        <div class="contactformcenter">
          <div class="contactformstyling">
            <h2>WRITE TO ME</h2>
            <p>IF YOU HAVE ANY QUESTIONS</p>
            <form class="" action="includes/email.php" method="POST">
              <input type="text" name="v" placeholder="YOUR NAME" value="" required
              oninvalid="this.setCustomValidity('Įrašykite savo vardą')"
              oninput="setCustomValidity('')">
              <br>
              <input type="email" name="e" placeholder="YOUR EMAIL" value="" required
              oninvalid="this.setCustomValidity('Įrašykite savo elektroninį paštą')"
              oninput="setCustomValidity('')">
              <br>
              <textarea name="t" rows="8" cols="80" placeholder="YOUR MESSAGE" required></textarea>
              <br>
              <div class="centersubmit">
                <input type="submit" name="s" value="SEND">
              </div>

            </form>
          </div>

        </div>

      </div>
    </div>
  </div>

    </div>

    <p id="copyright" style="font-size: 10px;color: white; text-align: center; margin-bottom: 0;">© 2018 ALL RIGHTS RESERVED TO JONAS TAMOSEVICIUS</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>

  <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
  crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  function explode(){
    $('.loadingscreen').fadeToggle( 250, "swing" );
    $('body').css('overflow-y', 'scroll');
  }
  setTimeout(explode, 1500);
})
</script>

</body>
</html>
