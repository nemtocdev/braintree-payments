<footer class="main-footer">
    <div class="container-fluid">
        <div class="container">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="footer-left">
                        <a href="/" class="footer-logo">
                            <img src="{{asset('images/logo_bg.png')}}" alt="Logo">
                        </a>
                    </div>
                    <ul class="footer-list">
                        @foreach($pages as $page)
                            @if($page->show_in_footer)
                            <li>
                                <a href="{{route('page', $page->alias)}}"> {{ $page->title }} </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="footer-bottom">
                    @if(nova_get_setting('contact_email'))
                        <p> Dacă vrei să iei legătura cu noi o poți face pe e-mail la adresa: <a href="mailto:{{nova_get_setting('contact_email')}}" class="mail-link"> {{nova_get_setting('contact_email')}} </a> </p>
                    @endif
                    <div class="footer-socials-list">
                        @if(nova_get_setting('facebook'))
                            <a href="{{nova_get_setting('facebook')}}">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        @endif
                        @if(nova_get_setting('instagram'))
                            <a href="{{nova_get_setting('instagram')}}">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        @endif
                        @if(nova_get_setting('youtube'))
                            <a href="{{nova_get_setting('youtube')}}">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
