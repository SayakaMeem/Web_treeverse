{{--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/adb_style.css') }}">
    <title>TreeVerse | Admin</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <!-- <img src="images/logo.png"> -->
                    <a href="/"><h2>TreeVerse</span></h2></a>
                    
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#product">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Products</h3>
                </a>




                <a href="#order">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Sale List</h3>
                </a>



                <a href="/logout">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>

            <!-- New Users Section -->
            <div class="new-users" id="product">
                <a href="{{ route('home.createform') }}">
                    <h2>Add Products</h2>
                </a>

                @foreach ($products as $product)
                <div class="user-list">
                        <div class="user">
                            <img src="product_storage/{{$product->product_image}}">
                            <h2>Product Name: {{$product->product_name}}</h2>
                            <h2>Product Price:{{$product->product_price}}</h2>
                            <h2>Product Quantity:{{$product->product_quantity}}</h2>
                            <h2>Product Description:{{$product->product_description}}</h2>
                            <div class="button-container">
                                <a href="/products/{{$product->id}}/edit">
                                    <button>
                                        <span>Update</span>
                                    </button>
                                </a>
                                <form action="/products/{{ $product->id }}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <span>Delete</span>
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders" id="order">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    {{--<tbody>
                        @foreach ($orders as $order)
                            
                        @endforeach
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_quantity}}</td>
                            <td>{{$order->product_price}}</td>
                            
                        </tr>
                    </tbody>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_quantity}}</td>
                            <td>{{$order->product_price}}</td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody> 
                </table>

            </div>

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>{{ Auth::user()->name }}</p>
                        <small class="text-muted">Admin</small>
                    </div>

                </div>

            </div>
            <!-- End of Nav -->





        </div>


    </div>

    <script src="{{ asset('assets/adb_index.js') }}"></script>
</body>

</html>--}}
{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/adb_style.css') }}">
    <title>TreeVerse | Admin</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <!-- <img src="images/logo.png"> -->
                    <a href="/"><h2>TreeVerse</span></h2></a>
                    
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#product">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Products</h3>
                </a>




                <a href="#order">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Sale List</h3>
                </a>



                <a href="/logout">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>

            <!-- New Users Section -->
            <div class="new-users" id="product">
                <a href="{{ route('home.createform') }}">
                    <h2>Add Products</h2>
                </a>

                <div class="user-list">
                    @foreach ($products as $product)
                        <div class="user">
                            <img src="product_storage/{{$product->product_image}}"><br>
                            <tr>Product Name: {{$product->product_name}}</tr><br>
                            <tr>Product Price:{{$product->product_price}}</tr><br>
                            <tr>Product Quantity:{{$product->product_quantity}}</tr><br>
                            <tr>Product Description:{{$product->product_description}}</tr><br>
                            <div class="button-container">
                                <a href="/products/{{$product->id}}/edit">
                                    <button>
                                        <span>Update</span>
                                    </button>
                                </a>
                                <form action="/products/{{ $product->id }}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <span>Delete</span>
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>


            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders" id="order">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_quantity}}</td>
                            <td>{{$order->product_price}}</td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>

            </div>

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>{{ Auth::user()->name }}</p>
                        <small class="text-muted">Admin</small>
                    </div>

                </div>

            </div>
            <!-- End of Nav -->





        </div>


    </div>

    <script src="{{ asset('assets/adb_index.js') }}"></script>
</body>

</html>
--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/adb_style.css') }}">
    <title>TreeVerse | Admin</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <a href="/"><h2>TreeVerse</h2></a>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#product">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Products</h3>
                </a>
                <a href="#order">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Sale List</h3>
                </a>
                <a href="/logout">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>

            <!-- New Users Section -->
            <div class="new-users" id="product">
                <a href="{{ route('home.createform') }}">
                    <h2>Add Products</h2>
                </a>

                <div class="user-list">
                    @foreach ($products as $product)
                        <div class="user">
                            <img src="product_storage/{{$product->product_image}}" alt="Product Image"><br>
                            <tr>Product Name: {{$product->product_name}}</tr><br>
                            <tr>Product Price: {{$product->product_price}}</tr><br>
                            <tr>Product Quantity: {{$product->product_quantity}}</tr><br>
                            <tr>Product Description: {{$product->product_description}}</tr><br>
                            <div class="button-container">
                                <a href="/products/{{$product->id}}/edit">
                                    <button>
                                        <span>Update</span>
                                    </button>
                                </a>
                                <form action="/products/{{ $product->id }}/delete" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders" id="order">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_quantity}}</td>
                            <td>{{$order->product_price}}</td>
                            <td>
                                <!-- Update Order Form -->
                                <form action="{{ route('order.update', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="text" name="name" value="{{ $order->name }}" required>
                                    <input type="text" name="product_name" value="{{ $order->product_name }}" required>
                                    <input type="number" name="product_quantity" value="{{ $order->product_quantity }}" required>
                                    <input type="text" name="product_price" value="{{ $order->product_price }}" required>
                                    <button type="submit">
                                        <span>Update</span>
                                    </button>
                                </form>
                                <!-- Delete Order Form -->
                                <form action="{{ route('order.delete', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of Recent Orders Table -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>{{ Auth::user()->name }}</p>
                        <small class="text-muted">Admin</small>
                    </div>
                </div>
            </div>
            <!-- End of Nav -->
        </div>
    </div>

    <script src="{{ asset('assets/adb_index.js') }}"></script>
</body>

</html>
