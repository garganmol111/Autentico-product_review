<?php 
	session_start();
	include("includes/header.php");
	include("includes/classes/Product.php");
	include("includes/classes/Constants.php"); 
	include("includes/classes/Review.php"); 
	if (isset($_GET['id'])){
		$productId= $_GET['id'];
	}
	else{
		header("Location: browse.php");
	}
	include("includes/handlers/review-handler.php");
	$product=new Product($con,$productId);
?>
<div class="entityInfo">
	<div class="leftSection">
		<img src="<?php echo $product->getImagePath();  ?>">
	</div>
	<div class="rightSection">
		<h2><?php  echo $product->getName(); ?></h2> 
				<h5>
					By <?php echo "<a href='seller.php?id=" . $product->getSellerId() ."'>"; echo $product->getSeller(); ?>		
				</h5>
			</a>
		<h4>M.R.P. : Rs.<?php echo $product->getPrice(); ?></h4>
		<hr style="width: 100%;">
		<p><?php  echo $product->getDescription(); ?></p>
		<hr style="width: 100%;">
		<div class="enterReview">
			<?php echo "<a href='review.php?id=".$productId."'><span id='showReview'>Write a Review</span></a>" ; ?>
		</div>

	</div>

</div>

<?php include("includes/footer.php"); ?>
