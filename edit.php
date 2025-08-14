<?php // File path of the HTML file
 $htmlFilePath = 'index.html';  

// Read the content of the HTML file 
$htmlContent = file_get_contents($htmlFilePath);  

// Modify the title in the HTML content 
$newTitle = 'New Title'; $htmlContent = preg_replace('/<title>(.*?)<\/title>/', '<title>' . $newTitle . '</title>', $htmlContent);  

// Write the updated content back to the file
 file_put_contents($htmlFilePath, $htmlContent);  

echo "Title updated successfully!"; ?>
