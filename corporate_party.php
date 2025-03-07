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
    <span>C</span>orporate <span>P</span>arty <span>P</span>ackages
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>

<section class="private-party">
    <div class="container">
        <div class="content-wrapper left_img" id="corporate_connect">
            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/corporate connect.png" alt="Private Party">
            </div>
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">Corporate Events at Pitchside Blue! 🎉🏢</h2>
                <p>Looking for the perfect venue to host your corporate events & celebrations in Chennai? 
                    Pitchside Blue offers a vibrant and stylish space to make every occasion special!</p>
                <ul class="features">
                    <li> Project Celebrations</li>
                    <li> Corporate Group Meets</li>
                    <li> Company Parties & More!</li>
                    <li> Free WiFi & Ample Car Parking</li>
                    <li> Premium Ambiance & Service</li>
                </ul>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
                <p>🚀 Book your corporate event today & make it unforgettable!</p>
            </div>
        </div>

        <div class="content-wrapper right_img" id="corporate_offer">
            
            <!-- Right Side Content -->
            <div class="text-content">
                <h2 class="package_title">Corporate Offer at Pitchside Blue! 🎉</h2>
                <p>Planning a corporate gathering or team celebration? We've got the perfect deal for you! 
                    Enjoy a premium dining & drinks experience with a vibrant atmosphere, delicious food, 
                    and unlimited beverages.</p>
                <ul class="features">
                    <li> 🥂 Drinks & Starters (90-Minute Service)</li>
                    <li> 🍕 Main Course & Unlimited Drinks</li>
                    <li> 🍰 Dessert & Premium Drinks </li>
                </ul>
                <p><span>🎶 Special Perks:</span></p>
                <ul class="features">
                    <li>Joined Tables for Group Seating</li>
                    <li>DJ & Dance Floor for a Fun-Filled Evening</li>
                    <li>Prime Location – Next to Sathyam Cinemas Car Parking</li>
                </ul>
                <p><span>📍 Location :</span> Royapettah, Chennai – 600 014</p>
                <p><span>📞 Call :</span> 99520 47972 & 97914 45948</p>
                <p>🚀 Book Now & Celebrate in Style! 🥂</p>
            </div>

            <!-- Left Side Image -->
            <div class="image-container">
                <img src="assets/img/offer/corporate_offer.png" alt="Private Party">
            </div>
        </div>

        


    </div>
</section>

<?php include("footer.php"); ?>
