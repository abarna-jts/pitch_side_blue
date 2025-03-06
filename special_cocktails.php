<?php include("header.php"); ?>

<style>
    .menu-container {
        width: 90%;
        margin: auto;
        text-align: center;
    }

    .tabs {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 20px 0;
    }

    .tab {
        border-style: solid;
        border-top-width: 1px;
        border-right-width: 1px;
        border-left-width: 1px;
        border-bottom-width: 1px;
        color: #e30016;
        border-color: #fff;
        background-color: #fff;
        padding-top: 13px;
        padding-right: 24px;
        padding-bottom: 13px;
        padding-left: 24px;
        font-family: inherit;
        font-weight: normal;
        font-size: 13px;
        font-size: 0.8125rem;
        text-decoration: none;
        line-height: 1em;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        transition: all 0.3sease-in-out;
    }

    .tab.active,
    .tab:hover {
        border-style: solid;
        border-top-width: 1px;
        border-right-width: 1px;
        border-left-width: 1px;
        border-bottom-width: 1px;
        color: #ffffff;
        border-color: #e30016;
        background-color: #e30016;
        padding-top: 13px;
        padding-right: 24px;
        padding-bottom: 13px;
        padding-left: 24px;
        font-family: inherit;
        font-weight: normal;
        font-size: 13px;
        font-size: 0.8125rem;
        text-decoration: none;
        line-height: 1em;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        transition: all 0.3sease-in-out;
    }

    .tab-content {
        display: none;
        color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .tab-content.active {
        display: block;
    }

    .tab-content {
        display: none;
        padding: 20px;
        border-radius: 8px;
    }

    .tab-content.active {
        display: block;
    }

    .menu-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px 80px;
    justify-content: center;
}

    .menu-items {
        flex: 1;
        min-width: 45%;
    }

    .menu-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu-item {
        padding: 15px;
        border-radius: 6px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .menu-item h4 {
        display: flex;
        justify-content: space-between;
        font-size: 18px;
        margin: 0 0 5px;
    }

    .menu-item .price {
        font-weight: bold;
        color: #e74c3c;
    }

    .menu-item p {
        font-size: 14px;
        color: #959595;
        text-align: justify;
    }

    .menu-image {
        max-width: 100%;
        flex: 1;
        text-align: center;
    }

    .menu-image img {
        width: 100%;
        border-radius: 8px;
    }
</style>

<div class="inner-banner">
    <span>S</span>pecial <span> C</span>ocktails
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>


<section class="section_padding indian_special">
    <div class="container">
        <div class="menu-container">
            <div class="tabs">
                <div class="tab active" onclick="showTab('vodka')">Special For Vodka</div>
                <div class="tab" onclick="showTab('rum')">Special For Rum</div>
                <div class="tab" onclick="showTab('gin')">Special For Gin</div>
                <div class="tab" onclick="showTab('tequila')">Special for Tequila</div>
                <div class="tab" onclick="showTab('whisky')">Special for Whisky/Key</div>
                <div class="tab" onclick="showTab('brandy')">Special for Brandy</div>
            </div>
            <div class="tab-content active" id="vodka">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>ACROSS THE LINE <span class="price"></span></h4>
                                <p>Homemade infused chili vodka, fresh lime and sweet mix with splash of cranberry</p>
                            </li>
                            <li class="menu-item">
                                <h4>ARM BALL <span class="price"></span></h4>
                                <p>Vodka, blueberry, bar mix and lemonade</p>
                            </li>
                            <li class="menu-item">
                                <h4>THE ASHES<span class="price"></span></h4>
                                <p>Assorted melon balls, premium vodka, apple juice and fresh sweet & sour</p>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/vodka.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="rum">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>ATTACKING SHOTS<span class="price"></span></h4>
                                <p>Rum, fruit jujubs in orange cups, pineapple juice and coconut syrup.</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">CUBAN SHAKE<span class="price"></span></h4>
                                <p>White rum, ice cream, banana syrup, cinnamon syrup, honey and peanut butter</p>
                            </li>
                            <li class="menu-item">
                                <h4>NOTHING BUT<span class="price"></span></h4>
                                <p>White rum, peach syrup, orange juice, grenadine topped with dark rum.</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/rum.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="gin">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>SACHIN'S STRAIGHT DRIVE<span class="price"></span></h4>
                                <p>Gin, fresh strawberry, black grapes and pomegranate sweet and sour Angostura bitter, triple sec and top up with tonic water</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">THALA SHOT<span class="price"></span></h4>
                                <p>Gin, Jalapeno juice, sweet and sour mix, salt and mango juice</p>
                            </li>
                            <li class="menu-item">
                                <h4>ROYAPETTAH GROUND<span class="price"></span></h4>
                                <p>Gin, Tequila, blueberry, strawberry, black berry and Top up with lemonade</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/gin.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="tequila">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>MALINGA<span class="price"></span></h4>
                                <p>Infused green mango Tequila, triple sec, and sweet and sour mix</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">PENALTY SHOT<span class="price"></span></h4>
                                <p>Tequila, chilly vodka, orange vodka, chocolate sauce and cream</p>
                            </li>
                            <li class="menu-item">
                                <h4>TIGER KA HAKUM<span class="price"></span></h4>
                                <p>Tequila, guava juice, Peri peri powder, salt, sweet and sour, cucumber syrup</p>
                            </li>
                            <li class="menu-item">
                                <h4>CHICKEN WINGS BBQ/ POMMEGRANATE<span class="price"></span></h4>
                                <p>BBQ/ Pomegranate flavored wings sauteed pepper, flakes and oregano.</p>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/tequila.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="whisky">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>T20<span class="price"></span></h4>
                                <p>Bourbon infused Peanuts, Jaggery syrup, lemon twist served on the rocks</p>
                            </li>
                            <li class="menu-item">
                                <h4>COVER DRIVE<span class="price"></span></h4>
                                <p>Bourbon Whiskey, full cream milk, boost, vanilla ice cream and dusting with milo.</p>
                            </li>
                            <li class="menu-item">
                                <h4>GREEN PITCH<span class="price"></span></h4>
                                <p>Whisky, banana syrup, paan syrup and sweet and sour mix</p>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/whisky.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="brandy">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">MESSI<span class="price"></span></h4>
                                <p>Brandy, chocolate syrup, homemade orange bitter, fresh cream, simple syrup, with crushed ice</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">WAQAR YOUNIS-FIRE BALL<span class="price"></span></h4>
                                <p>Brandy cinnamon syrup, sweet and sour mix, Rose Mary and splash of angostura bitter mix up with the flaming copper glass</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">MEXICAN SANGRIA<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">RUSSIAN SANGRIA<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">FRENCH SANGRIA<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">SCOTTICH SANGRIA<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/brandy.jpg" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<script>
    function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        event.target.classList.add('active');
    }
</script>


<?php include("footer.php"); ?>