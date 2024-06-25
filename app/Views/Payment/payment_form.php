<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <form id="payment-form">
        <div id="card-element"></div>
        <button type="submit">Pay</button>
    </form>

    <script>
        var stripe = Stripe('your-publishable-key');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    // Display error
                } else {
                    // Send the token to your server
                    fetch('process', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ token: result.token.id }),
                    }).then(function (response) {
                        return response.json();
                    }).then(function (data) {
                        if (data.error) {
                            // Display error
                        } else {
                            // Redirect to success page
                            window.location.href = 'success';
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
