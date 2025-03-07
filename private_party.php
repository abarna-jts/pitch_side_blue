<?php include("header.php"); ?>

<style>
    .private-party {
    padding: 50px 0;
}

.container{
    max-width: 1120px;
}

.content-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0px;
    margin: 20px 0px 60px 0px;
}

.image-container {
    flex: 1;
    width: 80%;
}

.image-container img {
    width: 90%;
    height: auto;
    border-radius: 10px;
}

.text-content {
    flex: 1;
    padding: 20px;
    border-radius: 10px;
}

.text-content h2 {
    font-size: 25px;
    color: #fff;
    margin-bottom: 25px;
    font-weight: normal;
}

.text-content p {
    text-align: justify;
    font-size: 16px;
    color: #fff;
    line-height: 1.6;
    margin-bottom: 10px;
}

.highlight {
    color: #d9534f;
    font-weight: bold;
}

.features {
    list-style: none;
    padding: 0;
}

.features li {
    font-size: 16px;
    margin-bottom: 10px;
}

.features li::before {
    content: "✦";
    color: #e30016;
    font-size: 20px;
    position: absolute;
    left: 0;
    top: 0;
}
.features{
    margin-bottom: 23px;
    padding-left: 20px;
}
.features li {
    position: relative;
    padding-left: 20px;
}
.text-content p span{
    font-size: 18px;
    font-family: 'Prata';
    padding-right: 10px;
}

.package_title {
    display: inline-block;
    position: relative;
}

.package_title::after {
    content: "";
    display: block;
    width: 50%; /* Half the width of the title */
    height: 2px; /* Thickness of the underline */
    background-color: #e30016; /* Adjust color as needed */
    position: absolute;
    left: 0%; /* Centers the underline */
    bottom: -5px; /* Adjusts spacing below text */
}

/* Responsive Design */
@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .text-content {
        padding: 15px;
    }
}

</style>


<div class="inner-banner">
    <span>P</span>rivate <span>P</span>arty <span>P</span>ackages
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>

<section class="private-party">
    <div class="container">
        <div class="content-wrapper left_img" id="friday_feast">
            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/friday_feast.png" alt="Private Party">
            </div>
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">FRIDAY FEAST at Pitchside Blue! 🍽️🎉</h2>
                <p>Kickstart your weekend with <strong>great food, amazing vibes, and refreshing drinks</strong> at <b>Pitchside Blue!</b>  
                Enjoy <span class="highlight">up to 35% off</span> on Food & Beverages and make your Fridays truly unforgettable.</p>
                <ul class="features">
                    <li> Free WiFi</li>
                    <li> Next to Sathyam Cinemas Car Parking</li>
                    <li> Ample Car Parking Available</li>
                </ul>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
            </div>
        </div>

        <div class="content-wrapper right_img" id="valentine_offer">
            
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">Valentine Offer at Pitchside Blue! 🍽️🎉</h2>
                <p>Indulge in a love-filled getaway with an exclusive <span class="hightlight">40% discount</span> – available for a limited 
                    time only! Whether it’s a romantic escape, a celebration, or a well-deserved treat, 
                    Pitchside Blue offers the perfect setting for unforgettable moments.</p>
                <ul class="features">
                    <li> Free WiFi</li>
                    <li> Next to Sathyam Cinemas Car Parking</li>
                    <li> Ample Car Parking Available</li>
                </ul>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
                <p>Hurry, offer ends soon! Don’t miss out on this special experience. 💙🎉</p>
            </div>

            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/valentine.png" alt="Private Party">
            </div>
        </div>

        <div class="content-wrapper left_img" id="midweek_offer">
            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/offer-5.jpg" alt="Private Party">
            </div>
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">Midweek Madness at Pitchside Blue! 🍻</h2>
                <p>Get ready for an insane <span class="highlight">50% OFF on your bill</span> – only for this week! 🍽️🍹 Don’t miss out on the 
                best food, drinks, and vibes at Pitchside Blue Restobar.</p>
                <ul class="features">
                    <li> Free WiFi</li>
                    <li> Next to Sathyam Cinemas Car Parking</li>
                    <li> Ample Car Parking Available</li>
                </ul>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
                <p>🔥 Limited Time Offer – Book Now & Enjoy the Madness! 🔥</p>
            </div>
        </div>

        <div class="content-wrapper right_img" id="combo_offer">
            
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">Combo Party Offer at Pitchside Blue! 🍽️🎉</h2>
                <p>Get ready for an unforgettable dinner session with unlimited food & drinks at Pitchside Blue! 
                    Whether you're in for a chill evening or a wild night, we’ve got the perfect party combo for you.</p>
                <ul class="features">
                    <li> 🥂 Unlimited Domestic Liquor + Food 🍽️</li>
                    <li> 🍕 Main Course (Choice of One)</li>
                    <li> 🍰 Dessert & Premium Drinks 🍸</li>
                </ul>
                <p><span>🎶 Party Perks :</span> Joined Tables | DJ | Dance Floor</p>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
                <p>🥂 Book now & make your night legendary! 🍾✨</p>
            </div>

            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/combo_offer.png" alt="Private Party">
            </div>
        </div>


    </div>
</section>

<?php include("footer.php"); ?>
