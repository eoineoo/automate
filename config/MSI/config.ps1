#Download list of files, install each one at the end
cls

#Move into the correct location
cd C:\xampp\htdocs\automate\config\MSI

New-Item -ItemType Directory -Force -Path C:\temp\automate\logs 1>$null

#File repository
$storageDir = "C:\temp\automate"

#Using the function "downloadFile" from this PS module
Import-Module .\downloadFiles.psm1

#Create an array of URL's to download - these will be passed in as parameters from the web application
$apps = @("ade_3.0_installer.msi", "ConfigMgrTools.msi", "dtlite4481-0347.msi", "FirefoxESR-24.2.0-en-GB.msi", "gimp-2.2.8+gtk-2.6.8-1-en_US.msi", "GoogleChromeStandaloneEnterprise.msi", "RDCMan.msi", "config.msi")

#Loop through each one - MAKE SURE XAMPP IS RUNNING!!
for ($i = 0; $i -lt $apps.Length; $i++)	{
	$url = ("http://localhost/automate/config/files/" + $apps[$i])
	$file = ("$storageDir\" + $apps[$i])
	downloadFile $url $file
}

#Run install script
. .\install.ps1