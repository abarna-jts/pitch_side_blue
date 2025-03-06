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
        <span>T</span>erms  & <span> C</span>ondition
        <img src="assets/img/banner/inner-banner.png" alt="Banner Image">
    </div>

    <!-- Privacy Policy Banner -->
    <div class="cookie-banner">
        This website uses cookies to ensure you get the best experience. 
        <a href="privacy-policy.php" style="color: #ff99a3;">Learn more</a>
        <button onclick="acceptCookiesPHP()">Accept</button>
    </div>

    <section class="section_padding privacy_policy term_condition">
        <div class="container">
            <p>The terms and conditions set out below apply to your use of this web site and related web sites,
                 including the use of the information services offered on the Site.</p>

            <p>In accessing and using the Site, you agree to be bound by these conditions so please read this section 
                carefully before proceeding. If you do not accept these conditions, you must refrain from using the Site. 
                These conditions must be read in conjunction with any other applicable terms and conditions governing the
                 use of the Site.</p>

            <h3 class="term_title">Conditions</h3>
            <ul class="custom-list">
                <li>
                    <h2>Site</h2>
                    <p>The Site makes available information relating to hotels and resorts owned or managed by Pitchside Blue, a
                         corporation constituted under the laws of India, and its subsidiaries, controlled entities, affiliates 
                         and related parties ("Pitchside Blue Restaurant").</p>
                </li>

                <li>
                    <h2>Trade Marks</h2>
                    <p>The Site contains "Pitchside Blue" trade and service marks and devices 
                        (including the words "Pitchside Blue") and other valuable trade or service marks owned by
                        Pitchside Blue or licensed to Pitchside Blue to distinguish
                          its services and products. These trade and service marks and related intellectual property are protected 
                          from copying and simulation under national and international laws and may not be reproduced or copied 
                          without the express prior written consent of Pitchside Blue.</p>

                    <p>Without limitation, you must not use any of the said trade or service marks:</p>
                    <ul class="inner_ul">
                        <li class="inner_list">in or as the whole or part of your own trade marks;</li>
                        <li class="inner_list">in connection with activities, products or services which are not undertaken or provided by Pitchside Blue</li>
                        <li class="inner_list">in a manner which may be confusing, misleading or deceptive; or</li>
                        <li class="inner_list">in a manner that disparages Pitchside Blue or its information, products or services (including this Site).</li>
                    </ul>
                    
                </li>

                <li>
                    <h2>Copyright</h2>
                    <p>The information, text, graphics, images, sounds, links and all other information and software published 
                        or otherwise contained in the Site are either owned exclusively by Pitchside Blue or
                         licensed by Pitchside Blue and except as specifically provided in these conditions may
                          not be copied, distributed, displayed, reproduced or transmitted, in any form or by any means whether 
                          electronic, mechanical, photocopying, recording, or otherwise, without the prior written approval of
                          Pitchside Blue. Without such approval from Pitchside Blue, you may 
                           not, without limitation create derivative works from any part of the Site or commercialise any information, 
                           products or services obtained from any part of the Site. Information procured from a third party may be 
                           the subject of copyright owned by that third party.</p>

                </li>

                <li>
                    <h2>Your Use</h2>
                    <p>The Site is for your personal non-commercial use and the information may be downloaded or printed by you solely for that purpose.</p>

                    <p>This right to use the information is a license only, not a transfer of title, and is subject to the following restrictions:</p>

                    <ul class="inner_ul">
                        <li class="inner_list">no copyright or other proprietary notices may be removed;</li>
                        <li class="inner_list">software may not be interfered with in any manner;</li>
                        <li class="inner_list">every person downloading, reproducing or otherwise using the information must prevent any unauthorised copying of the information;</li>
                        <li class="inner_list">you will only use the information for lawful purposes and in accordance with these conditions.</li>
                    </ul>

                    
                </li>

                <li>
                    <h2>Information</h2>
                    <p>You accept that all information provided on the Site or any other material accessed through the Site including via 
                        any linked website (*Condition 8) is general information and is not in the nature of advice.</p>

                    <p>You also accept that all of the information is provided on an "as is" basis and to the extent permitted by law, 
                        is provided without any warranty, representation or condition of any kind whether express, implied, statutory
                         or otherwise. You assume all responsibility and risk for your use of or reliance upon the information and the 
                         Site or any other material accessed through the Site including via any linked website.</p>

                    <p>Whilst Pitchside Blue seeks to ensue that the information is reliable and accurate, errors and 
                        omissions may occur and therefore, to the extent permitted by law, Pitchside Blue does not make or 
                        give any representation or warranty (express or implied) of any kind as to any matter relating to the Site and any linked
                         website, including without limitation, as to merchantability, non-infringement of intellectual property rights or fitness
                          for purpose.</p>

                    <p>In particular Pitchside Blue does not warrant that:</p>

                    <ul class="inner_ul">
                        <li class="inner_list">the Information or any other material accessed through the Site, including via any linked website is reliable, accurate 
                            or complete including, without limitation, information relating to prices and availability; or</li>
                        <li class="inner_list">your access to information or any other material accessed through the Site including via any linked website will be uninterrupted, timely or secure.</li>
                        <li class="inner_list">in a manner which may be confusing, misleading or deceptive; or</li>
                        <li class="inner_list">in a manner that disparages Pitchside Blue or its information, products or services (including this Site).</li>
                        <li class="inner_list">Pitchside Blue is not liable for any loss (direct or indirect) resulting from any action taken or reliance made 
                            by you on the information or any other material accessed through the Site including via any linked website. You 
                            should make your own inquiries and seek independent professional advice before acting or relying on any such
                            information or material.</li>
                        <li class="inner_list">Pitchside Blue may from time to time update, modify or add to the information, including these
                            conditions and absolutely reserves the right to make such changes without any obligation to notify past, current or 
                            prospective users of the Site. Unless otherwise specified to the contrary all new information shall be subject to 
                            these conditions.</li>
                        <li class="inner_list">Pitchside Blue does not guarantee that the Site will operate continuously or without interruption 
                            or be error free. In addition, Pitchside Blue may also suspend or discontinue any aspect of the Site 
                            at any time without being liable for any direct or indirect loss as a result of such action.</li>
                    </ul>

                    
                </li>

                <li>
                    <h2>Liability Disclaimer "Exclusion"</h2>
                    <p>In no event shall Pitchside Blue be responsible for any direct, indirect, special, incidental or 
                        consequential loss or damage, however arising and whether in contract, tort or otherwise, which you may suffer in 
                        connection with or arising out of:</p>

                        <ul class="inner_ul">
                            <li class="inner_list">your use of the Site or any Linked Web Site; or</li>
                            <li class="inner_list">your use of or reliance on information or any other material accessed through the Site including via any linked website;</li>
                            <li class="inner_list">including without limitation, loss or damage by way of loss of profits, loss of business opportunity, business interruption or loss of information.</li>
                        </ul>

                    
                    <p>These conditions do not purport to exclude liability arising by any applicable law if, and to the extent, such liability cannot 
                        be lawfully excluded, however, to the extent permitted by law, all warranties, terms or conditions which would otherwise be 
                        implied into these conditions are hereby excluded.</p>
                    <p>Where applicable law implies any warranty, term or condition, and that law prohibits exclusion or modification of the 
                        application of the liability of Pitchside Blue under, any such warranty, term or condition, then the
                         liability of Pitchside Blue shall include liability for that warranty, term or condition but such 
                         liability will be limited for a breach of that warranty, term or condition to one or more of the following:</p>

                         <ul>
                            <li class="inner_list">if the breach relates to services, the supply of the services again or payment of the cost of having the services supplied again; and</li>
                            <li class="inner_list">if the breach relates to products and the products can be repaired, repair of such products or payment of the costs 
                                of having the products repaired, but otherwise, replacement of the products or the supply of equivalent products or 
                                payment of the cost of replacing the products or of acquiring equivalent products.</li>
                         </ul>

                    
                </li>

                <li>
                    <h2>Specific Warnings</h2>
                    <p>You must ensure that your access to and your use of the Site is not illegal or prohibited by laws which apply to you.</p>

                    <p>You must take your own precautions that the process which you employ for accessing the Site does not expose you to the 
                        risk of virus, malicious computer code, computer program routine or process or other forms of interference which may 
                        damage your own computer system. Without limitation, you are responsible for ensuring that your own computer system
                         meets all relevant technical specifications necessary to use the Site and is compatible with the Site. For the removal 
                         of doubt, Pitchside Blue does not accept responsibility for any interference or damage to your own 
                         computer system which arises in connection with your use of the Site or any linked website.</p>

                    <p>Pitchside Blue does not guarantee or warrant that any material available for downloading from the Site 
                        or any linked website will be free from any virus, infection or other condition which has contaminating or destructive 
                        properties. You are responsible for taking sufficient precautions and checks to satisfy your own particular requirements 
                        for accuracy of data input and output.</p>

                    <p>You must ensure that any information which you provide to Pitchside Blue is accurate and complete
                         and does not contain any virus, malicious computer code, computer program routine or process or other form of interference 
                         which may damage the computer system of Pitchside Blue or the information which may detrimentally 
                         interfere with or surreptitiously intercept or expropriate any Pitchside Blue system, data or information.</p>

                </li>


                <li>
                    <h2>Linked Websites</h2>
                    <p>The Site may contain links to other websites. Those links are provided for convenience only and may not remain current or be maintained.</p>

                    <p>You acknowledge and agree that Pitchside Blue does not have any control over the content or availability 
                        of linked websites and accepts no responsibility for the content, privacy practices or any other aspect of linked websites.</p>

                    <p>Links with linked websites should not be construed as an endorsement, approval or recommendation by 
                    Pitchside Blue or the owners or operators of those linked websites, or of any information, graphics,
                         materials, products or services referred to or contained on those linked websites, unless and then only to the extent 
                         expressly stipulated to the contrary.</p>

                    
                </li>


                <li>
                    <h2>Hotel Reservations</h2>
                    <p>The reservations feature of the Site is provided solely to assist customers in determining the availability of travel related 
                        services and products and to make legitimate reservations and for no other purpose.</p>

                    <p>You warrant that you are at least 18 years of age, possess the legal authority to enter into the legal agreement 
                        constituted by your acceptance of these conditions and to use the Site in accordance with such conditions.</p>

                    <p>You agree to be financially responsible for your use of the Site including without limitation for all 
                        reservations made by you or on your account for you, whether authorised by you or not. For any reservations 
                        or other services for which fees may be charged you agree to abide by the terms or conditions of supply 
                        including without limitation payment of all moneys due under such terms or conditions.</p>

                    <p>The Site contains details of hotel charges and room rates (including any available special offers) 
                        for hotels and resorts owned or managed by Pitchside Blue.</p>

                    <p>Hotel reservation terms and conditions of booking are set out on the Site and payment will be in accordance with the 
                        procedure set out in such terms and conditions.</p>

                    <p>No contract will subsist between you and Pitchside Blue or any of its affiliates in respect of any 
                        services or products offered through the Site unless and until Pitchside Blue accepts your order 
                        by e-mail or automated confirmation through the Site confirming that it has accepted your reservation, booking or
                         order and any such contract shall be deemed to incorporate the hotel reservation terms and conditions of booking. 
                         Any other relevant terms and conditions relating to particular services or products are set out in the Site.</p>

                    <p>No contract will subsist between you and Pitchside Blue or any of its affiliates in respect of any
                         services or products offered through the Site unless and until Pitchside Blue accepts your order
                          by e-mail or automated confirmation through the Site confirming that it has accepted your reservation, booking or
                           order and any such contract shall be deemed to incorporate the hotel reservation terms and conditions of booking.
                            Any other relevant terms and conditions relating to particular services or products are set out in the Site.</p>

                    <p>You undertake that all details you provide to in connection with any services or products which may be offered by
                        Pitchside Blue on the Site (including hotel room reservations) will be correct and, 
                         where applicable, the credit card which you use is your own and that there are sufficient funds to cover the 
                         cost of any services or products which you wish to purchase. Pitchside Blue reserves the right 
                         to obtain validation of your credit card details before providing you with any services or products.</p>

                    
                </li>

                <li>
                    <h2>Termination of Access</h2>
                    <p>If you breach any of these conditions your license to use the Site will terminate immediately without the necessity 
                        of any notice being given to you.</p>

                    <p>Otherwise access to the Site may be terminated at any time by Pitchside Blue without notice.</p>

                    <p>The provisions of these conditions excluding, limiting and disclaiming the liability of Pitchside Blue 
                        will nevertheless survive any such termination.</p>

                    
                </li>

                <li>
                    <h2>General</h2>
                    <p>Pitchside Blue does not accept any liability for any failure by Pitchside Blue
                         to comply with these conditions where such failure is due to circumstances beyond its reasonable control.</p>

                    <p>If Pitchside Blue waives any rights available to it under these conditions on one occasion, 
                        this does not mean that those rights will automatically be waived on any other occasion.</p>

                    <p>If any of these conditions are invalid, unenforceable or illegal for any reason, the remaining 
                        conditions shall nevertheless continue in full force.</p>

                    <p>You are completely responsible for all charges, fees, duties, taxes and assessments arising out of the use of the Site.</p>

                    
                </li>

                <li>
                    <h2>Governing Law & Jurisdiction</h2>
                    <p>These conditions are governed by the laws in force in India and you agree to submit to the exclusive jurisdiction of the courts of India.</p>

                </li>

                <li>
                    <h2>Return to Site</h2>
                    <p>To return to the Site, click where indicated. By doing so, you acknowledge that you have read, understood and accepted these conditions.</p>
                </li>


            </ul>
            
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