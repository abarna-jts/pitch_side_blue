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
    gap: 20px;
    justify-content: center;
}

    .menu-items {
        flex: 1;
        min-width: 51%;
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
        text-align: start;
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
    <span>B</span>ar <span> B</span>ites & <span> S</span>hooters
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>


<section class="section_padding indian_special">
    <div class="container">
        <div class="menu-container">
            <div class="tabs">
                <div class="tab active" onclick="showTab('bar_bites')">Bar Bites</div>
                <div class="tab" onclick="showTab('shooters')">Shooters</div>
                <div class="tab" onclick="showTab('mocktail')">Mocktail</div>
                <div class="tab" onclick="showTab('soft_beverages')">Soft Beverages</div>
                <div class="tab" onclick="showTab('dessert')">Dessert</div>
                <div class="tab" onclick="showTab('pasta')">Pasta</div>
            </div>
            <div class="tab-content active" id="bar_bites">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>PEANUTS <span class="price"></span></h4>
                                
                            </li>
                            <li class="menu-item">
                                <h4>PAPPAD <span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>FRIES PLAIN/PERI PERI<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>POTATO WEDGES PLAIN/PERI PERI<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>MARINA MASALA CORN/ CRISPY CORN<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>ONION RINGS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>GARRLIC BREAD CHEESE /PLAIN<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>NACHOS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>EGG TO ORDER OMELET/PODIMASS/EGG CHILLI.<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/bar_bites.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="shooters">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>BETWEEN THE WICKETS<span class="price"></span></h4>
                                <p>Vodka, sweet and sour mix, triple sec, toped up with dark rum</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">RUN OUT<span class="price"></span></h4>
                                <p>Vodka, Rum, lime juice, and grenadine</p>
                            </li>
                            <li class="menu-item">
                                <h4>MAN OF THE MATCH<span class="price"></span></h4>
                                <p>Chilly vodka beer</p>
                            </li>
                            <li class="menu-item">
                                <h4>INDIAN JERSEY<span class="price"></span></h4>
                                <p>Vodka simple syrup and triple sec</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/shooter_menu.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="mocktail">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>PINK CADLIC<span class="price"></span></h4>
                                <p>Mix of mango, pineapple with strawberry crush topped with lemonade</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">SHOT BALL<span class="price"></span></h4>
                                <p>Fresh banana, vanilla ice cream, peanut butter, milk, burfi and chocolate</p>
                            </li>
                            <li class="menu-item">
                                <h4>DADA<span class="price"></span></h4>
                                <p>Guava juice, lime juice, salt, Tabasco sauce, and cucumber syrup</p>
                            </li>
                            <li class="menu-item">
                                <h4>BLOODY SWEET<span class="price"></span></h4>
                                <p>Beetroot juz, pomegranate, bar mix, vanilla syrup, lychee, cranberry and lemonade.</p>
                            </li>
                            <li class="menu-item">
                                <h4>FAT BATSMAN<span class="price"></span></h4>
                                <p>Subza seeds, milk, ice cream, rose color</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/mocktails.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="soft_beverages">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>RED BULL<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">TONIC WATER/ GINGER ALE/DIET COKE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>CAN JUICE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>FRESH JUICE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>FRESH LIME SODA/ SPRITE/COKE<span class="price"></span></h4>
                            </li>

                            <li class="menu-item">
                                <h4>WATER MINI<span class="price"></span></h4>
                            </li>


                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/fresh_juice.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="dessert">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>SIZZ BROWNIE ICE CREAM<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>RUM JAMUN - DRAMA ON THE TABLE WITH RUM<span class="price"></span></h4>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/brownie.jpg" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pasta">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">ARRABBIATA<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">ALFREDO<span class="price"></span></h4>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/pasta.png" alt="Breakfast Image">
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