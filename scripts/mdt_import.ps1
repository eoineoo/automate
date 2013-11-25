#http://www.windowsnetworking.com/articles-tutorials/windows-7/Deploying-Windows-7-Part22.html
#http://www.vkernel.ro/blog/bulk-import-computers-into-the-mdt-database-using-powershell
Import-Module -name .\MDTDB.psm1
Connect-MDTDatabase -sqlServer EOINWIN8 -instance SQLEXPRESS -database MDT

#CSV file containing our computers
$machines = Import-Csv ..\sql\_mdt_import.csv

#Loop through each row in the CSV file and add each to the MDT database
For ($i = 1; $i -le $machines.count; $i++)	{
	New-MDTComputer -serialNumber $machines[$i-1].Serial -macAddress $machines[$i-1].MAC -description $machines[$i-1].Name -assetTag $machines[$i-1].Asset -settings @{OSDComputerName=$machines[$i-1].Name; OSInstall="YES"}
}

#Find the ID for each of the computers and add a role for it
For ($j = 1; $j -le $machines.count; $j++)	{
	$id = Get-MDTComputer -serialNumber $machines[$j-1].Serial | select -expand ID
	Set-MDTComputerRole -id $id -roles Audit	
}
