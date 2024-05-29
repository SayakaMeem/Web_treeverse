<x-cform>

    <div class="container">
        <header>Update Product</header>
        <form action="/products/{{$product->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form first">
                <div class="details personal">
                    <span class="title">Product Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Product Name</label>
                            <input type="text" placeholder="Product name" value="{{old('product_name', $product->product_name)}}" required="" name="product_name">
                        </div>
                        
                        
                        <div class="input-field">
                            <label>Price</label>
                            <input type="number" placeholder="Price" value="{{old('product_price',$product->product_price)}}" required="" name="product_price">
                        </div>
                        
                        <div class="input-field">
                            <label>Product Description</label>
                            <input type="text" placeholder="Description" value="{{old('product_description',$product->product_description)}}" required="" name="product_description">
                        </div>

                        <div class="input-field">
                            <label>Quantity</label>
                            <input type="number" placeholder="Quantity" value="{{old('product_quantity',$product->product_quantity)}}" required="" name="product_quantity">
                        </div>
                        <div class="input-field">
                            <label>Image</label>
                            <input type="file" placeholder="Image" value="{{old('product_image')}}" name="product_image">
                        </div>
                    </div>
                </div>
                <div class="details ID" >
                    
                    
                    <button class="nextBtn" type="submit">
                        <span class="btnText">Update</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
                
            </div>

            
            
        </form>
    </div>

</x-cform>
    