
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
                    {{-- <MainCard v-for="(card, index) in cardsList" :key="index" :cardThumb="card.thumb"
                        :cardSeries="card.series" :cardPrice="card.price" :cardType="card.type" /> --}}
                </div>
                
                {{-- LOAD MORE --}}
                <div class="cards-button">
                    <button>
                        load more
                    </button>
                </div>
            </section>
        </div>
    </div>