
</div>
</div>
</div>

<!-- Sidebar -->
<div class="sidebar sidebar-right sidebar-animate">
    <div class="sidebar-icon sidebar-icon-right">
        <a href="#" class="text-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right">
                <!-- <i class="fe fe-x"></i> -->
            <img src="{{ URL::to('assets/img/media/arrow-left-circle-fill.png')}}">
        </a>
    </div>
    <div class="sidebar-body ">
        <div class="d-flex p-3">
            <ul class="right-sidebar navigation">
                <li><a href="#">ENEDIS LINKY</a><hr></li>
                <li><a href="#">ENEDIS BRT</a><hr></li>
                <li><a href="#">ENEDIS IP-TLR</a><hr></li>
                <li><a href="#">ENEDIS COLONNES MONT.</a><hr></li>
                <li><a href="#">IRVE</a><hr></li>
                <li><a href="#">PARTICULIERS</a><hr></li>
                <li><a href="#">PROFESSIONNELS</a><hr></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="/logout" class="" data-toggle="sidebar-right" data-target=".sidebar-right">
            <img src="{{ URL::to('assets/img/media/ic_logout.png')}}" class="mr-2"> SE DECONNECTER
        </a>
    </div>
</div>


</div>
<!-- End Sidebar -->

</div>
<!-- End Page -->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>


<script type="text/javascript">
    $('.with-sub').click(function () {
        var navItems = $('.nav-item');

        $.each(navItems, function () {
            $(this).removeClass('active');
        });

        $(this).parent().addClass('active');
    });
</script>

</body>
</html>
