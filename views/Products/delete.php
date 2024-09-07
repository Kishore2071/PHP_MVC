<h1>Delete Product</h1>

<form method="post" action="/products/<?= $product["id"] ?>/delete">

<p>Delete this product?</p>

<button>Yes</button>

</form>

<p><a href="/products/<?= $product["id"] ?>/show">Cancel</a></p>

</body>
</html>