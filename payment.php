<button type="button" onClick="makePayment()" class="payment" data-toggle="modal" data-target="#exampleModalLong">Order
    Now
</button>
<form action="">
    <script src="https://checkout.flutterwave.com/v3.js"></script>
</form>
<script>
    function makePayment() {

        var projectname = $('#projectname').val();
        var pages = $('#pages').val();
        var deadline = $('#deadline').val();
        var instructions = $('#instructions').val();
        var customeremail = $('#customeremail').val();
        var file_data = $('#myFile').prop('files')[0];
        var fd = new FormData();

        fd.append('projectname', projectname);
        fd.append('pages', pages);
        fd.append('deadline', deadline);
        fd.append('instructions', instructions);
        fd.append('customeremail', customeremail);
        fd.append('file_data', file_data);

        if (projectname == "" || deadline == "" || deadline == "" || instructions == "" || customeremail == "") {

            if (projectname == "") {
                $('#exampleModalLong').modal('hide');
                $("#projectname").css({"border-color": "red"});
            }
            if (deadline == "") {
                $('#exampleModalLong').modal('hide');
                $("#deadline").css({"border-color": "red"});
            }
            if (instructions == "") {
                $('#exampleModalLong').modal('hide');
                $("#instructions").css({"border-color": "red"});
            }
            if (customeremail == "") {
                $('#exampleModalLong').modal('hide');
                $("#customeremail").css({"border-color": "red"});
            }
        } else {

            var amount = $('.amount > input[type="number"]').val() * 1;

            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-d2bca2f7d1eec4a16beb0c423e6fa8ee-X",//public_key: "FLWPUBK-ea14186b7e98c63a97fd29d796d743a6-X ",
                tx_ref: "RX1",
                amount: amount,
                currency: "kes",
                country: "KE",
                payment_options: "card",
               // redirect_url:"https://10essays.com/customer",
                meta: {
                    consumer_id: 23,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: customeremail,
                    phone_number: " ",
                    name: "From 10essays",
                },
                callback: function (data) {
                    console.log(data);

                    $.ajax({
                        url: "verification.php",
                        method: "POST",
                        data: JSON.stringify(data),
                        contentType: 'appplication/json',
                        dataType: 'json',
                        success: function (response) {
                            console.log(response);
                            if (response.success) {

                                alert(response.success);
                            } else {
                                console.log(response.error);
                            }

                        }
                    });
                    $.ajax({
                        url: "orderaction.php",
                        method: "POST",
                        data: fd,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        success: function (response) {
                            console.log(response);
                            if (response.success) {
                                $('#exampleModalLong').modal('hide');
                                alert(response.success);
                            } else {
                                console.log(response.error);
                            }

                        }
                    });
                    location.replace("https://10essays.com/tracks")
                },
                onclose: function () {
                    // alert("Do You Want to Close??");
                },
                customizations: {
                    title: "10essays",
                    description: "Payment for items in cart",
                    logo: "https://10essays.com/images/logo.png",
                },
            });
        }
    }
</script>

