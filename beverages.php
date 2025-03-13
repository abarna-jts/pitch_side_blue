<?php include("header.php"); ?>

<style>
    .menu-container {
        width: 100%;
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
        border-color: #c4a747;
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

    @media(max-width:768px){
        .tabs {
        display: block;
        }
        .tab {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .tab-content {
            padding: 0px;
        }
        .menu-item {
            padding: 10px 0px;
        }
        .menu-container {
            display: block;
            padding: 10px;
        }
        .menu_img{
            display: flex;
            flex-direction: column-reverse;
            width: 100%;
        }
        .menu-item h4 {
            font-size: 16px;
        }
    }
</style>

<div class="inner-banner">
    <span>B</span>everages 
    <img src="assets/img/banner/abt-banner.png" alt="Banner Image">
</div>


<section class="section_padding indian_special">
    <div class="container">
        <div class="menu-container">
            <div class="tabs">
                <div class="tab active" onclick="showTab('beer')">BEER</div>
                <div class="tab" onclick="showTab('whisky')">WHISKY</div>
                <div class="tab" onclick="showTab('premium')">PREMIUM</div>
                <div class="tab" onclick="showTab('single_malt')">SINGLE MALT</div>
                <div class="tab" onclick="showTab('rum')">RUM</div>
                <div class="tab" onclick="showTab('gin')">GIN</div>
                <div class="tab" onclick="showTab('vodka')">VODKA</div>
                <div class="tab" onclick="showTab('brandy')">BRANDY</div>
            </div>
            <div class="tab-content active" id="beer">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>KING FISHER PINT <span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>BRITISH PINT <span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>IMPORTED330ML<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/beer.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="whisky">
                <div class="menu_img menu-container" style="width: 78%;">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>SIGNATURE/ROYAL CHALLENGE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">ANTIQUITY<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>VAT 69/ BLACK & WHITE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>J & B RARE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>RED LABEL<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>GRANTS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>TEACHER'S HIGHLAND CREAM<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>JIM BEAM<span class="price"></span></h4>
                            </li>

                            <li class="menu-item">
                                <h4>100 PIPERS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>BALLENTINES<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>JAMESON<span class="price"></span></h4>
                            </li>

                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/premium.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="premium">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>CHIVAS REGAL<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">BLACK LABEL<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>DOUBLE BLACK<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>JACK DAIELS/HONEY<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>MONKEY SHOULDER<span class="price"></span></h4>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/whisky.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="single_malt">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>GLENLIVET<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">GLENFIDDICH<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>TALISKAR<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>LAPHROAIG<span class="price"></span></h4>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/single_malt.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="rum">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4>OLD MONK<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>BACARDI<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4>HAVANA CLUB<span class="price"></span></h4>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/rum.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="gin">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">HICHKI<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">GORDENS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">BOMBAY SAPHIRE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">BEEFEATER<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">TANQUIRY<span class="price"></span></h4>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/gin.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="vodka">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">ERISTOFF<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">SMIRNOFF<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">STOLICHNAYA<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">ABSOLUTE BLUE/FLAVORS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">SKYY<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">KETTLE ONE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">BELVEDRE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">GREY GOOSE<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/vodka_beverage.png" alt="Breakfast Image">
                    </div>
                </div>
            </div>
            <div class="tab-content" id="brandy">
                <div class="menu_img menu-container">
                    <div class="menu-items">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <h4 style="text-align: start;">BRITISH EMPIRE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">MORPHEUS RED/BLUE<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">NAPOLIAN FRENCH<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">ST. REMY<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">REMY MARTIN VS<span class="price"></span></h4>
                            </li>
                            <li class="menu-item">
                                <h4 style="text-align: start;">MARTEL VSOP<span class="price"></span></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-image">
                        <img src="assets/img/menus/brandy_beverage.png" alt="Breakfast Image">
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