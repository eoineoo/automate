#Download file from internet with PowerShell
$storageDir = "C:\xampp\htdocs\automate\config\MSI"

#Pretend that we're Internet Explorer
$userAgent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2;)"
$wc = New-Object System.Net.WebClient
$webClient = New-Object System.Net.WebClient

#Set URL, download location and download the file
$url = "http://hicap.frontmotion.com.s3.amazonaws.com/Firefox/FirefoxESR-24.2.0/FirefoxESR-24.2.0-en-GB.msi"
$file = "$storageDir\Firefox.msi"
$webClient.DownloadFile($url, $file)

