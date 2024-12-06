
// Show and hide overlay on hover
function showOverlay(index) {
  document.getElementById(`overlay-${index}`).style.display = "block";
}

function hideOverlay(index) {
  document.getElementById(`overlay-${index}`).style.display = "none";
}

// Show Add Product Form
function showAddProductForm() {
  document.getElementById("add-product-form").style.display = "block";
}

// Hide Add Product Form
function hideAddProductForm() {
  document.getElementById("add-product-form").style.display = "none";
}

// Preview the image before adding
function previewImage() {
  const imageFile = document.getElementById("product-image").files[0];
  if (imageFile) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById("image-preview").src = e.target.result;
      document.getElementById("image-preview").style.display = "block";
    };
    reader.readAsDataURL(imageFile);
  }
}

// Add a new product using base64 for local storage
function addProduct() {
  const name = document.getElementById("product-name").value;
  const description = document.getElementById("product-description").value;
  const deliveryTime = document.getElementById("delivery-time").value;
  const imageFile = document.getElementById("product-image").files[0];

  if (name && description && deliveryTime && imageFile) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const imagePath = e.target.result; // base64 encoded image
      products.push({ name, description, deliveryTime, imagePath });
      hideAddProductForm();

      // Clear form fields
      document.getElementById("product-name").value = "";
      document.getElementById("product-description").value = "";
      document.getElementById("delivery-time").value = "";
      document.getElementById("product-image").value = "";
      document.getElementById("image-preview").style.display = "none";
    };
    reader.readAsDataURL(imageFile); // Convert image to base64
  } else {
    alert("Please fill in all fields and select an image.");
  }
}



