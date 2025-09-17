<html> 
 <title>Submit Data</title>
 <body>
 <p><br>Thank you for participating in the experiment.</p>

<?php 
$data = $_POST['data']; 
$subjID= $_POST['subjID'];
$randID= $_POST['randID'];
$expt = $_POST['expt']; 

$fp1 = fopen('~/Desktop/'.$expt.'_'.$subjID.'_'.$randID.'_data.csv', 'w');
fwrite($fp1, $data );
fclose($fp1);


?>

<p><br>If you signed up via Prolific, please click on the link below:</p>
<a href="https://app.prolific.co/submissions/complete?cc=7B63932C">Click Here</a>

</body>
</html>