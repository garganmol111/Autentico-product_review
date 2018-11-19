<?php
session_start();
include("includes/config.php");
include("includes/classes/Review.php");
include("includes/classes/Constants.php"); 
include("includes/header.php");
$review = new review($con);
include("includes/handlers/review-handler.php");
?>
<?php
	if(isset($_SESSION['userLoggedIn'])) {
		echo "Welcome, ".$_SESSION['userLoggedIn'];
	}
	if(isset($_POST['reviewButton'])){
		echo 'Thanks for the review !';
	}
	if (isset($_GET['id'])){
		$productId= $_GET['id'];
		echo "Product Id : ".$productId;
	}

?>
	<div id="reviewContainer">
		<form id="reviewForm" action="review.php" method="Post">
			<p>
				<?php echo $review->getError(Constants::$notPurchased); ?>
				<?php echo $review->getError(Constants::$alreadyReviewed); ?>
				<label for="username">Username </label>
				<input id="username" name="username" type="text"  required>
			</p>
			<p>
				<label for="rating">Rating </label>
				<input id="rating" name="rating" type="text"  required>
			</p>
			<p>
				<?php echo $review->getError(Constants::$reviewLength); ?>
				<label for="Review">Review </label>
				<input id="review" name="review" type="text"  required>
			</p>
			<button type="submit" name="reviewButton">SUBMIT</button>
		</form>
	</div>

<?php
 include("includes/footer.php"); 
 ?> 