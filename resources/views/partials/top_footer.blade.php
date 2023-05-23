<div class="top_footer py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="ft_links list-unstyled d-flex gap-3">
           <div>
            <h6 class="text-uppercase text-white my-3">dc comics</h6>
            <ul class="list-unstyled">
                @foreach($ft_links['dc comics'] as $ft_link)
                <li class="">
                    <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                </li>
                @endforeach
            </ul>
            <h6 class="text-uppercase text-white my-3">shop</h6>
            <ul class="list-unstyled">
                @foreach($ft_links['shop'] as $ft_link)
                <li class="list-unstyled">
                    <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                </li>
                @endforeach
            </ul>
           </div>
           <div>
           <h6 class="text-uppercase text-white my-3">dc</h6>
            <ul class="list-unstyled">
                @foreach($ft_links['dc'] as $ft_link)
                <li>
                    <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                </li>
                @endforeach
            </ul>
           </div>
           <div>
           <h6 class="text-uppercase text-white my-3">sites</h6>
            <ul class="list-unstyled">
                @foreach($ft_links['sites'] as $ft_link)
                <li>
                    <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                </li>
                @endforeach
            </ul>
           </div>
        </div>
        <div class="footer_logo">
        <img src="../../img/dc-logo-bg.png" alt="">
        </div>
    </div>
</div>