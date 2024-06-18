<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies </title>
</head>
<body>
    
    <header>
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
        <div class="button-group">
            <a href="./static/subscribe.php" class="subscribe" target="_blank">Subscribe</a>
            <a href="./static/unsubscribe.php" class="unsubscribe" target="_blank">Unsubscribe</a>
            <a href="./static/privacy-policy.php" class="privacy-policy" target="_blank">Privacy Policy</a>
        </div>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">
            
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      
        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>
        
        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 
        
        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>
    <div id="result"> </div>
    <script type="module" src="script.js"> </script>
    
    <script>
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                var API_KEY = response.api_key;

                var script = document.createElement('script');
                script.src = 'script.js'; 
                script.setAttribute('data-api-key', API_KEY);
                document.head.appendChild(script);
            }
        };

        xhr.open("GET", "get_api_key.php", true);
        xhr.send();
    </script>

</body>
</html>