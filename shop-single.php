<?php include('header.php');?>

<section>
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php" class="link-style-line on-hover" >
                <span class="link-style" >home</span>
            </a>
            <span>/</span>
            <span>hello</span>
        </div>
    </div>
</section>
<section class="single-shop-content shop-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-section">
                    <div class="shop_main splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="image">
                                        <img src="image/product1.0_5a6aca6c-94d2-45eb-afc6-ea63a43ec07f.webp" alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="image">
                                        <img src="image/product1.1.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="my-slider-progress">
                            <div class="my-slider-progress-bar"></div>
                        </div>
                    </div>
                    <div class="shop_thumbnail splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="image">
                                        <img src="image/product1.0_5a6aca6c-94d2-45eb-afc6-ea63a43ec07f.webp" alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="image">
                                        <img src="image/product1.1.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <div class="product-vendor single-shop-list">
                        <a href="#">Iris Hantverk</a>
                        <button class="share-button">
                            <svg viewBox="0 0 227.216 227.216" class="icon icon-share" fill="#000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M175.897,141.476c-13.249,0-25.11,6.044-32.98,15.518l-51.194-29.066c1.592-4.48,2.467-9.297,2.467-14.317c0-5.019-0.875-9.836-2.467-14.316l51.19-29.073c7.869,9.477,19.732,15.523,32.982,15.523c23.634,0,42.862-19.235,42.862-42.879C218.759,19.229,199.531,0,175.897,0C152.26,0,133.03,19.229,133.03,42.865c0,5.02,0.874,9.838,2.467,14.319L84.304,86.258c-7.869-9.472-19.729-15.514-32.975-15.514c-23.64,0-42.873,19.229-42.873,42.866c0,23.636,19.233,42.865,42.873,42.865c13.246,0,25.105-6.042,32.974-15.513l51.194,29.067c-1.593,4.481-2.468,9.3-2.468,14.321c0,23.636,19.23,42.865,42.867,42.865c23.634,0,42.862-19.23,42.862-42.865C218.759,160.71,199.531,141.476,175.897,141.476z M175.897,15c15.363,0,27.862,12.5,27.862,27.865c0,15.373-12.499,27.879-27.862,27.879c-15.366,0-27.867-12.506-27.867-27.879C148.03,27.5,160.531,15,175.897,15z M51.33,141.476c-15.369,0-27.873-12.501-27.873-27.865c0-15.366,12.504-27.866,27.873-27.866c15.363,0,27.861,12.5,27.861,27.866C79.191,128.975,66.692,141.476,51.33,141.476z M175.897,212.216c-15.366,0-27.867-12.501-27.867-27.865c0-15.37,12.501-27.875,27.867-27.875c15.363,0,27.862,12.505,27.862,27.875C203.759,199.715,191.26,212.216,175.897,212.216z"></path>
                            </svg>
                        </button>
                    </div>
                    <h4 class="heading single-shop-list"><a href="shop-single.php">Revlon Liquid Lipstick</a></h4>
                    <div class="product_rating single-shop-list">
                        <div class="rating-star">
                            <?php for($i=1; $i<=5;$i++){
                                echo "<i class='fa-solid fa-star'></i>";
                            } ?>
                        </div>
                    </div>
                    <div class="card-price single-shop-list">
                        <div class="price_sale">
                            <span class="price-item price--regular price-before-sale">
                                <del>
                                    <span class="price-symbol">$</span>
                                    49.99
                                </del>
                            </span>
                            <span class="price-item price-item-sale price-item-last">
                                <span class="price-symbol">$</span>
                                33.99
                            </span>
                            <span class="price-discount price-item price-item-sale price-item-last">
                                <span>(-32%)</span>
                            </span>
                        </div>
                    </div>
                    <div class="product_info single-shop-list">
                        <p>Lubrudern Moisture Hydrating Hand Lotion is a rejuvenating solution for your hands, offering intense hydration and nourishment....</p>
                    </div>
                    <div class="single-shop-list">
                        <div class="product_color">
                            <span class="">color:</span>
                            <span>Misty Rose</span>
                        </div>
                        <div class="card-image-list d-flex flex-wrap">
                            <span class="card-image-list-item hover">
                                <span>
                                    <img src="image/product2.0_63081eba-a20f-4cfe-b5e9-4a21eb5cc2b1.webp" alt="">
                                </span>
                                <span>
                                    <img src="image/product2.1.webp" alt="">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="product_qty single-shop-list">
                        <span class="d-block mb-2">Quantity:</span>
                        <div class="product_quantity">
                            <div class="product-number position-relative d-flex">
                                <button class="product-btn minus">-</button>
                                <input type="number" min="1" value="1" class="quantity">
                                <button class="product-btn plus">+</button>
                            </div>
                            <button class="cart-button">
                                <span class="text">Add to cart</span>
                            </button>
                            <button class="position-relative wishlist-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-heart" width="45" height="40" viewBox="0 0 45 40" aria-hidden="true" focusable="false" role="presentation" fill="none">
                                    <path d="M21.7154 5.6493L21.714 5.64778C21.3569 5.24869 20.9819 4.86769 20.5971 4.47667C20.5153 4.3936 20.4331 4.31008 20.3505 4.22584C18.007 1.84063 15.2117 0.56802 11.6395 0.526423C10.0511 0.588997 8.29758 0.912746 6.69039 1.77071L6.68986 1.771C4.51375 2.9293 2.87067 4.63091 1.72515 6.86856L1.72512 6.86862C0.440422 9.37728 0.23184 12.0146 0.794224 14.7691L0.794258 14.7693C1.25857 17.0474 2.44079 18.9587 4.05218 20.6168C7.35362 24.0052 10.6593 27.387 13.9653 30.7691C16.763 33.6312 19.5609 36.4934 22.3566 39.3601C22.4167 39.4215 22.4605 39.4589 22.491 39.4812C22.5182 39.4611 22.5576 39.4275 22.6109 39.3727L22.6113 39.3723C25.3225 36.5922 28.0359 33.8168 30.7491 31.0414C34.1399 27.5731 37.5305 24.1049 40.9162 20.6283L40.9166 20.628C42.1044 19.4106 43.1065 18.0697 43.6656 16.4973C44.9375 12.9107 44.8108 9.45664 42.8653 6.14599L43.2964 5.89267L42.8653 6.14598C41.6077 4.00573 39.9062 2.34858 37.7205 1.48384L37.7202 1.48373C33.4252 -0.21845 29.3609 0.232782 25.7236 3.26981L21.7154 5.6493ZM21.7154 5.6493C21.8941 5.84748 22.1541 6.0578 22.5058 6.04907M21.7154 5.6493L22.5058 6.04907M22.5058 6.04907C22.8397 6.04078 23.0902 5.83592 23.2597 5.66335M22.5058 6.04907L23.2597 5.66335M23.2597 5.66335C23.4397 5.48156 23.6166 5.3004 23.7919 5.12081M23.2597 5.66335L23.7919 5.12081M23.7919 5.12081C24.4289 4.46821 25.0457 3.83635 25.7235 3.26993L23.7919 5.12081Z" stroke="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="payment-method single-shop-list">
                        <button class="buy_now">
                            <span class="">Buy now with PayPal</span>
                        </button>
                        <button class="other_method">More payment options</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shop_box">
    <div class="container">
        <div class="splide carousel_item_shop">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="shop_items">
                            <a href="#">
                                <div class="icon">
                                    <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M22.9535 15.9154C22.9535 17.0491 22.9483 18.1829 22.9576 19.3162C22.9599 19.5911 22.8566 19.754 22.6077 19.872C20.6525 20.8026 18.7015 21.7425 16.7492 22.6802C16.5652 22.7683 16.383 22.8594 16.2007 22.9505C16.0751 23.0135 15.9507 23.013 15.8239 22.9522C14.5119 22.3188 13.1999 21.6859 11.8879 21.0536C11.0566 20.6531 10.2265 20.2503 9.3912 19.8591C9.16046 19.7511 9.07459 19.5911 9.07517 19.343C9.07985 17.1291 9.07751 14.9153 9.07868 12.7014C9.07868 12.5624 9.07342 12.4176 9.10964 12.2863C9.13184 12.2045 9.21479 12.1158 9.29365 12.0779C10.0712 11.7007 10.8551 11.3376 11.6338 10.9633C13.0211 10.296 14.4068 9.62577 15.7906 8.95145C15.9676 8.86505 16.1201 8.88665 16.2889 8.96838C17.3112 9.46405 18.3364 9.95389 19.361 10.4461C20.4855 10.9861 21.6111 11.5244 22.7351 12.0662C22.8869 12.1397 22.9629 12.2664 22.9629 12.4416C22.9611 13.5993 22.9617 14.7576 22.9617 15.9154C22.9588 15.9154 22.9564 15.9154 22.9535 15.9154ZM16.3701 22.0648C16.4425 22.0362 16.4875 22.0216 16.5296 22.0012C18.3802 21.1097 20.2296 20.2164 22.082 19.329C22.2023 19.2712 22.2409 19.207 22.2409 19.0762C22.2368 17.1105 22.2379 15.1453 22.2379 13.1795V12.9991C22.1696 13.0248 22.1199 13.04 22.0738 13.0616C20.2191 13.9525 18.365 14.8446 16.5091 15.7332C16.4028 15.784 16.3678 15.8476 16.3678 15.9656C16.3719 17.936 16.3707 19.9064 16.3707 21.8768C16.3707 21.93 16.3701 21.9831 16.3701 22.0648ZM9.79836 12.9939C9.79427 13.0651 9.79076 13.0937 9.79076 13.1223C9.79076 15.126 9.79076 17.1303 9.78843 19.134C9.78843 19.2438 9.84275 19.2835 9.92921 19.3249C11.6834 20.168 13.4371 21.0139 15.1907 21.8587C15.3367 21.9288 15.4839 21.9959 15.6551 22.0759C15.6551 21.9924 15.6551 21.9405 15.6551 21.8879C15.6551 19.9134 15.6539 17.9383 15.658 15.9638C15.658 15.8365 15.613 15.7793 15.5026 15.7262C13.7467 14.8849 11.9924 14.0383 10.2382 13.1941C10.101 13.1282 9.96017 13.068 9.79836 12.9939ZM10.2879 12.3879C10.3597 12.4281 10.3995 12.4538 10.4415 12.4743C11.16 12.8216 11.8797 13.1673 12.597 13.517C12.6981 13.566 12.7822 13.5625 12.8833 13.5135C13.6824 13.1258 14.4839 12.7428 15.2842 12.3581C16.2947 11.8723 17.3047 11.386 18.3142 10.8985C18.3568 10.8781 18.3936 10.846 18.4503 10.808C17.6459 10.4192 16.869 10.0415 16.0891 9.67131C16.0401 9.64796 15.9553 9.66898 15.8999 9.69583C14.5908 10.3211 13.2828 10.9505 11.9749 11.5787C11.4241 11.8432 10.8726 12.1076 10.2879 12.3879ZM21.7268 12.3978C21.6678 12.3639 21.6327 12.34 21.5954 12.3219C20.909 11.9914 20.2197 11.6663 19.5368 11.3282C19.3808 11.2512 19.257 11.2331 19.0911 11.3136C17.4981 12.0878 15.9004 12.8526 14.3039 13.6197C14.0697 13.7324 13.8349 13.8445 13.5831 13.9654C13.6363 14.0021 13.6643 14.0284 13.6982 14.0448C14.4348 14.3997 15.1714 14.7553 15.9115 15.1032C15.9723 15.1319 16.0698 15.1313 16.13 15.1027C17.9561 14.2293 19.7798 13.3506 21.6035 12.4719C21.6398 12.4544 21.6731 12.4305 21.7268 12.3978Z" fill="currentColor"></path>
                                        <path d="M7.18893 24.1602C7.16439 24.3674 7.14278 24.5356 7.12408 24.7031C7.05399 25.3413 6.98506 25.9794 6.91437 26.6169C6.89101 26.8294 6.72452 26.9742 6.53117 26.9561C6.32671 26.9369 6.18243 26.764 6.20463 26.5474C6.27297 25.8901 6.34716 25.2327 6.41843 24.5753C6.46341 24.1596 6.51189 23.7445 6.55161 23.3282C6.57732 23.0567 6.71751 22.9143 6.98798 22.9382C7.53066 22.9867 8.07217 23.0468 8.61368 23.1052C9.14584 23.1624 9.67684 23.2301 10.209 23.2786C10.4327 23.299 10.5875 23.4724 10.5665 23.6738C10.5431 23.8951 10.3615 24.0113 10.1068 23.9833C9.42974 23.908 8.75271 23.835 8.07567 23.7626C8.01375 23.7562 7.95066 23.7562 7.8461 23.7509C7.89867 23.8163 7.92555 23.8566 7.95943 23.8904C9.17388 25.1136 10.5905 26.0197 12.2144 26.5994C13.7391 27.1441 15.3134 27.3525 16.9233 27.2159C19.3177 27.0128 21.4441 26.1347 23.2847 24.5852C24.9163 23.2114 26.0595 21.5014 26.7266 19.479C27.2342 17.9389 27.396 16.3585 27.2196 14.7436C27.1069 13.7085 26.8504 12.7101 26.4654 11.7439C26.3854 11.5431 26.4117 11.386 26.5408 11.2763C26.7318 11.1145 27.0134 11.1793 27.1022 11.4257C27.2798 11.9185 27.4626 12.4112 27.601 12.9156C27.875 13.914 28.0006 14.9363 27.9989 15.9726C27.9971 16.9044 27.8914 17.8239 27.6793 18.7329C27.3306 20.2263 26.7231 21.6048 25.8462 22.8612C24.4227 24.9005 22.5475 26.3647 20.2156 27.241C18.6495 27.8295 17.029 28.0747 15.363 27.9802C12.8289 27.8365 10.5542 26.9806 8.56169 25.4066C8.12416 25.061 7.73219 24.6582 7.31919 24.2816C7.28473 24.2501 7.25085 24.2185 7.18893 24.1602Z" fill="currentColor"></path>
                                        <path d="M24.199 8.22446C23.9221 7.96641 23.6534 7.6996 23.3678 7.45264C22.224 6.4648 20.9272 5.74436 19.4913 5.27846C18.0917 4.82366 16.6517 4.6526 15.1867 4.76353C12.9102 4.93517 10.8634 5.7286 9.06474 7.13212C7.33506 8.48193 6.10834 10.2019 5.37464 12.271C4.82495 13.821 4.63043 15.4166 4.77705 17.0514C4.87168 18.1069 5.11936 19.1292 5.50315 20.1188C5.53703 20.2064 5.55982 20.3085 5.55164 20.4002C5.53703 20.5666 5.40501 20.6763 5.23853 20.6939C5.06679 20.7114 4.9301 20.6396 4.8711 20.472C4.71338 20.0236 4.54514 19.577 4.41896 19.1199C4.11987 18.0398 3.98201 16.9369 4.00187 15.8166C4.02349 14.6133 4.21976 13.4386 4.59246 12.2932C5.09366 10.753 5.87234 9.36935 6.93199 8.14623C8.00567 6.90676 9.28614 5.93235 10.76 5.21132C11.6502 4.77579 12.5825 4.45994 13.5505 4.25501C14.7106 4.01039 15.8848 3.94091 17.0642 4.04951C18.9784 4.22582 20.756 4.81841 22.3876 5.84069C23.2328 6.37022 23.9975 6.99725 24.6862 7.71828C24.7248 7.75857 24.7674 7.79535 24.8323 7.85665C24.8556 7.67274 24.8772 7.52153 24.8942 7.36915C24.9672 6.71176 25.0396 6.05496 25.1115 5.39757C25.1308 5.22008 25.2219 5.09631 25.3627 5.05661C25.615 4.98538 25.8423 5.15878 25.8224 5.42676C25.7944 5.79982 25.7476 6.17172 25.7073 6.5442C25.6436 7.13854 25.5788 7.73346 25.5145 8.3278C25.4982 8.47784 25.4853 8.62789 25.4672 8.77735C25.445 8.96067 25.2856 9.10604 25.0916 9.09028C24.709 9.05933 24.3275 9.01321 23.9455 8.97176C23.3847 8.91104 22.8239 8.84857 22.2631 8.78727C22.1083 8.77034 21.9535 8.75399 21.7987 8.73765C21.5861 8.71546 21.4442 8.55608 21.4588 8.35641C21.4745 8.14856 21.6416 8.00377 21.8612 8.02654C22.3981 8.08142 22.9343 8.14506 23.4712 8.20344C23.7054 8.22913 23.9402 8.2519 24.1745 8.27584C24.1827 8.25891 24.1908 8.24139 24.199 8.22446Z" fill="currentColor"></path>
                                        <path d="M13.5469 17.4327C13.5159 17.4216 13.4499 17.4047 13.3898 17.3761C12.777 17.0836 12.1648 16.7893 11.5532 16.4951C11.3733 16.4081 11.2886 16.2691 11.3108 16.1039C11.33 15.9615 11.4439 15.8301 11.5952 15.8103C11.677 15.7997 11.7734 15.8132 11.8476 15.8482C12.4796 16.1454 13.1094 16.4472 13.7373 16.7531C13.947 16.8553 14.0119 17.0486 13.9149 17.2383C13.846 17.3726 13.7321 17.4339 13.5469 17.4327Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>Free return within 15 days</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="shop_items">
                            <a href="#">
                                <div class="icon">
                                    <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <g clip-path="url(#clip0_1304_2274)">
                                        <path d="M11.9914 23.5213C12.0437 24.944 11.549 26.1382 10.3803 27.0566C9.57056 27.6923 8.6198 28.011 7.58018 27.9999C5.2573 27.975 3.06907 26.2052 3.18998 23.5394C2.85016 23.4689 2.49843 23.4329 2.17418 23.3238C0.845121 22.8779 0.00976516 21.7825 0.00701728 20.4604C-0.000310405 15.9853 -0.00489021 11.5102 0.0088492 7.03595C0.014345 5.32118 1.4524 4.00503 3.28249 4.00331C8.03175 3.99901 12.781 3.99815 17.5303 4.00331C19.3686 4.00503 20.7801 5.33063 20.8039 7.06087C20.8103 7.53166 20.8048 8.00245 20.8048 8.50503C20.8992 8.50503 20.9798 8.50503 21.0604 8.50503C21.8985 8.50503 22.7375 8.51448 23.5756 8.50159C24.2241 8.49128 24.7599 8.70262 25.2152 9.1296C26.7128 10.5351 28.2113 11.9415 29.7189 13.3375C30.1989 13.7817 30.416 14.3023 30.4142 14.9303C30.4068 17.4466 30.4114 19.9629 30.4114 22.4784C30.4114 22.5634 30.4114 22.6494 30.4114 22.7748C30.5873 22.7748 30.7503 22.7748 30.9134 22.7748C31.1497 22.7756 31.3869 22.7688 31.6223 22.7825C31.8321 22.7945 32.0061 22.9509 32.0006 23.1219C31.9951 23.3023 31.8916 23.432 31.6974 23.4758C31.6104 23.4956 31.5179 23.505 31.4281 23.505C30.5671 23.5067 29.707 23.5059 28.814 23.5059C28.8506 25.0291 28.2955 26.292 26.9747 27.2112C26.2026 27.749 25.3178 28.0145 24.3688 27.9973C23.1121 27.9741 22.0304 27.5231 21.173 26.6425C20.3157 25.7619 19.9795 24.7078 20.0263 23.5205H11.9924L11.9914 23.5213ZM20.0253 14.8117C20.0253 12.2679 20.0263 9.72324 20.0253 7.17942C20.0253 5.7052 18.9912 4.73441 17.4185 4.73441C12.7462 4.73355 8.0748 4.73355 3.40248 4.73612C3.1909 4.73612 2.97381 4.75073 2.76864 4.79369C1.51469 5.05915 0.787416 5.91396 0.7865 7.12616C0.783752 11.5428 0.781004 15.9595 0.788332 20.3762C0.790164 21.6356 1.62918 22.6365 3.05442 22.7602C3.29532 22.7808 3.37867 22.7241 3.45927 22.5196C4.20303 20.6236 6.07892 19.5557 8.21128 19.8272C9.96992 20.0514 11.1185 21.0042 11.7515 22.5317C11.8257 22.7095 11.9044 22.7808 12.1215 22.7808C14.6523 22.7722 17.1822 22.7756 19.713 22.7748C19.9212 22.7748 20.0256 22.6789 20.0263 22.487C20.0263 19.9286 20.0263 17.3701 20.0263 14.8117H20.0253ZM20.8268 14.8873V21.4775C20.8964 21.4045 20.9431 21.3573 20.9871 21.3083C22.0524 20.1382 23.4034 19.6305 25.0292 19.8281C26.6331 20.0231 27.778 20.8478 28.4119 22.2267C28.6207 22.6811 28.8497 22.847 29.3507 22.7834C29.5541 22.7576 29.6365 22.7361 29.6365 22.5213C29.6283 20.0566 29.631 17.5918 29.631 15.1262V14.8865H20.8268V14.8873ZM7.59117 20.505C5.44966 20.5188 4.00335 22.1425 4.00244 23.9002C4.00244 25.6227 5.43775 27.2782 7.61315 27.2722C9.85726 27.2662 11.2184 25.5007 11.2046 23.8787C11.19 22.2035 9.79314 20.5033 7.59117 20.5042V20.505ZM20.8067 23.8848C20.8186 25.9363 22.5854 27.2619 24.4165 27.2628C26.1788 27.2628 28.0024 26.0136 28.018 23.9011C28.0327 21.8564 26.2438 20.5274 24.4229 20.5093C22.4563 20.4896 20.8094 22.0403 20.8076 23.8856L20.8067 23.8848ZM20.8158 14.1098H29.4258C29.3168 13.9982 29.2436 13.9174 29.163 13.8418C27.6828 12.4518 26.1971 11.0669 24.7242 9.66997C24.4073 9.36929 24.0446 9.23269 23.6031 9.23527C22.7576 9.23956 21.9122 9.23613 21.0668 9.23613C20.9862 9.23613 20.9047 9.23613 20.8158 9.23613V14.109V14.1098Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1304_2274">
                                        <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>Free shipping on orders over 49$</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="shop_items">
                            <a href="#">
                                <div class="icon">
                                    <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M7.06222 16.8517C6.85085 17.0142 6.66231 17.1483 6.48645 17.2969C4.81243 18.7056 3.6609 20.459 3.11727 22.6085C2.9152 23.4087 2.8315 24.2235 2.83319 25.0486C2.83488 25.8427 2.83488 26.636 2.8315 27.4302C2.8315 27.535 2.81713 27.645 2.78415 27.7447C2.72582 27.9209 2.56941 28.0249 2.40961 27.9948C2.27772 27.9699 2.14414 27.8513 2.05282 27.7396C1.99533 27.67 1.99956 27.5359 2.00041 27.431C2.01055 26.3661 1.99702 25.2995 2.0486 24.2364C2.10102 23.1758 2.34874 22.1478 2.72413 21.1551C3.23817 19.7963 4.00585 18.5999 4.9942 17.5496C5.57504 16.9317 6.22774 16.4005 6.94893 15.9605C7.07321 15.8848 7.13239 15.7946 7.15522 15.6425C7.35221 14.2922 7.77156 13.0185 8.48091 11.8556C9.27734 10.5509 10.3249 9.5015 11.6413 8.73743C12.5764 8.19424 13.5672 7.79286 14.6325 7.62355C15.2692 7.52213 15.9159 7.4422 16.5602 7.43274C18.2833 7.40696 20.008 7.41727 21.7311 7.42587C23.0686 7.43274 24.2835 7.06317 25.3581 6.24925C25.9263 5.81951 26.409 5.30124 26.8005 4.69875C26.9053 4.53803 27.0026 4.37215 27.1066 4.21143C27.208 4.05414 27.356 3.98539 27.5386 4.00258C27.7347 4.02062 27.8616 4.13236 27.9165 4.3223C28.1414 5.10185 28.39 5.87623 28.5819 6.66437C28.8939 7.94671 28.9936 9.25999 28.9996 10.5758C29.0046 11.7267 28.8863 12.8715 28.6969 14.0077C28.3139 16.3086 27.4693 18.4297 26.2442 20.3902C25.0039 22.3747 23.3806 23.9665 21.3193 25.0632C20.1314 25.6949 18.8641 26.0662 17.5291 26.2209C16.0352 26.3936 14.581 26.2166 13.169 25.7207C12.0276 25.3202 11.0122 24.6876 10.1177 23.8556C9.05245 22.8629 8.24841 21.6889 7.72168 20.3214C7.36574 19.3975 7.17044 18.4358 7.1028 17.4465C7.09012 17.2626 7.07744 17.0778 7.06137 16.8526L7.06222 16.8517ZM8.0345 15.2514C8.0548 15.2643 8.07509 15.2763 8.09622 15.2892C8.15456 15.2677 8.21543 15.2505 8.27208 15.223C9.70515 14.5337 11.2287 14.2939 12.7979 14.2914C14.6198 14.2879 16.4418 14.2896 18.2638 14.2914C18.3678 14.2914 18.4743 14.3025 18.5749 14.33C18.7609 14.3807 18.8624 14.5303 18.8624 14.7099C18.8624 14.8964 18.7694 15.0572 18.5665 15.1018C18.465 15.1242 18.3594 15.1379 18.2554 15.1379C16.2643 15.1414 14.2732 15.1276 12.283 15.1474C10.7916 15.162 9.37964 15.5359 8.05226 16.2346C7.93558 16.2965 7.89585 16.3644 7.89669 16.4968C7.89923 17.6854 8.0641 18.8414 8.48429 19.9579C9.1353 21.6854 10.2429 23.0348 11.7486 24.0524C12.764 24.7383 13.8894 25.1336 15.0933 25.3305C16.4537 25.5531 17.7861 25.4242 19.0958 25.0468C20.6497 24.5991 22.0016 23.7662 23.2182 22.6962C24.6555 21.4319 25.7377 19.8969 26.5578 18.1642C27.4803 16.2157 27.9546 14.1461 28.122 12C28.2505 10.3524 28.1541 8.71422 27.8269 7.09497C27.7094 6.51224 27.5513 5.93726 27.3974 5.29781C27.3086 5.40782 27.2604 5.4654 27.2156 5.52385C26.36 6.64031 25.2871 7.45251 23.969 7.92007C23.2445 8.17705 22.4928 8.26815 21.7302 8.27073C20.1196 8.27675 18.5082 8.26472 16.8975 8.27675C16.3361 8.28105 15.7722 8.30425 15.2151 8.36699C14.083 8.4942 13.0236 8.86893 12.053 9.47486C10.4618 10.4676 9.26043 11.8169 8.55531 13.5866C8.34056 14.1246 8.20613 14.6953 8.03535 15.2514H8.0345Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>No harmful chemicals</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="shop_items">
                            <a href="#">
                                <div class="icon">
                                    <svg class="icon icon-accordion" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M16.0594 28.0001C13.8193 27.9511 11.8505 27.3164 10.1762 25.9043C8.60362 24.5782 7.61749 22.8981 7.17998 20.8857C6.82601 19.2546 7.00945 17.6845 7.59596 16.141C8.35558 14.1405 9.42783 12.3033 10.5586 10.4979C11.8195 8.4854 13.2139 6.56571 14.7073 4.71902C14.9234 4.4519 15.1491 4.19852 15.4962 4.08342C16.0551 3.89875 16.6984 4.02244 17.0593 4.48282C17.9981 5.68016 18.9317 6.88351 19.8256 8.11434C21.2975 10.1414 22.5911 12.281 23.6961 14.5288C24.2869 15.7313 24.7554 16.9767 24.9483 18.3123C25.0362 18.9196 24.9965 19.5225 24.9233 20.1246C24.7821 21.2842 24.4479 22.3845 23.8717 23.4049C22.8839 25.1545 21.4715 26.4403 19.6232 27.2468C18.4649 27.7519 17.2453 27.9589 16.0585 27.9992L16.0594 28.0001ZM24.2731 18.8491C24.2249 18.0607 24.0483 17.3563 23.7934 16.6718C23.0932 14.7899 22.1605 13.0214 21.0968 11.3259C19.7438 9.16996 18.2435 7.11456 16.6778 5.10812C16.2954 4.61853 15.6839 4.6108 15.3127 5.1064C14.3843 6.3484 13.449 7.58611 12.5481 8.847C10.9195 11.1249 9.47864 13.5135 8.40984 16.1092C7.96113 17.1992 7.6261 18.3132 7.73634 19.5165C7.82764 20.5103 8.03692 21.474 8.44343 22.3896C8.84821 23.3027 9.43127 24.0911 10.1297 24.8006C10.9066 25.5891 11.7945 26.2247 12.8246 26.6344C14.2534 27.203 15.733 27.4049 17.2643 27.1575C18.2117 27.0046 19.1237 26.7341 19.954 26.2539C21.8323 25.1682 23.181 23.6299 23.8631 21.5522C24.1568 20.6572 24.2791 19.7338 24.274 18.8483L24.2731 18.8491Z" fill="currentColor"></path>
                                        <path d="M11.1339 19.3086C11.1339 19.1505 11.1176 19.0414 11.1374 18.9392C11.171 18.7657 11.2907 18.6661 11.4681 18.6584C11.6378 18.6515 11.7557 18.7434 11.8117 18.898C11.8427 18.9839 11.8557 19.0784 11.86 19.1703C11.9624 21.3193 13.6789 23.0363 15.8208 23.1299C15.8355 23.1299 15.8492 23.1299 15.8639 23.1316C16.1739 23.1514 16.3608 23.3077 16.347 23.5328C16.3324 23.7629 16.1378 23.8763 15.82 23.8609C14.9088 23.8171 14.0613 23.574 13.2913 23.0775C12.1519 22.3423 11.4939 21.2901 11.2261 19.9785C11.202 19.86 11.1804 19.7406 11.1641 19.6204C11.1477 19.5001 11.1408 19.3781 11.1339 19.3086Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>Fresh and clean product</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="shop_full_img">
    <div class="container">
        <div class="shop_full_image splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="image">
                            <a href="#">
                                <img src="image/nimo-product-details-collage-image-2.jpg" alt="">
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="image">
                            <a href="#">
                                <img src="image/Image_Collage.png" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="shop_tab">
    <div class="container">
        <ul class="nav nav-tabs d-sm-flex d-none" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Benefits</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ingredients</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Custom tab</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <h3 class="heading d-sm-none">Description</h3>
                <div class="description shop-tab"></div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <h3 class="heading d-sm-none">Benefits</h3>
                <div class="benefit shop-tab"></div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <h3 class="heading d-sm-none">Ingredients</h3>
                <div class="ingredient shop-tab">
                    <p>Lubrudern Moisture Hydrating Hand Lotion is a rejuvenating solution for your hands, offering intense hydration and nourishment. Crafted to provide the ultimate care for your skin, this luxurious hand lotion is infused with a powerful blend of moisturizing ingredients, leaving your hands feeling soft, supple, and revitalized.</p>
                    <p>Designed to combat the effects of daily wear and environmental stressors, this hand lotion features a non-greasy, quick-absorbing formula that replenishes moisture and locks it in, promoting smoother and healthier-looking hands. With regular use, it helps to restore the skin's natural balance, ensuring lasting comfort and protection.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                <h3 class="heading d-sm-none">Custom tab</h3>
                <div class="custom-tab shop-tab"></div>
            </div>
        </div>
    </div>
</section>
<section class="shop_review">
    <div class="container">
        <div class="title">
            <h4 class="heading">Customer Reviews</h4>
            <p>No reviews yet</p>
            <button class="black-btn" onclick="toggleForm('shop_review_form')">
                <span>write a review</span>
            </button>
        </div>
        <div class="shop_review_form">
            <h5 class="heading">write a review</h5>
            <form action="">
                <div class="shop_form_box">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="shop_form_box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="john.smith@example.com">
                </div>
                <div class="shop_form_box">
                    <label for="rating_label">Rating</label>
                    <div class="rating">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </div>
                <div class="shop_form_box">
                    <label for="review_title">Review Title</label>
                    <input type="text" placeholder="Give your review a title">
                </div>
                <div class="shop_form_box">
                    <label for="description_review">Body of Review (1500)</label>
                    <textarea placeholder="Write your comments here"></textarea>
                </div>
                <div class="text-end">
                    <input type="submit" class="black-btn" value="Submit Review">
                </div>
            </form>
        </div>
    </div>
</section>
<section class="relate_product_shop">
    <div class="container">
        <div class="title">
            <h5 class="heading">You may also like</h5>
            <div class="item-btn">
                <a href="#" class="hover-btn speical-btn btn-transparent button--icon-arrow">
                    <span class="text">all shop</span>
                </a>
            </div>
        </div>
        <div class="shop_relate_slide splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="latest-box">
                            <div class="image">
                                <a href="shop-single.php">
                                    <img class="change-image" src="image/product1.0_5a6aca6c-94d2-45eb-afc6-ea63a43ec07f.webp" alt="">
                                    <img class="appared-image" src="image/product1.1.webp" alt="">
                                </a>
                                <div class="cart_wishlist">
                                    <button>
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="content text-center">
                                <h5 class="heading">Amber Beauty</h5>
                                <h6 class="sub-heading"><a href="shop-single.php">Lubrudern Moisture Hydrating Hand Lotion</a></h6>
                                <div class="card-price">
                                    <div class="price_regular">
                                        <span class="price-item price--regular">
                                            <span class="price-symbol">$</span>
                                            120.99
                                        </span>
                                    </div>
                                </div>
                                <div class="card-image-list d-flex justify-content-center flex-wrap">
                                    <span class="card-image-list-item">
                                        <img src="image/product1.0_5a6aca6c-94d2-45eb-afc6-ea63a43ec07f.webp" alt="">
                                        <img src="image/product1.1.webp" alt="">
                                    </span>
                                </div>
                                <div class="item-btn">
                                    <button class="hover-btn speical-btn btn-transparent button--icon-arrow">
                                        <span class="text">Choose Options</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="latest-box">
                            <div class="image">
                                <a href="shop-single.php">
                                    <img class="change-image" src="image/product3.0.webp" alt="">
                                    <img class="appared-image" src="image/product3.1.webp" alt="">
                                </a>
                                <div class="cart_wishlist">
                                    <button>
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="content text-center">
                                <h5 class="heading">Jar Cosmetic</h5>
                                <h6 class="sub-heading"><a href="shop-single.php">Brazilian Blowout Smoothing Cream</a></h6>
                                <div class="card-price">
                                    <div class="price_regular">
                                        <span class="price-item price--regular">
                                            <span class="price-symbol">$</span>
                                            103.90
                                        </span>
                                    </div>
                                </div>
                                <div class="card-image-list d-flex justify-content-center flex-wrap">
                                    <span class="card-image-list-item">
                                        <img src="image/product3.0.webp" alt="">
                                        <img src="image/product3.1.webp" alt="">
                                    </span>
                                </div>
                                <div class="item-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button class="hover-btn speical-btn btn-transparent button--icon-arrow">
                                        <span class="text">Choose Options</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="latest-box">
                            <div class="image">
                                <a href="shop-single.php">
                                    <img class="change-image" src="image/product3.0.webp" alt="">
                                    <img class="appared-image" src="image/product3.1.webp" alt="">
                                </a>
                                <div class="cart_wishlist">
                                    <button>
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="content text-center">
                                <h5 class="heading">Jar Cosmetic</h5>
                                <h6 class="sub-heading"><a href="shop-single.php">Brazilian Blowout Smoothing Cream</a></h6>
                                <div class="card-price">
                                    <div class="price_regular">
                                        <span class="price-item price--regular">
                                            <span class="price-symbol">$</span>
                                            103.90
                                        </span>
                                    </div>
                                </div>
                                <div class="card-image-list d-flex justify-content-center flex-wrap">
                                    <span class="card-image-list-item">
                                        <img src="image/product3.0.webp" alt="">
                                        <img src="image/product3.1.webp" alt="">
                                    </span>
                                </div>
                                <div class="item-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button class="hover-btn speical-btn btn-transparent button--icon-arrow">
                                        <span class="text">Choose Options</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>             
            </div>
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>