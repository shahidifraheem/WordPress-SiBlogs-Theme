jQuery(function ($) {
    /**
     * For desktop browsers
     */
    $('.mega-menu-list .has-grid').mouseenter(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $('.mega-menu-list .has-grid').mouseleave(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > $('#announcement').height()) {
            $('#si-header').addClass("header-fixed");
        } else {
            $('#si-header').removeClass("header-fixed");
        }
    })
    if ($(window).scrollTop() > $('#announcement').height()) {
        $('#si-header').addClass("header-fixed");
    } else {
        $('#si-header').removeClass("header-fixed");
    }

    /**
     * For mobile devices
     */
    $('.mega-menu-list .has-grid').on('touchstart', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $('.mega-menu-list .has-grid').on('touchend', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

    /**
     * Sidebar 
     */
    $('#sidebar-main-menu .menu-item-has-children a').click(function (e) {
        e.preventDefault();
        $(this).parent().siblings().removeClass('active');
        $(this).parent().siblings().find('.sub-menu').slideUp();
        $(this).parent().toggleClass('active');
        $(this).parent().find(' > .sub-menu').slideToggle();
    })

    $('.toggle-sidebar').click(function (e) {
        $('#si-sidebar, #sidebar-overlay').addClass('active');
    })
    $('.close-sidebar, #sidebar-overlay').click(function (e) {
        $('#si-sidebar, #sidebar-overlay').removeClass('active');
    })

    /**
     * Search form
     * 
     */
    $('.si-search button').click(function (e) {
        e.preventDefault()
        $(this).prev().focus()
        if ($(this).parents('.si-search').hasClass('active') && $(this).prev().val() != "") {
            $(this).parent().submit()
            setTimeout(() => {
                $(this).parents('.si-search').addClass('active')
            }, 0);
        }
        $(this).parents('.si-search').toggleClass('active')
    })
    $('.si-search').click(function (e) {
        e.stopPropagation()
    })
    $(window).click(() => {
        $('.si-search').removeClass('active')
    })

    /**
     * Favourite Posts
     * 
     */
    const date = new Date();
    const nextYear = date.getFullYear() + 1;

    function getCookie(name) {
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].trim();
            if (cookie.startsWith(name + '=')) {
                return cookie.substring(name.length + 1);
            }
        }
    }

    let fav_post_id = getCookie("fav_post_" + $("#favourite-btn").attr('data-id'));
    if (fav_post_id == $("#favourite-btn").attr('data-id')) {
        $("#favourite-btn").addClass("active");
    } else {
        $("#favourite-btn").removeClass("active");
    }

    $("#favourite-btn svg").click(function () {
        fav_post_id = getCookie("fav_post_" + $("#favourite-btn").attr('data-id'));
        if (fav_post_id == $(this).parent().attr('data-id')) {
            $(this).parent().removeClass("active");
            document.cookie = "fav_post_" + $(this).parent().attr('data-id') + "=" + $(this).parent().attr('data-id') + "; expires=Thu, 01 Jan 2000 00:00:00 UTC; path=/;";
        } else {
            $(this).parent().addClass("active");
            document.cookie = "fav_post_" + $(this).parent().attr('data-id') + "=" + $(this).parent().attr('data-id') + "; expires=Thu, 01 Jan " + nextYear + " 12:00:00 UTC; path=/;";
        }
    })

    /**
     * Share Link 
     */
    const shareBtn = $(".share");

    const shareData = {
        title: $(shareBtn).attr("data-title"),
        text: $(shareBtn).attr("data-description") ? $(shareBtn).attr("data-description") : "",
        url: $(shareBtn).attr("data-url"),
    };
    if ($(shareData)) {
        $(shareBtn).click(async () => {
            try {
                await navigator.share(shareData);
            } catch (err) {
                alert("Link not shared!");
            }
        });
    }

    // Plugin share button
    if (screen.width < 768) {
        $(".simplesocialbuttons").addClass("ssb-hide-float-buttons")
    }

    /**
     * Post password form placholder
     */
    $(".post-password-form input[type='password']").attr('placeholder', 'Enter post password to view full content');

})