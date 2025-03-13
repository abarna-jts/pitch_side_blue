<?php include("header.php"); ?>

<style>
     .cookie-banner {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: #222;
            color: white;
            padding: 15px;
            text-align: center;
            display: <?php echo $cookieSet ? 'none' : 'block'; ?>;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .cookie-banner button {
            background: #e30016;
            border: none;
            color: #fff;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }
</style>

<div class="inner-banner">
        <span>P</span>rivacy  <span> P</span>olicy
        <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
    </div>

    <!-- Privacy Policy Banner -->
    <div class="cookie-banner">
        This website uses cookies to ensure you get the best experience. 
        <a href="privacy-policy.php" style="color: #ff99a3;">Learn more</a>
        <button onclick="acceptCookiesPHP()">Accept</button>
    </div>

    <section class="section_padding privacy_policy">
        <div class="container">
            <p>Pitchside Blue welcomes you to its website and looks forward to a meaningful interaction with you.
                Pitchside Blue respects your right to privacy. Any personal information that you share with us, 
                 like your name, date of birth, address, marital status, telephone number, credit card particulars and the like, 
                 shall be entitled to privacy and kept confidential.</p>

            <p>Pitchside Blue assures you that your personal information shall not be used/disclosed by it, 
                save for the purpose of executing intended business with you, or if required to be disclosed under the due process of law.</p>

            <p>Pitchside Blue assures you that in the event of your personal information being shared with its 
                holding company, such sharing of information shall be for the purpose of executing intended business with you.</p>

            <p>Pitchside Blue reserves its rights to collect, analyse and disseminate aggregate site usage patterns
                 of all its visitors with a view of enhancing its services to its visitors. This includes sharing the 
                 information with its holding company as a general business practice.</p>

            <p>In the course of its business Pitchside Blue may hold on-line contests and surveys as permitted by 
                law and it reserves its right to use and disseminate the information so collected to enhance its services to the 
                visitors. This shall also include sharing the information with its holding company as a general business practice.</p>

            <p>If you have any questions or concerns regarding your privacy issues, please do not hesitate to contact 
                Pitchside Blue at +91 99520 47972.</p>

            <p>While Pitchside Blue assures you that it will do its best to ensure the privacy and security of your 
                personal information, it shall not be responsible in any manner whatsoever for any violation or misuse of your 
                personal information by unauthorised persons consequent to misuse of the internet environment.</p>

            <p>Pitchside Blue reserves its rights to revise this privacy policy from time to time at its 
                discretion with a view to making the policy more user-friendly.</p>

            <p>In the design of our website, we have taken care to draw your attention to this privacy policy so that you are aware 
                of the terms under which you may decide to share your personal information with us. Accordingly, should you choose 
                do so; Pitchside Blue will assume that you have no objections to the terms of this privacy policy.</p>

            <p>When you make a reservation on <a href="https://pitchsideblue.in">https://pitchsideblue.in</a>, you will be asked to enter personal information in order to 
                secure your reservation. This information is submitted to our booking partner and our Web Hosting provider. 
                Pitchside Blue and these service providers WILL NOT sell or distribute any personal information 
                about you or any other individual traveler. The name, address and phone number you provide may be used for marketing
                 or quality assurance purposes for the benefit of Pitchside Blue. While you will receive an e-mail 
                 confirmation whenever you make a reservation on-line, you will not receive any unsolicited e-mail as a result of making 
                 a reservation on our site. On <a href="https://pitchsideblue.in">https://pitchsideblue.in</a>, we strive to ensure that the most secure encryption technology 
                 is used, to allow you to book your travel reservations without the worry of someone misusing any information. To make 
                 your reservation planning more convenient, we use what is known as a "cookie", which allows the system to temporarily
                  remember your travel dates and preferences during each visit to the site. Cookies also allow us to track the more 
                  frequently visited pages of <a href="https://pitchsideblue.in">https://pitchsideblue.in</a>, which helps us improve the site for your benefit. Cookies are not
                   programs that will corrupt your computer or damage your files. The cookies used do not reveal your personal identity,
                    nor can they capture personal or private data. Our cookies automatically expire as soon as you leave our site.</p>

            <p>If you do not want to accept cookies while on our site, please consult your internet browser settings for more information.
                 However, if you decide not to accept cookies while visiting <a href="https://pitchsideblue.in">https://pitchsideblue.in</a>, you may not be able to complete certain transactions.</p>

            <p>The <a href="https://pitchsideblue.in">https://pitchsideblue.in</a> does contain external links that will take you away from the site to our travel
                 partners. We are not responsible for the privacy practices or the content of these sites.</p>

            <p>DISCLAIMER: ELECTRONIC TRANSMISSIONS, INCLUDING THE INTERNET, ARE PUBLIC MEDIA, AND ANY USE OF SUCH MEDIA IS PUBLIC 
                AND NOT PRIVATE. INFORMATION RELATED TO OR ARISING FROM SUCH USE IS PUBLIC, OR THE PROPERTY OF THOSE COLLECTING 
                INFORMATION, AND NOT PERSONAL OR PRIVATE INFORMATION.</p>
        </div>
    </section>


    <script>
        function acceptCookiesPHP() {
            fetch("set_cookie.php")
                .then(response => response.text())
                .then(data => {
                    document.querySelector(".cookie-banner").style.display = "none";
                });
        }
    </script>


<?php include("footer.php"); ?>