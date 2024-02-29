<?php 

    include 'templates/header.php'
?>

<h2>Contact Section</h2>
<p>Resize the browser window to see the effect.</p>

<div class="container">
  <div style="text-align:center;">
    <h2 style="font-size:45px">Contact Us</h2>
    <p>Kindly, leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/img1.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
        <option value="#">Select</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="philippines">Philippines</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


<?php 

    include 'templates/footer.php'
?>

