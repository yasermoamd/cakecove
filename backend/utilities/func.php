<?php
 class UtilitiesFunction {
    
    public function getCategoryFromUrl() {
        // Get the current URL
        $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
        // Parse the URL
        $urlParts = parse_url($currentUrl);
    
        // Get the path from the URL
        $path = $urlParts['path'];
    
        // Explode the path by '/' to get an array of parts
        $pathParts = explode('/', $path);
    
        // Get the last part of the path (in this case, the category)
        $categoryFromUrl = end($pathParts);
    
        // Return the result
        return htmlspecialchars($categoryFromUrl);
    }
 }

?>



