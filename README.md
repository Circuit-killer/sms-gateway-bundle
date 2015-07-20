# Effective Solutions SMS Gateway Bundle For Symfony2

Install and Configure Gammu Library using following documentations.

1. [How to install Gammu Library](https://www.drupal.org/node/1804068)
2. [How to Detect Your Modem](https://www.drupal.org/node/1804598)
3. [How to Configure Gammu](https://www.drupal.org/node/1806030)

Use the SMSD Configuration files inside bundle's SMSGateway/gammu-config folder for different operators. Change the port
according to your modem port number. Look at the Multiple Modems section in following link. [Gammu SMSD Configuration File]
(http://wammu.eu/docs/manual/smsd/config.html)

Now you are ready to install Effective Solutions SMS Gateway Bundle. Use the following console command.

`php composer.phar require effective-solutions/sms-gateway-bundle`

After the installation add following in your AppKernel.php file

`new EffectiveSolutions\SMSGatewayBundle\EffectiveSolutionsSMSGatewayBundle(),`

Use [MySQL Backend](http://wammu.eu/docs/manual/smsd/mysql.html#gammu-smsd-mysql) Gammu documentation for configure your
SMS Database. Change Bundle's Resources/config/parameters.yml file according to your Database settings.

In order to use SMSGatewayBundle in your code, add following lines. Enter your number as 07xxxxxxxx.

`$sms_gateway = $this->get('sms_gateway');`
`$sms_gateway->sendSMS('your_number','your_message');`

Thank you for using Effective Solutions SMSGateway Bundle. Powered By [EffectiveSolutions.lk](http://effectivesolutions.lk)