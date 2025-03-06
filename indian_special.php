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
    <span>I</span>ndian <span> S</span>pecial
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>

<section class="section_padding indian_special">
    <div class="container">
        <div class="menu-container">
            <div class="tabs">
                <div class="tab active" onclick="showTab('tandoor')">Tandoor</div>
                <div class="tab" onclick="showTab('asian')">Asian</div>
                <div class="tab" onclick="showTab('tamil_nadu')">Tamil Nadu</div>
                <div class="tab" onclick="showTab('american')">American</div>
                <div class="tab" onclick="showTab('platers')">Platers</div>
                <div class="tab" onclick="showTab('rice_bowls')">Rice Bowls</div>
                <div class="tab" onclick="showTab('gravy_bowls')">Gravy Bowls</div>
            </div>
            <div class="tab-content active" id="tandoor">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>SAUNFIA PANEER TIKKA <span class="price"></span></h4>
                                <p>A classic paneer appetizer from tandoori pot flavored with fennel and garlic.</p>
                            </li>
                            <li class="menu-item">
                                <h4>BROCCOLI KE SEEK KEBAB <span class="price"></span></h4>
                                <p>Greenly seek kebab blended with Indian vegetable and spices.</p>
                            </li>
                            <li class="menu-item">
                                <h4>SUBZI GALOUTI TIKKI <span class="price"></span></h4>
                                <p>Minced vegetable and rajma Patties cooked in flat grill.</p>
                            </li>
                            <li class="menu-item">
                                <h4>SAMUNDAR KE PARI<span class="price"></span></h4>
                                <p>The Indian appetizer with smokey flavor made in home spice tandoori masala cooked in hotpot.</p>
                            </li>
                            <li class="menu-item">
                                <h4>MURGH ACHARI TIKKA <span class="price"></span></h4>
                                <p>Succulent pieces of chicken marinated with ginger, garlic, and coriander and chilli powder cooked as per Indian palate.</p>
                            </li>
                            <li class="menu-item">
                                <h4>ZAFFRANI MURGH KEBAB <span class="price"></span></h4>
                                <p>Fusion chicken tikka with cream, egg and cheese coated.</p>
                            </li>
                            <li class="menu-item">
                                <h4>PSB TANDOOR PROTEIN HALF/FULL<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/psb_tandoori.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="asian">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>STEAMED MOMOS VEGETABLE<span class="price">325</span></h4>
                                <p>Asian vegetables filling steamed memos served with momo sauce.</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">CRISPY FRIED VEGETABLE WITH HOT GARLIC SAUCE<span class="price"></span></h4>
                                <p>A casual delicious starter for vegetarian hunters.</p>
                            </li>
                            <li class="menu-item">
                                <h4>GREEN CHILLI PANNER<span class="price"></span></h4>
                                <p>Hot and spicy Asian preparation with cottage cheese, peppers and onions.</p>
                            </li>
                            <li class="menu-item">
                                <h4>GINGER GARLIC CHICKEN<span class="price"></span></h4>
                                <p>Tender chicken draped in most irresistible Asian marination.</p>
                            </li>
                            <li class="menu-item">
                                <h4>SZECHWAN CRISPY LAMB<span class="price"></span></h4>
                                <p>Lamb strips coated with chines spices and sauteed with hot garlic sauce.</p>
                            </li>
                            <li class="menu-item">
                                <h4>WOK TOSSED CHINESE FISH <span class="price"></span></h4>
                                <p>Pan fried fish fillet tossed with soya, chilli and garlic.</p>
                            </li>
                            <li class="menu-item">
                                <h4>DRAGON GARLIC SHRIMPS<span class="price"></span></h4>
                                <p>Perfect combination from seafood for hot beverages.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/green_chilli_paneer.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="tamil_nadu">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>CHETTINAD DRY PANEER<span class="price"></span></h4>
                                <p>Sautéed Cottage cheese rubbed with roasted chettinad masala tempered with fried coconut and chilies.</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">MUSHROOM PEPPER SAUTE<span class="price"></span></h4>
                                <p>Sauteed mushroom with south Indian spices.</p>
                            </li>
                            <li class="menu-item">
                                <h4>ROYAPETTAH'S MILAGA BAJJI<span class="price"></span></h4>
                                <p>Just bajji for perfect drinks and perfect weather.</p>
                            </li>
                            <li class="menu-item">
                                <h4>KONGUNADU KOZHI THOKKU<span class="price"></span></h4>
                                <p>Delicious chicken from Kongumandalam's authentic spices.</p>
                            </li>
                            <li class="menu-item">
                                <h4>NADAN FRIED PRAWNS<span class="price"></span></h4>
                                <p>Calling all seafood lovers to taste and party well.</p>
                            </li>
                            <li class="menu-item">
                                <h4>MUTTON SUKKA<span class="price"></span></h4>
                                <p>Lamb popular and delicious combination for Brandy.</p>
                            </li>
                            <li class="menu-item">
                                <h4>ROYAPETTAH'S TAWA BEEF<span class="price"></span></h4>
                                <p>Chennai Identity Local flavoured beef.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/prawn_fry.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="american">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>MELTING CHEESE NUGGETS<span class="price"></span></h4>
                                <p>Fried cheese fillet and chips.</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">JALAPENO CHEESE BALL<span class="price"></span></h4>
                                <p>Homemade cheese ball stuffed with jalapeno.</p>
                            </li>
                            <li class="menu-item">
                                <h4>SPICY CHICKEN POPS<span class="price"></span></h4>
                                <p>Bar bite Crispy fried chicken dusted with peri peri.</p>
                            </li>
                            <li class="menu-item">
                                <h4>CHICKEN WINGS BBQ/ POMMEGRANATE<span class="price"></span></h4>
                                <p>BBQ/ Pomegranate flavored wings sauteed pepper, flakes and oregano.</p>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/melting_nuglets.jpg" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="platers">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>CHEF SPECIAL VEG/ NON VEG<span class="price"></span></h4>
                                <p>Combinations of our chef's delicacy</p>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/plater.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="rice_bowls">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">VARUTHA KOZHI KUZHAMBU WITH STEAMED RICE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">HOME SPICES MUTTON MASALA WITH STEAMED RICE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">FRIED RICE / NOODLES VEG/ EGG/ CHICKEN/ PRAWN<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">CURD RICE WITH URULAI ROAST<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/rice_bowls.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="gravy_bowls">
                <div class="menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">PANEER LABABDAR<span class="price"></span></h4>
                                <p>Soft and succulent paneer dunked in creamy, tomato, cashew gravy</p>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">MUTTER PANEER<span class="price"></span></h4>
                                <p>A Punjabi peas and paneer masala</p>
                            </li>
                            <li class="menu-item">
                                <h4>SUBZI CHINGARI<span class="price"></span></h4>
                                <p>Dices of vegetable with daba style gravy for indian breads.</p>
                            </li>
                            <li class="menu-item">
                                <h4>DAL TADKA<span class="price"></span></h4>
                                <p>A popular Indian lentil dish made with Moong dal.</p>
                            </li>
                            <li class="menu-item">
                                <h4>ACHARI MURGH RAZALA<span class="price"></span></h4>
                                <p>Royal yellow curry with chicken tikka and garam masala.</p>
                            </li>
                            <li class="menu-item">
                                <h4>MURGH DO PYAZA<span class="price"></span></h4>
                                <p>Double amount of onion and chicken with hot and spicy gravy.</p>
                            </li>
                            <li class="menu-item">
                                <h4>NAAN/ROTI<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/gravy_bowls.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/main.js"></script>


<!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        event.target.classList.add('active');
    }
</script>


<?php include("footer.php"); ?>