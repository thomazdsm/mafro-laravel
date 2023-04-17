<section id="biblioteca" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Biblioteca Afrocentrada</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach( $categorias as $categoria)
                        <li data-filter=".{{$categoria->filter_tag}}">{{$categoria->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach($biblioteca as $livro)
                <div class="col-lg-4 col-md-6 portfolio-item {{ $livro->filter_tag }}">
                    <div class="portfolio-wrap">
                        <img src="{{ URL::asset('uploads/biblioteca/imagem/'.$livro->image) }}" class="img-fluid" style="min-height: 280px; width: 100%;">
                        <div class="portfolio-info">
                            <h4>{{ $livro->title }}</h4>
                            <p>{{ $livro->tag }}</p>

{{--                            <a href="{{ URL::asset('uploads/biblioteca/imagem/'.$livro->image) }}"--}}
{{--                               data-gallery="portfolioGallery"--}}
{{--                               class="portfolio-lightbox"--}}
{{--                               title="Visualizar"--}}
{{--                               style="font-weight: bold; font-size: 32px; text-decoration: none; color: white;"--}}
{{--                            >--}}
{{--                                <i class="fa fa-plus"></i>--}}
{{--                            </a>--}}
                            <a href="{{ URL::asset('uploads/biblioteca/anexo/'.$livro->anexo) }}"
                               title="Acessar Link"
                               target="-_blank"
                               style="font-weight: bold; font-size: 32px; text-decoration: none; color: white;"
                            >
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->
