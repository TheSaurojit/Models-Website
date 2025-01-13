<header id="header" class="changes-class">

    <div class="top-container">
        <div class="header-ad-container">
            <div class="manual_spacer">
                <div class="item float use_manual">
                    <div id="grazia_pushdown_ads-0" class="dfp-ads center main-ad" data-is-ad="true"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap">
        <div class="search-form-block">
            <a href="#" class="search-btn">Search</a>
            <div class="form-wrap">
                <form class="search-form" action="/search">
                    <input data-auto-nonce="b71e7ff9fb" id="search" type="search"
                        placeholder="What are you looking for?" name="search" required="">
                    <input type="submit" id="submit">
                </form>
                <a href="#" class="btn-close"><span>X</span></a>
            </div>
        </div>

        <div class="logo">
            <a href="/">
                <img src="/images/logo-2.svg" class="attachment-full size-full" alt="" decoding="async"> </a>
        </div>
        <nav id="nav">
            <div class="nav main-nav-menu left">
                <ul id="menu-header-menu" class="menu">

                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                            $title = Str::title($cat->category);

                            $url = route('category', ['category' => $cat->category]);
                        ?>

                        <li id="menu-item-195083"
                            class="menu-item menu-item-type-post_type menu-item-object-collections menu-item-195083">
                            <a href="<?php echo e($url); ?>"><?php echo e($title); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>

            <div class="nav right">
                <ul id="menu-header-menu-right" class="menu">
                    <li id="menu-item-140620"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140620"><a
                            href="/#grazia-subscribe-form">Subscribe Now</a></li>
                </ul> <span class="geo-targeting hide-mobile">
                    EN <img src="/images/geo-targeting-logo.jpg">
                </span>
            </div>
        </nav>
        <span class="geo-targeting mobile">
            EN <img src="/images/geo-targeting-logo.jpg">
        </span>
        
        <a href="#" class="nav-opener" data-once="5307eeaf65"><span>opener</span></a>
        <strong class="mobile-title">channels</strong>
        <div class="sub-navigation" bis_skin_checked="1" style="display: none;">
            <div class="sub-nav-inner" bis_skin_checked="1">
                <div class="sub-navigation-wrap hide-mobile" bis_skin_checked="1">
                    <div class="sub-nav-wrap" bis_skin_checked="1">
                        

                        <div class="sub-nav">

                            <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
    
                                $title = Str::title($cat->category);
    
                                $url = route('category', ['category' => $cat->category]);
                            ?>

                            <li class=" menu-item-120304 <?php echo e($loop->index == 0 ? "active" : ""); ?> ">
                                <a href="<?php echo e($url); ?>" data-id="menu-item-12030<?php echo e($loop->index + 3); ?>">
                                    <?php echo e($title); ?> </a>
                            </li>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="nav-content" bis_skin_checked="1">

                            <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
    
                                $title = Str::title($cat->category);
    
                                $url = route('category', ['category' => $cat->category]);
                            ?>

                            <div id="menu-item-12030<?php echo e($loop->index + 3); ?>" class="tab-content <?php echo e($loop->index == 0 ? "active" : ""); ?>  " bis_skin_checked="1">
                                <ul>
                                    <?php

                                        //$posts = \App\Models\Posts::where('category_id', $cat->id)->latest()->limit(3)->get();

                                        $posts = $cat->posts->slice(0,3) ;

                                    ?>


                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                
                                    <?php
                                        
                                        $url = route('blog',['slug'=>$post->slug])

                                    ?>
                                    
                                    <li>
                                        <div class="img-wrap" bis_skin_checked="1">
                                            <a
                                                href="<?php echo e($url); ?>">
                                                <img width="830" height="470"
                                                    src="<?php echo e($post->thumbnail); ?>"
                                                    class="attachment-grazia-830x470 size-grazia-830x470 wp-post-image"
                                                    alt="" decoding="async" loading="lazy"
                                                    style="
                                                    aspect-ratio : 4/3 ;
                                                    object-position : top ;
                                                    object-fit : cover ;
                                                    "
                                                    > </a>
                                        </div>
                                        <div class="text" bis_skin_checked="1">
                                            <a
                                                href="<?php echo e($url); ?>">
                                                <strong> <?php echo e($post->title); ?> </strong>
                                            </a>
                                        </div>
                                    </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                </ul>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                        </div>
                    </div>
                    

                    <div class="nav-social" bis_skin_checked="1">
                        <div class="social-networks" bis_skin_checked="1">
                            <ul>
                                <li> <a target="_blank" href="https://twitter.com/grazia_au" bis_skin_checked="1"> <i
                                            class="icon icon-twitter"></i> </a> </li>
                                <li> <a target="_blank" href="https://www.instagram.com/grazia/"
                                        bis_skin_checked="1"> <i class="icon icon-instagram"></i> </a> </li>
                                <li> <a target="_blank" href="https://www.facebook.com/Graziamagazine/"
                                        bis_skin_checked="1"> <i class="icon icon-facebook"></i> </a> </li>
                            </ul>
                        </div>

                        <div class="footer-links" bis_skin_checked="1">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="geo-targeting-overlay">
            <div class="overlay-content">
                <div class="overlay-logo hide-mobile">
                    <a href="/">
                        <img src="/images/logo-2.svg" class="attachment-full size-full" alt=""
                            decoding="async"> </a>
                </div>
                <span class="choose-location">Choose your location</span>
                <div class="location-wrapper">
                    <table class="location-table hide-mobile" border="0">
                        <tbody>
                            <tr>
                                <th>English</th>
                                <th>español</th>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <a href="#">Australia</a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="#">España</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <a href="#">International</a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="#">méxico y
                                            latinoamérica</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <a href="#">Middle East</a>
                                    </div>
                                </td>
                                <td>
                                    <!-- Empty table data to match css style -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <a href="#">USA</a>
                                    </div>
                                </td>
                                <td>
                                    <!-- Empty table data to match css style -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="location-mobile-div mobile">
                        <h1>English</h1>
                        <div>
                            <a href="#">Australia</a>
                        </div>
                        <div>
                            <a href="#">International</a>
                        </div>
                        <div>
                            <a href="#">Middle East</a>
                        </div>
                        <div>
                            <a href="#">USA</a>
                        </div>
                        <h1>español</h1>
                        <div>
                            <a href="#">España</a>
                        </div>
                        <div>
                            <a href="#">méxico y latinoamérica</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="geo-overlay-left-text-wrapper hide-mobile">
                <img src="/images/grazia-text.png">
            </div>
            <div class="geo-overlay-right-text-wrapper hide-mobile">
                <img src="/images/grazia-text-right.png">
            </div>
        </div>

    </div>
    <div class="mobile-nav">
        <ul class="nav-list">
            <li class=" menu-item-120304 active ">
                <a href="/category/news"
                    style="background-image:url('/images/mobilebanner-newsfeed.jpg');">
                    <div class="text">
                        <p> News  </p>
                    </div>
                </a>
            </li>
            <li class=" menu-item-120303">
                <a href="/category/luxury & lifestyle"
                    style="background-image:url('/images/mobilebanner-fashionshoots.jpg');">
                    <div class="text">
                        <p> Luxury & Lifestyle </p>
                    </div>
                </a>
            </li>
            <li class=" menu-item-120305">
                <a href="/category/entertainment"
                    style="background-image:url('/images/mobilebanner-celeb.jpg');">
                    <div class="text">
                        <p> Entertainment </p>
                    </div>
                </a>
            </li>
            <li class=" menu-item-120306">
                <a href="/category/fashion"
                    style="background-image:url('/images/mobilebanner-fashion.jpg');">
                    <div class="text">
                        <p> Fashion </p>
                    </div>
                </a>
            </li>
            <li class=" menu-item-120307">
                <a href="/category/beauty"
                    style="background-image:url('/images/mobilebanner-beauty.jpg');">
                    <div class="text">
                        <p> Beauty </p>
                    </div>
                </a>
            </li>
            
        </ul>
        
    </div>
</header><!-- #header -->
<?php /**PATH C:\Users\DESKTOP\Desktop\Grazia laravel blog\resources\views/pages/layouts/header.blade.php ENDPATH**/ ?>