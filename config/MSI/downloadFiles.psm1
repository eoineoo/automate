#Uses WebClient to download file with a graphical progress bar - http://blogs.msdn.com/b/jasonn/archive/2013/06/11/8594493.aspx

function DownloadFile($url, $targetFile)	{

	#Creates an object representation of a URI/URL, providing an easy way to access parts of it
	$uri = New-Object "System.Uri" "$url"
   
	#A HTTP-specific implementation of the WebClient class
	$request = [System.Net.HttpWebRequest]::Create($uri)

	#Timeout after 15 seconds
	$request.set_Timeout(15000)

	#Returns the response of the request from the web resource/URI
	$response = $request.GetResponse()

	#Variable holding the size of the file, represented in kilobytes
	$totalLength = [System.Math]::Floor($response.get_ContentLength()/1024)
	
	#Returns the data stream from the requested Internet resource
	$responseStream = $response.GetResponseStream()

	#Create a file where the data will be written to
	$targetStream = New-Object -TypeName System.IO.FileStream -ArgumentList $targetFile, Create
	
	#Graphical representation of download progress
	$buffer = new-object byte[] 10KB

	#Read 10kb at a time
	$count = $responseStream.Read($buffer,0,$buffer.length)

	$downloadedBytes = $count

	while ($count -gt 0)	{

		$targetStream.Write($buffer, 0, $count)

		$count = $responseStream.Read($buffer,0,$buffer.length)

		$downloadedBytes = $downloadedBytes + $count

		#Display progress bar
		Write-Progress -activity "Downloading file '$($url.split('/') | Select -Last 1)'" -status "Downloaded ($([System.Math]::Floor($downloadedBytes/1024))K of $($totalLength)K): " -PercentComplete ((([System.Math]::Floor($downloadedBytes/1024)) / $totalLength)  * 100)
		
	}

	Write-Progress -activity "Finished downloading file '$($url.split('/') | Select -Last 1)'"

	#Clears buffers for the stream and writes buffered data to the specified file
	$targetStream.Flush()
	
	#Closes the file and releases any resources associated with the current file stream
	$targetStream.Close()

	#Releases all resources used by the stream
	$targetStream.Dispose()

	#Releases the unmanaged resources used by the response object
	$responseStream.Dispose()

}