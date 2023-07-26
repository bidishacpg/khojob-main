<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="moredetails.css">
   
    <title>More details</title>
</head>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      
      <center>
      <li><a  href="index.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="contact.php">Contact us</a> </li>
    

        </ul>
    </nav>

</header>
<h1> <br></h1>
<hr>
<div class="product">
  <h2 class="product-name">Product 1</h2>
  <div class="product-details">
    <img src="product1.jpg" alt="Product 1">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eget mauris ultricies ullamcorper.</p>
    <a href="#" class="btn-details">More Details</a>
  </div>
</div>

<div class="product">
  <h2 class="product-name">Product 2</h2>
  <div class="product-details">
    <img src="product2.jpg" alt="Product 2">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eget mauris ultricies ullamcorper.</p>
    <a href="#" class="btn-details">More Details</a>
  </div>
</div>

<div class="product">
  <h2 class="product-name">Product 3</h2>
  <div class="product-details">
    <img src="product3.jpg" alt="Product 3">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eget mauris ultricies ullamcorper.</p>
    <a href="#" class="btn-details">More Details</a>
  </div>
</div>
<a href="apply.php" class="apply-button">Apply Now</a>

<script>
  // Get all the product name elements
  const productNames = document.querySelectorAll('.product-name');

  // Add a click event listener to each product name
  productNames.forEach(name => {
    name.addEventListener('click', function() {
      // Find the corresponding product details element
      const details = this.nextElementSibling;
      
      // Toggle the visibility of the product details
      details.style.display = details.style.display === 'none' ? 'block' : 'none';
    });
  });
</script>

  
</body>
</html>



