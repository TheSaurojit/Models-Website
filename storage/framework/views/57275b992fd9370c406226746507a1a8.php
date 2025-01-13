<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="645093916001-3g7rmnudp0pilfqs683iremnlhs2bpha.apps.googleusercontent.com">
    <meta name="google-signin-client_id"
        content="645093916001-3g7rmnudp0pilfqs683iremnlhs2bpha.apps.googleusercontent.com">
    <meta name="facebook-domain-verification" content="8vm6f9p4a580077gr444eoj9ggpqsm">
    <script id="facebook-jssdk" src="/js/sdk.js"></script>
    <script type="text/javascript" async="" src="/js/chartbeat.js"></script>
    <script async="" src="/js/fbevents.js"></script>
    <script async="" src="/js/gtm.js"></script>
    <script async="" src="/js/gtm_1.js"></script>
    <script async="" type="text/javascript" src="/js/gpt.js"></script>
    <script>
        var counter = 1;
        // Load GPT asynchronously
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement("script");
            gads.async = true;
            gads.type = "text/javascript";
            gads.onload = function() {
                console.log('GAM LOADED');
            };
            var useSSL = "https:" == document.location.protocol;
            gads.src = (useSSL ? "https:" : "http:") +
                "//www.googletagservices.com/tag/js/gpt.js";
            var node = document.getElementsByTagName("script")[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-70767830-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-70767830-1');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MTMZ547');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PZCXJSR');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- This site is optimized with the Yoast SEO Premium plugin v18.5 (Yoast SEO v20.4) - https://yoast.com/wordpress/plugins/seo/ -->


    <title><?php echo e($category); ?> - Grazia Japan</title>

    <?php echo $__env->make('pages.layouts.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/graziamagazine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="/css/style.min.css" type="text/css" media="all">
    <style id="elasticpress-related-posts-style-inline-css" type="text/css">
        .editor-styles-wrapper .wp-block-elasticpress-related-posts ul,
        .wp-block-elasticpress-related-posts ul {
            list-style-type: none;
            padding: 0
        }

        .editor-styles-wrapper .wp-block-elasticpress-related-posts ul li a>div {
            display: inline
        }
    </style>
    <link rel="stylesheet" id="bb-tcs-editor-style-shared-css" href="/css/editor-style-shared.css" type="text/css"
        media="all">
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link crossorigin="anonymous" rel="stylesheet" id="google_fonts-css"
        href="//fonts.googleapis.com/css?family=EB+Garamond&subset=latin,latin-ext" type="text/css" media="all">
    <link rel="stylesheet" id="grazia-style-css" href="/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="mailchimp-css" href="/css/classic-10_7.css" type="text/css" media="all">
    <link rel="stylesheet" id="mCustomScrollbar-css" href="/css/jquery.mCustomScrollbar.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="grazia-main-css" href="/css/main.css" type="text/css" media="all">
    <link rel="stylesheet" id="grazia-icon-homepage-css" href="/css/icon-homepage.css" type="text/css" media="all">
    <link rel="stylesheet" id="grazia-editor-css-css" href="/css/editor.css" type="text/css" media="all">
    <link rel="stylesheet" id="elasticpress-facets-css" href="/css/facets-styles.css" type="text/css" media="all">
    <script type="text/javascript" src="/js/jwplayer.js" id="jwppp-library-js"></script>
    <script type="text/javascript" id="jwppp-licence-js-extra">
        /* <![CDATA[ */
        var data = {
            "licence": "Ib75fF\/rlxNmXREKJfEawwcS9NyDHA1UZkX9RSPifMVNyDJu"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/js/jwppp-licence.js" id="jwppp-licence-js"></script>
    <script src="/js/jquery.min.js" defer="defer" type="text/javascript"></script>
    <script src="/js/jquery-migrate.min.js" defer="defer" type="text/javascript"></script>
    <link rel="https://api.w.org/" href="https://graziamagazine.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://graziamagazine.com/wp-json/wp/v2/categories/8">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://graziamagazine.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <!-- Stream WordPress user activity plugin v3.9.2 -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 1322500474846818);
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1322500474846818&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <style type="text/css" id="wp-custom-css">
        .fs-images .item-wrap {
            opacity: 1;
        }

        .top-container .main-ad {
            margin: 0;
            padding: 0;
        }

        div[id*="billboard"].main-ad,
        div[id*="page_breaker"],
        div[id*="grazia_page_breaker"] {
            margin-top: 30px;
        }

        .jwplayer.jw-state-buffering .jw-display-controls .jw-display-icon-display .jw-icon .jw-svg-icon-buffer {
            display: none;
        }

        div[data-isempty="true"] {
            display: block;
        }
    </style>
    <script type="text/javascript">
        var domain = 'graziamagazine.com';
        var chartbeat_author = '';
        var chartbeat_section = '';
        (function() {
            /** CONFIGURATION START **/
            var _sf_async_config = window._sf_async_config = (window._sf_async_config || {});
            _sf_async_config.uid = 66224;
            _sf_async_config.domain = domain;
            _sf_async_config.flickerControl = false;
            _sf_async_config.useCanonical = true;
            _sf_async_config.useCanonicalDomain = true;
            _sf_async_config.sections = chartbeat_section;
            _sf_async_config.authors = chartbeat_author;
            /** CONFIGURATION END **/
            function loadChartbeat() {
                var e = document.createElement('script');
                var n = document.getElementsByTagName('script')[0];
                e.type = 'text/javascript';
                e.async = true;
                e.src = 'https://static.chartbeat.com/js/chartbeat.js';
                n.parentNode.insertBefore(e, n);
            }
            loadChartbeat();
        })();
    </script>
    <script async="" src="/js/chartbeat_mab.js"></script>
    <link rel="icon" href="favicon.ico">

    <script src="/js/wp-emoji-release.min.js" defer=""></script>
</head>

<body class="archive category category-fashion-shoots category-8 pushdown-ads">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTMZ547" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZCXJSR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="wrapper">

        <?php echo $__env->make('pages.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <a href="#" class="nav-opener mobile-fixed-menu" data-once="ff7f995604"><span>opener</span></a>
        <main id="main">
            <div class="test-wrap" data-page="200">
                <section class="banner" style="background-image:url('/images/Shoots.jpg');">
                    <div class="banner-text">
                        <h1><?php echo e($category); ?></h1>
                    </div>
                </section>
                <div id="grazia_billboard-0" class="dfp-ads center main-ad" data-is-ad="true"></div>
                <div class="articles-block fashion-shoots" data-page-number="1" data-page-size="4"
                    data-page-category="8">
                    <div class="listing-container">
                        <div class="container">
                            <div class="news-articles ">
                                <div class="main-content">
                                    <div class="articles-list">
                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php

                                                $url = route('blog', ['slug' => $post->slug]);

                                            ?>

                                            <div class="listing-item three-up">
                                                <div class="img-wrap">
                                                    <a href="<?php echo e($url); ?>"
                                                        style="background-image: url('<?php echo e($post->thumbnail); ?>'); display: block; width: 100%; background-size: cover; background-position: top;">
                                                    </a>

                                                </div>
                                                <div class="text">
                                                    <h2><a href="<?php echo e($url); ?>">
                                                            <?php echo e($post->title); ?>

                                                        </a></h2>
                                                    <p>
                                                        <?php echo e($post->description); ?>


                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                            <div id="grazia_page_breaker-0" class="dfp-ads center main-ad" data-is-ad="true"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main><!-- .Main -->

        <?php echo $__env->make('pages.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div><!-- #wrapper -->
    <script data-cfasync="false" src="/js/email-decode.min.js"></script>
    <script type="text/javascript">
        var ScheduledCompaignDeactivatedItems = {
            "partners": [],
            "dfp_pos": {
                "mobile": [],
                "desktop": []
            }
        };
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '754692524661821',
                cookie: true,
                xfbml: true,
                version: 'v2.10'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript" id="grazia-main-js-extra">
        /* <![CDATA[ */
        var graziaDfpAdsData = {
            "billboard": {
                "adUnit": "\/21806929303\/grazia\/billboard",
                "sizes": [
                    [320, 50],
                    [320, 450],
                    [970, 250],
                    [970, 500],
                    [300, 250],
                    [320, 150],
                    [600, 450],
                    [640, 360],
                    [700, 400],
                    [889, 500],
                    [1000, 450],
                    [1280, 600],
                    [1920, 450],
                    [1280, 450]
                ]
            },
            "page_breaker": {
                "adUnit": "\/21806929303\/grazia\/page_breaker",
                "sizes": [
                    [300, 250],
                    [320, 50],
                    [320, 150],
                    [320, 450],
                    [640, 360],
                    [728, 90],
                    [970, 250]
                ]
            },
            "push_down": {
                "adUnit": "\/21806929303\/grazia\/pushdown_ads",
                "sizes": [
                    [728, 90],
                    [320, 50],
                    [320, 150]
                ]
            },
            "sidebar": {
                "adUnit": "\/21806929303\/grazia\/sidebar",
                "sizes": [
                    [300, 600],
                    [300, 900],
                    [320, 260],
                    [320, 450]
                ]
            },
            "targetingData": {
                "contentTitle": "Fashion Shoots",
                "safetyKeywords": "",
                "author": "",
                "metaKeywords": "",
                "contentType": "Listing Page",
                "contentSite": "graziamagazine.com",
                "category": ["Fashion Shoots"],
                "customAdString": "",
                "postID": null,
                "userRoles": [],
                "primarycat": "fashion-shoots"
            }
        };
        var gaPromoTilesData = {
            "current_page": "Fashion Shoots",
            "page_title": "Fashion Shoots"
        };
        var grazia_object = {
            "google_client_id": "645093916001-3g7rmnudp0pilfqs683iremnlhs2bpha.apps.googleusercontent.com",
            "search_page": "https:\/\/graziamagazine.com\/search\/",
            "ajax": "https:\/\/graziamagazine.com\/",
            "ajaxurl": "https:\/\/graziamagazine.com\/wp-admin\/admin-ajax.php",
            "is_category": "1",
            "is_series": "",
            "is_article_detail": "",
            "is_search": "",
            "is_store_guide": "",
            "is_lookbook_finder": "",
            "is_runway_finder": "",
            "is_fashion_finder": "",
            "dfp_pushdown_autohide_time": "6000"
        };
        /* ]]> */
    </script>
    <script src="/js/main.bundle.js" defer="defer" type="text/javascript"></script>
    <script type="text/javascript" src="/js/header.js" id="grazia-header-js"></script>
    <script src="/js/underscore.min.js" defer="defer" type="text/javascript"></script>
    <script src="/js/next-article.js" defer="defer" type="text/javascript"></script>
    <script src="/js/dfp-ads.js" defer="defer" type="text/javascript"></script>



</body>

</html><!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 236/363 objects using Memcached
Database Caching 1/37 queries in 0.027 seconds using Memcached

Served from: graziamagazine.reworldmediafactory.com @ 2025-01-04 10:36:29 by W3 Total Cache
-->
<?php /**PATH C:\Users\DESKTOP\Desktop\Grazia laravel blog\resources\views/pages/category.blade.php ENDPATH**/ ?>