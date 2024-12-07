@extends('layouts.app')

@section('title', 'Services')

@section('content')

<section class="products">
    <h2>Scrapbook Products</h2>
    <div class="grid-container">
        @foreach ($products as $product)
        <div class="product-box">
            <img src="{{ asset($product->image) }}"
                alt="{{ $product->name }}"
                class="product-image">
            <div class="overlay">
                <div class="overlay-text">
                    <p class="product-name">{{ $product->name }}</p>
                    <p class="product-description">{{ $product->description }}</p>
                    <p class="product-delivery-time">Delivery Time: {{ $product->delivery_time }}</p>
                </div>
                <div class="btn-row">
                    <button onclick="showEditProductForm({{ $product->id }}, '{{ $product->name }}', '{{ $product->description }}', '{{ $product->delivery_time }}', '{{ asset($product->image) }}')" class="new-btn">Edit</button>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="new-btn" id="delete-btn">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button onclick="showAddProductForm()" id="add">Add New Product</button>

    <!-- Add Product Form -->
    <div id="add-product-form" style="display:none;">
    <form id="addForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf
        <h3>Add New Product</h3>
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="description" placeholder="Product Description" required>
        <input type="text" name="delivery_time" placeholder="Delivery Time" required>
        <input type="file" name="image">
        <button type="submit">Save Product</button>
        <button type="button" onclick="hideAddProductForm()">Cancel</button>
    </form>
</div>


    <!-- Edit Product Form -->
    <div id="edit-product-form" style="display:none;">
        <form id="editForm" method="POST" enctype="multipart/form-data" class="product-form">
            @csrf
            @method('PUT')
            <h3>Edit Product</h3>
            <input type="text" name="name" id="edit-name" placeholder="Product Name" required>
            <input type="text" name="description" id="edit-description" placeholder="Product Description" required>
            <input type="text" name="delivery_time" id="edit-delivery_time" placeholder="Delivery Time" required>
            <input type="file" name="image">
            <img id="current-image" alt="Current Product Image" class="preview-image">
            <button type="submit" class="form-btn">Save Changes</button>
            <button type="button" class="form-btn cancel-btn" onclick="hideEditProductForm()">Cancel</button>
        </form>
    </div>

</section>

<!-- Courses Section -->
<section class="courses">
    <h2>Scrapbook Courses</h2>
    <div class="grid-container">
        <div class="course-box">
            <img src="{{ asset('images/courses1.jpg') }}" alt="Course 1">
            <div class="overlay">
                <div class="overlay-text">Art of Scrapbook Planning and Storytelling</div>
            </div>
        </div>
        <div class="course-box">
            <img src="{{ asset('images/courses6.jpg') }}" alt="Course 2">
            <div class="overlay">
                <div class="overlay-text">Guide on Wedding Scrapbooking</div>
            </div>
        </div>
        <div class="course-box">
            <img src="{{ asset('images/courses3.jpeg') }}" alt="Course 3">
            <div class="overlay">
                <div class="overlay-text">Learn Creative Scrapbooking</div>
            </div>
        </div>
    </div>
</section>

<!-- Training Section -->
<section class="training">
    <h2>Training</h2>
    <div class="training-content">
        <div class="training-text">
            <p>Join our expert-led training sessions to enhance your scrapbooking skills. We offer both
                in-person and online options.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn primary-btn">Contact Us</a>
            </div>
        </div>
        <div class="training-image">
            <img src="{{ asset('images/product7.jpg') }}" alt="Training Session">
        </div>
    </div>
</section>

<!-- Products Section -->

<!-- Photography Sessions Section -->
<section class="photography">
    <h2>Photography Sessions</h2>
    <div class="grid-container">
        <div class="photo-box">
            <img src="{{ asset('images/photo10.jpg') }}" alt="Photography 1">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo11.jpg') }}" alt="Photography 2">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo12.jpg') }}" alt="Photography 3">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo1.jpg') }}" alt="Photography 4">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo5.jpg') }}" alt="Photography 5">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo6.jpg') }}" alt="Photography 6">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo7.jpg') }}" alt="Photography 7">

        </div>
        <div class="photo-box">
            <img src="{{ asset('images/photo8.jpg') }}" alt="Photography 8">

        </div>
    </div>
</section>
<!-- Pricing Section -->
<section class="pricing">
    <h2>Pricing Table</h2>
    <table>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Scrapbook Products</td>
            <td>Varies</td>
        </tr>
        <tr>
            <td>Scrapbook Course</td>
            <td>$100</td>
        </tr>
        <tr>
            <td>Custom Scrapbook Album</td>
            <td>$150</td>
        </tr>
        <tr>
            <td>Photography Session</td>
            <td>$200</td>
        </tr>
    </table>
</section>
@endsection
<script>
    function showEditProductForm(id, name, description, delivery_time, imageUrl) {
        const form = document.getElementById('editForm');
        console.log(form);
        form.action = `/products/${id}`; // Set the form action dynamically

        document.getElementById('edit-name').value = name;
        document.getElementById('edit-description').value = description;
        document.getElementById('edit-delivery_time').value = delivery_time;
        document.getElementById('current-image').src = imageUrl;

        document.getElementById('edit-product-form').style.display = 'block';
    }

    function hideEditProductForm() {
        document.getElementById('edit-product-form').style.display = 'none';
    }
    function showAddProductForm() {
        console.log("Add Product Form triggered"); // Debug message
        const form = document.getElementById('add-product-form'); // Corrected ID
        console.log(form);
    if (form) {
        form.style.display = 'block'; // Make the form visible
    } else {
        console.error('Add Product Form element not found');
    }
}


    function hideAddProductForm() {
        document.getElementById('add-product-form').style.display = 'none';
    }

</script>