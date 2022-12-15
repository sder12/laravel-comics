{{-- FOOTER TOP --}}
<section class="container-footer-top">
    <div class="wrapper">
    
        <div class="footer">
            
            <section class="footer__links">
                <div>
                  <div>
                        <h6>Dc Comics</h6>
                        <ul>
                              @foreach ($links['comic'] as $link)
                                <li>
                                    <a href="#"> {{$link['link'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-2">
                        <h6>Shop</h6>
                        <ul>
                            @foreach ($links['shop'] as $link)
                            <li>
                                <a href="#"> {{$link['link'] }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                    <div>
                        <h6>DC</h6>
                        <ul>
                            @foreach ($links['policy'] as $link)
                            <li>
                                <a href="#"> {{$link['link'] }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    <div>
                        <h6>Sites</h6>
                        <ul>
                            @foreach ($links['other'] as $link)
                            <li>
                                <a href="#"> {{$link['link'] }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
               
            </section>
           
            <section class="footer__image">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </section>
        </div>
      
    </div>
</section>
