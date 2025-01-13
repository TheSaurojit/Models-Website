<div class="layout__item layout__item--sidebar">
    <div class="layout__inner">
        <aside class="section__sidebar">
           
         
      
            <div
                class="widget-wrapper d-none d-block-lg widget-wrapper--sticky-lg widget_nypost_trending_widget" >
                <div class="widget widget--border widget--trending-now">
                    <h4 class="subsection-heading subsection-heading--underline"> Trending
                        Now <span class="subsection-heading__sub">
                            on PageSix.com </span>
                    </h4>
                    <ul>
                        <?php $__currentLoopData = $randomPosts->slice(3,5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															
                        <?php
                            $url = route('blog',['slug'=>$post->slug]) ;
                        ?>

                        <li
                            class="story story--list story--i-flex-sm story--i-flex-none-lg">
                            <div class="story__meta story__image">
                                <a href="<?php echo e($url); ?>"
                                    class="story__link"
                                    data-ga4-event="{&quot;event_name&quot;:&quot;ux_engagement&quot;,&quot;source_unit&quot;:&quot;Trending Now on PageSix.com&quot;,&quot;source_position&quot;:1}">
                                    <img width="260" height="174"
                                        src="<?php echo e($post->thumbnail); ?>"
                                        style="aspect-ratio:4/3 ; object-fit : cover"
                                        class="attachment-nyp_sports_widget_v2 size-nyp_sports_widget_v2"
                                        alt="Sara Haines walks off &#039;The View&#039; after Whoopi Goldberg admits she likes &#039;to be eaten from time to time&#039;"
                                        decoding="async" loading="lazy"
                                       
                                        sizes="(max-width: 260px) 100vw, 260px" /> </a>
                               
                            </div>

                            <div class="story__thumbnail-text">
                                <h3 class="story__headline headline--xxs">
                                    <a href="<?php echo e($url); ?>"
                                        data-ga4-event="{&quot;event_name&quot;:&quot;ux_engagement&quot;,&quot;source_unit&quot;:&quot;Trending Now on PageSix.com&quot;,&quot;source_position&quot;:1}">
                                       <?php echo e($post->title); ?>

                                       </a>
                                </h3>
                            </div>
                        </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                    </ul>
                </div>
            </div>
          
        </aside>
    </div>
</div><?php /**PATH C:\Users\DESKTOP\Desktop\FHM laravel blog\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>