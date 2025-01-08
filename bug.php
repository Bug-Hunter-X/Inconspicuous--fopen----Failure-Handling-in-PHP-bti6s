```php
$file = fopen("somefile.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle error
    // ... but what if the error is that the file simply doesn't exist?
}
```