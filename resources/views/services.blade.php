<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Anna Robert</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
</head>

<body>


    <!-- Include Navigation -->
 @include('layouts.navigation')

    <main>
        <section class="products">
            <h2>Scrapbook Products</h2>
            <div class="grid-container">
                <div class="product-box">
                    <img src="../assets/product1.jpg" alt="Product 1" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Stickers</div>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../assets/product2.jpg" alt="Product 2" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Summer Themed Sticker</div>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../assets/product3.jpg" alt="Product 3" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Journal Book Sticker</div>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../assets/product4.jpg" alt="Product 4" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Flower Stickers</div>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../assets/product5.jpg" alt="Product 5" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Origami Sticekr</div>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../assets/product7.jpg" alt="Product 6" class="product-image">
                    <div class="overlay">
                        <div class="overlay-text">Scrap Books</div>
                    </div>
                </div>
            </div>

            <button onclick="showAddProductForm()" id="add">Add New Product</button>

            <!-- Add Product Form -->
            <div id="add-product-form" style="display:none;">
                <h3>Add New Product</h3>
                <input type="text" id="product-name" placeholder="Product Name" required>
                <input type="text" id="product-description" placeholder="Product Description" required>
                <input type="text" id="delivery-time" placeholder="Delivery Time" required>
                <input type="file" id="product-image" required>
                <button onclick="addProduct()">Save Product</button>
                <button onclick="hideAddProductForm()">Cancel</button>
            </div>
        </section>


        <!-- Courses Section -->
        <section class="courses">
            <h2>Scrapbook Courses</h2>
            <div class="grid-container">
                <div class="course-box">
                    <img src="../assets/courses1.jpg" alt="Course 1">
                    <div class="overlay">
                        <div class="overlay-text">Art of Scrapbook Planning and Storytelling</div>
                    </div>
                </div>
                <div class="course-box">
                    <img src="../assets/courses6.jpg" alt="Course 2">
                    <div class="overlay">
                        <div class="overlay-text">Guide on Wedding Scrapbooking</div>
                    </div>
                </div>
                <div class="course-box">
                    <img src="../assets/courses3.jpeg" alt="Course 3">
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
                        <a href="contact.html" class="btn primary-btn">Contact Us</a>
                    </div>
                </div>
                <div class="training-image">
                    <img src="../assets/product7.jpg" alt="Training Session">
                </div>
            </div>
        </section>

        <!-- Products Section -->

        <!-- Photography Sessions Section -->
        <section class="photography">
            <h2>Photography Sessions</h2>
            <div class="grid-container">
                <div class="photo-box">
                    <img src="../assets/photo10.jpg" alt="Photography 1">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo11.jpg" alt="Photography 2">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo12.jpg" alt="Photography 3">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo1.jpg" alt="Photography 4">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo5.jpg" alt="Photography 5">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo6.jpg" alt="Photography 6">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo7.jpg" alt="Photography 7">

                </div>
                <div class="photo-box">
                    <img src="../assets/photo8.jpg" alt="Photography 8">

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
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <script src="../js/index.js"></script>
    <script src="../js/services.js"></script>
</body>

</html>