
<?php include('header.php');?>


<section class="single-banner faq-page bg-third">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php" class="link-style-line on-hover" >
                <span class="link-style" >home</span>
            </a>
            <span>/</span>
            <span>Theme FAQs</span>
        </div>
        <h1 class="heading">Theme FAQs</h1>
    </div>
</section>
<section class="faq-section bg-third overflow-hidden">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-3 col-lg-5">
                <div class="help-section">
                    <h4 class="heading">Need help?</h4>
                    <p>Below FAQ are some common concerns of our clients before purchasing the theme. If you have other questions, please just send it to: <a href="mailto:example@example.com" title="">example@example.com</a></p>
                    <div class="message_faq">
                        <div class="message-item">
                            <div class="icon">
                                <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                    <path d="M12 0c-6.627 0-12 4.975-12 11.111 0 3.497 1.745 6.616 4.472 8.652v4.237l4.086-2.242c1.09.301 2.246.464 3.442.464 6.627 0 12-4.974 12-11.111 0-6.136-5.373-11.111-12-11.111zm1.193 14.963l-3.056-3.259-5.963 3.259 6.559-6.963 3.13 3.259 5.889-3.259-6.559 6.963z"></path>
                                </svg>
                            </div>
                            <a href="contact.php">message us</a>
                        </div>
                        <div class="message-item">
                            <div class="icon">
                                <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" width="24" height="24" xmlns="http://www.w3.org/2000/ svg" viewBox="0 -256 1850 1850">
                                    <g transform="matrix(1,0,0,-1,37.966102,1282.678)">
                                    <path d="m 1664,32 v 768 q -32,-36 -69,-66 -268,-206 -426,-338 -51,-43 -83,-67 -32,-24 -86.5,-48.5 Q 945,256 897,256 h -1 -1 Q 847,256 792.5,280.5 738,305 706,329 674,353 623,396 465,528 197,734 160,764 128,800 V 32 Q 128,19 137.5,9.5 147,0 160,0 h 1472 q 13,0 22.5,9.5 9.5,9.5 9.5,22.5 z m 0,1051 v 11 13.5 q 0,0 -0.5,13 -0.5,13 -3,12.5 -2.5,-0.5 -5.5,9 -3,9.5 -9,7.5 -6,-2 -14,2.5 H 160 q -13,0 -22.5,-9.5 Q 128,1133 128,1120 128,952 275,836 468,684 676,519 682,514 711,489.5 740,465 757,452 774,439 801.5,420.5 829,402 852,393 q 23,-9 43,-9 h 1 1 q 20,0 43,9 23,9 50.5,27.5 27.5,18.5 44.5,31.5 17,13 46,37.5 29,24.5 35,29.5 208,165 401,317 54,43 100.5,115.5 46.5,72.5 46.5,131.5 z m 128,37 V 32 q 0,-66 -47,-113 -47,-47 -113,-47 H 160 Q 94,-128 47,-81 0,-34 0,32 v 1088 q 0,66 47,113 47,47 113,47 h 1472 q 66,0 113,-47 47,-47 47,-113 z"></path>
                                    </g>
                                </svg>
                            </div>
                            <a href="contact.php">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-7">
                <div class="accordion_list">
                    <div class="return_faq faq_accordion">
                        <div class="title">
                            <h4 class="heading">Returns, Guarantees & Delivery</h4>
                        </div>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        Q: “When can I expect the refund for my online order that was cancelled?”
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <p>The refund timeline for an Online order is 7-14 business days from the date of refund issued.</p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            for ($i = 2; $i <= 10; $i++) {
                                echo '
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading'.$i.'">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse'.$i.'" aria-expanded="false" aria-controls="panelsStayOpen-collapse'.$i.'">
                                            Q: “Accordion Item '.$i.'”
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading'.$i.'">
                                        <div class="accordion-body">
                                            <p>This is the content for Accordion Item '.$i.'.</p>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                            ?>
                        </div>                        
                    </div>
                    <div class="service_faq faq_accordion">
                        <div class="title">
                            <h4 class="heading">Services</h4>
                        </div>
                        <div class="accordion" id="accordionPanelsStayOpenExample1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Q: “Can I know the exact time of delivery?”
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <p>At this point in time, we don’t have an option to choose a specific slot for delivery. Transport service providers ideally reach the customer to communicate on their time of arrival.</p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            for ($i = 1; $i < 10; $i++) {
                                echo '
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo'.$i.'">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo'.$i.'" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo'.$i.'">
                                            Q: “Can I know the exact time of delivery?”
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo'.$i.'" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo'.$i.'">
                                        <div class="accordion-body">
                                            <p>At this point in time, we don’t have an option to choose a specific slot for delivery. Transport service providers ideally reach the customer to communicate on their time of arrival.</p>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        
                    </div>
                    <div class="satisfactory_ans">
                        <div class="content">
                            <p>Unable to find satisfactory answers?</p>
                            <a href="contact.php" class="cart-button">
                                <span class="text">contact us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include('footer.php');?>