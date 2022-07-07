<button type="button" onClick="makePayment()" class="payment"  data-toggle="modal" data-target="#exampleModalLong">Order now</button>
    <form action="">
        <script src="https://checkout.flutterwave.com/v3.js"></script>
    </form>
    <script>
        function makePayment() {
            FlutterwaveCheckout({
                public_key: "FLWPUBK-ea14186b7e98c63a97fd29d796d743a6-X",
                tx_ref: "RX1",
                amount:1,
                currency: "USD",
                country: "US",
                payment_options: " ",
                customer: {
                    email: "cornelius@gmail.com",
                    phone_number: "08102909304",
                    name: "Flutterwave Developers",
                },
                callback: function (data) { // specified callback function
                    console.log(data);
                },
                customizations: {
                    title: "My store",
                    description: "Payment for items in cart",
                    logo: "https://assets.piedpiper.com/logo.png",
                },
            });
        }
    </script>