<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  </head>
  <title>About Us</title>
  <body>

    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="max-w-4xl mx-auto px-4 py-12 md:py-20">
        <!-- Hero Section -->
        <div class="text-center mt-20">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Welcome to Models Realm</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Where amazing talent meets groundbreaking opportunities.</p>
        </div>

        <!-- Main Content -->
        <div class="space-y-12 text-gray-700">
            <!-- About Us Section -->
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">Our Story</h2>
                <p class="text-lg leading-relaxed mb-6">
                    Hey there! We're Models Realm, and we're not your typical talent agency. Think of us as your partners in making it big in the fashion and entertainment world. We know the ins and outs of this industry like the back of our hand, and we're here to help you navigate it with style.
                </p>
                <p class="text-lg leading-relaxed">
                    We've built amazing relationships with the biggest names in fashion, beauty, and entertainment, and we use these connections to help our talents shine. Whether you're just starting out or you're already making waves, we've got your back.
                </p>
            </div>

            <!-- Mission Section -->
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">What Drives Us</h2>
                <p class="text-lg leading-relaxed">
                    We're passionate about telling your unique story. In today's fast-paced world, standing out isn't just about looking good – it's about connecting with people in meaningful ways. That's where we come in. We help you find your voice, build your brand, and create genuine connections with your audience.
                </p>
            </div>

            <!-- Services Section -->
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-semibold mb-8">What We Bring to the Table</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-3">Media Magic</h3>
                            <p class="text-gray-600">We'll get your name out there in all the right places – from glossy magazines to trending social media platforms.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3">Brand Building</h3>
                            <p class="text-gray-600">Together, we'll craft your unique story and make sure it resonates with the right audience.</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-3">Social Media Success</h3>
                            <p class="text-gray-600">We'll help you build a killer online presence that gets people talking and keeps them coming back for more.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3">Event Excellence</h3>
                            <p class="text-gray-600">From intimate gatherings to grand galas, we'll make sure you're seen at the right events with the right people.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Us Section -->
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">Why People Love Working With Us</h2>
                <p class="text-lg leading-relaxed mb-6">
                    Our team isn't just a bunch of industry pros – we're dreamers, doers, and go-getters who love what we do. We combine creative thinking with real-world data to make sure every move we make counts. Plus, we're pretty fun to work with (if we do say so ourselves).
                </p>
                <p class="text-lg leading-relaxed">
                    Whether you're just stepping into the spotlight or you're ready to take your career to new heights, we're here to help you make it happen. Let's create something amazing together.
                </p>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">Ready to Start Your Journey?</h2>
                <button class="bg-blue-600 text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-blue-700 transition-colors">
                    Get in Touch
                </button>
            </div>
        </div>
    </div>

    <?php echo $__env->make('components.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/about.blade.php ENDPATH**/ ?>