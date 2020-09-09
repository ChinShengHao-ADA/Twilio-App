<?php
header("Content-type: text/xml");
$time = time();
$datetime = date("Y-m-d H:i:s", $time);

?>
<Response>
    <Message>

        <Body>Hello there! Right now is <?php echo $datetime;?>.</Body>
    </Message>
    <Redirect>https://demo.twilio.com/welcome/sms/</Redirect>
</Response>
