<!-- Unique page content -->

<p xmlns="http://www.w3.org/1999/html">Please call us on 01604 90345 or email
    <a href="mailto:enquiries@fransfurniture.co.uk">enquiries@claybrooks.co.uk</a>

<h2>Or contact us through our request a sponsor service</h2>
<p>Estimated response time: 3-5 working days days</p>

<form method="post">
    <label>Sponsor Name</label>
    <input type="text" name="full-name"/>
    <label>Your email address</label>
    <input type="text" name="email-address"/>
    <label>Your description of sponsorship request</label>
    <input type="text" name="sponsor-query"/>
    <label>Signage Size</label>
    <input type="text" name="size"/>
    <label>start date and end date of sponsor signage</label>
    <input type="text" name="request_date"/>
    <input style="margin-top: 30px" type="submit" value="Send Query" name="submit-query"/>

</form>

<!-- PHP logic which allows a sponsor to send a request for the admin where the admin can reject, or accept the request-->

<?php if (isset($_POST['submit-query'])) {
    $datetime = date_create()->format('Y-m-d H:i:s');
    $query_record =
        [
            'sponsorname' => $_POST['full-name'],
            'contact' => $_POST['email-address'],
            'description' => $_POST['sponsor-query'],
            'date' => $datetime,
            'status' => 'pending',
            'size' => $_POST['size'],
            'request_date' => $_POST['request_date']
        ];

    $send_query = new SponsorRequest();
    $send_query->addRequest($query_record); ?>

    <script> alert("Your sponsorship request is submitted, a member of our admin team will contact you as soon as we can!") </script>


<?php } ?>