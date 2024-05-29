<x-outer>

    <header class="header" data-header>

        <div class="overlay" data-overlay></div>

        <div class="header-bottom">
            <div class="container">

                <a href="#" class="logo">
                    <img src="{{ asset('assets/logo.png') }}" alt="Homeverse logo">
                </a>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="#" class="logo">
                            <img src="{{ asset('assets/logo.png') }}" alt="Homeverse logo">
                        </a>

                        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <div class="navbar-bottom">
                        <ul class="navbar-list">

                            <li>
                                <a href="#home" class="navbar-link" data-nav-link>Home</a>
                            </li>

                            <li>
                                <a href="#about" class="navbar-link" data-nav-link>Order</a>
                            </li>

                            <li>
                                <a href="#property" class="navbar-link" data-nav-link>Products</a>
                            </li>

                            @auth
                                @if (auth()->user()->type == 'admin')
                                    <li>
                                        <a href="{{ route('homepage.admin-dashboard') }}" class="navbar-link"
                                            data-nav-link>{{ Auth::user()->name }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('homepage.user-profile') }}" class="navbar-link"
                                            data-nav-link>{{ Auth::user()->name }}</a>
                                    </li>
                                @endif
                            @endauth

                            <li>
                                <a href="/logout" class="navbar-link" data-nav-link>Logout</a>
                            </li>




                        </ul>
                    </div>

                </nav>

                <div class="header-bottom-actions">

                    @guest
                        <button class="header-bottom-actions-btn" aria-label="Profile">


                            <a href="{{ route('auth.register-page') }}"><ion-icon name="person-outline"></ion-icon></a>
                        </button>
                    @endguest



                    <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                        <ion-icon name="menu-outline"></ion-icon>

                        <span>Menu</span>
                    </button>

                </div>

            </div>
        </div>

    </header>


    <main>
        <article>

            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-content">

                        <h2 class="h1 hero-title">Find Trees</h2>

                        <p class="hero-text">
                            With knowledgeable staff and a commitment to eco-friendly practices, we welcoming
                            environment for customers to explore and cultivate their green spaces.
                        </p>

                        <button class="btn">Make An Enquiry</button>

                    </div>

                    <figure class="hero-banner">
                        <img src="{{ asset('assets/hero-banner.png') }}" alt="Modern house model" class="w-100">
                    </figure>

                </div>
            </section>

            <section class="about" id="about">
                <div class="formcontainer">


                    <form class="form" action="/order/action" method="POST">
                        @csrf
                        <p class="form-title">Order Products</p>
                        <div class="input-container">
                            <input type="text" placeholder="Enter Your Name" name="name" required="" value="{{old('name')}}">
                            <span>
                            </span>
                        </div>
                        <div class="input-container">
                            <input type="text" placeholder="Enter Product Name" name="product_name" required="" value="{{old('product_name')}}">
                        </div>
                        <div class="input-container">
                            <input type="number" placeholder="Enter Product Quantity" name="product_quantity" required="" value="{{old('product_quantity')}}">
                        </div>
                        <div class="input-container">
                            <input type="number" placeholder="Enter Total Price" name="product_price" required="" value="{{old('product_price')}}">
                        </div>
                        <button type="submit" class="submit">
                            Order Now
                        </button>

                        
                    </form>


                </div>
            </section>

            <section class="property" id="property">
                <div class="container">

                    <p class="section-subtitle">Properties</p>

                    <h2 class="h2 section-title">Featured Listings</h2>

                    <ul class="property-list has-scrollbar">

                        @foreach ($products as $product)
                            <li>
                                <div class="property-card">

                                    <figure class="card-banner">


                                        <img src="product_storage/{{ $product->product_image }}"
                                            alt="Comfortable Apartment" class="w-100">


                                        <div class="card-badge green">For Sale</div>



                                    </figure>

                                    <div class="card-content">

                                        <div class="card-price">
                                            <strong>${{ $product->product_price }}</strong>
                                        </div>

                                        <h3 class="h3 card-title">
                                            <a href="#">{{ $product->product_name }}</a>
                                        </h3>

                                        <h3 class="h3 card-title">
                                            <a href="#">Quantity: {{ $product->product_quantity }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $product->product_description }}
                                        </p>



                                    </div>

                                    <div class="card-footer">



                                        <div class="card-footer-actions">



                                            <button class="card-footer-actions-btn">
                                                <ion-icon name="add-circle-outline"></ion-icon>
                                            </button>

                                        </div>

                                    </div>

                                </div>
                            </li>
                        @endforeach


                    </ul>

                </div>
            </section>



        </article>
    </main>

</x-outer>

