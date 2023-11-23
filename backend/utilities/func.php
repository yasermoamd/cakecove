<?php
 class UtilitiesFunction {
    
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
 }

?>



