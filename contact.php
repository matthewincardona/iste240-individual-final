<?php include './header.php' ?>
      <div class="breadcrumbs">
        <img class="breadcrumbs__img" src="./assets/boat.jpg" alt="" />
        <div class="breadcrumbs__title">
          <h2>Contact</h2>
        </div>
      </div>
    <main>
      <h4>Get in Touch with Us!</h4>
      <hr />
      <!-- contact form -->
      <form method="get" action="./index.html" class="contact-form">
        <!-- reason why contacting us -->
        <fieldset id="reason">
          <legend>Reason for Contacting Us</legend>
          <input type="radio" id="general" name="reason" value="general" />
            <label for="general">General Questions About the Show</label><br />
           
          <input type="radio" id="boat" name="reason" value="boat" />  
          <label for="boat">Getting Your Boat in the Show</label><br />
            <input type="radio" id="other" name="reason" value="other" />
          <label for="other">Other</label>
        </fieldset>
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Enter first name"
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Enter last name"
        />

        <label for="subject">Subject</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Message"
          style="height: 200px"
        ></textarea>
        <input type="submit" value="Submit" id="submit-btn" />
      </form>
    </main>
  </body>
</html>
