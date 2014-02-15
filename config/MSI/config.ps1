#Download list of files, install each one at the end

#Move into the correct location
cd C:\xampp\htdocs\automate\config\MSI

#File repository
$storageDir = "C:\temp\automate"

#Using the function "downloadFile" from this PS module
Import-Module .\downloadFiles.psm1

#Create an array of URL's to download - these will be passed in as parameters from the web application
$apps = @("ConfigMgrTools.msi", "Firefox.msi")

#Loop through each one
for ($i = 0; $i -lt $apps.Length; $i++)	{
	$storageDir = "C:\temp\automate"
	#Write-Host "Storage directory: $storageDir"
	$url = ("http://localhost/automate/config/files/" + $apps[$i])
	#Write-Host "URL: $url"
	$file = ("$storageDir\" + $apps[$i])
	#Write-Host "File: $file"
	downloadFile $url $file
}

#Install any MSI in the \source\ dir
. .\msi_install.ps1