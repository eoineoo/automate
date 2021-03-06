
#Download list of files, install each one at the end
cls

#Create directories used to store files and logs
New-Item -ItemType Directory -Force -Path C:\temp\automate\filerepo > $null
New-Item -ItemType Directory -Force -Path C:\temp\automate\logs > $null
New-Item -ItemType Directory -Force -Path C:\temp\automate\scripts > $null

#File repository
$storageDir = "C:\temp\automate\filerepo"

#Copy scripts locally
$client = New-Object system.net.WebClient;
$client.DownloadFile("http://localhost/automate/config/msi/downloadFiles.psm1","C:\temp\automate\scripts\downloadFiles.psm1");
$client.DownloadFile("http://localhost/automate/config/msi/install.ps1","C:\temp\automate\scripts\install.ps1");

#Using the function "downloadFile" from this PS module
Import-Module "C:\temp\automate\scripts\downloadFiles.psm1"

#Loop through each one (ensure web host is running)
for ($i = 0; $i -lt $apps.Length; $i++)	{
	$url = ("http://localhost/automate/config/files/" + $apps[$i])
	$file = ("$storageDir\" + $apps[$i])
	downloadFile $url $file
}

cd C:\temp\automate\scripts

#Run install script
. .\install.ps1

Exit