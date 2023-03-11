<x-home-layout title="Scratchy Nib | Contact">

    <x-home.title-section>
        Site map
    </x-home.title-section>

    <section>
        <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <ul class="sitemap-list">
                       <li><a href="{{ route('home.index') }}"><h3>Home Page</h3></a></li>
                       <li><a href="{{ route('home.category') }}"><h3>Categories</h3></a>
                           <ul class="sitemap-sublist">
                               <li><a href="{{ route('home.index').'/#Traditional' }}">Traditional Calligraphy</a></li>
                               <li><a href="{{ route('home.index').'/#Contemporary' }}">Contemporary Calligraphy</a></li>
                               <li><a href="{{ route('home.index').'/#Hand-lettering' }}">Hand-lettering & Design</a></li>
                               <li><a href="{{ route('home.index').'/#Modern' }}">Modern Calligraphy</a></li>
                           </ul>
                       </li>
                       <li><a href="{{ route('home.gallery') }}"><h3>Gallery</h3></a></li>
                   </ul>
               </div>
                <div class="col-md-4">
                    <ul class="sitemap-list">
                        <li><a href="{{ route('home.contact') }}"><h3>Contact</h3></a></li>
                        <li><a href="{{ route('home.contact') }}"><h3>About</h3></a></li>
                        <li><a href="#"><h3>Privacy policy</h3></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="sitemap-list">
                        <li><h3>Authenticate</h3>
                            <ul class="sitemap-sublist">
                                <li><a href="{{ route('login') }}">Sign in</a></li>
                                <li><a href="{{ route('register') }}">Sign up</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('profile.edit') }}"><h3>Profile</h3></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <x-home.overlay-top color="bg-secondary-color"/>
    </section>

</x-home-layout>
