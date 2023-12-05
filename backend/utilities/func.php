<?php
/**
 * UtilitiesFunction - class that handle utilities function.
 */
 class UtilitiesFunction {
    
    /**
     * getCategoryFromUrl - function that get category name from URL.
     * Return: category name.
     * Get the current URL
     * Parse the URL
     * Get the path from the URL
     * Explode the path by '/' and extract the first element
     * Return the result
     */
    public function getCategoryFromUrl() {
            // Get the current URL
        $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // Parse the URL
        $urlParts = parse_url($currentUrl);

        // Get the path from the URL
        $path = $urlParts['path'];

        // Explode the path by '/' and extract the first element
        $pathParts = explode('/', $path);
        $categoryFromUrl = $pathParts[1];

        // Return the result
        return htmlspecialchars($categoryFromUrl);
     }
     

     public function displayHomePage() {
        $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     }

 }

?>



