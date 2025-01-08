```php
$filename = "somefile.txt";
if (!file_exists($filename)) {
    // Handle file not found error
    echo "Error: File '$filename' not found.\n";
} else {
    $file = fopen($filename, "r");
    if ($file) {
        // Process the file
        while (($line = fgets($file)) !== false) {
            // Process each line
            echo $line;
        }
        fclose($file);
    } else {
        // Handle other file opening errors
        echo "Error opening file '$filename'.\n";
    }
}
```