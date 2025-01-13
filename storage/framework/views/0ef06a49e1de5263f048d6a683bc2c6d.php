<footer id="footer">
    <div class="footer-top">
        <div class="footer-top-nav hide-mobile">
            <ul id="menu-footer-top-menu" class="menu">
                
                <li id="menu-item-140626"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140626"><a
                        href="/cdn-cgi/l/email-protection#cea6aba2a2a18ea9bcafb4a7afe0ada1a3e0afbb">Contact</a>
                </li>
                
            </ul>
        </div>
        <div class="footer-network">
            <ul>
                <li>
                    <a target="_blank" href="https://www.instagram.com/grazia/">
                        <i class="icon icon-instagram"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/grazia_au">
                        <i class="icon icon-twitter"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.facebook.com/Graziamagazine/">
                        <i class="icon icon-facebook"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank"
                        href="/cdn-cgi/l/email-protection#b2dad7dededdf2d5c0d3c8dbd39cd1dddf9cd3c7">
                        <i class="icon icon-email"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="footer-nav">
            <div id="nav_menu-2" class="footer-nav-wrap widget_nav_menu"><strong
                    class="title">Grazia</strong>
                <div class="menu-header-menu-container">
                    <ul id="menu-header-menu-1" class="menu">
                
                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                            $title = Str::title($cat->category);

                            $url = route('category', ['category' => $cat->category]);
                        ?>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-collections menu-item-195083">
                            <a href="<?php echo e($url); ?>"><?php echo e($title); ?></a></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="footer-logo">
            <a href="/">
                <img src="/images/logos/logo.png"> </a>
        </div>

        <div class="footer-bottom">
            <div class="footer-text">
                <p>Grace Publishing Pty Ltd.</p>
                <p>© All rights reserved.</p>
                <p></p>
            </div>
        </div>
    </div>
</footer><!-- #Footer --><?php /**PATH C:\Users\DESKTOP\Desktop\Grazia laravel blog\resources\views/pages/layouts/footer.blade.php ENDPATH**/ ?>