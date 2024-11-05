<!DOCTYPE html>
<html>

<head>
    <title>Payment for Order</title>

<body>
    <script src="https://checkout.flutterwave.com/v3.js"></script><br>
    <form>
        <div>
            fff
        </div>
        <button type="button" onclick="makePayment()">makePayment</button>
    </form>
    <script>
        function makePayment() {
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
                tx_ref: "titanic-48981487343MDI0NzMx",
                amount: 54600,
                currency: "NGN",
                payment_options: "card, backtransfer, ussd",
                redirect_url: "https://MaxriteSuperstore.com",
                meta: {
                    consumer_id: 23,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: "rose@unsinkableship.com",
                    address: "no 45, aina",
                },
                customizations: {
                    title: "Maxrite Superstore",
                    description: "Payment for an awesome cruise",
                    logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
                },
                configurations: {
                    session_duration: 20, //Session timeout in minutes (maxValue: 2880 minutes)
                    max_retry_attempt: 8, //Max retry (int)
                },

            });
        }



        <
        /body>  < /
        head > <
            /html>
