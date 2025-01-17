<!DOCTYPE>
<html>

<?php include("php-includes/head-tags.php"); ?>
<head>
<style>
body{ 
    background-image: url(b7819f964c37f48ddc33051aaca1cc94.jpg);
}
</style>
</head>
<body>

<?php include("php-includes/navbar.php"); ?>



<!-- Start -->
<section class="section">
            <div class="container">
                    <div class="row">
                        <div>
                            <form>
                                <h4 class="mb-3 mt-4 pt-4 border-top">Payment</h4>

                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input"
                                            checked required>
                                        <label class="form-check-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input"
                                            required>
                                        <label class="form-check-label" for="debit">Debit card</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input"
                                            required>
                                        <label class="form-check-label" for="paypal">PayPal</label>
                                    </div>
                                </div>

                                <div class="row gy-3">
                                    <div class="col-md-6">
                                        <label for="cc-name" class="form-label">Name on card</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="cc-number" class="form-label">Credit card number</label>
                                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="cc-cvv" class="form-label">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>

                                <button a href="index.php" class="w-10 btn btn-primary" type="submit">Done</button>
                                
                            </form>
                        </div>
                </div><!--end row-->
                </div><!--end container-->
        </section><!--end section-->
        <!-- End -->







</body>

<?php include("php-includes/scripts.php"); ?>
</html>