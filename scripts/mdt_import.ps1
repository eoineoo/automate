#Source: http://www.windowsnetworking.com/articles-tutorials/windows-7/Deploying-Windows-7-Part22.html
#This file takes in a CSV filename as a parameter, loops through it and adds each computer to the MDT database, it also assigns a role to each
param([string]$csv)
Import-Module -name C:\xampp\htdocs\automate\scripts\MDTDB.psm1
Connect-MDTDatabase -sqlServer EOINWIN8 -instance SQLEXPRESS -database MDT

Write-Host "CSV FILE: " . $csv
$machines = Import-Csv C:\xampp\htdocs\automate\csv\$csv

#Loop through each row in the CSV file and add each to the MDT database
For ($i = 1; $i -le $machines.count; $i++)	{
	New-MDTComputer -serialNumber $machines[$i-1].Serial -macAddress $machines[$i-1].MAC -description $machines[$i-1].Name -assetTag $machines[$i-1].Asset -settings @{OSDComputerName=$machines[$i-1].Name; OSInstall="YES"}
}

#Find the ID for each of the computers and add a role for it
For ($j = 1; $j -le $machines.count; $j++)	{
	$id = Get-MDTComputer -serialNumber $machines[$j-1].Serial | select -expand ID
	Set-MDTComputerRole -id $id -roles Audit	
}