<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Project Build</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" type="text/css">
    <link rel="icon" href="favicon32.png" type="image/ico" >
    <link rel="shortcut icon" href="favicon32" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="stylesDC.css" type="text/css">
</head>
<body>
    <section class="leftside">
        <h1>Project Build</h1>
        <p><b>Replace daveclayphotography.com from Clikpic to homemade site from scratch during 2017</b></p>
        <ul>
            <li>Using html, css &amp; javascript for front end</li>
            <li>Using php for back end</li>
            <li>incorporating e-commerce <em>(stretch)</em></li>
        </ul>
    </section>

    <section class="rightside">
        <h2>Dave's Photography Links</h2>
        <ul>
            <li><a href="http://www.daveclayphotography.com/">Main website</a></li>
            <li><a href="https://www.flickr.com/photos/davidtclay/">Flikr page</a></li>
            <li><a href="https://uk.pinterest.com/davidtclay/">Pinterest page</a></li>
        </ul>

        <h2>Dave's WebDev Links</h2>
        <ul>
            <li><a href="https://github.com/davidtclay">GitHub</a></li>
            <li><a href="https://us-west-2.console.aws.amazon.com/console/home?region=us-west-2">AWS</a></li>
            <li><a href="http://www.shawacademy.com/courses.php">Shaw Academy</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/">AWS Elastic Beanstalk overview</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP_eb.html">Deploying AWS Elastic Beanstalk Applications in PHP Using Eb and Git</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html">Using Amazon RDS with PHP</a>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Customizing the Software on EC2 Instances</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Customizing Environment Resources</a></li>
            <li><a href="http://aws.amazon.com/sdkforphp">AWS SDK for PHP home</a></li>
            <li><a href="http://aws.amazon.com/php">PHP developer center</a></li>
            <li><a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP on GitHub</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
