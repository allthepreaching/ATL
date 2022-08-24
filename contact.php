<?php include_once 'header.php'; ?>

<div class="form-container">
  <h3>CONTACT US</h3>
  <form action="https://formspree.io/f/myyondwe" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" required name="firstname" placeholder="Enter Name Here.." />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" required name="email" placeholder="Enter Email Here..." />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="subject" required name="subject" placeholder="Enter Message Here..." style="height: 200px"></textarea>
      </div>
    </div>
    <br />
    <div class="row">
      <input type="submit" value="Send Message" />
    </div>
  </form>
</div>
</main>
</body>

</html>