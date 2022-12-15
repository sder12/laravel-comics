
{{-- Banner --}}
    <div class="banner">
        <span class="d-none">banner</span>
    </div>

{{-- CARDS --}}
    <div class="container-main">
        <div class="wrapper">
            <section class="cards-container">
               {{-- TITLE --}}
                <div class="cards-title">
                    <h4>current series</h4>
                </div>
                
                {{-- CARDS 6x2 --}}   
                <div class="cards-wrapper">       
                        @foreach ($data as $card)
                      
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="{{$card['thumb']}}" alt="{{$card['title']}}>
                                <span class="card-price"> {{ $card['price'] }}</span>
                            </div>
                            <div class="card-subtitle">
                                <h4>{{ $card['title'] }}</h4>
                            </div>
                        </div>
                            
                        @endforeach
                    </div >
                
                {{-- LOAD MORE --}}
                <div class="cards-button">
                    <button>
                        load more
                    </button>
                </div>
            </section>
        </div>
    </div>