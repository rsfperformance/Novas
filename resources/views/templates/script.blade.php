<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/main.js"></script>
<script>
    //__PRELOADER___

    let preloader    = $('.preloader'),
        imagesCount  = $('img').length,
        dBody        = $('body'),
        percent      = 100 / imagesCount,
        progress     = 0,
        imgSum       = $('img').length,
        loadedImg    = 0;


    for (let i = 0; i < imagesCount; i++) {
        let img_copy        = new Image();
        img_copy.src        = document.images[i].src;
        img_copy.onload     = img_load;
        img_copy.onerror    = img_load;
    }

    function img_load () {
        progress += percent;
        loadedImg++;
        $('.preloader__loading').css('height', `${progress}%`)
        $('.preloader__percent span').text(progress.toFixed(0))
        if (progress >= 100 || loadedImg == imagesCount) {
            preloader.delay('300').fadeOut('600');
            dBody.removeClass('overflowH')
        }
    }
</script>


