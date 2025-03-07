<?php include("header.php"); ?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<style>


.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #FFF;
  font-weight: normal;
  font-size: 2.1875rem;
  margin-bottom: 20px;
}

.section-header p {
  color: #FFF;
}

.contact-row  {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 50%;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}

.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #ffffffd4;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon i {
  font-size: 30px;
  color: #e30016;
  line-height: 70px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content h4 {
    color: #e30016;
    font-size: 1.4em;
    font-weight: normal;
    margin-bottom: 5px;
}

.contact-info-content p {
  color: #FFF;
  font-size: 1em;
  text-align: justify;
}

.contact-form {
  background-color: #000;
  padding: 40px;
  width: 45%;
  box-shadow: 0px 4px 8px rgb(255 255 255 / 30%);
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form h2 {
  font-weight: normal;
  font-size: 2em;
  margin-bottom: 10px;
  color: #fff;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  background: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #666;
}

.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: #e91e63;
  font-size: 12px;
  transform: translateY(-20px);
}

.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #e30016;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #e30016;
  transition: 0.5s;
  font-family: 'lato';
}
.form_input{
  background-color: transparent !important;
  color: #fff;
  font-family: 'lato';
}
.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: #e30016;
}

@media (max-width: 991px) {
 
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }
}
</style>

<div class="inner-banner">
    <span>C</span>ontact <span>U</span>s
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>

<section class="section_padding" style="padding-bottom: 60px;">
    <div class="container">
        <div class="section-header">
           
            
        </div>

        <div class="contact-row">
            <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-info-icon" style="width: 140px;">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Address</h4>
                        <p>2nd Floor, No.37, Whites Rd, above Karur Vysya Bank, next to Sathiyam 
                            Theater Car Parking, Peters Colony, Royapettah, Chennai, Tamil Nadu 600014</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone" style="rotate: 100deg;"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Phone</h4>
                        <p>+91 99520 47972</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Website</h4>
                        <p>https://pitchsideblue.in/</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="contact_mail.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="input-box">
                        <input type="text" class="form_input" name="name" required>
                        <span>Full Name</span>
                    </div>

                    <div class="input-box">
                        <input type="email" class="form_input" name="email" required>
                        <span>Email</span>
                    </div>

                    <div class="input-box">
                        <input type="phone" class="form_input" name="phone" required>
                        <span>Phone</span>
                    </div>

                    <div class="input-box">
                        <textarea name="message" class="form_input" required></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>