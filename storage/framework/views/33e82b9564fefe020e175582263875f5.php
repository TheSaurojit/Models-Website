<header id="masthead" class="site-header" role="banner" data-component="siteHeader">


    <div class="site-header__wrapper">
        <div class="site-header__container">
            <div class="site-header__left">

                <button class="menu-toggle" aria-controls="menu-main-menu" aria-expanded="false">
                    <span class="screen-reader-text">Primary Menu</span>
                    <span class="menu-toggle__icon"></span>
                    <span class="menu-toggle__title">Sections</span>
                </button>
                <nav class="site-header__nav" role="navigation">
                    <div class="site-header__nav-inner">
                        <ul id="menu-main-menu" class="header-nav">

                            <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <li id="menu-item-6644443"
                                class="menu-item menu-item-type-taxonomy menu-item-object-section menu-item-6644443 nypost-menu-object-id--417140032">
                                <a href="/category/<?php echo e($cat->category); ?>" data-ga4-event="{"
                                    event_name":"ux_engagement","source_unit":"top="" nav","source_position":1}"=""
                                    id="menu-link-1"><?php echo e(Str::title($cat->category)); ?></a>
                            </li>
                           
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                        </ul>
                    </div>
                </nav>
                <button class="site-header__search-toggle" aria-controls="search-input-header" aria-expanded="false"
                    data-search-header="toggle" data-ga4-event="
                {"
                    event_name":"ux_engagement","source_unit":"top="" nav","source_position":"search"}="" "="">
                <span class=" screen-reader-text">Search</span>
                </button>
               
            </div>

            <div class="site-header__logo">
                <a href="/" data-ga4-event="
                {"
                        event_name":"ux_engagement","source_unit":"top="" nav","source_position":"page="" six"}="" "="">
                <span class=" screen-reader-text">Page Six</span>
                        <svg tabindex="-1" aria-hidden="true" width="220.625" height="57.445"
                            viewBox="0 0 220.625 57.445" fill="#fff">
                        <path
                            d=" M153.098 28.262v2.745c0 1.232.217 2.147.65 2.746.432.6 1.014.9
                    1.746.9.133.032.258.04.375.022.114-.017.24-.04.373-.073.966-.2 1.53-.657
                    1.698-1.374.167-.715.25-1.572.25-2.57
                    0-1.365-.716-2.39-2.147-3.07-1.433-.684-2.996-1.24-4.694-1.674-.366-.1-.732-.19-1.1-.273-.366-.082-.73-.175-1.1-.274-.6-.166-1.165-.324-1.696-.474a9.812
                    9.812 0 01-1.447-.524c-2.896-1.165-4.73-2.797-5.492-4.894a19.92 19.92 0 01-1.2-6.592v-.3c0-3.96
                    1.3-7.032 3.897-9.213 2.597-2.18 6.54-3.17 11.834-2.972 3.362 0 6.274.425 8.738 1.272 2.463.85 4.677
                    1.856 6.64
                    3.02v10.19h-12.582v-2.347c0-1.1-.24-1.88-.724-2.347-.483-.467-1.007-.7-1.573-.7h-.147c-.533
                    0-1.023.185-1.474.55-.448.367-.725.816-.823 1.35a1.56 1.56 0 00-.05.373v.374c0 1.332.556 2.313 1.673
                    2.945a14.496 14.496 0 003.67 1.447c.53.134 1.057.242 1.572.325s.99.175
                    1.424.273c.132.033.265.06.397.075.133.017.25.042.35.074 3.63.866 6.21 2.43 7.74 4.692 1.53 2.266
                    2.296 4.812 2.296 7.64 0 1-.084 2.016-.25 3.047a22.58 22.58 0 01-.75 3.146c-.897 3.06-2.504
                    5.125-4.817 6.19a24.116 24.116 0 01-7.364
                    2.047c-.732.1-1.456.175-2.173.226-.716.05-1.423.092-2.122.125-.732
                    0-1.756-.083-3.07-.25s-2.688-.416-4.12-.75a30.545 30.545 0
                    01-4.743-1.646c-1.498-.665-2.514-1.48-3.046-2.446V28.262h13.378zm35.152-16.128v20.473c0 1 .116
                    1.84.35 2.52.232.685.65 1.025 1.248 1.025v7.438h-14.93V36.5c.632-.266.99-.64
                    1.073-1.123.084-.48.11-1.072.076-1.77V22.77c0-.8-.067-1.38-.2-1.748a2.552 2.552 0 00-.6-.948.798.798
                    0 00-.148-.2 12.571 12.571 0 01-.2-.2v-7.54h13.332zm-12.982-7.09c0-1.564.6-2.755 1.8-3.57A8.275
                    8.275 0 01181.01.05c.166-.03.324-.05.475-.05h.476c1.564 0 3.004.408 4.318 1.225 1.314.814 1.974
                    2.104 1.974 3.868 0 1.767-.674 3.063-2.022 3.896-1.348.83-2.903 1.247-4.668 1.247-1.73
                    0-3.213-.516-4.443-1.548-1.233-1.032-1.85-2.23-1.85-3.598v-.05h-.002zm29.628 7.09v2.895c0 .698.082
                    1.423.25 2.172.166.748.615 1.572 1.348 2.47.865-.896 1.406-1.722
                    1.623-2.47.216-.75.324-1.474.324-2.173v-2.896h12.185v7.09l-.624.524-.673.574c-.233.2-.458.408-.675.624a5.408
                    5.408 0 00-.574.675c-.2.2-.374.4-.523.6-.15.2-.29.4-.425.6l-3.944 4.645 4.295
                    5.893c.333.467.632.874.898
                    1.224.267.35.532.674.8.975.23.232.465.433.698.6.23.167.48.3.75.398v7.04h-13.73v-2.347c0-.766-.06-1.473-.177-2.122a5.949
                    5.949 0 00-.725-1.923c-.2-.3-.417-.6-.65-.898s-.497-.6-.798-.897a7.788 7.788 0
                    00-.6.772c-.168.25-.316.49-.45.726a6.341 6.341 0 00-.748 2.02c-.134.72-.2 1.643-.2
                    2.772v1.896h-11.385V36.5c.565-.166 1.183-.624 1.85-1.373.663-.75 1.478-1.705
                    2.444-2.87l3.545-4.794-2.747-3.545c-.966-1.33-1.863-2.32-2.695-2.972-.832-.648-1.63-1.073-2.396-1.273v-7.54h13.73zM20.073
                    1.57c.432.034.874.068 1.323.1.45.035.89.085 1.323.15 2.795.4 5.35 1.5 7.664 3.296 2.313 1.798 3.47
                    4.562 3.47 8.29v7.04c0 3.96-1.082 6.924-3.246 8.888s-5.41 2.945-9.737
                    2.945l-5.54-.05v1.048c-.034.866-.01 1.557.074 2.072.083.517.457.94 1.124 1.272v7.79H0v-7.84c.865-.3
                    1.356-.808 1.473-1.523.116-.717.158-1.49.125-2.322V13.352c.033-.8-.01-1.498-.125-2.1C1.356 10.66.865
                    10.194 0 9.86V1.57h20.073zm-4.744 9.44v12.184c.23.065.45.107.648.124.2.018.382.024.55.024 1.064 0
                    1.92-.273
                    2.57-.823s.974-1.49.974-2.822v-4.793c0-1.53-.35-2.555-1.048-3.07-.7-.517-1.93-.773-3.695-.773v-.053zm25.365
                    2.87a26.22 26.22 0 014.544-1.224 31.4 31.4 0 012.97-.35c.983-.066 1.94-.1 2.872-.1.4 0 .815.008
                    1.25.023.43.017.864.058 1.297.124 2.596.3 4.976 1.166 7.14 2.597 2.164 1.433 3.246 3.663 3.246
                    6.69v12.533c0 .866.116 1.48.35
                    1.85.232.366.5.682.8.948.1.066.182.134.25.2.065.066.132.134.2.2v7.04H52.627V42.06c-.1.1-.2.175-.3.225s-.2.108-.3.175c-.167.135-.35.268-.55.4-.2.133-.4.282-.6.448-.698.467-1.547.897-2.545
                    1.3-1 .397-2.314.598-3.944.598-2.365 0-4.48-.683-6.343-2.047-1.864-1.364-2.896-3.81-3.096-7.34
                    0-2.196.633-3.978 1.898-5.342 1.265-1.365 2.646-2.363 4.145-2.996.366-.166.74-.31
                    1.124-.425.382-.116.74-.207
                    1.073-.274l8.638-2.796V23.187c.033-.832-.008-1.58-.125-2.247-.117-.665-.59-1.08-1.423-1.248a.428.428
                    0 01-.125-.024.397.397 0 00-.125-.024h-.25c-.8 0-1.373.417-1.723 1.25s-.524 1.88-.524 3.145L36.5
                    23.99V16.1a17.56 17.56 0 014.194-2.22zM51.83 34.976V31.43c0
                    .033-.243.1-.725.2-.483.1-1.024.283-1.623.55-.6.232-1.14.55-1.623.948-.484.4-.725.898-.725 1.497 0
                    .733.15 1.25.45 1.548.3.3.665.468 1.098.5.133 0
                    .266-.008.4-.024.132-.02.28-.06.448-.126.334-.1.675-.24
                    1.025-.424.35-.184.64-.392.874-.624.065-.066.14-.143.224-.226s.142-.158.175-.226v-.048zm15.027
                    1.198V23.592c0-3.13.532-5.74 1.598-7.84 1.065-2.097 3.562-3.146 7.49-3.146.6 0 1.206.01
                    1.822.023a8.965 8.965 0 011.922.274c.63.133 1.255.357 1.872.674.616.316 1.223.773 1.822
                    1.373v-1.996h13.382v7.09c-.6.435-1.016.94-1.248 1.523-.233.583-.35 1.272-.35 2.072v21.97c0
                    5.092-1.124 8.28-3.37 9.56-2.248 1.28-5.436 2.022-9.563 2.224-.832.065-1.73.065-2.696 0a31.398
                    31.398 0 01-2.947-.35 29.102 29.102 0 01-5.268-1.474c-1.68-.65-2.904-1.357-3.67-2.122v-7.49H79.09c0
                    1 .083 1.84.25 2.52.167.683.732 1.023 1.698 1.023 1.23 0 1.94-.282
                    2.122-.848.183-.566.258-1.332.225-2.297V42.86c-.033.067-.067.108-.1.125a.41.41 0
                    00-.1.074c-.766.53-1.73 1.022-2.896 1.473-1.167.45-2.498.674-3.996.674-3.13
                    0-5.484-.814-7.065-2.445-1.582-1.632-2.373-3.812-2.373-6.54v-.048zm16.527-.4v-14.18a7.85 7.85 0
                    00-1-.323 3.791 3.791 0 00-.897-.124c-.7 0-1.273.26-1.723.773-.45.517-.674 1.34-.674 2.472v7.04c0
                    1.665.15 2.88.45 3.646.3.766.88 1.148 1.747 1.148.266 0 .574-.033.923-.102.35-.065.74-.166
                    1.173-.3v-.05zm15.428-1.198V22.792c0-4.294 1.23-7.13 3.695-8.513 2.463-1.382 5.958-2.073
                    10.486-2.073 3.562 0 6.75.624 9.562 1.872s4.22 3.637 4.22 7.164v9.787h-16.128v3.147c0 1.166.208
                    1.997.624 2.497.417.5.876.767 1.374.8h.149c.432-.033.84-.24
                    1.225-.624.38-.384.572-.856.572-1.424v-.2c-.034-.034-.05-.067-.05-.102v-2.497h12.232v8.24a2.876
                    2.876 0 01-.448.448c-.167.134-.35.267-.55.398-1.133.732-2.696 1.415-4.693 2.048s-4.094 1.065-6.29
                    1.3c-.435.065-.867.106-1.3.125-.432.016-.865.023-1.297.023-4.328-.2-7.64-1.08-9.938-2.646-2.297-1.564-3.445-4.21-3.445-7.94v-.046zm11.834-10.585h4.693c0-1.364-.15-2.42-.45-3.17-.3-.75-.932-1.124-1.896-1.124-.966
                    0-1.6.375-1.897 1.124s-.45 1.822-.45 3.22v-.05z">
                    </path>
                    </svg>
                </a>
            </div>

            <div class="site-header__right">
               <button style="padding: 10px ; border : 2px solid white ; background-color : black ; color : white ; border-radius : 10px ; cursor : pointer" id="subscribe-button">Subscribe</button>
            </div>
        </div>
        <div id="membership-dropdown-wrapper"></div>
        <div class="site-header__bar"></div>
    </div>

    
    <div id="custom-modal" class="custom-modal" style="display: none;">
        <div class="modal-content">
          <span class="close" style="font-size: 40px">&times;</span>
          <form id="email-form">
            <h2>Subscribe to our Newsletter</h2>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required />
            <button type="submit" style="padding: 10px">Submit</button>
          </form>
          <div id="thank-you-message" style="display: none;">
            <h2>Thank you for subscribing!</h2>

            
          </div>
        </div>
      </div>

      <style>
        .custom-modal {
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        }

        .modal-content {
            z-index: 99999999999;

        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        height:300px ;
        width: 300px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            position: relative;
            top: -20px;
            right: -120px;
            font-size: 18px;
            cursor: pointer;
            color: #aaa;
        }
   

        #thank-you-message {
        margin-top: 10px;
        font-size: 16px;
        color: rgb(0, 0, 0);
        }
      </style>

      <script>
        // Get elements
        const subscribeButton = document.getElementById('subscribe-button');
        const modal = document.getElementById('custom-modal');
        const closeModal = document.querySelector('.close');
        const emailForm = document.getElementById('email-form');
        const thankYouMessage = document.getElementById('thank-you-message');

        // Show modal when the subscribe button is clicked
        subscribeButton.addEventListener('click', () => {
        modal.style.display = 'flex';
        });

        // Close modal when the close button is clicked
        closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        });

        // Handle form submission
        emailForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevent form submission
        emailForm.style.display = 'none'; // Hide the form
        thankYouMessage.style.display = 'block'; // Show thank-you message
        setTimeout(() => {
            modal.style.display = 'none'; // Hide the modal after a delay
        }, 2000); // Optional: Auto-close the modal after 2 seconds
        });

        // Optional: Close modal when clicking outside the modal content
        window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
        });

      </script>

    <div class="search search--header" data-search-header="search" data-component="searchForm">
        <form class="search__form" >
            <div class="search__inner" role="search">
                <label for="search-input-header" class="screen-reader-text">
                    Search </label>
                <input type="search" name="s" class="search__input" id="search-input-header"
                    placeholder="Type to Search" tabindex="-1" data-search-header="input">
            </div>
            <button class="search__submit" type="submit" tabindex="-1" aria-label="Click to Search"
                data-search-header="submit">
                <span class="search__submit-text">Search</span>
            </button>
        </form>
    </div>


</header>
<?php /**PATH C:\Users\DESKTOP\Desktop\FHM laravel blog\resources\views/layouts/header.blade.php ENDPATH**/ ?>