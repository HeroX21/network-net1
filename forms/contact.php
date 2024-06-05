<?html
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "abhishek.gh2001@gmail.com";
  $subject = "Message from Contact Form";
  $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: html/" . htmlversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('The Email send success.')</script>";
  } else {
    echo "<script>alert('There was an error sending your email.')</script>";
  }
}
?>


